<?php
// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $first = $_POST['first'];
    $last = $_POST['last'];
    $phone = $_POST['phone'];
    $nationality = $_POST['nationality'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $date = $_POST['date'];
    $account = $_POST['account'];

    // Connect to MySQL database
    $conn = new mysqli('localhost', 'root', '', 'form_data'); // Adjust if you changed database details

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare SQL statement to insert data
    $sql = "INSERT INTO users (first, last, phone, nationality, email, address, date_of_birth, account) VALUES ('$first', '$last', '$phone', '$nationality', '$email', '$address', '$date', '$account' )";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
}
?>
