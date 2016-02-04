<?php

require __DIR__ . '/../functions/functions.php';

function Article_get(){

    $query = "SELECT id, title, annotation, time FROM article ORDER BY TIME DESC";

    return sendQuery($query);
}

function Article_getOnce($id){

    $query = "SELECT title, annotation, time, text FROM article WHERE id=$id";

    return sendQuery($query);
}
