<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Ko_Gallerytest_Model_Resource_Gallerytestgroup extends Mage_Core_Model_Resource_Db_Abstract{
    public function _construct() {
        $this->_init('gallerytest/gallerytestgroup','id');
    }
}