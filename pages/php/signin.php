<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/signin.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <a href="index.html">
                    <img src="img/logo.png" alt="Sirkula Logo">Sirkula
                </a>
            </div>
            <ul>
                <li><a href="signup.html">Sign Up</a></li>
            </ul>
        </nav>
        <hr class="garis2">
    </header>

    <div class="container">
        <div class="form-container sign-in-container">
            <form action="#">
                <h1>Login</h1>
                <p>Welcome! Please log in with your Sirkula account to continue</p>
                <input type="text" placeholder="Enter your Email or Phone" />
                <input type="password" placeholder="Enter your Password" />
                <a href="#">Forgot Password?</a>
                <button>Sign In</button>
                <div class="social-container">
                    <button class="social-btn"><img src="img/google.png" alt="Google">Login with Google</button>
                    <button class="social-btn"><img src="img/facebook 2.png" alt="Google">Login with Facebook</button>
                </div>
                <a href="signup.html">Don't have an account yet? <span>Sign Up</span></a>
            </form>
        </div>
        <div class="form-container sign-up-container">
            <form action="#">
                <h1>Sign Up</h1>
                <p>Welcome! Create your account</p>
                <input type="text" placeholder="Enter your Email or Phone" />
                <input type="text" placeholder="Enter your Username" />
                <input type="password" placeholder="Create Password" />
                <input type="password" placeholder="Confirm your Password" />
                <button>Sign Up</button>
                <a href="#">Have an Account? <span>Sign In</span></a>
            </form>
        </div>
    </div>
</body>
</html>
