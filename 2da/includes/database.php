<?php

$db = mysqli_connect('localhost','root','','biblioteca');

if(!$db){
    echo "hubo un error";
    exit;
}