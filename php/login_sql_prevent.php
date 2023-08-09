<?php
/*
*   login_binding.php
*   hasibur53362
*   8/9/2023
*   4:38 PM
*   PhpStorm
*   eh
*/

$conn = new mysqli('', '', '', '');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



/*
//  OR WE CAN USE THIS >>>
$username = $conn->real_escape_string($_POST['username']);
$password = $conn->real_escape_string($_POST['password']);
 */


$username = "44011";
//$password = "' OR ' 1=1"; // Payload
$password = "I-148";

// Using prepared statement to prevent SQL injection
$sql = "SELECT * FROM employee_info WHERE user_id = ? AND creator = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $username, $password);

// Execute the query
$stmt->execute();
$result = $stmt->get_result();

// Fetch results
while ($row = $result->fetch_assoc()) {
    print_r($row);
}

if($result->fetch_row() > 0){
    echo "found";
}else{
    echo "not found";
}

// Close the statement and connection
$stmt->close();
$conn->close();

