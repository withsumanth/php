<?php
$server = "sql3.freemysqlhosting.net";
$username = "sql3225083";
$pass = "5YB7rCXVpr";
$dbName = "sql3225083";
$conn = new mysqli($server,$username,$pass,$dbName);
$sql = "SELECT * FROM userdetails";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
     $data = array() ;
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    echo json_encode($data);
} else {
    echo "0";
}
$conn->close();
?>
