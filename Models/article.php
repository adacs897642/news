<?php

require_once __DIR__ . '/../functions/myDB.php';



function Article_get(){

    $newDB = new myDB('news');

    $query = "SELECT id, title, annotation, time FROM article ORDER BY TIME DESC";

    return $newDB->select($query);
}

function Article_getOnce($id){

    $newDB = new myDB('news');

    $query = "SELECT title, annotation, time, text FROM article WHERE id=$id";

    return $newDB->select($query);
}
