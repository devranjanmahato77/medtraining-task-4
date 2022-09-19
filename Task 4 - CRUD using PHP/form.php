
<?php
include 'database.php';
$obj = new database();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<a href="home.php">Back</a>
                <h2><u>Student ID card form</u></h2>
                <form method="post">


                    <div>
                        <label>Full name</label><br>
                        <input type="text" name="fullname" placeholder="Full name"><br><br>
                    </div>

                    <div>
                        <label>Registaion no.</label><br>
                        <input type="text" name="regno" placeholder="1901090001"><br><br>
                    </div>

                    <div>
                        <label>Colege name</label><br>
                        <input type="text" name="college" placeholder="College name"><br><br>
                    </div>

                    <div>
                        <label>Email</label><br>
                        <input type="email" name="email" placeholder="abc@gmail.com"><br><br>
                    </div>



                    
                    <label>Branch</label>
                    <select name="branch">
                        <option value="CSE">CSE</option>
                        <option value="ECE">ECE</option>
                        <option value="CST">CST</option>
                        <option value="EEE">EEE</option>
                        <option value="Other">Other</option>
                    </select>
                    <div>

                    </div>

                    <div><br>
                        <label>Mobile</label><br>
                        <input type="number" name="mobile" placeholder="9876543210"><br><br>
                    </div>

                    <div>
                    <label>DOB</label>
                    <input type="date" name="dob">
                    </div>
                    <br><br>

                    <div>
                    <label>Address</label>
                    <textarea id="address" name="address" rows="4" cols="50"></textarea>
                    </div>

                    <div>
                        <label>Profile picture</label>
                        <input type="file" name="image" accept=".png, .jpg">
                    </div>

                    <div>
                    <label>Resume</label>
                    
                    <input type="file" name="resume">
                    
                    </div>



                    <div>
                        <button type="submit" name="submit">Submit</button>
                        
                    </div>




                </form>
<?php
if(isset($_POST['submit'])){

    $fullname = $_POST['fullname'];
        $regno = $_POST['regno'];
        $college = $_POST['college'];
        $email = $_POST['email'];
        $branch = $_POST['branch'];
        $mobile = $_POST['mobile'];
        $dob = $_POST['dob'];
        $address = $_POST['address'];
        $image = $_POST['image'];
        $resume = $_POST['resume'];

        $value = ['name'=>'$fullname','regno'=>'$regno','college'=>'$college','email'=>'$email','branch'=>'$branch','mobile'=>'$mobile','dob'=>'$dob','address'=>'$address','image'=>'$image','resume'=>'$resume'];

        if($obj->insert("student_id",$value)){
            echo "<h2>Data Inserted Successfully.</h2>";
        }else{
            echo "<h2>Data is not Inserted Successfully.</h2>";
        }
}
    
?>




    
</body>
</html>
