<div>
    <form id="contact" action="" method="post">
        <fieldset>
            <input name="email" placeholder="Email" type="text" tabindex="1" autofocus>
            <?=isset($emailErr) ? '<p>'.$emailErr.'</p>' : '' ?>
        </fieldset>
        <fieldset>
            <input name="mdp" placeholder="Mot de passe" type="password" tabindex="2" >
            <?=isset($passwordErr) ? '<p>'.$passwordErr.'</p>' : '' ?>
        </fieldset>
        <fieldset>
            <button name="submit" type="submit">S'inscrire</button>
        </fieldset>

    </form>
</div>

