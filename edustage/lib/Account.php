<?php

define("EMAIL_CS","cs@admin.com");
define("PASSWORD_CS","123");

function isLogedIn(){
    if (isset($_SESSION['loged_in'])){
        if($_SESSION['loged_in'] == '1'){
            return true;
        }
    }   
    return false; 
}

function setAccount($email,$pass){
    $_SESSION['account'] = $email;
    $_SESSION['loged_in'] = 1;
}

function logout(){
    session_destroy();
    redirect("./");
}

function setFlash($key,$value){
    $_SESSION['flash'][$key] = $value;
}

function getFlash($key){
    $val = null;
    if(isset($_SESSION['flash'][$key])){
        $val = $_SESSION['flash'][$key];
        $_SESSION['flash'][$key] = null;
    }
    return $val;
}


function authMiddleware($path="admin.php"){
    if(isLogedIn()){
        return;
    }

    redirect($path);
}