<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//"D:\Program Files\wamp\www\magento-sample\app\code\local\Ko\Gallery\controllers\Adminhtml\GalleryController.php"

class Ko_Gallery_Adminhtml_GalleryController extends Mage_Adminhtml_Controller_Action{
    public function indexAction(){
        $this->loadLayout();
        $galleryForm = $this->getLayout()->createBlock('gallery/adminhtml_gallery_edit');
        $this->_addContent($galleryForm);
        $galleryGrid = $this->getLayout()->createBlock('gallery/adminhtml_gallery_grid');
        $this->_addContent($galleryGrid);
        $this->renderLayout();
    }
    
    public function saveAction(){
       $requestParams = $this->getRequest()->getParams();
       Mage::log($requestParams);
       $this->uploadGallery($requestParams);
       $this->_redirect('*/*/index/id/' . $requestParams['gallerygroup_id']);
       return;
    }
    
    public function uploadGallery($requestParams){
        $files = $_FILES['upload_picture'];
       if(isset($files['name']) && !empty($files['name'])){
           try{
               $fileUploader = new Varien_File_Uploader('upload_picture');
               $fileUploader->setAllowedExtensions(array('jpeg','png','jpg'));
               $fileUploader->setAllowRenameFiles(false);

               $uploadDir = Mage::getBaseDir('media') . DS . gallery;
               $fileSave = $fileUploader->save($uploadDir,$files['name']);
               $filePath = $this->getUrl('media' . DS . 'gallery' . DS . $fileSave['file']);
               Mage::log("Media url");
               $mediaUrl = Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_MEDIA);
               $uploadedFilePath = $mediaUrl . '/gallery/' . $fileSave['file'];
               Mage::log("Upload path: $uploadedFilePath");
               $galleryModel = Mage::getModel('ko_gallery/gallery');
               $galleryData = array('image_path'=>$uploadedFilePath,'title'=>$requestParams['title'],'created'=>time(),'gallerygroup_id'=>$requestParams['gallerygroup_id']);
               $galleryModel->setData($galleryData);
               $galleryModel->save();
               Mage::getSingleton('adminhtml/session')->addSuccess('Gallery has been successfully uploaded');
           }catch(Exception $e){
               Mage::log("Exception Message:");
               $exceptionMsg = $e->getMessage();
               Mage::getSingleton('adminhtml/session')->addError($exceptionMsg);
               
           }
       }
    }
}
