<?php
include 'autoloader.inc.php';

if (isset($_POST["submit"]))
{

    //Grabing the data
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];

    // Instantiate SignupContr class
    $login = new LoginContr($uid, $pwd);


    // Running error handlers
    $login->loginUser();


    //Return to front page
    header("location: ../index.php?error=noneLogin");
}