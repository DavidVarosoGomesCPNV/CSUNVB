<?php
// Include all controllers
require "controler/adminControler.php";
require "controler/shiftEndControler.php";
require "controler/todoListControler.php";
require "controler/drugControler.php";

$action = @$_GET['action'];


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
    case 'drugForm':
        drugFromPage();
        break;
    case 'cloturerDay':
        cloturerDay();
        break;
    case 'drugArchives':
        drugArchives();
        break;
    default: // unknown action
        require_once 'view/home.php';
        break;
}

?>
