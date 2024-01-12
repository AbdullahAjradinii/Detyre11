<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

echo "Welcome, ".$_SESSION['username']."!<br>";
echo "Login Time: ".date('Y-m-d H:i:s', $_SESSION['login_time'])."<br>";

if ($_SESSION['username'] == 'admin') {
    echo '<a href="dashboard.php">Dashboard</a><br>';
}

echo '<a href="logout.php">Logout</a>';
?>
