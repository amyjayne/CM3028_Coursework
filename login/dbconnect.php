<?php

$db = new mysqli(
    "eu-cdbr-azure-north-e.cloudapp.net",
    "bacefc3e76e3c0",
    "19ebadf4",
    "cm3028d2"
);

if (!$db) {
    die('Connect Error: ' . mysqli_connect_errno());
}
