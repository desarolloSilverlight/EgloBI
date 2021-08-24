<?php

include_once '../../libraries/db_mysql.php';

class Login extends DB{

  function obtenerLogin($usuario, $password){

    $query = $this->connect()->query("SELECT * FROM logins WHERE nombreUsuario = '$usuario' AND passwordUsuario = '$password'");

    return $query;
  }

  function obtenerPermisos($idPerfil){

    $query = $this->connect()->query("SELECT * FROM permisos_has_perfil WHERE idPerfil = $idPerfil");

    return $query;
  }

  function crearLogLogin($idUsuario, $fechaHora){

    $query = $this->connect()->query("INSERT INTO log_logins (idUsuario, fechaHora) VALUES ($idUsuario, '$fechaHora')");
    $query = $this->connect()->query("SELECT * FROM log_logins ORDER BY idLogLogin DESC LIMIT 1");

    return $query;
  }

}

?>