<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Ko_Blog_BlogController extends Mage_Core_Controller_Front_Action{
    public function indexAction(){
        $this->loadLayout();
//         echo Mage::getUrl($this->getRequest()->getRouteName());
//        $this->addContent 
        $this->renderLayout();
//        $packageName = Mage::getSingleton('core/design_package')->getPackageName();
//        echo $packageName . PHP_EOL;
//        $frontendTheme = Mage::getSingleton('core/design_package')->getTheme('frontend');
//        echo $frontendTheme . PHP_EOL;
//        echo "Hai";
           }
    
    public function submitAction(){
        $form_params = $this->getRequest()->getParams();
        $postId = $form_params['post_id'];
        $title = $form_params['title'];
        $description = $form_params['description'];
        $formType = $form_params['form-type'];
        $currentTimestamp = time();
        $postData = array('title'=>$title,'description'=>$description,'timestamp'=>$currentTimestamp);
        if($formType == 'post'):
            $model = Mage::getSingleton('blog/blog');
        else:
            $model = Mage::getSingleton('blog/comment');
            $postData['post_id'] = $postId;
        endif;
        
        
        $model->setData($postData)->save();
        Mage::getSingleton('core/session')->addSuccess("Your post has been posted");
        $this->_redirect('*/*/postList');
    }
    
    public function postListAction(){
        $this->loadLayout();
        $this->renderLayout();
    }
    
    public function postViewAction(){
        $this->loadLayout();
        $this->renderLayout();
    }
    
}
