<?php

//include_once "bd.compte.inc.php";

function isLoggedOn() {
    if (!isset($_SESSION)) {
        session_start();
    }
    $ret = false;

    if (isset($_SESSION["mailU"])) {
        $util = getUserByCourentUser();
        //var_dump($util);
        //Var_dump($_SESSION);
        if ($util["COMPTELOGIN"] == $_SESSION["mailU"] && $util["COMPTEMOTDEPASSE"] == $_SESSION["mdpU"]
        ) {
            $ret = true;
        }
    }
    return $ret;
}
?>