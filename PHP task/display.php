<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
include("connection.php");

$query = "select * from student_id where dt=1";
$data = mysqli_query($con,$query);

$total = mysqli_num_rows($data);

if($total!=0){
    while($result = mysqli_fetch_assoc($data)){
        echo "
       
        <tr>
            
            <td>".$result['name']."</td>
            <td>".$result['regno']."</td>
            <td>".$result['college']."</td>
            <td>".$result['email']."</td>
            <td>".$result['branch']."</td>
            <td>".$result['mobile']."</td>
            <td>".$result['dob']."</td>
            <td>".$result['address']."</td>
            <td>".$result['image']."</td>
            <td>".$result['resume']."</td>
            <td><a href = 'edit.php?sn=$result[sno]&nm=$result[name]&rn=$result[regno]&c=$result[college]&e=$result[email]&b=$result[branch]&mob=$result[mobile]&dt=$result[dob]&ad=$result[address]&img=$result[image]&res=$result[resume]'>Edit</td>
            <td><a href = 'delete.php?sn=$result[sno]'>Delete</td>

        </tr>
        
        ";
    }

}
else{
    echo "No data avialable!!!";
}

?>
    
</body>
</html>

