<?php
include('connect.php');

if (isset($_POST['submit'])) {
    $username = strtolower(stripcslashes($_POST['username']));
    $email = stripcslashes($_POST['email']);
    $password = stripcslashes($_POST['password']);
    $age = stripcslashes($_POST['age']);
    $gender = stripcslashes($_POST['gender']);

    $username = htmlentities(mysqli_real_escape_string($conn, $username));
    $email = htmlentities(mysqli_real_escape_string($conn, $email));
    $password = htmlentities(mysqli_real_escape_string($conn, $password));
    $age = htmlentities(mysqli_real_escape_string($conn, $age));
    $gender = htmlentities(mysqli_real_escape_string($conn, $gender));

    $errors = [];

    if (empty($username)) {
        $errors[] = 'Please enter username';
    } elseif (strlen($username) < 6) {
        $errors[] = 'Your username needs to have a minimum of 6 letters';
    }

    if (empty($email)) {
        $errors[] = 'Please insert email';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Please enter a valid email';
    }

    if (empty($age)) {
        $errors[] = 'Please insert age';
    } elseif (!filter_var($age, FILTER_VALIDATE_INT)) {
        $errors[] = 'Please enter a valid age';
    }

    if (empty($gender)) {
        $errors[] = 'Please choose gender';
    } elseif (!in_array($gender, ['male', 'female'])) {
        $errors[] = 'Please choose a valid gender';
    }

    if (empty($password)) {
        $errors[] = 'Please insert password';
    } elseif (strlen($password) < 6) {
        $errors[] = 'Your password needs to have a minimum of 6 letters';
    }

    $check_user = "SELECT * FROM users WHERE username='$username'";
    $check_result = mysqli_query($conn, $check_user);
    if (mysqli_num_rows($check_result) != 0) {
        $errors[] = 'Sorry, username already exists. Please choose another one.';
    }

    if (empty($errors)) {
        $sql = "INSERT INTO users (username, email, password, age, gender) VALUES ('$username', '$email', '$password', '$age', '$gender')";
        mysqli_query($conn, $sql);
        header('Location: login.php');
    } else {
        foreach ($errors as $error) {
            echo $error . '<br>';
        }
        include('register.html');
    }
}
?>
