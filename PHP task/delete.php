<?php
include("connection.php");

$toDelete = $_GET['sn'];
// $query ="DELETE FROM student_id WHERE sn='$toDelete'";
// $query = "DELETE FROM `student_id` WHERE `student_id`.`sno` = '$toDelete'";

$query = "UPDATE student_id SET dt=0 WHERE sno = '$toDelete'";

$data = mysqli_query($con,$query);

if($data){
    echo "Record deleted from database.";
}
else{
    echo "Failed to deleted!!!";
}

?>