<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FinHub - Login/Signup</title>
    <link rel="stylesheet" href="csslogin/index.css" type="text/css" />
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            max-width: 400px;
            text-align: center;
        }
        .form-container {
            margin-top: 20px;
        }
        .form-container form {
            display: flex;
            flex-direction: column;
        }
        .form-container input {
            margin-bottom: 10px;
        }
        .form-container button {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>FinHub</h1>
        <div class="form-container" id="login-form">
            <h2>Login</h2>
            <form action="login.php" method="post">
                <input type="email" name="email" placeholder="Email" required />
                <input type="password" name="password" placeholder="Password" required />
                <button type="submit">Login</button>
            </form>
            <p>
                Don't have an account? <a href="#" onclick="toggleForm()">Sign up</a>
            </p>
        </div>
        <div class="form-container" id="signup-form" style="display: none;">
            <h2>Sign Up</h2>
            <form action="signup.php" method="post">
                <input type="text" name="name" placeholder="Full Name" required />
                <input type="email" name="email" placeholder="Email" required />
                <input type="password" name="password" placeholder="Password" required />
                <input type="password" name="confirm_password" placeholder="Confirm Password" required />
                <button type="submit">Sign Up</button>
            </form>
            <p>
                Already have an account? <a href="#" onclick="toggleForm()">Login</a>
            </p>
        </div>
    </div>
    <script>
        function toggleForm() {
            const loginForm = document.getElementById("login-form");
            const signupForm = document.getElementById("signup-form");
            loginForm.style.display = loginForm.style.display === "none" ? "block" : "none";
            signupForm.style.display = signupForm.style.display === "none" ? "block" : "none";
        }
    </script>
</body>
</html>
