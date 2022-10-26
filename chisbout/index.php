<?php
session_start();
$urladmin ="http://localhost:8080/chisbout/admin/";
$urluser ="postgres://smbabbkpimgkyy:18ac43a89440015e2db19446deb76475c5d43cca4d49582c4b1091333f134eaa@ec2-3-213-66-35.compute-1.amazonaws.com:5432/d5b9l38odctuik";
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