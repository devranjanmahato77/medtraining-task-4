<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
</head>
<body>

<a href="index.php">Add new data</a>
<table border="2" cellspacing="5">
    <tr>
        
        <th>Name</th>
        <th>Registation no.</th>
        <th>College</th>
        <th>Email</th>
        <th>Branch</th>
        <th>mobile</th>
        <th>DOB</th>
        <th>Address</th>
        <th>Photo</th>
        <th>Resume</th>
        <th colspan="2"></th>
</tr>



<?php
include 'database.php';

$obj = new database();

// display

$obj->display('SELECT * FROM student_id WHERE dt=1');
$result = $obj->getResult();


$query = "select * from student_id where dt=1";
$data = mysqli_query($con,$query);
$result = mysqli_fetch_assoc($data);

$i=1;
foreach($result as list("name"=>$fullname,"regno"=>$regno,"college"=>$college,"email"=>$email,"branch"=>$branch,"mobile"=>$mobile,"dob"=>$dob,"address"=>$address,"image"=>$image,"resume"=>$resume)){
    $x=$x+1;
    echo "<tr><td>$i</td>
        <td>$fullname</td>
        <td>$regno</td>
        <td>$college</td>
        <td>$email</td>
        <td>$branch</td>
        <td>$mobile</td>
        <td>$dob</td>
        <td>$address</td>
        <td>$image</td>
        <td>$resume</td>
        <td><a href = 'edit1.php?sn=$result[sno]&nm=$result[name]&rn=$result[regno]&c=$result[college]&e=$result[email]&b=$result[branch]&mob=$result[mobile]&dt=$result[dob]&ad=$result[address]&img=$result[image]&res=$result[resume]'>Edit</td>
        <td><a href = 'delete1.php?sn=$result[sno]'>Delete</td>

        </tr>";
}
echo "</table>";
?>
    
</body>
</html>


