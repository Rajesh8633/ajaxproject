<?php
include('dbconnection.php');

$data = stripslashes(file_get_contents("php://input"));
$mydata = json_decode($data, true);
$id = $mydata['sid'];
if (!empty($id)) {
    $sql = "SELECT * FROM infotable WHERE id={$id}";
    $result = $conn->query($sql);
    if ($result) {
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            echo json_encode($row);
        } else {
            echo json_encode(array('error' => 'No records found for the given ID'));
        }
    } else {
        echo json_encode(array('error' => 'Error executing the query'));
    }
} else {
    echo json_encode(array('error' => 'Invalid ID'));
}
?>
