<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}

$titre = "Experience";
include "$racine/vue/header.php";
include "$racine/vue/vueExperience.php";
include "$racine/vue/footer.php";
?>