<?php
/**
 * CSUNVB - drugControler.php
 *
 * Modified by: Fardel Bastien
 * Initial modification made on: 06.02.2020 15:05
 * Current version: 1.0
 */

require_once 'model/drugModel.php';
require_once 'index.php';

function drugHomePage()
{
    {
        {
            if (checkLoggedIn() == true) {
                require_once 'view/drugHome.php';
            } else {
                require_once 'view/login.php';
            }
        }
    }
}
