<?php

require __DIR__ . '/Models/article.php';


if(empty($_GET)){

}

if(isset($_GET['id'])){

    $news = Article_getOnce($_GET['id']);

}


include __DIR__ . '/Views/news.php';


