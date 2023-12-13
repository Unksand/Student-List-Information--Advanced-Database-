<!DOCTYPE html>
<html lang="en" data-bs-theme ="dark">

<!-- SCRIPT AND BOOTSTRAP LOAD -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student list</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <!-- HEADER -->
    <div class="display-2 fw-bold text-center mb-3">Student list</div>
    <div class="divider my-2"></div>
    <div class="container-fluid">
        <!-- ADD STUDENT -->
        <div class="row">
            <a href="create.php" class="btn btn-primary"> Add Student</a>
        </div>
    
    </div>
    <div class="container-fluid justify-content-center align-items-center">
        <!-- TABLES -->
        <div class="bg-light p-4">
            <table class="table bg bg-light text-center">
                <thead>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Last Name</th>
                    <th>Address</th>
                    <th>Contact Number</th>
                    <th>Age</th>
                    <th>Action</th>

                </thead>
                <!-- DATABASE CONNECTION AND VIEWING RECORDS -->
                <tbody>
                   <?php
                   include('dbconnection.php');
                   $fetch =mysqli_query($con, "select * from student_info");
                   $row = mysqli_num_rows($fetch);
                   if($row > 0){
                    while($r = mysqli_fetch_array($fetch)){
                   ?>
                   <tr>
                        <td><?php echo $r['FirstName']?></td>
                        <td><?php echo $r['MiddleName']?></td>
                        <td><?php echo $r['LastName']?></td>
                        <td><?php echo $r['Address']?></td>
                        <td><?php echo $r['ContactNumber']?></td>
                        <td><?php echo $r['Age']?></td>
                        <td><a href="update.php?id=<?php echo $r['ID']?>" class = "btn btn-warning text-dark">Update</a> 
                        <a href="delete.php?id=<?php echo $r ['ID'] ?>" class ="btn btn-danger">Delete</a>
                        </td>

                   </tr>
                   <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>


    </div>
    <div class="divider my-2"></div>
</body>
</html>