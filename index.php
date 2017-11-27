<?php
require_once ( 'functions.php' );

if (isset($_POST)) {
    Functions::valid();
}

echo Functions::getFormTemplate();
?>

