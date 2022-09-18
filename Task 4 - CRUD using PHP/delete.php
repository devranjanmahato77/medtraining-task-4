<?php
include("connection.php");

$toDelete = $_GET['sn'];
// $query ="DELETE FROM student_id WHERE sn='$toDelete'";
// $query = "DELETE FROM `student_id` WHERE `student_id`.`sno` = '$toDelete'";

// $query = "UPDATE student_id SET dt=0 WHERE sno = '$toDelete'";

// $data = mysqli_query($con,$query);



if($obj->delete("student_id",$toDelete)){
    echo "<h2>Data Inserted Successfully.</h2>";
}else{
    echo "<h2>Data is not Inserted Successfully.</h2>";
}

?>