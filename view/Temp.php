<?php
/**
 * Created By PhpStrom.
 * Title : CSUNVB - Temp.php
 * User : David-Manuel.VAROSO
 * Date : 13.02.2020
 * Time : 16:00
 */
/*
 * html, body{
            width: 100%;
        }
        table, td, th {
            border: 1px solid #ddd;
            text-align: left;
            width: 70%;


        }

        table {
            border-collapse: collapse ;
            width: 70%;


        }

        th, td {
            padding: 15px;
            width: 50px;
            height: 10px;
        }

        .verticalPharmacie{
            text-align:center;
            white-space:nowrap;
            transform: rotate(-90deg);
            width: 30px;


        }



    <tr>
        <?php
        foreach ($tableauJours as $Jours) {
            echo "<th>$Jours</th>";
            echo "<th class='verticalPharmacie'>Pharmacie</th>";
        }
        ?>
    </tr>

    <?php
    foreach ($tableauDrugs as $Drugs) {
        echo "<div>";
        echo "<tr>";
        echo "<td>$Drugs";
        echo "</td>";
        echo "<br>";
        echo "</tr>";
        echo "</div>";
    }


 <style>

        div {
            font-family: Arial 15px sans-serif;
        }

        table {
            table-layout: fixed;
            border-collapse: collapse;

        }

        table tr:not(:first-child) th {
            display: inline-block;
            -webkit-writing-mode: vertical-rl;
            -ms-writing-mode: tb-rl;
            writing-mode: vertical-rl;
        }

        th {
            padding: 6px;
        }

        #writing-mode img {
            width: 35px;
        }

        td {
            width: 40px;
            border: 1px dotted black;
            background-color: #0e90d2;
        }

        .id{
            display: inline-block;
            -webkit-writing-mode: vertical-rl;
            -ms-writing-mode: tb-rl;
            writing-mode: vertical-rl;
        }




    </style>



<label for="Sites"><select id="Sites">
    <option id="Site1" value="Site1">La Vallée-de-Joux</option>
    <option id="Site2" value="Site2">Payerne</option>
    <option id="Site3" value="Site3">Saint-Loup</option>
    <option id="Site4" value="Site4">Sainte-Croix</option>
    <option id="Site5" value="Site5">Yverdon</option>
</select></label>


<!-- https://stackoverflow.com/questions/33913304/how-can-i-rotate-text-inside-table-td-not-on-table-th/33913896 -->


<div id="writing-mode">
    <table>
        <tr>
            <th style="width:20px"> </th>
            <th class="id">Pharmacie</th>
            <th>Lundi</th>
            <th class="id">Pharmacie</th>
            <th>Mardi</th>
            <th class="id">Pharmacie</th>
            <th>Mercredi</th>
            <th class="id">Pharmacie</th>
            <th>Jeudi</th>
            <th class="id">Pharmacie</th>
            <th>Vendredi</th>
            <th class="id">Pharmacie</th>
            <th>Samedi</th>
            <th class="id">Pharmacie</th>
            <th>Dimanche</th>
        </tr>
        <tr>
            <th>Morphine</th>
            <td contenteditable="true"></td>
            <td contenteditable="true"></td>
            <td contenteditable="true"></td>
            <td contenteditable="true"></td>
            <td contenteditable="true"></td>
            <td contenteditable="true"></td>
            <td contenteditable="true"></td>
            <td contenteditable="true"></td>
            <td contenteditable="true"></td>
            <td contenteditable="true"></td>
            <td contenteditable="true"></td>
            <td contenteditable="true"></td>
            <td contenteditable="true"></td>
            <td contenteditable="true"></td>
        </tr>
        <tr>
            <th>N°</th>
            <td contenteditable="true"></td>
            <td contenteditable="true"></td>
            <td contenteditable="true"></td>
            <td contenteditable="true"></td>
            <td contenteditable="true"></td>
            <td contenteditable="true"></td>
            <td contenteditable="true"></td>
            <td contenteditable="true"></td>
            <td contenteditable="true"></td>
            <td contenteditable="true"></td>
            <td contenteditable="true"></td>
            <td contenteditable="true"></td>
            <td contenteditable="true"></td>
            <td contenteditable="true"></td>
        </tr>
        <tr>
            <th>Fernyl</th>
            <td contenteditable="true"></td>
            <td contenteditable="true"></td>
            <td contenteditable="true"></td>
            <td contenteditable="true"></td>
            <td contenteditable="true"></td>
            <td contenteditable="true"></td>
            <td contenteditable="true"></td>
            <td contenteditable="true"></td>
            <td contenteditable="true"></td>
            <td contenteditable="true"></td>
            <td contenteditable="true"></td>
            <td contenteditable="true"></td>
            <td contenteditable="true"></td>
            <td contenteditable="true"></td>
        </tr>
        <tr>
            <th>TESTA</th>
            <td contenteditable="true"></td>
            <td contenteditable="true"></td>
            <td contenteditable="true"></td>
            <td contenteditable="true"></td>
            <td contenteditable="true"></td>
            <td contenteditable="true"></td>
            <td contenteditable="true"></td>
            <td contenteditable="true"></td>
            <td contenteditable="true"></td>
            <td contenteditable="true"></td>
            <td contenteditable="true"></td>
            <td contenteditable="true"></td>
            <td contenteditable="true"></td>
            <td contenteditable="true"></td>
        </tr>
    </table>

</div>





















    ?>