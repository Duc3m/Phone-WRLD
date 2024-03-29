
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- Favicon -->
        <link
            rel="apple-touch-icon"
            sizes="57x57"
            href="assets/Favicon/apple-icon-57x57.png"
        />
        <link
            rel="apple-touch-icon"
            sizes="60x60"
            href="assets/Favicon/apple-icon-60x60.png"
        />
        <link
            rel="apple-touch-icon"
            sizes="72x72"
            href="assets/Favicon/apple-icon-72x72.png"
        />
        <link
            rel="apple-touch-icon"
            sizes="76x76"
            href="assets/Favicon/apple-icon-76x76.png"
        />
        <link
            rel="apple-touch-icon"
            sizes="114x114"
            href="assets/Favicon/apple-icon-114x114.png"
        />
        <link
            rel="apple-touch-icon"
            sizes="120x120"
            href="assets/Favicon/apple-icon-120x120.png"
        />
        <link
            rel="apple-touch-icon"
            sizes="144x144"
            href="assets/Favicon/apple-icon-144x144.png"
        />
        <link
            rel="apple-touch-icon"
            sizes="152x152"
            href="assets/Favicon/apple-icon-152x152.png"
        />
        <link
            rel="apple-touch-icon"
            sizes="180x180"
            href="assets/Favicon/apple-icon-180x180.png"
        />
        <link
            rel="icon"
            type="image/png"
            sizes="192x192"
            href="assets/Favicon/android-icon-192x192.png"
        />
        <link
            rel="icon"
            type="image/png"
            sizes="32x32"
            href="assets/Favicon/favicon-32x32.png"
        />
        <link
            rel="icon"
            type="image/png"
            sizes="96x96"
            href="assets/Favicon/favicon-96x96.png"
        />
        <link
            rel="icon"
            type="image/png"
            sizes="16x16"
            href="assets/Favicon/favicon-16x16.png"
        />
        <link rel="manifest" href="assets/Favicon/manifest.json" />
        <meta name="msapplication-TileColor" content="#ffffff" />
        <meta
            name="msapplication-TileImage"
            content="assets/Favicon/ms-icon-144x144.png"
        />
        <meta name="theme-color" content="#ffffff" />

        <!--Embed Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@400;700&family=Poppins:wght@400;500;600;700&display=swap"
            rel="stylesheet"
        />

        <!-- Font icon -->
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
            integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <!-- Reset -->
        <link rel="stylesheet" href="assets/css/reset.css" />

        <!-- Styles -->
        <link rel="stylesheet" href="assets/css/style.css" />
        <title>Phone_WRLD</title>
    </head>

<header>
            <div class="container">
                <div class="header__inner">
                    <!-- Logo -->
                    <a href="index.php">
                        <img class="logo" src="assets/icon/Logo.svg" alt="" />
                    </a>

                    <!-- Navbar -->
                    <nav class="navbar">
                        <ul class="navbar__list">
                            <li class="navbar__item">
                                <a href="index.php" class="navbar__link">Products</a>
                            </li>
                            <li class="navbar__item navbar__item-category">
                                <a href="" class="navbar__link" id="category-reset">Category</a>
                                <img
                                    src="assets/icon/header-arrown.svg"
                                    alt=""
                                    class="header-arrown"
                                />
                                <ul class="navbar__link-item">
                                    <!-- <li class="navbar__link-parent">
                                        <span class="navbar__link-children">Apple</span>
                                    </li>
                                    <li class="navbar__link-parent">
                                        <span class="navbar__link-children">SamSung</span>
                                    </li>
                                    <li class="navbar__link-parent">
                                        <span class="navbar__link-children">Xiaomi</span>
                                    </li>
                                    <li class="navbar__link-parent">
                                        <span class="navbar__link-children">Oppo</span>
                                    </li> -->
                                </ul>
                            </li>
                            <li class="navbar__item">
                                <a href="" class="navbar__link">About</a>
                            </li>
                            <li class="navbar__item">
                                <a href="" class="navbar__link">Contact us</a>
                            </li>
                        </ul>
                    </nav>

                    <!-- Header search -->
                    <form class="search__form">
                        <input
                            type="text"
                            class="search__form-input"
                            placeholder="Search here"
                        />
                        <!-- Clear button -->
                        <button type="reset" class="search__form-close">
                            <i class="fa-solid fa-circle-xmark"></i>
                        </button>
                        <!-- Submit button -->
                        <button class="search__form-btn">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </form>

                    <!-- Header action -->
                    <div class="header__action">
                        <div class="header__action-item header__action-buy">
                            <i class="fa-solid fa-cart-shopping"></i>
                            <span class="header__action-buy-price">$00.00</span>
                        </div>
                        <div hidden class="header__action-item header__action-sign-in">
                            <i class="fa-solid fa-right-to-bracket"></i>
                        </div>
                        <div class="header__action-item header__action-sign-up">
                           <a href="login.php"><i class="fa-solid fa-user-secret"></i></a>
                        </div>
                    </div>
                </div>
            </div>
</header>