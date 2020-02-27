<?php
include_once 'model/todoListModel.php';
ob_start();
$title = "CSU-NVB - Tâches hebdomadaires";
?>

<div class="container">
    <div class="row m-2">
        <h1>Tâches hebdomadaires</h1>
    </div>
    <hr>
    <div class="row m-2">
        <h2>Toutes les Tâches</h2>
    </div>
    <hr>
    <div class="row m-2">
        <a class='btn btn-primary'>Modifier liste</a>
    </div>
    <div class="row col-m">
        <?php
        $tododata = readTodoListItems();
        foreach($tododata as $truc)
        {
            echo("<div class='tache'>");
            echo("<h2>".$truc["description"]."</h2>");
            echo("<strong>"."ID : ".$truc["id"]."</strong>"."<br>");
            echo("Base : ".$truc["base"]."<br>");

            //Job de nuit
            if($truc["nightjob"] != 0)
            {
                echo("Job de nuit : Oui"."<br>");
            }
            else
            {
                echo("Job de nuit : Non"."<br>");
            }
            echo("Date : ".$truc["date"]."<br>");

            //acquittance
            if($truc["acknowledged_by"] != null)
            {
                echo("Acquitté à : ".$truc["acknowledged_by"]."<br>");
            }
            else
            {
                echo("Acquitté à : Personne"."<br>");
            }
            //TODO: Type et value /!\
            echo("<a class='btn btn-primary'>Voir tâche</a>");
            echo("</div>");
        }
        ?>
    </div>
</div>



<?php
$content = ob_get_clean();
require "gabarit.php";
?>
