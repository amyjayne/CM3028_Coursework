<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$db = new mysqli(
    'eu-cdbr-azure-north-e.cloudapp.net',
    'bacefc3e76e3c0',
    '19ebadf4',
    'cm3028d2'
);
if($db->connect_errno){
    die('Connect failed['.$db->connect_error.']');
}