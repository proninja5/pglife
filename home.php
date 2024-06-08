<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- linking our css(common) through php -->
    <?php
        include "includes/head_links.php";
    ?>
    <link href="/pglife/css/home.css" rel="stylesheet" />

</head>
<body>
    <!-- header file will be included through header.php -->
    <?php
        include "includes/header.php";
    ?>

    <div id="loading"></div>

    <div class="banner-container">
        <h2 class="white pb-3">Happiness per Square Foot</h2>

        <form id="search-form" method="get" action="property_list.php"><!-- adding method and action to the form-->
            <div class="input-group city-search">
                <input type="text" class="form-control input-city" id="city"   name="city" placeholder="Enter your city to Search for PGs">

                <div class="input-group-append">
                    <button class="btn btn-secondary" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>

    <div class="page-container">
        <h1 class="city-heading">Major Cities</h1>

        <div class="row">

            <div class="city-card-container col-md">
                <a href="property_list.php?city=Mumbai">
                    <div class="city-card rounded-circle">
                        <img class="city-img" src="/pglife/img/mumbai.png">
                    </div>
                </a>
            </div>

            <div class="city-card-container col-md">
                <a href="property_list.php?city=Delhi">
                    <div class="city-card rounded-circle">
                        <img class="city-img" src="/pglife/img/delhi.png">
                    </div>
                </a>
            </div>

            <div class="city-card-container col-md">
                <a href="property_list.php?city=Bengaluru">
                    <div class="city-card rounded-circle">
                        <img class="city-img" src="/pglife/img/bangalore.png">
                    </div>
                </a>
            </div>

            <div class="city-card-container col-md">
                <a href="property_list.php?city=Hyderabad">
                    <div class="city-card rounded-circle">
                        <img class="city-img" src="/pglife/img/hyderabad.png">
                    </div>
                </a>
            </div>

        </div>

    </div>
    
    <!-- Signup Modal -->
    <?php
        include "includes/signup-modal.php";
    ?>

    <!-- Login Modal -->
    <?php
        include "includes/login-modal.php";
    ?>
    
    <!-- footer file will be included from footer.php -->
    <?php
        include "includes/footer.php";
    ?>

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>