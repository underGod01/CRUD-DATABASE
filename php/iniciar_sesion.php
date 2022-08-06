<?php

require 'conexion_postgres.php';

session_start();

$usuario=$_POST['username'];
$clave=$_POST['password'];

