<?php

include __DIR__ . '/Models/article.php';

$news = Article_get();

include __DIR__ . '/Views/index.php';