<?php 
include_once '../apis/apiLogin.php';

$usuario = $_POST["usuario"];
$password = $_POST["password"];

$api = new ApiLogin();

$api->getLogin($usuario, $password);
?>