<?php 
    include 'connection.php';
    session_start();
    include 'header.php';
?>
    
    <div class="container">
        <?php 
        if(!(isset($_SESSION['userid']))){
            echo "<h1>Welcome Guest </h1>"; 
        } else{
            $userid = $_SESSION['userid'];
            $sql = "SELECT * FROM `user` WHERE id = '$userid'";
            $result = $con->query($sql);
            $row = $result->fetch_assoc();
            $name = $row['name'];
            echo "<h1>Welcome $name </h1>";
        }
        ?>
    </div>


</body>
</html>