<?php

$host = "localhost";
$username = "root"; 
$password = ""; 
$db = "user_db"; 

$conn = new mysqli($host, $username, $password, $db);


if ($conn->connect_error) {
    die("Koneksi Gagal: " . $conn->connect_error);
}

    $name =  mysqli_real_escape_string($conn, $_POST['logname']);
    $email = mysqli_real_escape_string($conn, $_POST['logemail']);
    $pass = mysqli_real_escape_string($conn, $_POST['logpass']);
    $user = mysqli_real_escape_string($conn, $_POST['loguser']);


$sql = "INSERT INTO user_form (nama, email, password, user_type) VALUES ('$name', '$email', '$pass', '$user')";

if ($conn->query($sql) === TRUE) {
    echo "Sign Up berhasil!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>

