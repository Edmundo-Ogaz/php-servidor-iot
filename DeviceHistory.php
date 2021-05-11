<?php

    include_once $_SERVER['DOCUMENT_ROOT'] . '/servidoriot/autoload.php';


    //require_once('useCase/DeviceUseCase.php');
    //include('DeviceUseCase.php');

    $device = new useCase\DeviceUseCase();
    //$result = $device->test('tarjeta1');
    $result = $device->getHistory('tarjeta1');
    if( $result ) {
        header('Content-Type: application/json');
        echo json_encode($result);

    }
    else {
        echo "*** LA TARJETA NO EXISTE ***<br>";
    }

?>