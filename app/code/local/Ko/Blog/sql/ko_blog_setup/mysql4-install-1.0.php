<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$installer = $this;
$installer->startSetup();
try{
$sqlQuery = "CREATE TABLE BLOG(post_id int NOT NULL PRIMARY KEY,title varchar(50),description text,timestamp int);";
$installer->run($sqlQuery);
$sqlQuery = "create table comment(comment_id int NOT NULL PRIMARY KEY,title varchar(50),description text,timestamp int,post_id int NOT NULL,FOREIGN KEY (post_id) REFERENCES blog(post_id));";
$installer->run($sqlQuery);
}catch(Exception $e){
  echo "Exception Message: <br />{$e->getMessage()}";  
}
$installer->endSetup();