<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>All Jerseys</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <!-- font awesome -->
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--  -->
    <!-- owl stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:400,700&display=swap&subset=latin-ext"
        rel="stylesheet">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesoeet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
    <!-- <style>
        * {
            border: solid black 1px;
        }
    </style> -->
</head>

<body>
    <!-- banner bg main start -->
    <div class="banner_bg_main" style="background:#262626">
        <!-- logo section start -->
        <div class="logo_section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="logo"><a href="index.php"><img style="width:180px;"
                                    src="images/logo-jersey.png"></a></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- logo section end -->
        <!-- header section start -->
        <div class="header_section">
            <div class="container">
                <div class="containt_main">
                    <div id="mySidenav" class="sidenav">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        <a href="index.html">Home</a>
                        <a href="allJerseys.html">All Jerseys</a>
                        <a href="contact.html">Contact Us</a>
                        <a href="about.html">About Us</a>
                    </div>
                    <span class="toggle_icon" onclick="openNav()"><img style="width: 40px ;"
                            src="images/toggle-icon.png"></span>

                    <div class="main">
                        <!-- Search Bar -->
                        <div class="input-group">

                            <input type="text" class="form-control" placeholder="Search for jersey">
                            <div class="input-group-append">
                                <button class="btn btn-secondary" type="button"
                                    style="background-color: #f26522; border-color:#f26522 ">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="header_box">
                        <div class="lang_box ">
                            <a href="#" title="Language" class="nav-link" data-toggle="dropdown" aria-expanded="true">
                                <img src="images/flag-uk.png" alt="flag" class="mr-2 " title="United Kingdom"> English
                                <i class="fa fa-angle-down ml-2" aria-hidden="true"></i>
                            </a>
                            <div class="dropdown-menu ">
                                <a href="#" class="dropdown-item">
                                    <img src="images/flag-france.png" class="mr-2" alt="flag">
                                    French
                                </a>
                            </div>
                        </div>
                        <div class="login_menu">
                            <ul>
                                <li><a href="#">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                        <span class="padding_10">Cart</span></a>
                                </li>
                                <li><a href="#">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        <span class="padding_10">User</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header section end -->
    </div>
    <!-- banner bg main end -->
    <!-- fashion section start -->
    <div class="fashion_section">
        <?php
        include 'database.php';
         $PHONE_NUMBER = "+254112465832";

        // Fetch jersey data from the database
        $sql = "SELECT * FROM jerseys";
        $result = $conn->query($sql);
        ?>
    
        <div class="container">
            <h1 class="fashion_taital">Player Jersey</h1>
            <div class="fashion_section_2">
                <div class="row">
                    <?php while ($row = $result->fetch_assoc()) { ?>
                        <div class="col-lg-4 col-sm-4">
                            <div class="box_main">
                                <h4 class="shirt_text">
                                    <?php echo $row['name']; ?>
                                </h4>
                                <p class="price_text">Price <span style="color: #262626;">KES
                                        <?php echo $row['price']; ?>
                                    </span></p>
                                <div class="tshirt_img"><img src="images/<?php echo $row['image_url']; ?>"></div>
                                <div class="btn_main">
                                    <div class="buy_bt"><a href="https://wa.me/<?php echo $PHONE_NUMBER?>?text=Hi%2C%20I'm%20interested%20in%20the%20jersey%20for%20<?php echo $row['name'];?>%20you're%20selling.%20Can%20you%20provide%20more%20information%3F">Buy Now</a></div>
                                    <div class="seemore_bt"><a href="#">See More</a></div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    
        <?php
        // Close the database connection
        $conn->close();
        ?>
                


                
        
    </div>
    <!-- fashion section end -->
    <!-- footer include -->
    <?php include('inc/footer.php')?>
</body>

</html>