<?php

if (isset($_POST['submit'])) {

    include_once 'dbh.php';

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $uid = mysqli_real_escape_string($conn, $_POST['uid']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

    // error handlers

    // check for empty fields
    if (empty($email) || empty($uid) || empty($pwd)) {
        header("Location: ../register.php?register=empty");
        exit();
    } else {
        // check if input chars are valid
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            header("Location: ../register.php?register=email");
            exit();
        } else {
            // Check if username already exists.
            $sql = "SELECT * FROM users WHERE user_uid='$uid'";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);

            if ($resultCheck > 0) {
                header("Location: ../register.php?register=usertaken");
                exit();
            } else {
                // Hashing passwords so DB managers can't look at passes.
                $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
                // insert user into db
                $sql = "INSERT INTO users (user_email, user_uid, user_pwd) VALUES ('$email', '$uid', '$hashedPwd');";
                mysqli_query($conn, $sql);
                header("Location: ../register.php?register=success");
                exit();
            }
        }
    }

} else {
    header("Location: ../register.php");
    exit();
}