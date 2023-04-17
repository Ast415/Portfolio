<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}

if(isset($_POST['mailform'])){

    $email = $_POST['email'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $message = $_POST['message'];

    $header="MIME-Version: 1.0\r\n";
    $header.='From:"'.$name.' '.$surname.'"<'.$email.'>'."\n";
    $header.='Content-Type:text/html; charset="uft-8"'."\n";
    $header.='Content-Transfer-Encoding: 8bit';
    
    $message='
    <html>
        <body>
            <div align="center">
                '.$message.'
            </div>
        </body>
    </html>
    ';

    // echo($message);
    // echo($name);
    // echo($email);
    
    mail("bastien.bories@androcode.fr", "Message de ".$name." ".$surname." depuis mon site", $message, $header);
}


$titre = "Accueil";
include "$racine/vue/header.php";
include "$racine/vue/vueAccueil.php";
include "$racine/vue/footer.php";
?>