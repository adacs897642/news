<?php

/**
 * Created by PhpStorm.
 * User: Alberto
 * Date: 05.02.2016
 * Time: 16:13
 */
abstract class article
{
    public $title;
    public $text;
    public $author;

    abstract function add();
    abstract function remove();
    abstract function update();

}