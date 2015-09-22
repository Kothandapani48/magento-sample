<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$installer = $this;
$installer->startSetup();
$connection = $installer->getConnection();
//        ->changeColumn($installer->getTable('ko_gallery/gallery'),'name','image_path',array(
//     'type'=> Varien_Db_Ddl_Table::TYPE_TEXT,
//        ))
        $connection->addColumn($installer->getTable('ko_gallery/gallery'),'description',array(
            'type'=> Varien_Db_Ddl_Table::TYPE_TEXT,
            'comment'=>'Description'
        ));
        $connection->addColumn($installer->getTable('ko_gallery/gallery'),'created',array(
           'type'=> Varien_Db_Ddl_Table::TYPE_TIMESTAMP,
            'comment'=>'Created Date'
        ));
$installer->endSetup();

