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
        <h2>Tâches</h2>
    </div>
    <hr>
    <div class="row col-m">
        <?php
        $tododata = readTodoListItems();
        foreach($tododata as $truc)
        {
            echo("<div class='tache'>");
            echo("<h2>".$truc["description"]."</h2>");
            echo("Base : ".$truc["base"]."<br>");
            if($truc["nightjob"] != 0)
            {
                echo("Job de nuit : Oui"."<br>");
            }
            else
            {
                echo("Job de nuit : Non"."<br>");
            }
            echo("Date : ".$truc["date"]."<br>");
            echo("Date : ".$truc["id"]."<br>");
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
