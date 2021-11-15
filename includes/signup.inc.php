<?php
include 'autoloader.inc.php';

if (isset($_POST["submit"]))
{

    //Grabing the data
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];
    $pwdrepeat = $_POST['pwdrepeat'];
    $email = $_POST['email'];

    // Instantiate SignupContr class
    $signup = new SignupContr($uid, $pwd, $pwdrepeat, $email);


    // Running error handlers
    $signup->signupUser();


    //Return to front page
    header("location: ../index.php?error=none");
}