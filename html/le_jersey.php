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























<?php 
};
$conn->close();
?>