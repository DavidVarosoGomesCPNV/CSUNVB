<?php
/**
 * Auteur: Gwenael West et Valentin Zingg
 * Projet Web - Todolist
 * Date: Février 2020
 **/
include_once 'model/todoListModel.php';
ob_start();
$title = "CSU-NVB - Tâches hebdomadaires";

$cloture = false; //si la liste est cloturée
?>

<form class="container">
    <div class="row m-2">
        <h1>Tâches hebdomadaires</h1>
    </div>
    <hr>
    <div class="row m-2">
        <h2>Tâches pour aujourd'hui : </h2>
        <?php
            echo(date("D d M Y"));
        ?>
    </div>
    <hr>
    <div class="row m-2">
        <a class='btn btn-primary' id="edit" onclick="toggleedit()">Arrêter la modification</a>
    </div>
    <form action="../model/savejson.php" method="post">
        <div class="row col-m">
            <?php
            $tododata = readTodoListItems();
            $marker = 0; //traque le numéro de la tache
            foreach($tododata as $element)
            {
                $marker++;
                echo("<div class='tache'>");
                echo("<br>");
                echo("<h2>".$element["description"]."</h2>");
                echo("Base : ".$element["base"]."<br>");

                //Job de nuit
                if($element["nightjob"] != 0)
                {
                    echo("<br> "." Job de nuit : Oui"."<br>");
                }
                else
                {
                    echo("<br>  Job de nuit : Non"."<br>");
                }
                echo("<br> Date : ".$element["date"]."<br>");

                //si la tâche n'est pas quittancée, affiche "personne" au lieu d'un blanc
                if($element["acknowledged_by"] == null)echo("<br> Quittancé par : Personne<br>");
                else echo("<br> Quittancé par : <strong>".$element["acknowledged_by"]."</strong><br>");

                echo("<hr>");
                //Quel type d'input
                if($element["type"] == 0) //checkbox
                {
                    //si la case est décochée
                    if($element["value"] == null)
                    {
                        //empèche la modification si l'utilisateur connecté n'est pas celui qui l'a quittancé
                        if($element["acknowledged_by"] != null && $_SESSION["user"] != $element["acknowledged_by"])
                        {
                            echo("<input type='checkbox'"." disabled name='"."checkbox$marker"."' >");
                        }
                        else
                        {
                            echo("<input type='checkbox'"." name='"."checkbox$marker"."' >");
                        }

                    }
                    else
                    {
                        //empèche la modification si l'utilisateur connecté n'est pas celui qui l'a quittancé
                        if($element["acknowledged_by"] != null && $_SESSION["user"] != $element["acknowledged_by"])
                        {
                            echo("<input type='checkbox' disabled name='"."checkbox$marker"." value='true' >");
                        }
                        else
                        {
                            echo("<input type='checkbox' name='"."checkbox$marker"." value='true' >");
                        }

                    }
                }
                else//texte
                {
                    //si il n'y a aucun texte entré
                    if($element["value"] == null)
                    {
                        //empèche la modification si l'utilisateur connecté n'est pas celui qui l'a quittancé
                        if($element["acknowledged_by"] != null && $_SESSION["user"] != $element["acknowledged_by"])
                        {
                            echo("<input disabled type='text' >");
                        }
                        else
                        {
                            echo("<input type='text' >");
                        }

                    }
                    else
                    {
                        //empèche la modification si l'utilisateur connecté n'est pas celui qui l'a quittancé
                        if($element["acknowledged_by"] != null && $_SESSION["user"] != $element["acknowledged_by"])
                        {
                            echo("<input type='text' disabled value= ".$element['value'].">");
                        }
                        else
                        {
                            echo("<input type='text'  value= ".$element['value'].">");
                        }
                    }
                }

                echo("<br>");
                echo("</div>");
            }
            ?>
            <button type="submit" id="savebutton" >Enregistrer les modifications</button>
        </div>

    </form>



<?php
$content = ob_get_clean();
require "gabarit.php";
?>
