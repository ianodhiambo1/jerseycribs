<!DOCTYPE html>
<html lang="en">

<head>
    
    <!-- meta include -->
<?php include('inc/meta.php')?>
    <title>All Jerseys</title>
</head>

<body>
        <!-- header include -->
   <?php include('inc/header.php')?>
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
                                    <div class="seemore_bt"><a href="le_jersey.php?id=<?php echo $row['id']; ?>">See More</a></div>
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