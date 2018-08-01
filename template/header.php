<?php
define("CAMINHO", $_SERVER['DOCUMENT_ROOT'] . $_SERVER['REQUEST_URI']);
define('DISE', DIRECTORY_SEPARATOR);
include_once CAMINHO . 'vendor' . DISE . 'autoload.php';

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" type="text/css" href="">
        <link rel="stylesheet" href="<?=base_url('assets/node_modules/bootstrap/dist/css/bootstrap.min.css')?>">
</head>
<body>
