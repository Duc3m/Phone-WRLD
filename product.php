<?php
include("app/Controllers/View.php");

$view = new View;

$view->loadContent("include", "head");
$view->loadContent("content", "product");
$view->loadContent("include", "tail");
