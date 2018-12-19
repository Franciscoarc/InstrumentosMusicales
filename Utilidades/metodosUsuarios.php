<?php
 include './conexion.php';

function create_user($correo,$nombre,$contra,$perfil) {
    $hash_contra = crypt($contra, "foo");
    $conn = conectar();
    $sql = "insert into usuario (correo,nombre,contrasena,Perfil_idPerfil) ";
    $sql .= "values ('" . $email . "', '" . $nombre . "', '". $contra ."',". $perfil .")";
    if ($conn->query($sql) === FALSE) {
        echo '<div class="alert alert-danger">';
        echo 'Error al registrar el usuario: ' . $conn->error;
        echo '</div>';
    } else {
        echo '<div class="alert alert-success">';
        echo 'Usuario registrado correctamente';
        echo '</div>';
    }
    $conn->close();
}

function login($correo, $contra) {
    $hash_contra = crypt($contra, "foo");
    $conn = conectar();
    $sql = "select * from usuario where correo = '" . $correo . "' and contrasena = '" . $hash_contra . "'";
    $result = $conn->query($sql);
    $conn->close();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            return $row["idUsuario"];
        }
    } else {
        return FALSE;
    }
}

function obtenerCorreo($idUsuario) {
    $conn = conectar();
    $sql = "select * from usuario where idUsuario = '" . $idUsuario . "'";
    $result = $conn->query($sql);
    $conn->close();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            return $row["correo"];
        }
    } else {
        return FALSE;
    }
}

function obtenerPerfil($idUsuario) {
    $conn = conectar();
    $sql = "select * from usuario where idUsuario = '" . $idUsuario . "'";
    $result = $conn->query($sql);
    $conn->close();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            return $row["Perfil_idPerfil"];
        }
    } else {
        return FALSE;
    }
}

