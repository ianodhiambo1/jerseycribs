<?php 

    $jId=$_GET['id'];

    include 'database.php';
         $PHONE_NUMBER = "+254112465832";

        // Fetch jersey data from the database
        $sql = "SELECT * FROM jerseys WHERE id='".$jId."'";
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {
            echo $row['id'];
            echo $row['name'];
        

?>

<!DOCTYPE html>
<html lang="en">

<head>
        <!-- meta include -->
    <?php include('inc/meta.php')?>
    
    <title>Document</title>
</head>
<body>
    <?php include 'inc/header.php'  ?>
    <div class="title">Name</div>
    <div class="jerseyPicture"></div>

    <div class="divbtn">
        <ul class="divBTN">
            <li><button onclick=""></button>Description</li>
            <li><button onclick=""></button>Delivery Info</li>
            <li><button onclick=""></button>Reviews</li>
        </ul>
    </div>
    <div class="adjdiv">

    </div>
    <div class="orderBtn">
        <i class="fa fa-whatsapp"></i>
        <h4>ORDER NOW</h4>
    </div>


</body>
</html>























<?php 
};
$conn->close();
?>