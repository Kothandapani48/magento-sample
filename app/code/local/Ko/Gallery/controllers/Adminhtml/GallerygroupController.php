<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Ko_Gallery_Adminhtml_GallerygroupController extends Mage_Adminhtml_Controller_Action{
   public function indexAction(){
        $this->loadLayout();
        Zend_Debug::dump($this->getLayout()->getUpdate()->getHandles());
        $galleryGroupForm = $this->getLayout()->createBlock('gallery/adminhtml_gallerygroup_edit');
        $this->_addContent($galleryGroupForm);
        $galleryGroupGrid = $this->getLayout()->createBlock('gallery/adminhtml_gallerygroup_grid');
        $this->_addContent($galleryGroupGrid);
        $this->renderLayout();
    }
    
    public function saveAction(){
        $requestParams = $this->getRequest()->getParams();
        Mage::log($requestParams);
        $currentTimeStamp = time();
        $galleryGroupData = array('gallery_name'=>$requestParams['gallerygroup-name'],'description'=>$requestParams['gallerygroup-description'],'created'=>$currentTimeStamp);
        $galleryGroupModel = Mage::getSingleton('ko_gallery/gallerygroup');
        $galleryGroupModel->setData($galleryGroupData)->save();
        $this->_redirect('*/*/index');
        return;
    }
}
