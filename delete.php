<?php

include('dbconnection.php');
$data=stripcslashes(file_get_contents("php://input"));
$mydata=json_decode($data,true);
$id=$mydata['sid'];
// echo $id;exit;

if(!empty($id)){
    $sql="DELETE FROM infotable where id={$id}";
    if($conn->query($sql)==true){
     echo "Student Deleted Successfully";
    }
    else{
        echo "Unable to Delete Student";
    }
}


?>