<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Ko_Blog_Block_Navigation extends Mage_Catalog_Block_Navigation{
    protected function _renderCategoryMenuItemHtml($category, $level = 0, $isLast = false, $isFirst = false,
        $isOutermost = false, $outermostItemClass = '', $childrenWrapClass = '', $noEventAttributes = false){
        Mage::log("navigation Block");
      $active = ($this->getRequest()->getRouteName() == 'ko_blog' ? 'active' : '');
      $html = parent::_renderCategoryMenuItemHtml($category, $level = 0, $isLast = false, $isFirst = false,
        $isOutermost = false, $outermostItemClass = '', $childrenWrapClass = '', $noEventAttributes = false);
//      Mage::log($html);
//      if(Mage::helper('core/data')->isModuleEnabled('Ko_Blog')){
//          $menuUrl = Mage::getUrl('ko_blog');
//          $menuLabel = Mage::helper('blog')->__('Blog');
//            $html .= "<li class='$outermostItemClass $active'><a class='$outermostItemClass' href='$menuUrl'><span>$menuLabel</span></a></li>";
//      }
      return $html;
    }
}
