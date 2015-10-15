<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$installer = $this;
$installer->startSetup();
$installer->getConnection()
//->changeColumn($installer->getTable('ko_gallery/gallery'),'description','title',array(
//    'type'=> Varien_Db_Ddl_Table::TYPE_TEXT,
//))
        ->addColumn($installer->getTable('gallery'),'gallerygroup_id',Varien_Db_Ddl_Table::TYPE_INTEGER,null,array(
           'nullable'=> false,
           'comment'=>'Gallery Group ID'
        ));
$installer->endSetup();