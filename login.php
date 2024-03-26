<?php
include("app/Controllers/View.php");

$view = new View;

$view->loadContent("include", "head");
$view->loadContent("content", "login");
// $view->loadContent("include", "tail");