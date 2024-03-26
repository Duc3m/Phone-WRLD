<?php
include("app/Controllers/View.php");

$view = new View;

$view->loadContent("include", "head");
$view->loadContent("content", "register");
// $view->loadContent("include", "tail");