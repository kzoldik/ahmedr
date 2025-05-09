<?php
$correct_username = "ahmed";
$correct_password = "ana";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        if ($username === $correct_username && $password === $correct_password) {
            echo "Login successful! Welcome, " . htmlspecialchars($username);
            // توجيه المستخدم إلى صفحة أخرى مثلاً:
            // header("Location: welcome.php");
        } else {
            echo "Invalid username or password!";
        }
    } else {
        echo "Please fill all fields!";
    }
}
?>
