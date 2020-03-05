<?php
/**
 * Created By PhpStrom.
 * Title : CSUNVB - Temp2.php
 * User : David-Manuel.VAROSO
 * Date : 24.02.2020
 * Time : 10:37
 */

if(isset($_POST['cloturer'])){ // si formulaire soumis

    echo 'Ambulance N° choisie :', $_POST['ambulance1'];
    echo "<br>";
    echo 'Ambulance N° choisie :', $_POST['ambulance2'];
}

if (isset($_POST['submit'])) echo 'disabled="disabled"';


?>
