<?php
/**
 * CSUNVB - test.php
 *
 * Initial version by: Bastien.FARDEL
 * Initial version created on: 05.03.2020 15:04
 * Current version: 1.0
 */

$hashedPassword = password_hash("1234", PASSWORD_DEFAULT);

echo $hashedPassword;