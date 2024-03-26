<?php
    header('Access-Control-Allow-Origin: *');
    header('Content-type: application/json');
    session_start();
    include_once("../Controllers/Controller.php");

    $controller = new Controller;
    $pageNum;


    if(isset($_GET["page"])){
        $pageNum = $_GET["page"];
    }else{
        $pageNum = 1;
    }
    if(isset($_GET["itemperpage"])){
        $pageNum = $_GET["itemperpage"];
    }else{
        $itemsPerPage=8;
    }
    if(isset($_GET["key"])){
        $key = $_GET["key"];
    }else{
        $key = "";
    }
    // Tổng SP trong 1 trang
    $countSql="SELECT count(*) as total FROM (SELECT id FROM product, product_detail WHERE product.deleted=0 
                                            and id=product_detail.product_id and detail_id=1 and product.name LIKE N'%$key%') t ";
    $countResult=$controller->selectData($countSql);
    $row=$countResult->fetch_assoc();
    $totalPages=ceil($row['total']/ $itemsPerPage); // Tổng Pages


    $sql = "SELECT id,detail_id,name,detail_name,price,thumbnail FROM 
        (SELECT id,detail_id,name,price,detail_name,thumbnail,ROW_NUMBER() over(PARTITION BY detail_id) as row_num 
            FROM product,product_detail WHERE product.deleted= 0 and id=product_detail.product_id and detail_id=1 and name LIKE N'%$key%') t 
                WHERE row_num BETWEEN ".(($pageNum - 1)*$itemsPerPage +1)." AND ".($pageNum*$itemsPerPage);

// echo $sql;

    $result = $controller->selectData($sql);
    $res = Array();
    // $res = array_map('utf8_encode', $res);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_array()) {
            $element["id"] = $row["id"];
            $element["detail_id"] = $row["detail_id"];
            $element["name"] = $row["name"];
            $element["detail_name"] = $row["detail_name"];
            $element["price"] = $row["price"];
            $element["thumbnail"] = base64_encode($row["thumbnail"]);
            // echo json_encode($element);
            array_push( $res, $element);            
        }
      } 

    // Thêm totalPages vào mảng
    $res['totalPages']=$totalPages;

    echo json_encode($res);      

