<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Ko_Gallery_Model_Resource_Gallery extends Mage_Core_Model_Resource_Db_Abstract{
    protected function _construct(){
        $this->_init('ko_gallery/gallery','id');
    }
}
