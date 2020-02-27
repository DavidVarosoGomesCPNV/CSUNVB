<?php
/**
 * Auteur: Gwenael West et Valentin Zingg
 * Projet Web - Todolist
 * Date: Février 2020
 **/
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
        echo("<table>");
        foreach($tododata as $truc)
        {

            echo("<br>");
            echo("<tr><h2>".$truc["description"]."</h2><br>");
            echo("<th><strong>"."ID : ".$truc["id"]."</strong>"."<br></th>");
            echo("<th>Base : ".$truc["base"]."</th><br>");

            //Job de nuit
            if($truc["nightjob"] != 0)
            {
                echo("<br><th>  Job de nuit : Oui"."<br></th>");
            }
            else
            {
                echo("<br><th>  Job de nuit : Non"."<br></th>");
            }
            echo("<br><th> Date : ".$truc["date"]."<br></th>");

            echo("<br></tr><br>");
            echo("<hr>");
        }
        ?>
        </table>
    </div>
</div>



<?php
$content = ob_get_clean();
require "gabarit.php";
?>
