<?php
require_once "vendor/autoload.php";

if (isset($_GET['id']) && !empty($_GET['id'])) {
	$id = trim($_GET['id']);
	delete($id);
	header("location: admin.php");
} else {
	header("location: admin.php");
}