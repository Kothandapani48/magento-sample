<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once(Mage::getModuleDir('controllers','CA_Dummy') . DS . 'CAController.php');
class Ko_Aummy_CAController extends CA_Dummy_CAController{
    public function frontAction() {
        $this->loadLayout();
        Mage::log("Ko Aummy CaController");
        $this->renderLayout();
    }
}
