<?php
/**
 * Ce cartouche vaudra quelques points en moins au groupe qui osera le laisser là tel quel ...
 * Auteur: X. Carrel
 * Date: Février 2020
 **/

require_once 'model/drugModel.php';

function drugHomePage()
{
    require_once 'view/drugHome.php';
}

function drugFromPage(){
    cloturer();
    require_once 'view/drugForm.php';
}

function cloturerDay(){
    cloturer();
    require "view/drugHome.php";
}

function drugArchives(){
    require "view/drugArchives.php";
}
