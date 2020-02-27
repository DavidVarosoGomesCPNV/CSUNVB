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

    //Checks each users in the JSON file
    foreach ($usersArray as $row) {
        if ($row["email"] === $email && $row["password"] === $password) { //If the email and password are correct, breaks out of the foreach and puts the name and sector of the user in the SESSION Array.
            $_SESSION['user'] = $row["user"];
            $_SESSION['sector'] = $row["sector"];
            return true;

            break;
        }
    }
}