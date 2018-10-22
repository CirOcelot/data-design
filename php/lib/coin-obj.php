<?php
namespace jjain2\DataDesign;
require_once (dirname(__DIR__, 1). "/Classes/Coin.php");
require_once (dirname(__DIR__, 2). "/vendor/autoload.php");
include "../classes/Coin.php";
$eth = new Coin("17c9816f-9be9-4cb3-ba01-cc5f0413ae57","$21,005,535,307",
	"$1339.06","$1,300,000,000","102,700,000");