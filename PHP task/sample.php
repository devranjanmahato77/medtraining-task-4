<?php
    $server ="localhost";
    $username = "user1";
    $password = "Dev@12345";
    $dbname = "idcard";

    $con = mysqli_connect($server, $username, $password, $dbname);

    if(!$con){
        die("Connection failed" . mysqli_connect_error());
    }
    else{
    echo "Successfully connect to db\n";
    }
    




        if(isset($_POST['submit'])){
            if(!empty($_POST['fullname']) && !empty($_POST['email'])){
                // $name = $_POST['name'];
                // $email = $_POST['email'];

                $fullname = $_POST['fullname'];
                $regno = $_POST['regno'];
                $college = $_POST['college'];
                $email = $_POST['email'];
                $branch = $_POST['branch'];
                $mobile = $_POST['mobile'];
                $dob = $_POST['dob'];
                $address = $_POST['address'];
    
            $query = "INSERT INTO student_id(name,regno,college,email,branch,mobile,dob,address) VALUES('$fullname','$regno','$college','$email','$branch','$mobile','$dob','$address')";
                
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