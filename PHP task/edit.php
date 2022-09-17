<?php
include("connection.php");
$sn = $_GET['sn'];
$nm=$_GET['nm'];
$rn=$_GET['rn'];
$c=$_GET['c'];
$e=$_GET['e'];
$b=$_GET['b'];
$mob=$_GET['mob'];
$dt=$_GET['dt'];
$ad=$_GET['ad'];

if(isset($_POST['update'])){


    $nm = $_POST['fullname'];
    $rn = $_POST['regno'];
    $c = $_POST['college'];
    $e= $_POST['email'];
    $b = $_POST['branch'];
    $mob = $_POST['mobile'];
    $dt = $_POST['dob'];
    $ad = $_POST['address'];
    $img= $_POST['image'];
    $res = $_POST['resume'];


$query = "UPDATE student_id SET name='$nm',regno='$rn',college='$c',email='$e', branch='$b',mobile='$mob',dob='$dt',address='$ad',image='$img',resume='$res' WHERE sno = '$sn'";

$data = mysqli_query($con,$query);

if($data){
    echo "Record updated from database.";
}
else{
    echo "Failed to updated!!!";
}
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STUDENT ID CARD </title>
    <!-- <link ref="stylesheet" href="./style.css"> -->
    <link rel="stylesheet" href="css/style.css">
</head>



<body>
    
    <table>
        <tr>
            <td>
            <a href="display.php">Back</a>
                <h2><u>Student ID card form</u></h2>
                <form method="post">


                    <div>
                        <label>Full name</label><br>
                        <input type="text" name="fullname" value="<?php echo "$nm";?>"><br><br>
                    </div>

                    <div>
                        <label>Registaion no.</label><br>
                        <input type="text" name="regno" value="<?php echo "$rn";?>"><br><br>
                    </div>

                    <div>
                        <label>Colege name</label><br>
                        <input type="text" name="college" value="<?php echo "$c";?>"><br><br>
                    </div>

                    <div>
                        <label>Email</label><br>
                        <input type="email" name="email" value="<?php echo "$e";?>"><br><br>
                    </div>



                    
                    <label>Branch</label>
                    <select name="branch">
                        <option value="<?php echo "$b"?>"><?php echo "$b"?></option>
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
                        <input type="number" name="mobile" value="<?php echo "$mob";?>"><br><br>
                    </div>

                    <div>
                    <label>DOB</label>
                    <input type="date" name="dob" value="<?php echo "$dt";?>">
                    </div>
                    <br><br>

                    <div>
                    <label>Address</label>
                    <textarea id="address" name="address" rows="4" cols="50"><?php echo "$ad";?></textarea>
                    </div>

                    <div>
                        <label>Profile picture</label>
                        <input type="file" name="image" accept=".png, .jpg" value="<?php echo "$img";?>">
                    </div>

                    <div>
                    <label>Resume</label>
                    
                    <input type="file" name="resume" value="<?php echo "$res";?>">
                    
                    </div>



                    <div>
                        <button type="submit" name="update">Update</button>
                        
                    </div>




                </form>
            </td>

            <!--  -->
        </tr>
    </table>




    </body>

</html>