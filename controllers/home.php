<?php

if (isset($_POST['submit'])) {
    if (! Valid::checkEmail($_POST['email'])) {
        $emailErr = "Email invalide";

    } elseif (! Valid::checkPasswordLenght($_POST['mdp'])) {
        $passwordErr = "mot de passe trop long";

    } elseif (! Valid::checkPasswordHaveUppercase($_POST['mdp'])) {
        $passwordErr = "Il manque une majuscule dans le mot de passe";

    } else {
        header('Location: /success.html');
    }
}

