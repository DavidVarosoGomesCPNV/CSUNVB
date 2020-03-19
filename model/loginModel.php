<?php
/**
 * CSUNVB - loginModel.php
 *
 * Initial version by: Bastien.Fardel
 * Initial version created on: 06.02.2020 15:39
 * Current version: 1.0
 */

/**
 * This file will comunicate with the JSON(database) to do different actions
 */

/**
 * function reads JSON file and pours its content in an array
 *
 * @return mixed
 */
function readJSON()
{
    //Gets the contents of the JSON file
    $usersDatabaseJSON = file_get_contents("model/dataStorage/users.json");
    // Convert to array
    $usersArray = json_decode($usersDatabaseJSON, true);

    return $usersArray;
}

/**
 * function checks entries for corresponding email and password from array
 *
 * @param $email
 * @param $password
 * @return bool
 */
function databaseLoginCheck($email, $password)
{
    $usersArray = readJSON();
    $accountHash = null;

    //Checks each users in the JSON file
    foreach ($usersArray as $row) {
        if ($row['email'] === $email) { //If the email is correct, catch the hashed password and compare it with the given password
            $accountHash = $row['password'];
            if (password_verify($password, $accountHash)) {
                $_SESSION['email'] = $row['email'];
                $_SESSION['user'] = $row['user'];
                $_SESSION['sector'] = $row['sector'];
                $_SESSION['admin'] = $row['admin'];
                $_SESSION['new'] = $row['new'];

                break;
            }
        }
    }
    if (isset($_SESSION['user']) && isset($_SESSION['sector'])) { //If the user is connected, then return bool true otherwise return bool false
        return true;
    } else {
        return false;
    }
}