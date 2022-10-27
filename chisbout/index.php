<?php
session_start();
//$urladmin ="http://localhost:8080/chisbout/admin/";
//$urluser ="http://localhost:8080/chisbout/";
$home = "home.php";
$register = "register.php";
$shoppingcart = "shoppingcart.php";
$order = "order.php";
$logout = "logout.php";

//Connection
$host = "localhost";
$username="root";
$password="";
$db= "myshop";
$conn = pg_connect('postgres://pznogisegeuiqr:d42586754f2dd097de79d4e31a01daadedbc24696a71b9ceb66bfd2926117774@ec2-44-198-82-71.compute-1.amazonaws.com:5432/df001mhbc8v335');

include('theme.php');