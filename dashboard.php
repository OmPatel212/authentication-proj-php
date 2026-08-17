<?php

session_start();

if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit;
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
</head>

<body>

<h1>Dashboard</h1>

<h2>
    Welcome <?= htmlspecialchars($_SESSION["name"]) ?>
</h2>

<p>You are logged in!</p>

<a href="logout.php">Logout</a>

</body>

</html>