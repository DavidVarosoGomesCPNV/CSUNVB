<?php
/**
 * CSUNVB - logout.php
 *
 * Initial version by: Bastien.FARDEL
 * Initial version created on: 24.02.2020 11:53
 * Current version: 1.0
 */

/**
 * function erases $_SESSION "memory" to disconnect user from said session
 */
function logout()
{
    session_destroy();
    $_GET['action'] = "login";
    require_once "view/login.php";
}