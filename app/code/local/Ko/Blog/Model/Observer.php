<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Ko_Blog_Model_Observer{
    public function regenerateMenu($observer){
       
        if(!Mage::getStoreConfig('advanced/module_disable_output/Ko_Blog')){
            $layout = Mage::getSingleton('core/layout');
            $layout->getUpdate()->addUpdate('<remove name="catalog.topnav" />');
            $layout->getUpdate()->load();
            $layout->generateXml();
            $layout->generateBlocks();
//            Mage::log("Ended");
        }
    }
}
