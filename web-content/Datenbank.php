<?php

session_start();

if($_SESSION['sessLoggedinYes']=="true") {
    $Navpunkt = htmlspecialchars($_POST['id']);
    
    switch($Navpunkt) {
        case'SHOW':
            $Message = "SHOW";
        break;
        case'SEEK':
            $Message = "SEEK";
        break;
        case'EDIT':
            $Message = "EDIT";
        break;
        case'NEW':
            $Message = "NEW";
        break;
        case'KILL':
            $Message = "KILL";
        break;
    }
    
    //START Ausgabebereich
    
    ?>
        <form action="Datensatz.php" method="POST">
            <input type="hidden" name="id" value="SHOW">
            <input type="submit" value="Alles anzeigen">
        </form>
        <form action="Datensatz.php" method="POST">
            <input type="hidden" name="id" value="SEEK">
            <input type="submit" value="Datensatz suchen">
        </form>
        <form action="Datensatz.php" method="POST">
            <input type="hidden" name="id" value="EDIT">
            <input type="submit" value="Tupel bearbeiten">
        </form>
        <form action="Datensatz.php" method="POST">
            <input type="hidden" name="id" value="NEW">
            <input type="submit" value="Neuer Datensatz">
        </form>
        <form action="Datensatz.php" method="POST">
            <input type="hidden" name="id" value="KILL">
            <input type="submit" value="Datensatz löschen">
        </form>
    <?php
      
    echo $Message . "<br>";
    
    //Ausgabebereich ENDE
    
} else {
    $_SESSION['sessLoggedinYes'] = "false";
    
    echo "Access denied";
}

?>


