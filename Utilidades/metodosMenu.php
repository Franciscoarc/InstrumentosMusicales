<?php
session_start();
include './metodosUsuarios.php';

function redireccionar($page) {
    $port = "8080";
    header("Location: http://localhost:" . $port . "/Sitio/" . $page);
}

function write_user_menu() {
    if (isset($_SESSION['idUsuario'])) {
        $user_id = $_SESSION['idUsuario'];
        $email = obtenerCorreo($user_id);
        echo '<li><a href="logout.php">Cerrar sesión (' . $email . ')</a></li>';
    } else {
        echo '<li><a href="login.php">Acceder</a></li>';
    }
}

function write_private_menu() {
    if (isset($_SESSION['idUsuario'])) {
        $idUsuario = $_SESSION['idUsuario'];
        $idPerfil = obtenerPerfil($idUsuario);
        if ($idPerfil == 1) {
            echo '<li><a href="mostrarAdministrador.php">';
            echo 'Gestión de usuarios';
            echo '</a></li>';
        } else if ($idPerfil == 2) {
            //No sé donde redigir la weá xd
            echo '<li><a href="x.php">';
            echo 'Mis datos';
            echo '</a></li>';
        } else {
            // no hacemos nada
        } 
    }
}

function normal_only() {
    if (isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];
        $profile_id = get_profile_id($user_id);
        if ($profile_id != 2) {
            redirect("user_list.php");
        }
    } else {
        redirect("login.php");
    }
}

function admin_only() {
    if (isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];
        $profile_id = get_profile_id($user_id);
        if ($profile_id != 1) {
            redirect("contact_list.php");
        }
    } else {
        redirect("login.php");
    }
}