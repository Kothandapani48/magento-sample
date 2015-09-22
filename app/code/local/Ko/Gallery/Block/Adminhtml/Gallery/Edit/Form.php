<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Ko_Gallery_Block_Adminhtml_Gallery_Edit_Form extends Mage_Adminhtml_Block_Widget_Form{
    function _prepareForm() {

        $galleryGroupId = $this->getRequest()->getParam('id'); // Gallery Group Id
        
        $form = new Varien_Data_Form(array(
            'id'=>'gallery_form',
            'action'=> $this->getUrl('*/*/save'),
            'method'=>'post',
            'enctype'=>'multipart/form-data'
        ));
        $fieldset = $form->addFieldset('gallery_fieldset',array(
            'legend'=>'Gallery'
        ));
        $fieldset->addField('title', 'text', array(
            'required'=>TRUE,
            'name'=>'title',
            'label'=>'Title'
        ));
        $fieldset->addField('upload_picture','image',array(
            'required'=>TRUE,
            'name'=>'upload_picture',
            'label'=>'Upload Gallery'
        ));
        $fieldset->addField('gallerygroup_id','hidden',array(
            'name'=>'gallerygroup_id',
            'value'=>$galleryGroupId
        ));
        $fieldset->addField('submit','submit',array(
            'value'=>'Upload Gallery',
        ));
        
        $form->setUseContainer(true);
        $this->setForm($form);
        return parent::_prepareForm();
    }
}
