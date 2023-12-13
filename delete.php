<?php
    include('dbconnection.php');
    if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        $sql = mysqli_query($con , "DELETE FROM student_info WHERE ID = '$id' " );
        if($sql){
            echo "<script>alert('Record Deleted')</script>";
            echo "<script type= 'text/javascript'> document.location = 'view.php';</script>";
        }
            else {
                echo "<script>alert('there was an error')</script>";
            }
    }
?>