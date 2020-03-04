<?php
require_once('../models/initialize.php');
session_start();

if(isset($_POST['login'])){
    $email = htmlentities($_POST['email']);
    $password = htmlentities($_POST['password']);
    $user = authenticate_user($email, $password);
    if($user){
        $_SESSION['user_id'] =  $user['id'];
        $url = base_url().'public/index.php';
        redirect_to($url);
    }
}