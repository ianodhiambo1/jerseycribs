<?php

$jId = $_GET['id'];

include 'database.php';
$PHONE_NUMBER = "+254112465832";

// Fetch jersey data from the database
$sql = "SELECT * FROM jerseys WHERE id='" . $jId . "'";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {



    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <!-- meta include -->
        <?php include('inc/meta.php') ?>

        <title><?php echo $row['name']." Jersey "?></title>
    </head>

    <body>
        <?php include 'inc/header.php' ?>
        <div class="wrap">
            <div class="img_title">

                <div class="title"><?php echo $row['name']." Jersey "?></div>
                <div class="tshirt_img"  ><img src="images/<?php echo $row['image_url']?>" alt="<?php echo $row['name']." Jersey "?>"></div>
            </div>

            <div class="details_img">

                <ul class="divBTN">
                    <li><button onclick="desc()">Description</button></li>
                    <li><button onclick="delivery()">Delivery Info</button></li>
                    <li><button onclick="review()">Reviews</button></li>
                </ul>
    
                <div class="adjdiv" id="adjdiv">
                    <p>Description</p>
                </div>
                <div class="adjdiv" id="adjdiv2">
                    <p>Delivery info</p>
                </div>
                <div class="adjdiv" id="adjdiv3">
                    <p>Review</p>
                </div>
                <a href=" ">
                    <button class="btn mr-2 mb-2 btn-icon btn-primary" type="button" 
                    style=" width:100%;" >
                        <span class="btn-inner-icon"><i class="fa fa-whatsapp"></i></span>
                        <span class="btn-inner-text">ORDER NOW</span>
                    </button>
            </a>
            </div>

        </div>

        <script>
            var panel = document.getElementById("adjdiv");
            var panel2 = document.getElementById("adjdiv2");
            var panel3 = document.getElementById("adjdiv3");
            function desc() {
                panel2.style.display = "none";
                panel3.style.display = "none";
                panel.style.display = "block";
            }
            function delivery() {
                panel.style.display = "none";
                panel3.style.display = "none";
                panel2.style.display = "block";


            }
            function review() {
                panel.style.display = "none";
                panel2.style.display = "none";
                panel3.style.display = "block";

            }
        </script>

    </body>

    </html>























    <?php
}
;
$conn->close();
?>