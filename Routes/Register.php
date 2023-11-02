<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting System - Registration</title>
    <link rel="stylesheet" href="../css/stylesheet2.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<header class="header">
        <a href="#" class="logo">
            <ion-icon name="logo-ionic"></ion-icon>WeVote
        </a>
        <nav class="nav">
            <a href="../index.html">Home</a>
            <a href="../Routes/About Us.html">About Us</a>
            <a href="../Routes/Contact Us.html">Contact Us</a>
            <a href="../Routes/login.html">Login</a>
        </nav>
    </header>
    <div class="container">
        <div class="form-box">
            <form action="" name="Formfill">
                <h2>Register</h2>
                <p id="result"></p>
                <div class="input-box">
                    <i class='bx bxs-user'></i>
                    <input type="text" name="Username" placeholder="Voter Id">
                </div>
                <div class="input-box">
                    <i class='bx bxs-mobile'></i>
                    <input type="number" name="Mobile" placeholder="Enter Mobile">
                </div>
                <div class="input-box">
                    <i class='bx bxs-lock-alt'></i>
                    <input type="password" name="Password" placeholder="Password">
                </div>
                <div class="input-box">
                    <i class='bx bxs-lock-alt'></i>
                    <input type="password" name="cPassword" placeholder="Confirm Password">
                </div>
                <div class="button">
                    <input type="submit"  class="btn" value="Register">
                </div>
                <div class="group">
                    <span><a href="#">Forget-Password</a></span>
                    <span><a href="../Routes/login.html">Login</a></span>
                </div>
            </form>
        </div>
    </div>
</body>
</html>