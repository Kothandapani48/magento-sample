<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class CA_Dummy_CAController extends Mage_Core_Controller_Front_Action{
    public function frontAction(){
        $this->loadLayout();
        Mage::log("CA Controller");
        $this->renderLayout();
        
    }
}