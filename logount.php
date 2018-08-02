<?php

session_start();

unset($_SESSION['usuario_logado']);
header('location:index.php');