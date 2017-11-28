<?php

class Valid
{
    public static function checkEmail($email)
    {
        return preg_match ("/^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/" , $email);
    }

    public static function checkPasswordLenght($mdp)
    {
        return strlen($mdp) >= 5;
    }

    public static function checkPasswordHaveUppercase($mdp)
    {
        return preg_match("/[A-Z]/", $mdp);
    }
}
