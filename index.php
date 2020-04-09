<?php
/**
 * Ver. 1.0
 * Auteurs: Valentin Zingg & Gwenael West
 * Date: Février 2020
 **/

// Include all controllers
require "controler/adminControler.php";
require "controler/shiftEndControler.php";
require "controler/todoListControler.php";
require "controler/drugControler.php";

if(isset($_GET['action'])){
    $action = $_GET['action'];

    switch ($action)
    {
        case 'admin':
            adminHomePage();
            break;
        case 'shiftend':
            shiftEndHomePage();
            break;
        case 'todolist':
            todoListHomePage();
            break;
        case 'drugs':
            drugHomePage();
            break;

        default: // unknown action
            require_once 'view/home.php';
            break;
    }
}
else{
    require_once 'view/home.php';
}

?>
