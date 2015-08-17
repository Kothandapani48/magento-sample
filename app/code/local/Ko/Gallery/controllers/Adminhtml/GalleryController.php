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
//        $gallery_form_block
        $this->renderLayout();
    }
}
