<?php
ob_start();
$title = "CSU-NVB - Stupéfiants";

?>

<html lang="fr">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover {
            background-color: #111;
        }

    </style>
    <title></title>
</head>

<body>

<ul>
    <li><a class="active" href="?action=home">Home</a></li>
    <li><a href="?action=drugs">Stup</a></li>
    <li><a href="?action=drugArchives">Archives</a></li>
</ul>

<div>
    <a class="text-decoration-none card col-4 menutile pl-3 pr-3 pt-5 pb-5 m-1 align-items-center" href="?action=drugForm">Feuille en cours</a>
</div>


</body>
</html>




<?php
$content = ob_get_clean();
require "gabarit.php";

?>
