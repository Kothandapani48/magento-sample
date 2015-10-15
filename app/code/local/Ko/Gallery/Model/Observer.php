<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//"D:\Program Files\wamp\www\magento-sample\app\code\local\Ko\Gallery\Model\Observer.php"

class Ko_Gallery_Model_Observer {

    public function orderExport($observer) {
        $event = $observer->getEvent();
        $orderDetails = $event->getOrder();
        $orderId = $orderDetails->getEntityId();
        $orderDetails = Mage::getSingleton('sales/order')->load($orderId)->getData();
        $orderFields = array_keys($orderDetails);
        $csvData = array();
        array_push($csvData, $orderFields);
        array_push($csvData, $orderDetails);
        Mage::log('CSV Data');
        Mage::log($csvData);
        $sampleArray = array(array(1 => 3, 2 => 4, 3 => 5));
        $csvObject = new Varien_File_Csv();
        $mediaDir = Mage::getBaseDir('media');
        $csvPath = $mediaDir . DS . 'sample.csv';
        $csvObject->saveData($csvPath, $csvData);
    }

}
