<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Ko_Blog_Block_Blog extends Mage_Core_Block_Template{
    
   function postList($postId = NULL){
       $postModel = Mage::getModel('blog/blog');
       if(is_null($postId)):
           $post = $postModel->getCollection()->getData();
       else:
           $post = $postModel->load($postId)->getData();
       endif;
       return $post;
   }
   
   function getPostComments($postId){
       return Mage::getModel('blog/comment')->getCollection()->addFieldToFilter('post_id',$postId)->getData();
   }
}
