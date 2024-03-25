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

<!-- Product Detail -->
<div class="container">
    <div class="product__page">
        <div class="product__page__top">
            <div class="product__page__images">
                <div class="product__page__image__slider">
                    
                </div>
                <div class="product__page__image__display">
                    <img src="./assets/images/iphone-15-1-1.jpg" alt="">
                </div>
            </div>

            <div class="product__page__top__right">
                <div class="product__page__information">
                    <h1 class="product__page__information__name">Điện thoại iPhone 15 128GB</h1>
                    <div class="product__page__information__rating">
                        <div class="product__page__information__stars">
                            <img src="./assets/icon/star-black.svg" alt="">
                            <img src="./assets/icon/star-black.svg" alt="">
                            <img src="./assets/icon/star-black.svg" alt="">
                            <img src="./assets/icon/star-black.svg" alt="">
                            <img src="./assets/icon/star-white.svg" alt="">
                        </div>
                        <p>4 sao</p>
                        <p>69 đánh giá</p>
                    </div>

                    <h2 class="product__page__information__price">20.690.000đ</h2>

                    <div class="product__page__information__option">
                        <h3>Chọn phiên bản</h3>
                        <div class="product__page__information__option__panel">
                            <div class="product__page__information__option__picker">128GB</div>
                            <div class="product__page__information__option__picker">256GB</div>
                            <div class="product__page__information__option__picker">512GB</div>
                        </div>
                    </div>

                    <div class="product__page__information__color">
                        <h3>Chọn màu</h3>
                        <div class="product__page__information__color__panel">
                            <div class="product__page__information__color__picker">Xanh lá nhạt</div>
                            <div class="product__page__information__color__picker">Xanh dương nhạt</div>
                            <div class="product__page__information__color__picker">Hồng nhạt</div>
                            <div class="product__page__information__color__picker">Vàng nhạt</div>
                            <div class="product__page__information__color__picker">Đen</div>
                        </div>
                    </div>

                    <div class="product__page__information__button__panel">
                        <button class="product__page__information__button__addToCart">Thêm vào giỏ hàng</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="product__page__detail">
            <div class="product__page__detail__nav">
                <div class="product__page__detail__nav__option detail__nav__option__selected">
                    <p>Chi tiết sản phẩm</p>
                </div>
                <div class="product__page__detail__nav__option">
                    <p>Đánh giá sản phẩm</p>
                </div>
            </div>
            <div class="product__page__detail__content">
                quăng description vô đây nè thằng ngu
            </div>
        </div>
    </div>
</div>