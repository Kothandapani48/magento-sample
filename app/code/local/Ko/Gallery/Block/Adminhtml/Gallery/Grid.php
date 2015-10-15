<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Ko_Gallery_Block_Adminhtml_Gallery_Grid extends Mage_Adminhtml_Block_Widget_Grid{
    public function _prepareCollection(){
        $galleryCollection = Mage::getResourceModel('ko_gallery/gallery_collection');
        $this->setCollection($galleryCollection);
        return parent::_prepareCollection();
    }
    
    public function _prepareColumns(){
        $this->addColumn('id',array(
           'header'=>'Id',
            'index'=>'id',
        ));
        $this->addColumn('title',array(
            'header'=>'Title',
            'index'=>'title'
        ));
        $this->addColumn('image',array(
            'header'=>'Image',
            'renderer'=> 'gallery/adminhtml_gallery_renderer_imageView'
        ));
        
        $this->addColumn('created',array(
           'header'=>'Created On',
            'index'=>'created',
            'renderer'=>'gallery/adminhtml_gallerygroup_renderer_formatdate'
        ));
        return  parent::_prepareColumns();
    }
}