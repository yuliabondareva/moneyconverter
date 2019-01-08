<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$countLogs = $_POST["count-logs"];
	
}
$_SESSION['countLogs'] = $countLogs;