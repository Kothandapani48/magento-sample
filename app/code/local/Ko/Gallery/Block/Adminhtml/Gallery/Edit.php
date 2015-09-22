<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Ko_Gallery_Block_Adminhtml_Gallery_Edit extends Mage_Adminhtml_Block_Widget_Form_Container{
    public function _construct() {
        $this->_blockGroup = 'gallery';
        $this->_controller = 'adminhtml_gallery';
        parent::_construct();
    }
}