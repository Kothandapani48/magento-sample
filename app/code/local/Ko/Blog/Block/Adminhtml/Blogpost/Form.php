<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//"D:\Program Files\wamp\www\magento-sample\app\code\local\Ko\Blog\Block\Adminhtml\Blogpost\Form.php"
class Ko_Blog_Block_Adminhtml_Blogpost_Form extends Mage_Adminhtml_Block_Widget_Form{
    public function _prepareForm() {
        $form = new Varien_Data_Form(array(
            'id'=>''
        ));
        parent::_prepareForm();
    }
}
