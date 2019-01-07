<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$ammount = $_POST["ammount"];
	$sourceid = $_POST["sourceid"];
	$currencies = $_POST["currencies"];

	$ch = curl_init('http://apilayer.net/api/live?access_key=50ee15ca20b4da3b2a31bb2c0f47c884&currencies='.$currencies.'&source=USD&format=1');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

	$json = curl_exec($ch);
	curl_close($ch);
	$exchangeRates = json_decode($json, true);
	$myCur = $sourceid.$currencies;
	$myCurFun = $exchangeRates['quotes'][$myCur]*$ammount;
	$result = $ammount. ' USD = ' . $myCurFun.' '.$currencies;
}