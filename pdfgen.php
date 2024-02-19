<?php
include('vendor/autoload.php');
include('dbconnection.php');

$sql = "SELECT * FROM infotable";
$result = $conn->query($sql);
$data = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

// Create HTML table
$html = '<table>';
$html .= '<tr><td>ID</td><td>Name</td><td>Email</td><td>Password</td></tr>';
foreach ($data as $row) {
    $html .= '<tr><td>' . $row['id'] . '</td><td>' . $row['name'] . '</td><td>' . $row['email'] . '</td><td>' . $row['password'] . '</td></tr>';
}
$html .= '</table>';

// Create PDF using mPDF
$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHtml($html);

// Output PDF to browser or save to file
$file = time() . '.pdf';
$mpdf->Output($file, 'D'); // 'D' means force download

?>
