<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Ko_Blog_Model_Resource_Blog extends Mage_Core_Model_Resource_Db_Abstract{
    protected function _construct() {
        $this->_init('blog/blog','post_id');
        
    }
}
