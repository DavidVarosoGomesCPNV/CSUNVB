<?php
/**
 * CSUNVB - homeControler.php
 *
 * Initial version by: Bastien.FARDEL
 * Initial version created on: 24.02.2020 10:23
 * Current version: 1.0
 */

require_once 'index.php';

function homePage()
{
    if (checkLoggedIn() == true) {
        require "view/home.php";
    } else {
        require_once 'view/login.php';
    }
}