<?php
/**
 * CSUNVB - todoList.php
 *
 * Modified by: Fardel Bastien
 * Initial modification made on: 06.02.2020 15:28
 * Current version: 1.0
 */

require_once 'model/todoListModel.php';
require_once 'index.php';

function todoListHomePage()
{
    {
        if (checkLoggedIn() == true) {
            require_once 'view/todoListHome.php';
        } else {
            require_once 'view/login.php';
        }
    }
}
