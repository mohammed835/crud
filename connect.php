<?php
function connectDB()
{
    $host = "localhost";
    $name = 'root';
    $pass = '';
    $db = "crudoperation";

    $con =  mysqli_connect($host, $name, $pass, $db);
    return $con;
}