<?php
include("app/Controllers/View.php");

$view = new View;

$view->loadContent("include", "head");
$view->loadContent("content", "home");
$view->loadContent("include", "tail");
