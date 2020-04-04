<?php
/**
 * Auteur: Valentin Zingg
 * Date: Février 2020
 **/

function readTodoListItems()
{
    $data = file_get_contents("model/dataStorage/todos.json");
    $vraijson = json_decode($data,true);
    return $vraijson;
}


function searchTodoListItems($id)
{
    $items = readTodoListItems();
    // TODO: coder la recherche de l'item demandé
    return $items;
}

function updateTodoListItems($items)
{
    file_put_contents("model/dataStorage/items.json",json_encode($items));
}


function updateTodoListItem($item)
{
    $items = readTodoListItems();
    // TODO: retrouver l'item donnée en paramètre et le modifier dans le tableau $items
    saveTodoListItem($items);
}

function destroyTodoListItem($id)
{
    $items = readTodoListItems();
    // TODO: coder la recherche de l'item demandé et sa destruction dans le tableau
    saveTodoListItem($items);
}


function createTodoListItem($item)
{
    $items = readTodoListItems();
    // TODO: trouver un id libre pour le nouvel id et ajouter le nouvel item dans le tableau
    saveTodoListItem($items);
    return ($item); // Pour que l'appelant connaisse l'id qui a été donné
}


?>
