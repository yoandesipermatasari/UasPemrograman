<?php
include 'koneksi.php';

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "INSERT INTO Akun (username, password) VALUES ('$username', '$password')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header('Location: index.php');
    } else {
        header('Location: register.php?error=Registrasi gagal');
    }
} else {
    header('Location: register.php');
}
?>
