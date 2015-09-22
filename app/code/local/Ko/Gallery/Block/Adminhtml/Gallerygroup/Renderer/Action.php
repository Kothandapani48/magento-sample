<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Ko_Gallery_Block_Adminhtml_Gallerygroup_Renderer_Action extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract{
    public function render(Varien_Object $row){
        $rowData  = $row->getData();
        $galleryGroupId  = $rowData['id'];
        $galleryUrl = $this->getUrl('admin_gallery/gallery/index',array('id'=>$galleryGroupId));
        $galleryHtml = "<a href = '$galleryUrl'>Edit</a>";
        return $galleryHtml;
    }
}