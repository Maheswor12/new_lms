<?php
if (!session_start()) {
    session_start();
}

require_once 'includes/dbconnection.php';
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // query for users
    $query = "select * from users where username='$username' and password='$password'";

    $result = mysqli_query($conn, $query);

    $row = mysqli_fetch_assoc($result);
    if ($row) {

        $_SESSION['level'] = $row['level'];
        $_SESSION['username'] = $row['username'];

        if ($row['level'] == 1) {
            echo "student";
        } elseif ($row['level'] == 2) {
            echo "teacher";
        } elseif ($row['level'] == 3) {
            echo "admin";
        } else {
            echo "admin";
        }
    } else {
        echo "failed";
    }
} else {
    echo "failed";
}