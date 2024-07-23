<?php 
 require '../conf/koneksi.php';
 require 'login.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/form.css">
</head>
<body>
    <h2>Login</h2>
    <form method="POST" action="">
        <div>
            <label for="email">email</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div>
            <button type="submit" name="login">Login</button>
        </div>
    </form>
</body>
</html>

