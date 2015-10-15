<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Ko_Gallery_Block_Adminhtml_Gallery_Renderer_ImageView extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract{
    public function render(Varien_Object $row){
        $rowData = $row->getData();
        $imagePath = $rowData['image_path'];
        $imageHtml = "<img src='$imagePath' alt='No Image Found' />";
        return $imageHtml;
//        Mage::log($rowData);
    }
}
