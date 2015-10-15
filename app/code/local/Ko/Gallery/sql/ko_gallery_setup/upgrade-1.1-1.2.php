<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$installer = $this;
$installer->startSetup();
$createTableObject = $installer->getConnection()
        ->newTable($installer->getTable('ko_gallery/gallerygroup'))
        ->addColumn('id',  Varien_Db_Ddl_Table::TYPE_INTEGER,null,array(
            'primary'=>TRUE,
            'comment'=>'ID'
        ))
        ->addColumn('gallery_name',Varien_Db_Ddl_Table::TYPE_VARCHAR,null,array(
            'length'=>100,
            'comment'=>'Gallery Name'
        ))
        ->addColumn('description',Varien_Db_Ddl_Table::TYPE_TEXT,null,array(
            'comment'=>'Gallery Description',
            'default'=> NULL
        ))
        ->addColumn('created',Varien_Db_Ddl_Table::TYPE_TIMESTAMP,null,array(
            'comment'=>'Gallery Created',
            'default'=> time()
        ));
$installer->getConnection()->createTable($createTableObject);
$installer->endSetup();