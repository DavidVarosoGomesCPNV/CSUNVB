<?php
//ce fichier transmet les données du formulaires reçu et l'enregistre en json
include_once 'todoListModel.php';

$data = $_POST;

updateTodoListItem($data);
?>