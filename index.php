<?php
// Include all controllers
require "controler/adminControler.php";
require "controler/shiftEndControler.php";
require "controler/todoListControler.php";
require "controler/drugControler.php";

if(isset($_GET['action'])){
    $action = $_GET['action'];

// Test Push David

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
    adminHomePage();
}

?>
