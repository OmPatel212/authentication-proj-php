<?php

session_start();

require_once "config/database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["email"];
    $password = $_POST["password"];

    // Find user
    $sql = "SELECT * FROM users WHERE email = '$email'";

    $result = mysqli_query($con, $sql);

    $user = mysqli_fetch_assoc($result);

    // Check password
    if ($user && password_verify($password, $user["password"])) {

        $_SESSION["user_id"] = $user["id"];
        $_SESSION["name"] = $user["name"];

        header("Location: dashboard.php");
        exit;

    } else {

        echo "Invalid email or password";

    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
</head>

<body>

<h2>Login</h2>

<form method="POST">

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
        Login
    </button>

</form>

<br>

<a href="register.php">
    Create an account
</a>

</body>

</html>