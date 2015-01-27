<?php
session_start();

$benutzer = '';
$passwort = '';
$PWprecode = '1234567';
$PWPostcode= '7654321';

if(((isset($_POST['user'])) && isset($_POST['pass']))) {
    $benutzer = htmlspecialchars($_POST['user']);
    $passwort = md5($PWprecode . md5(htmlspecialchars($_POST['pass'])) . $PWPostcode);

    if($benutzer=='DerWoDasProgrammiertHat') {

        if($passwort==md5($PWprecode . 'j95h6fdu4z6cdst5rhl9i6zd6sf5r3e2' . $PWPostcode)) {
            $Meldung = 'Sie sind eingeloggt';
            $_SESSION['sessLoggedinYes'] = "true";
        } else {
            $Meldung .= 'Benutzername und/oder Passwort sind falsch';
            $_SESSION['sessLoggedinYes'] = "false";
        }
    } else {
        $Meldung .= 'Benutzername und/oder Passwort sind falsch';
        $_SESSION['sessLoggedinYes'] = "false";
    }  
} 

?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>easyAdressbuch</title>
        <link rel="shortcut icon" type="image/ico" href="http://www.geeeek.de/publ_Media/Logo.jpg" />
        <link rel="stylesheet" type="text/css" href="MYstyle.css" />
    </head>
    <body>
       <form name="LoginForm" class="Verwaltung" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            BENUTZER : <br><input type="text" name="user" size="60" maxlength="60" class="TEXTIN"><br><br>
            KENNWORT : <br><input type="password" name="pass" size="60" maxlength="60" class="PASSWPIN"><br><br>
            <input type="submit" name="AKTION" value="OK" class="BTN">
            <input type="reset" name="AKTION" value="Abbrechen" class="BTN"><br>
            <input type="hidden" name="navpunkt" value="INSERT_PW"/>
        </form>

    </body>
</html>


<?php
//START Ausgabebereich
echo $Meldung . "<br>";
echo "<br>";


if($_SESSION['sessLoggedinYes']=="true") {
    ?>
        <form action="Datensatz.php" method="POST">
            <input type="submit" value="Weiter zur Datenbank">
        </form>

    <?php    
}

//Ausgabebereich ENDE
?>
