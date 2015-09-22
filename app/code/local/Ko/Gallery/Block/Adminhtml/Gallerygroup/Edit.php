<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Ko_Gallery_Block_Adminhtml_Gallerygroup_Edit extends Mage_Adminhtml_Block_Widget_Form_Container{
     public function __construct(){
         
        $this->_blockGroup = "gallery";
        $this->_controller = "adminhtml_gallerygroup";
        parent::__construct();
//         $this->_removeButton('save');
//         $this->addButton('save_gallery',array(
//            'label'=>'Save Gallery',
////             'onclick'=>"setLocation('{$this->getUrl('*/*/save')}')",
//             'type'=>'submit'
//         ));
    }
}