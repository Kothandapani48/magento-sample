<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Ko_Gallery_Adminhtml_Block_Form extends Mage_Adminhtml_Block_Widget_Form{
    function _prepareForm() {
        $form = new Varien_Data_Form(array(
            'id'=>'gallery_form',
            'action'=>'',
            'method'=>'post'
        ));
        $fieldset = $form->addFieldset('gallery_fieldset',array(
            'legend'=>'Gallery'
        ));
        $fieldset->addField('title', 'text', array(
            'required'=>TRUE,
            'name'=>'title',
            'label'=>'Title'
        ));
        $fieldset->addField('upload_picture','file',array(
            'required'=>TRUE,
            'name'=>'upload_picture',
            'label'=>'Upload Gallery'
        ));
        $fieldset->addField('upload_button','submit',array(
            'value'=>'Upload Gallery',
        ));
        
        $this->setForm($form);
        return parent::_prepareForm();
    }
}
