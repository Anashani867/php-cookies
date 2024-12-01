<?php 
if(session_status() === PHP_SESSION_NONE)
session_start();


// Sets a flash message data function
function set_flashdata($key = "", $value = ""){
    if(!empty($key) && !empty($value)){
        $_SESSION['_flashdata'][$key] = $value;
        return true;
    }
    return false;
}

// Getting the flashdata
function get_flashdata($key=""){
    if(!empty($key) && isset($_SESSION['_flashdata'][$key])){
        $data = $_SESSION['_flashdata'][$key];
        unset($_SESSION['_flashdata'][$key]);
        return $data;
    }else{
        echo "<script> alert(' Flash Message \'{$key}\' is not defined. ')</script>";
    }
}