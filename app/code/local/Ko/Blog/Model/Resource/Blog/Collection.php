<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Ko_Blog_Model_Resource_Blog_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract{
    protected function _construct() {
        $this->_init('blog/blog');
    }
}
