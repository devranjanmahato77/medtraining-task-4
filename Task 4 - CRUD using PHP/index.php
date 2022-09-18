<?php
include 'database.php';

$obj = new database();

$obj->insert('student_id',['name'=>'$fullname','regno'=>'$regno','college'=>'$college','email'=>'$email','branch'=>'$branch','mobile'=>'$mobile','dob'=>'$dob','address'=>'$address','image'=>'$image','$resume'=>'$resume']);
echo "Insert result is : ";
print_t($obj->getResult());

   
// update
$obj->update('student_id',['name'=>'$fullname','regno'=>'$regno','college'=>'$college','email'=>'$email','branch'=>'$branch','mobile'=>'$mobile','dob'=>'$dob','address'=>'$address','image'=>'$image','$resume'=>'$resume'],'sno = "$sn"');
echo "Update result is : ";
print_t($obj->getResult());

// delete
$obj->delete('student_id','sno = "$sn"');

// display

$obj->display('SELECT * FROM student_id WHERE dt=1');
echo "SQL result is : ";
print_r($obj->getResult());

?>