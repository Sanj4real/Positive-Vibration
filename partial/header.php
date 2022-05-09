<!doctype html>
<html lang="en">

<head>
    <!--  meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap cdn CSS -->
    <link href="app/css/bootstrap.min.css" rel="stylesheet">

    <!-- line-awesome -->
    <link rel="stylesheet" href="app/css/line-awesome.min.css">
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.0-9/css/all.css"
        integrity="sha512-h7GJ1/B7ne4IeavUbcBsiAfjGg0HOg0jbLn0q3nm3iCZwDJSuRrW3xqsri7KMR2wEKOOQlf6zKCoS9jk0AtFPQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- font-family -->
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,300&display=swap"
        rel="stylesheet"> -->

    <!-- fancy-box -->
    <link rel="stylesheet" href="app/css/jquery.fancybox.min.css">

    <!-- slick-slider -->
    <link rel="stylesheet" type="text/css" href="app/css/slick.css" />
    <link rel="stylesheet" href="app/css/slick-theme.css" />

    <!-- css-link -->
    <link rel="stylesheet" href="app/css/main.css">

    <title>Positive Vibration</title>
</head>

<!-- <body> -->

<body>

    <!-- header -->
    <header id="header">
        <nav class="header__menu navbar navbar-expand-lg  ">
            <div class="container">
                <div class="header__logo">
                    <a href="index.php">
                        <img src="img/logo/logo.png" alt="">
                    </a>
                </div>


                <div class="header__user header--icon mobile-view">
                    <i class="las la-user"></i>
                    <a data-bs-toggle="modal" href="#exampleModalToggle" role="button">Register</a>
                    <span>/</span>
                    <a data-bs-toggle="modal" href="#exampleModalTogglesignIn" role="button"> Sign in</a>
                </div>
                <div class="header__cart header--icon mobile-view">
                    <i class="las la-shopping-cart"></i>
                    <span>3</span>
                </div>
                <div class="header__search header--icon mobile-view">
                    <i id="search-button" class="las la-search"></i>
                </div>
                <div id="btn-close" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="collapse navbar-collapse" id="main_nav">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a href="index.php">Home </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown">Pages </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="about.php"> About us</a></li>
                                <li><a class="dropdown-item" href="news.php"> News</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="event.php"> events </a>
                        </li>
                        <li class="nav-item">
                            <a href="contact.php"> Contact us </a>
                        </li>
                    </ul>
                </div>

                <div class="header__user header--icon desktop-view  ">
                    <i class="las la-user"></i>
                    <a href="register.php">Register</a>
                    <span>/</span>
                    <a href="login.php"> Sign in</a>
                </div>
                <div class="header__cart header--icon desktop-view ">
                    <a href="enroll.php">
                        <i class="las la-shopping-cart"></i>
                        <span>3</span>
                    </a>
                </div>
                <div class="header__search header--icon desktop-view ">
                    <i id="search-button" class="las la-search"></i>
                </div>
            </div>
        </nav>
    </header>
    <!-- /header -->
    <?php include('partial/modal.php') ?>

