<?php

define('AUTENTICADOR', true);
require "modelo/loginModelo.php";

function authLogin($login, $passwd){
     if (AutenticarUser($login, $passwd)){
            if (eADM($login, $passwd)) {
                $_SESSION["auth"] = array("user" => "$login", "role" => "admin" );
                return true;
            }else {
                $_SESSION["auth"] = array("user" => "$login", "role" => "user");
                return true;
            }
    }else{
    return false;

    }
}


function authIsLoggedIn() {
    return isset($_SESSION["auth"]);
}

function authLogout() {
    if (isset($_SESSION["auth"])) {
        $_SESSION["auth"] = null;
        unset($_SESSION["auth"]);
    }
}

function authGetUserRole() {
    if (authIsLoggedIn()) {
        return $_SESSION["auth"]["role"];
    }
}
