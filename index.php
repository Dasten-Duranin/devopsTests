<?php
require_once ( 'functions.php' );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DevOps</title>
</head>
<body>

<div>
    <form id="contact" action="<?php functions::validate();?>" method="post">
        <fieldset>
            <input name="email" placeholder="Email" type="text" tabindex="1" autofocus>
        </fieldset>
        <fieldset>
            <input name="mdp" placeholder="Mot de passe" type="password" tabindex="2" >
        </fieldset>
        <fieldset>
            <button name="submit" type="submit">S'inscrire</button>
        </fieldset>

    </form>
</div>



</body>
</html>