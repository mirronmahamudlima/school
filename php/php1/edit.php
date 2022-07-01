<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'mydb';


$conn = mysqli_connect($hostname, $username, $password, $dbname);

if ($conn->connect_error) {
    echo $conn->connect_error;
}



if (isset($_GET['deleteid'])) {
    $deleteid =  $_GET['deleteid'];

    $sql = "SELECT * FROM student WHERE $deleteidid";

     if(mysqli_query($conn, $sql) ==TRUE){
        header('location:view.php');
     }
    $data  = mysqli_fetch_assoc($query);


    $id          =  $data['id'];
    $firstname   =  $data['firstname'];
    $lastname    =  $data['lastname'];
    $email       =  $data['email'];

}


$conn->close();
?>
<html>

<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-sm-3">

            </div>
            <div class="col-sm-6 pt4 mt4 border border-primary">
                <h3>Registration Form</h3>
                <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                    Firstname :<br>
                    <input type="text" name="firstname" value="<?php echo $firstname ?>"><br><br>
                    Lastname :<br>
                    <input type="text" name="lastname" value="<?php echo $lastname ?>"><br><br>
                    Email :<br>
                    <input type="email" name="email" value="<?php $email ?>"><br><br>
                    <input type="submit" value="Edit" name="submit" class="btn btn-primary">

                </form>
            </div>
            <div class="col-sm-3">

            </div>

        </div>

    </div>

    
</body>

</html>