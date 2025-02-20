<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/signup.css">
</head>

<body>
    <header>
        <nav>
            <div class="logo">
                <a href="index.html">
                    <img src="img/logo.png" alt="Sirkula Logo" href="index.html">Sirkula
                </a>
            </div>
            <ul>
                <li><a href="signin.html">Sign In</a></li>
            </ul>
        </nav>
        <hr class="garis2">
    </header>
    <div class="container">
        <div class="form-container">
            <h1>Sign Up</h1>
            <p>Create Your Account</p>
            <form action="#" method="POST">
                <input type="text" id="fullname" name="fullname" placeholder="Full Name" required>
                <input type="email" id="email" name="email" placeholder="Email" required>
                <input type="password" id="password" name="password" placeholder="Password" required>
                <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm Password" required>
                <button type="submit">Sign Up</button>
            </form>
            <p>Already have an account? <a href="signin.html"><span>Sign In</span></a></p>
        </div>
    </div>
</body>

</html>

<?php
include "../../database/koneksi.php"
?>