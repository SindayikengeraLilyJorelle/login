<?php
require_once('../config/database.php');

function redirect_to($new_location){
    header('Location: '.$new_location);
    exit();
}

function base_url(){
    $url = "http://localhost/login/";
    return $url;
}

function authenticate_user($email, $password){
    global $conn;

    // 1. finduser by email
    $query = "SELECT * FROM users WHERE email='{$email}' LIMIT 1";

    // run the query
    $results = mysqli_query($conn, $query);

    // check the query
    if($results){
        // fetch user
        $user = mysqli_fetch_assoc($results);
        if($user){
            return $user;
        }
    }else{
        return false;
    }
}

function find_user_by_id($id)
{
    global $conn;
    
    $query = "SELECT * FROM users WHERE id={$id} LIMIT 1";

    // run the query
    $results = mysqli_query($conn, $query);

    // check the query
    if($results){
        // fetch user
        $user = mysqli_fetch_assoc($results);
        if($user){
            return $user;
        }
    }else{
        return false;
    }
    
}