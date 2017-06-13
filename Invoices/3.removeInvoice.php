<?php
/**
 * [RO] Sterge factura unei comenzi (https://github.com/celdotro/marketplace/wiki/Stergere-factura)
 * [EN] Deletes an order's invoice (https://github.com/celdotro/marketplace/wiki/Remove-Invoice)
 */
include __DIR__ . '/../api_include.php';

use celmarket\Auth;
Auth::setUserDetails('USERNAME', 'PASSWORD');

use celmarket\Invoices\InvoicesRemove;

#32#
#FUNCTION#
function removeInvoice($cmd){
    $object = new InvoicesRemove();

    try{
        $response = $object->removeInvoice($cmd);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
removeInvoice(113171);