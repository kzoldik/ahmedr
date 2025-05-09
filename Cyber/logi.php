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

<center>
        <h1>LOGIN PAGE</h1>
        <form action="k.php" method="POST">
            <input type="text" name="username" placeholder="Enter your name"> <br>
            <input type="password" name="password" placeholder="Enter your password"> <br>
            <button type="submit">LOGIN</button>
        </form>
</center>
