<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Ko_Gallery_Block_Adminhtml_Gallerygroup_Edit_Form extends Mage_Adminhtml_Block_Widget_Form{
    protected function _prepareForm() {
        $form = new Varien_Data_Form(array(
            'id'=>'gallerygroup',
            'action'=>$this->getUrl('*/*/save'),
            'method'=>'post'
            ));
         
        $fieldset = $form->addFieldset('gallerygroup',array(
           'legend'=>'Gallery Group' 
        ));
        
        $fieldset->addField('name','text',array(
            'required'=>TRUE,
           'name'=>'gallerygroup-name',
            'label'=>'Gallery Group Name'
        ));
        $fieldset->addField('description','text',array(
            'required'=>TRUE,
           'name'=>'gallerygroup-description',
            'label'=>'Gallery Group Description'
        ));
        $fieldset->addField('submit','submit',array(
           'name'=>'gallerygroup-submit',
            'value'=>'Gallery Group Submit'
        ));
        $form->setUseContainer(true);
         $this->setForm($form);
        return parent::_prepareForm();
    }
}
