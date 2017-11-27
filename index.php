<?php
require_once ( 'functions.php' );

if (isset($_POST['mdp'])) {
    Functions::valid();
} else {
    echo Functions::getFormTemplate();
}

?>

