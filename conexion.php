<?php

class conexion{

    const user='id16652813_edmundo';
    const pass='Edmundoiot1.';
    const db='id16652813_iot';
    const servidor='localhost';

    public function conectardb(){
        $conectar = new mysqli(self::servidor, self::user,self::pass,self::db);
        if($conectar->connect_errno){
            die("Error en la conexión".$conectar->connect_error);
        }
        return $conectar;
    }
}

?>