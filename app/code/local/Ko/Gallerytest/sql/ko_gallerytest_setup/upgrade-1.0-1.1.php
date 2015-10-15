<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$installer = $this;
$installer->startSetup();
$dropQuery = 'drop table gallerytest;';
$createQuery = 'create table gallerytest_group(id int(10),title varchar(20), description varchar(255));';
$createQuery .= 'create table gallerytest(id int(10),title varchar(20), description varchar(255), image_path varchar(50), gallerygroup_id int(10));';
$installer->run($dropQuery);
$installer->run($createQuery);
$installer->endSetup();