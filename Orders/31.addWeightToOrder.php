<?php
/**
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Orders\OrdersUpdate;


#FUNCTION#
function addWeightToOrder($oid, $weight){
    $object = new OrdersUpdate();

    try{
        $response = $object->addWeightToOrder($oid, $weight);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
addWeightToOrder(1234, 1);