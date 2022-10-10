<?php

if(isset($_POST["submit"])) {

    //Retrieving data
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdrepeat = $_POST["pwdrepeat"];
    $email = $_POST["email"];

    //Instantiate SingupContr class
    include "../classes/signup.classes.php";
    include "../classes/signup-contr.classes.php";
    $signup = new SignupContr($uid, $pwd, $pwdRepeat, $email);

    //Running error handlers and user signup

    //Going to back to front page
} 