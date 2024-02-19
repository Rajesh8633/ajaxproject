
<?php
include('dbconnection.php');

$data = stripslashes(file_get_contents("php://input"));
$mydata = json_decode($data, true);

$name = $mydata['name'];
$email = $mydata['email'];
$password = $mydata['password'];

if (!empty($name) && !empty($email) && !empty($password)) {
    // Use prepared statements to prevent SQL injection
    $sql = $conn->prepare("INSERT INTO infotable (name, email, password) VALUES (?, ?, ?)");
    $sql->bind_param("sss", $name, $email, $password);

    if ($sql->execute() === true) {
        echo "Record saved successfully";
    } else {
        echo "Unable to save record";
    }
} else {
    echo "Name, email, and password are required fields";
}
?>
