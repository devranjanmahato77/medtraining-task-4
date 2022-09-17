<?php
    $server ="localhost";
    $username = "user1";
    $password = "Dev@12345";
    $dbname = "test";

    $con = mysqli_connect($server, $username, $password, $dbname);

    if(isset($_POST['submit'])){
        if(!empty($_POST['name']) && !empty($_POST['email'])){
            $name = $_POST['name'];
            $email = $_POST['email'];

            $query = "INSERT INTO testingdb(name,email) VALUES('$name','$email')";
            
            $run = mysqli_query($con,$query) or die(mysqli_error());

            if($run){
                echo "data submitted";
            }
            else{
                echo "not submitted!!!";
            }
        }
        else{
            echo "all field required";
        }
    }


?>
