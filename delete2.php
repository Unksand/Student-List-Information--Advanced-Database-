<?php




if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $sql = mysqli_query($con , "delete form student_info where ID= '$id'");
    if($sql) {
        echo "<script>alert('sucessfully updated record')</script>";
        echo "<script type= 'text/javascript'>document.location = 'view.php';</script>";
    }    else {
        echo "<script>alert('there was an error')</script>";
    }
}
?>