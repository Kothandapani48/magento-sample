<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//app\code\local\Ko\Gallery\Block\Adminhtml\Gallerygroup\Grid.php"
class Ko_Gallery_Block_Adminhtml_Gallerygroup_Grid extends Mage_Adminhtml_Block_Widget_Grid{
    public function _prepareCollection() {
        $galleryGroupCollection = Mage::getResourceModel('ko_gallery/gallerygroup_collection');
        $this->setCollection($galleryGroupCollection);
        return parent::_prepareCollection();
    }
    
    public function _prepareColumns() {
        $this->addColumn('id',array(
           'header'=> 'Id',
            'index'=>'id'
        ));
        $this->addColumn('name',array(
           'header'=>'Name',
            'index'=>'gallery_name',
            'sortable'=>TRUE,
        ));
        $this->addColumn('description',array(
            'header'=>'Description',
            'index'=>'description',
        ));
        $this->addColumn('created',array(
           'header'=>'Created on',
            'index'=>'created',
            'renderer'=>'gallery/adminhtml_gallerygroup_renderer_formatdate'
        ));
        $this->addColumn('action',array(
            'header'=> 'Action',
            'renderer'=>'gallery/adminhtml_gallerygroup_renderer_action'
        ));
        return parent::_prepareColumns();
    }
}

