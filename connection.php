<?php

try{
   $connection = new PDO("mysql:host=localhost;dbname=imagedb","root","jeeva143");
}
catch (PDOException $e){
    die("connection error".$e->getMessage());
}