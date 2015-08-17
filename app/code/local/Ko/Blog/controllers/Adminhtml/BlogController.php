<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Ko_Blog_Adminhtml_BlogController extends Mage_Adminhtml_Controller_Action{
    public function indexAction(){
        $this->loadLayout();
        $block = $this->getLayout()->createBlock(
                'Mage_Core_Block_Template',
                'AdminPost',
                array('template'=>'sample.phtml')
                );
//        $this->getLayout()->getBlock('content')->append($block);
        $this->renderLayout();
    }
    
    public function sampleAction(){
        $this->loadLayout();
        
        $this->renderLayout();
    }
}
