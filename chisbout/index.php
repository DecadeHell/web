<?php
session_start();
$urladmin ="http://localhost:8080/chisbout/admin/";
$urluser ="http://localhost:8080/chisbout/";
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
$conn = mysqli_connect($host,$username,$password,$db) or die("Can not connect database ".mysqli_connect_error());

include('theme.php');