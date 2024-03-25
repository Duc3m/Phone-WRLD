<?php
    header('Access-Control-Allow-Origin: *');
    header('Content-type: application/json');
    session_start();
    include_once("../Controllers/Controller.php");

    $controller = new controller;
    $id;
    $detailId;
    if(isset($_GET["id"])){
        $id = $_GET["id"];
    }

    if(isset($_GET["detail_id"])){
        $detailId = $_GET["detail_id"];
    }else{
        $detailId = 1;
    }

    $getProductDetailSQL = "SELECT detail_id,name,detail_name,price,description 
    FROM product,product_detail 
    WHERE id = product_id and product.deleted = 0 and product_detail.deleted = 0 and detail_id = ". $detailId ." and id = ".$id;

    $result = $controller->selectData($getProductDetailSQL);

    $res;

    if ($result->num_rows > 0) {
        // output data
            $row = $result->fetch_assoc();
            $res["detail_id"] = $row["detail_id"];
            $res["name"] = $row["name"];
            $res["detail_name"] = $row["detail_name"];
            $res["price"] = $row["price"];
            $res["description"] = $row["description"];
    }

    $result->free_result();

    $getDetailListSQL = "SELECT detail_id,detail_name 
    FROM product,product_detail 
    WHERE id = product_id and id = ".$id;

    $result = $controller->selectData($getDetailListSQL);
    $detailList = Array();

    if($result->num_rows > 0) {
        while($row = $result->fetch_array()) {
            $element["detail_id"] = $row["detail_id"];
            $element["detail_name"] = $row["detail_name"];
            array_push($detailList, $element);
        }
    }

    $result->free_result();

    $getColorListSQL = "SELECT product_color.id,product_color.name 
    FROM product,product_color 
    WHERE product.id = product_color.product_id and product.id = ".$id;

    $result = $controller->selectData($getColorListSQL);

    $colorList = Array();

    if($result->num_rows > 0) {
        while($row = $result->fetch_array()) {
            $ele["color_id"] = $row["id"];
            $ele["name"] = $row["name"];
            array_push($colorList, $ele);
        }
    }

    $result->free_result();

    $res["detail_list"] = $detailList;
    $res["color_list"] = $colorList;

    // echo json_encode($colorList);
    echo json_encode($res);