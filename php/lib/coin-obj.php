<?php
namespace jjain2\DataDesign;
require_once (dirname(__DIR__, 1). "/Classes/Coin.php");
require_once (dirname(__DIR__, 2). "/vendor/autoload.php");
$eth = new Coin("17c9816f-9be9-4cb3-ba01-cc5f0413ae57","$20M",
	"$1339.06","$1.3B","102.7M");
var_dump($eth);