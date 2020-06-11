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
 * @param $usersArray
 * @return false|string
 */
function writeJSON($usersArray)
{
    $modifiedUsersArray = json_encode($usersArray);

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
 */
function databasePasswordChange()
{
    $usersArray = getJSON();
    $counter = 0;

    foreach ($usersArray as $row) {
        if ($row["email"] == $_SESSION['email']) {
            $row["password"] = $_SESSION['newPsw'];
            $row["new"] = "no";
        }
        $counter++;
    }

    $modifiedUsersArray = writeJSON($usersArray);

    var_dump($modifiedUsersArray);

    file_put_contents("model/dataStorage/users.json", $modifiedUsersArray);
}
