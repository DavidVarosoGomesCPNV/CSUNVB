<?php
/**
 * CSUNVB - homeControler.php
 *
 * Initial version by: Bastien.FARDEL
 * Initial version created on: 24.02.2020 10:23
 * Current version: 1.0
 */

function homePage(){
    $_GET['action'] = "home";
    require "view/home.php";
}