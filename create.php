<!-- DATABASE CONNECTION TO CREATE -->
<?php
    include('dbconnection.php');
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $firstname = $_POST['firstname'];
        $middlename = $_POST['middlename'];
        $lastname = $_POST['lastname'];
        $address = $_POST['address'];
        $contactnumber = $_POST['contactnumber'];
        $email = $_POST['email'];
        $age = $_POST['age'];

        $query = mysqli_query($con,"insert into student_info (firstname, middlename, lastname, address, contactnumber, email, age) Value ('$firstname', '$middlename', '$lastname', '$address','$contactnumber', '$email', '$age')");

        if($query) {
            echo "<script>alert('sucessfully created record')</script>";
            echo "<script type= 'text/javascript'>document.location = 'view.php';</script>";
        }    else {
            echo "<script>alert('there was an error')</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme = "dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Create Table</title>
</head>

<body>
<div class="container-fluid">

    <div class="display-2 fw-bold text-center mb-3">Create Table</div>
</div>   

<div class="divider my-2"></div>


<div class="container-fluid justify-content-center align-items-center">
    <div class="bg-info rounded p-3 ">
        <form method="POST">
            <div class="mb-2">
                <label for="firstName" style="color: black;">First Name:</label>
                <input type="text" class="form-control" name="firstname" placeholder="First Name"/>
            </div>
            <div class="mb-2">
                <label for="middleName" style="color: black;">Middle Name:</label>
                <input type="text" class="form-control" name="middlename" placeholder="Middle Name"/>
            </div>
            <div class="mb-2">
                <label for="lastname" style="color: black;">Last Name:</label>
                <input type="text" class="form-control" name="lastname" placeholder="Last Name"/>
            </div>
            <div class="mb-2">
                <label for="Dddress" style="color: black;">Address:</label>
                <input type="text" class="form-control" name="address" placeholder="Address"/>
            </div>
            <div class="mb-2">
                <label for="Contactnumber" style="color: black;">Contact Number:</label>
                <input type="text" class="form-control" name="contactnumber" placeholder="Contact Number"/>
            </div>
            <div class="mb-2">
                <label for="mail" style="color: black;">Email:</label>
                <input type="text" class="form-control" name="email" placeholder="Email"/>
            </div>
            <div class="mb-2">
                <label for="aage" style="color: black;">Age:</label>
                <input type="text" class="form-control" name="age" placeholder="Age"/>
            </div>
            
            <button class="btn btn-success" type="submit">Create</button>
        </form>
    </div>
</div>
</body>
</html>