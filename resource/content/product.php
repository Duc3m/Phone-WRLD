<?php
include("app/Controllers/Controller.php");

$controller = new Controller;

//Get id from query string
if(isset($_GET["product_id"]) && isset($_GET["variant"])) {
    $productId = $_GET["product_id"];
    $variantId = $_GET["variant"];
}

//SELECT SQL Query
$selectProduct = "SELECT * FROM product WHERE id='".$productId."'";
$selectVariant = "SELECT * FROM product_detail WHERE product_id='".$productId."' AND detail_id='".$variantId."'";
$selectAllVariant = "SELECT * FROM product_detail WHERE product_id='".$productId."' ";

//Select and fetch from database 
$GLOBALS["selectedVariant"] = $controller->selectData($selectVariant);
$GLOBALS["selectedProduct"] = $controller->selectData($selectProduct);

$variant = $GLOBALS["selectedVariant"]->fetch_assoc();
$product = $GLOBALS["selectedProduct"]->fetch_assoc();
$allVariant = $controller->selectData($selectAllVariant)


?>

<h1 class="test__product__name">
    <?php
        echo $product["name"].' '.$variant["detail_name"];
    ?>
</h1>
    <?php
        foreach($allVariant as $variants) {
            echo '<a href="product.php?product_id='.$variants["product_id"].'&variant='.$variants["detail_id"].'" class="test__product__variant">'.$variants["detail_name"].'</a>
                ';
        };
    ?>
    <p class="test__product__price">
        <?php
            echo $variant["price"];
        ?>
    </p>