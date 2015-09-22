<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$installer = $this;
$installer->startSetup();
$createTable = $installer->getConnection()
        ->newTable($installer->getTable('ko_gallery/gallery'))
        ->addColumn('id', Varien_Db_Ddl_Table::TYPE_INTEGER,null,array(
            'primary'=> true,
        ),'Id')
        ->addColumn('name', Varien_Db_Ddl_Table::TYPE_VARCHAR,null,array(
           'nullable'=>true 
        ),'Name');

$installer->getConnection()->createTable($createTable);
$installer->endSetup();