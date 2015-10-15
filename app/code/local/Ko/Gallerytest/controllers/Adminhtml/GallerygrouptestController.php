<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Ko_Gallerytest_Adminhtml_GallerygrouptestController extends Mage_Adminhtml_Controller_Action{
    public function indexAction(){
        echo "Hai";
        $gallerytestModel = Mage::getResourceModel('gallerytest/gallerytestgroup_collection')->getData();
        echo '<pre>',print_r($gallerytestModel),'</pre>';
    }
}
