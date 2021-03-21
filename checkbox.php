<?php 
    include('connect.php');
    session_start();
    //if(isset($_GET['box'])){
        $id = $_SESSION['box'];
        //echo $id;
        //$comp = $id[strlen($id)-1];
        //echo $comp;
        //$len=strlen($id)-1;
        //$id= substr($id,0,$len);
        //echo $id;
        $comp = $_SESSION['comp'];
        $comp = 1-$comp;
        $sql = "UPDATE example SET completed='$comp' WHERE id='$id' ";
        mysqli_query($con,$sql);
        //echo $val;
        //header('Location: index.php');
    
    echo "fail";
?>