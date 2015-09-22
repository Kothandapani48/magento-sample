<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Ko_Blog_Block_Adminhtml_Blogpost_Edit extends Mage_Adminhtml_Block_Widget_Form_Container{
    public function __construct() {
        $this->_blockGroup = 'blog';
        $this->_controller = 'adminhtml_blogpost';
//        Mage::log("Form Container");
        parent::__construct();
        $this->_addButton('save_post',array(
           'label'=> 'Save Post',
            'class'=> 'save'    
        ));
        
        
        
    }
}
