<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Ko_Blog_Model_Comment extends Mage_Core_Model_Abstract{
    public function _construct() {
        $this->_init('blog/comment');
    }
}
