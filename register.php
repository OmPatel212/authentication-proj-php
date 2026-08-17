<?php

require_once "config/database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Hash the password before storing it
    $password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (name, email, password)
            VALUES ('$name', '$email', '$password')";

    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "Account created successfully!";
    } else {
        echo "Error: " . mysqli_error($con);
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Sign Up</title>
</head>

<body>

<h2>Create Account</h2>

<form method="POST">

    <input
        type="text"
        name="name"
        placeholder="Name"
        required
    >

    <br><br>

    <input
        type="email"
        name="email"
        placeholder="Email"
        required
    >

    <br><br>

    <input
        type="password"
        name="password"
        placeholder="Password"
        required
    >

    <br><br>

    <button type="submit">
        Sign Up
    </button>

</form>

<br>

<a href="login.php">
    Already have an account? Login
</a>

</body>

</html>