<?php
session_start();

if (isset($_SESSION['usuario_logado'])) {
	define("ID_USER", $_SESSION['usuario_logado']->id_usuario);
}