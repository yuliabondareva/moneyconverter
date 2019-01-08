<?php 
session_start();
require_once "../vendor/autoload.php";
require_once "../config/db.php";
require_once "header.php";

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Converter</title>
    <link rel="stylesheet" type="text/css" href="../public/css/style.css">
    <link rel="stylesheet" type="text/css" href="../vendor\twbs\bootstrap\dist\css\bootstrap.min.css">
    <script type="text/javascript" src="../public/js/jquery-3.0.0.min.js"></script>
    <script type="text/javascript" src="../public/js/script.js"></script>  
</head>