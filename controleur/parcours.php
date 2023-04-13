<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}

$titre = "Parcours";
include "$racine/vue/header.php";
include "$racine/vue/vueParcours.php";
include "$racine/vue/footer.php";
?>