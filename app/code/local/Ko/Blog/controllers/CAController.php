<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once(Mage::getModuleDir('controllers','Ko_Aummy') . DS . 'CAController.php');
class Ko_Blog_CAController extends Ko_Aummy_CAController{
    public function frontAction() {
        $this->loadLayout();
        Mage::log("Ko Blog CaController");
        $this->renderLayout();
    }
}
