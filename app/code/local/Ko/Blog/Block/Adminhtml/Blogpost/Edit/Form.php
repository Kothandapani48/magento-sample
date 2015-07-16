<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Ko_Blog_Block_Adminhtml_Blogpost_Edit_Form extends Mage_Adminhtml_Block_Widget_Form{
   protected function _prepareForm(){
       $form = new Varien_Data_Form(array(
          'id'=> 'blog_form',
           'action'=> $this->getUrl('*/*/save'),
           'method'=> 'post'
       ));
       $fieldset = $form->addFieldset('blog_fieldset',array(
          'legend'=>'Blog Fields' 
       ));
       $fieldset->addField('title','text',array(
          'required'=> TRUE,
           'name'=>'title',
           'label'=>'Post Title'
       ));
       $fieldset->addField('description','text',array(
          'required'=> TRUE,
           'name'=>'description',
           'label'=>'Description'
       ));
       $form->setUseContainer(TRUE);
       $this->setForm($form);
       return parent::_prepareForm();
   }
   
  
}
