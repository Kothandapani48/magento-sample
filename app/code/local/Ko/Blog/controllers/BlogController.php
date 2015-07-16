<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Ko_Blog_BlogController extends Mage_Core_Controller_Front_Action{
    public function indexAction(){
        $this->loadLayout();
//        $this->addContent
        $this->renderLayout();
//        $packageName = Mage::getSingleton('core/design_package')->getPackageName();
//        echo $packageName . PHP_EOL;
//        $frontendTheme = Mage::getSingleton('core/design_package')->getTheme('frontend');
//        echo $frontendTheme . PHP_EOL;
//        echo "Hai";
    }
    
    public function submitPostAction(){
        
        Mage::log($this->getRequest()->getParams());
        Mage::getSingleton('core/session')->addSuccess("Your post has been posted");
        $this->_redirect('*/*/postList');
    }
    
    public function postListAction(){
        $this->loadLayout();
        $this->renderLayout();
    }
}
