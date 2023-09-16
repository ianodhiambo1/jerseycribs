<?php

$jId = $_GET['id'];

include 'database.php';
$PHONE_NUMBER = "+254112465832";

// Fetch jersey data from the database
$sql = "SELECT * FROM jerseys WHERE id='" . $jId . "'";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
    echo $row['id'];
    echo $row['name'];


    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <!-- meta include -->
        <?php include('inc/meta.php') ?>

        <title>Document</title>
    </head>

    <body>
        <?php include 'inc/header.php' ?>
        <div class="wrap">
            <div class="title">Name</div>
            <div class="tshirt_img"><img src="images/psg-player.png" alt="Image"></div>

            
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
            <div class="orderBtn" >
                <img src="images/wa.svg" alt="WA" style="border: 1px solid black;" >
                <h4 class="orderText">ORDER NOW</h4>
            </div>

        </div>

    <script>
        var panel = document.getElementById("adjdiv");
        var panel2 = document.getElementById("adjdiv2");
        var panel3 = document.getElementById("adjdiv3");
        function desc(){
            panel2.style.display="none";
            panel3.style.display="none";
            panel.style.display="block";
        }
        function delivery(){
            panel.style.display="none";
            panel3.style.display="none";
            panel2.style.display="block";
            
            
        }
        function review(){
            panel.style.display="none";
            panel2.style.display="none";
            panel3.style.display="block";

        }
    </script>

    </body>

    </html>























<?php
}
;
$conn->close();
?>