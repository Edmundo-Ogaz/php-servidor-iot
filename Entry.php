<?php

    include_once $_SERVER['DOCUMENT_ROOT'] . '/servidoriot/autoload.php';


    $limit = $_GET['limit'];

    $entry = new useCase\EntryUseCase();
    $result = $entry->getByDeviceName('tarjeta1', $limit);
    if( $result ) {
        header('Content-Type: application/json');
        echo json_encode($result);

    }
    else {
        echo "*** LA TARJETA NO EXISTE ***<br>";
    }

?>