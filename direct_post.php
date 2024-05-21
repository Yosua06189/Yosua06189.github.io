<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    if (empty($name) || empty($email) || empty($message)) {
        echo "Form ada yang kosong, mohon diisi.";
    } else {
        $query = mysqli_query($con, "INSERT INTO pesan (Nama, Email, Pesan) VALUES ('$name', '$email', '$message')");
        if ($query) {
            echo "Data berhasil ditambahkan";
        } else {
            echo "Error: " . mysqli_error($con);
        }
    }
} else {
    echo "Invalid request method.";
}
?>

