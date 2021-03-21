<?php
    include('connect.php');
    session_start();
    if(isset($_GET['delete'])){
        $user = $_SESSION['name'];
        $id = $_GET['delete'];
        $sql = "DELETE FROM $user WHERE id='$id' ";
        mysqli_query($con,$sql);
        echo "fial";
        header('Location: user.php');
    }
?>