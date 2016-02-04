<?php


function dbConnect(){

    mysql_connect('localhost','root','');
    mysql_select_db('news');
}


function sendQuery($query){

    dbConnect();
    $res = mysql_query($query);

    $arr = [];
    while( false !== $row = mysql_fetch_assoc($res))
    {
        $arr[] = $row;
    }
    return $arr;
}

function execQuery($query){

    dbConnect();
    mysql_query($query);
}