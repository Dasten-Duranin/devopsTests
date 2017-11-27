<?php


class functions
{

    public function validate(){
        print_r('success.php');

    }

    public function showResults(){
        $valid = false;
        $email       = preg_match ( " /^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/ " , $_POST['email'] );
        $passwordLen = strlen($_POST['mdp']) >= 5;
        $passwordCap = preg_match("/[A-Z]/", $_POST['mdp']);

        if (!$email)
        {
            $emailErr = "Email invalide";
        }
        if (!$passwordLen)
        {
            $passwordErr = "mot de passe trop long";
        }
        if (!$passwordCap)
        {
            $passwordErr = "Il manque une majuscule dans le mot de passe";
        }

        if ($email && $passwordCap && $passwordLen) {
            $valid = true;
        }
    }
}