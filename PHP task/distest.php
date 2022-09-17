<?php
include("connection.php");

$query = "select * from student_id";
$data = mysqli_query($con,$query);

$total = mysqli_num_rows($data);

if($total!=0){
    while($result = mysqli_fetch_assoc($data)){
        echo "
        <tr>
            <td>".$result['sno']."</td>
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
        </tr>
        ";
    }

}
else{
    echo "No data avialable!!!";
}