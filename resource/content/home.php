<?php
include("app/Controllers/Controller.php");

$controller = new Controller;



$sql = "SELECT * FROM product";

$GLOBALS["test"] = $controller->selectData($sql);



?>

<!-- Hero -->
<div class="hero">
            <div class="container">
                <div class="hero__inner">
                    <!-- Hero images -->
                    <!-- hero image 1 -->
                    <div class="hero__img-wrap">
                        <img
                            src="assets/images/iphone-1.jpg"
                            class="hero__img"
                            alt="Iphone-15-Pro_Max"
                        />
                        <img
                            src="assets/images/iphone-2.jpg"
                            class="hero__img"
                            alt="Iphone-15-Pro_Max"
                        />
                    </div>
                    <!-- hero image 2 -->
                    <div class="hero__img-wrap">
                        <img
                            src="assets/images/trending 1.jpg"
                            class="hero__img"
                            alt="Iphone-15-Pro_Max"
                        />
                        <img
                            src="assets/images/trending 2.jpg"
                            class="hero__img"
                            alt="Iphone-15-Pro_Max"
                        />
                    </div>
                    <!-- hero image 3 -->
                    <div class="hero__img-wrap">
                        <img
                            src="assets/images/trending 3.jpg"
                            class="hero__img"
                            alt="Iphone-15-Pro_Max"
                        />
                        <img
                            src="assets/images/trending 4.jpg"
                            class="hero__img"
                            alt="Iphone-15-Pro_Max"
                        />
                    </div>
                    <!-- Review previous -->
                    <button class="review__control review__control-left">
                        <svg
                            width="20"
                            height="20"
                            viewBox="0 0 20 20"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                d="M16.875 9.99854H3.125"
                                stroke="currentColor"
                                stroke-width="1.5"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            />
                            <path
                                d="M8.75 4.37354L3.125 9.99854L8.75 15.6235"
                                stroke="currentColor"
                                stroke-width="1.5"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            />
                        </svg>
                    </button>
                    <!-- Review next -->
                    <button class="review__control review__control-right">
                        <svg
                            width="20"
                            height="20"
                            viewBox="0 0 20 20"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                d="M3.125 9.99854H16.875"
                                stroke="currentColor"
                                stroke-width="1.5"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            />
                            <path
                                d="M11.25 4.37354L16.875 9.99854L11.25 15.6235"
                                stroke="currentColor"
                                stroke-width="1.5"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            />
                        </svg>
                    </button>
                </div>
                <!-- Review dots -->
                <div class="review__dots">
                    <!-- <div class="review__dot review__dot-active"></div>
                    <div class="review__dot"></div>
                    <div class="review__dot"></div>
                    <div class="review__dot"></div> -->
                </div>
            </div>
        </div>

        <main>
            <!-- Trending Now -->
            <section class="trending">
                <div class="container">
                    <h1 class="section__heading trending__heading">Trending Now</h1>
                    <div class="trending__list">
                        <!-- Trending__item 1 -->
                              <a class="trending__item" href="">
                              <figure class="trending__item-img-wrap">
                                  <img
                                      src=""
                                      alt=""
                                      class="trending__item-img"
                                  />
                              </figure>
                              <div class="trending__info">
                                  <h3 class="trending__item-name"></h3>
                                  <div class="trending__item-brand">
                                      <p class="trending__item-brand-name">Apple</p>
                                      <div class="stars">
                                          <p class="numbers__star">4.4</p>
                                          <div class="star">
                                              <svg
                                                  xmlns="http://www.w3.org/2000/svg"
                                                  width="24"
                                                  height="24"
                                                  viewBox="0 0 24 24"
                                                  fill="none"
                                              >
                                                  <path
                                                      fill-rule="evenodd"
                                                      clip-rule="evenodd"
                                                      d="M13.1043 4.17701L14.9317 7.82776C15.1108 8.18616 15.4565 8.43467 15.8573 8.49218L19.9453 9.08062C20.9554 9.22644 21.3573 10.4505 20.6263 11.1519L17.6702 13.9924C17.3797 14.2718 17.2474 14.6733 17.3162 15.0676L18.0138 19.0778C18.1856 20.0698 17.1298 20.8267 16.227 20.3574L12.5732 18.4627C12.215 18.2768 11.786 18.2768 11.4268 18.4627L7.773 20.3574C6.87023 20.8267 5.81439 20.0698 5.98724 19.0778L6.68385 15.0676C6.75257 14.6733 6.62033 14.2718 6.32982 13.9924L3.37368 11.1519C2.64272 10.4505 3.04464 9.22644 4.05466 9.08062L8.14265 8.49218C8.54354 8.43467 8.89028 8.18616 9.06937 7.82776L10.8957 4.17701C11.3477 3.27433 12.6523 3.27433 13.1043 4.17701Z"
                                                      fill="#FFB700"
                                                  />
                                              </svg>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </a>
                    </div>
                </div>
            </section>

            <!-- Product -->
            <section id="product" class="product">
                <div class="container">
                    <h1 class="section__heading hello">
                        Hello
                        <span class="section__heading name">Em Ngu</span>
                        Welcome to website
                    </h1>
                    <div class="product__list">
                        <!-- Product item 1 -->
<!--          
                          <article class="product__item">
                            <figure class="product__item-img-wrap">
                                <img
                                    src="./assets/images/iphone-1.pjg"]).'"
                                    class="product__item-img"
                                    alt=""
                                />
                            </figure>
                            <h3 class="product__name"></h3>
                            <div class="product__item-info-row">
                                <span class="product__price">2000$</span>
                                <div class="row-price-stars">
                                    <span class="product__num-star">5</span>
                                    <div class="product__star">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="24"
                                            height="24"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                        >
                                            <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M13.1043 4.17701L14.9317 7.82776C15.1108 8.18616 15.4565 8.43467 15.8573 8.49218L19.9453 9.08062C20.9554 9.22644 21.3573 10.4505 20.6263 11.1519L17.6702 13.9924C17.3797 14.2718 17.2474 14.6733 17.3162 15.0676L18.0138 19.0778C18.1856 20.0698 17.1298 20.8267 16.227 20.3574L12.5732 18.4627C12.215 18.2768 11.786 18.2768 11.4268 18.4627L7.773 20.3574C6.87023 20.8267 5.81439 20.0698 5.98724 19.0778L6.68385 15.0676C6.75257 14.6733 6.62033 14.2718 6.32982 13.9924L3.37368 11.1519C2.64272 10.4505 3.04464 9.22644 4.05466 9.08062L8.14265 8.49218C8.54354 8.43467 8.89028 8.18616 9.06937 7.82776L10.8957 4.17701C11.3477 3.27433 12.6523 3.27433 13.1043 4.17701Z"
                                                fill="#FFB700"
                                            />
                                        </svg>
                                    </div>
                                </div>
                                <button class="add-to-cart">Add to card</button>
                            </div>
                        </article> -->
                    </div>

                    <!-- pagination -->
                     <div class="pagination">
                        <ul class="pagination__product">
                            <!-- <li class="pagination__product-item">1</li>
                            <li class="pagination__product-item">2</li>
                            <li class="pagination__product-item">3</li>
                            <li class="pagination__product-item">4</li> -->
                        </ul>
                    </div>
                </div>
            </section>

            <!-- Create account -->
            <section class="create-acc">
                <div class="container">
                    <div class="create-acc__inner">
                        <div class="create-acc__info">
                            <h1 class="section__heading">Ready to Get Admit</h1>
                            <p class="create-acc__title">
                                Create your accout and enjoy the moment shopping
                            </p>
                        </div>
                        <button class="btn create-acc__btn">Get start</button>
                    </div>
                </div>
            </section>
</main>