<?php
require __DIR__ . '/vendor/autoload.php';

ini_set("display_errors", "Off");

use Acme\Request\Request;
use Acme\Mysql\connect;

var_dump(new Request());
var_dump(new connect());

$log = new Monolog\Logger('name');
$webrequest = new Aicial\Webrequest\Webrequest();
$webrequest->setURL("http://wwww.gaap.co.za");
var_dump($webrequest->go());