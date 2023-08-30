<?php

class conexion
{
public static function conectar(){
    $link = new PDO("mysql:host=localhost;dbname=cajero","root","");
    return $link;
}
}