<?php

require '../includes/init.php';
if (isPost()) {
    $email = getPostData('email');
    $password = getPostData('password');
    $firstname = getPostData('firstname');
    $lastname = getPostData('lastname');
//    $cpassword = getPostData('cpassword');

    $register = new Register();
    $register->create($email, $password, $firstname, $lastname);
    getFlashMessages("succsify registered please check your email");
    redirect("login.php");
}




echo $twig->render('user/register.html.twig', array());
