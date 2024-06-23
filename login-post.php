<?php

session_start();

include ('connect.php');  

if(isset$_post['username']) && isset($_post['password']){

    $username =stripcslashes (strtolower($_POST['username']));
    $password = stripcslashes ($_POST['password']);
    $username = filter_input(INPUT_POST,'username');
    $password = stripcslashes (strtolower($_POST['password']));
    $username = htmlentities(mysqli_real_escape_string($conn,$_POST['username']));
    $password= htmlentities(mysqli_real_escape_string($conn;$_POST['password']));   

}

if(empty($username)) {
    $user_error = 'please enter username <br>';
    $err_s = 1 ;

}
if(empty($password)){
    $password_error = 'plese insert password';
    $err_s = 1 ;
   include('login.php');
}
else {
    include('login.php');
}
