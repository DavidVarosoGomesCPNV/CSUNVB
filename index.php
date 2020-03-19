<?php
/**
 * CSUNVB - index.php
 *
 * Modified by:
 * Initial modification made on: 06.02.2020 15:05
 * Current version: 1.0
 */

session_start();

// Include all controllers
require "controler/adminControler.php";
require "controler/shiftEndControler.php";
require "controler/todoListControler.php";
require "controler/drugControler.php";
require "controler/loginControler.php";
require "controler/homeControler.php";
require "controler/logoutControler.php";
require "controler/newUserControler.php";

if (isset($_GET['action'])) {
    $action = $_GET['action'];

// Test Push David

    switch ($action) {
        case 'login':
            loginCheck();
            break;
        case 'detailedShiftEnd':
            detailedShiftEnd();
            break;
        case 'updateShiftEnd':
            updateShiftEnd();
            break;
        case 'logout':
            logout();
            break;
        case 'newUser':
            newUser();
            break;
        case 'home' :
            homePage();
            break;
        case 'admin':
            adminHomePage();
            break;
        case 'shiftendHome':
            shiftEndHomePage();
            break;
        case 'todolist':
            todoListHomePage();
            break;
        case 'drugs':
            drugHomePage();
            break;
        case 'addRemise':
            addRemise();
            break;
        case 'removeRemise':
            removeRemise( );
            break;
        default: // unknown action
            require_once 'view/login.php';
            break;
    }
} else {
    require_once 'view/login.php';
}
