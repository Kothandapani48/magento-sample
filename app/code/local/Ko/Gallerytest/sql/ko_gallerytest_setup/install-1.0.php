<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$installer = $this;
$installer->startSetup();
//$connection = $installer->getConnection();
$installer->run('create table gallerytest(id int(1), name varchar(20))');
$installer->endSetup();