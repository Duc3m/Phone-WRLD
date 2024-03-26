<?php
    header('Access-Control-Allow-Origin: *');
    header('Content-type: application/json');
    session_start();
    include_once("../Controllers/Controller.php");

    $controller = new controller;

    $sql = "SELECT name FROM category";

    $result = $controller->selectData($sql);

    $res = array();

    if($result->num_rows > 0) {
        while($row = $result->fetch_array()) {
            array_push($res, $row);
        }
    }
    echo json_encode($res);