<?php
// file ini digunakan untuk menghubungkan project dengan data base 
$conn = mysqli_connect('localhost', 'root', '', 'perpusuniga');
if (mysqli_connect_error()) {
    printf("Connected failed:", mysqli_connect_error());
    exit();
    // localhost = hostname 
    // root = username 
    // password = ""
}
