<?php
/**
 * CSUNVB - newUserModel.php
 *
 * Initial version by: Bastien.FARDEL
 * Initial version created on: 05.03.2020 14:58
 * Current version: 1.0
 */

/**
 * function writes content in JSON file
 *
 * @param $changes
 * @return false|string
 */
function writeJSON($changes)
{
    $modifiedUsersArray = json_encode($changes);

    return $modifiedUsersArray;
}

/**
 * function reads from JSON file
 *
 * @return mixed
 */
function getJSON()
{
    //Gets the contents of the JSON file
    $usersDatabaseJSON = file_get_contents("model/dataStorage/users.json");
    // Convert to array
    $usersArray = json_decode($usersDatabaseJSON, true);

    return $usersArray;
}

/**
 * function opens database (json file) and changes selected user's password while removing the "new" attribute (setting it to "no")
 *
 * @param $password
 * @param $email
 */
function databasePasswordChange($password, $email)
{
    $usersArray = getJSON();

    foreach ($usersArray as $row) {
        if ($row['email'] == $email) {
            $row['password'] = $password;
            $row['new'] = 'no';
        }
    }

    $changes = $usersArray;
    $modifiedUsersArray = writeJSON($changes);

    file_put_contents("model/dataStorage/users.json", $modifiedUsersArray);
}