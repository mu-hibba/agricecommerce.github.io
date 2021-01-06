<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agriculture Ecommerce</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">

    <!-- Owl carousel -->
    <link rel="stylesheet" href="./owlCarousel/dist/assets/owl.carousel.min.css"/>
    <link rel="stylesheet" href="./owlCarousel/dist/assets/owl.theme.default.min.css"/>

    <!-- font-awesome icons -->
    <link rel="stylesheet" href="./fontawesome/css/all.min.css"/>

    <!-- CSS file -->
    <link rel="stylesheet" href="style.css">

    <?php
    //Function PHP
    require ("functions.php");
    ?>

</head>
<body>
        <!-- header -->
        <header id="header">
            <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
                <p class="font-rale font-size-20 text-black-50">Welcome to our official website</p>
                
                    <div class="font-rale font-size-14">
                        <a href="registration/login.php" class="px-3 border-right border-left text-dark">Login</a>
                    </div>
            </div>

            <nav class="navbar navbar-expand-lg navbar-dark color-second-bg">
                <a class="navbar-brand" href="index.php">Agriculture Ecommerce</a>
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav m-auto font-rubik">
                        <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="about.php">About Us</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="contact-us.php">Contact Us</a>
                        </li>
                    </ul>

                        <form action="#" class="font-size-14 font-rale">
                                <a href="Cart.php" class="py-2 color-primary-bg">
                                <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                                <span class="px-3 py-2 text-dark bg-light"><?php echo count($product->getData('cart'));?></span>
                                </a>
                            </form>  
                </div>
              </nav>

        </header>

            <!-- main-site -->
    <main id="main-site">