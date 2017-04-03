<?php
require __DIR__ . '/vendor/autoload.php';

ini_set("display_errors", "Off");

use Acme\ImageResize\ImageResize;
use Acme\Request\Request;

if (isset($_GET['file'])) {
	$image = new ImageResize($_FILES['fileToUpload']['name']);
	$image->resize($_POST['width'], $_POST['height']);
	$image->save();
	echo "<p><a href='photo.html'>Home</a></p>";
	exit();
} else {
	$file = "photo.html";
	new Request($file);
}