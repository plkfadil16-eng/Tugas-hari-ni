<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        :root {
            color-scheme: light;
            font-family: 'Poppins', sans-serif;
            color: #202124;
            background: #fff;
        }

        * {
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            margin: 0;
            padding: 32px 20px;
            display: grid;
            place-items: center;
            background: #fff;
        }

        .login-layout {
            width: min(100%, 390px);
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 24px;
        }

        .login-card {
            width: 100%;
            padding: 0 16px 8px;
            border: 1px solid #e5e7eb;
            background: #fff;
        }

        h1 {
            margin: 0 0 10px;
            text-align: center;
            font-size: 30px;
            font-weight: 700;
            line-height: 1.35;
        }

        .login-field label {
            display: block;
            margin-bottom: 8px;
            font-size: 19px;
            line-height: 1.4;
        }

        .login-field + .login-field {
            margin-top: 20px;
        }

        .login-field input {
            width: 100%;
            height: 50px;
            padding: 0 15px;
            border: 1px solid #d5dbe2;
            border-radius: 6px;
            background: #fff;
            color: #202124;
            font: inherit;
            font-size: 17px;
        }

        .login-field input::placeholder {
            color: #68717c;
            opacity: 1;
        }

        .login-field input:focus {
            border-color: #087cf0;
            outline: 2px solid rgba(8, 124, 240, .18);
        }

        .submit-button {
            width: 100%;
            min-height: 48px;
            margin-top: 20px;
            border: 0;
            border-radius: 5px;
            background: #087cf0;
            color: #fff;
            font: inherit;
            font-size: 17px;
            cursor: pointer;
        }

        .submit-button:hover {
            background: #066bd0;
        }

        .signup-prompt {
            margin: 2px 0 0;
            font-size: 17px;
            line-height: 1.4;
        }

        a {
            color: #087cf0;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .brand-mark {
            display: flex;
            flex-direction: column;
            align-items: center;
            color: #111;
            line-height: 1;
        }

        .brand-name {
            font-size: 12px;
            font-weight: 700;
        }

        .brand-subtitle {
            margin-top: 3px;
            color: #d20b55;
            font-family: cursive;
            font-size: 17px;
            font-style: italic;
        }

        @media (max-width: 360px) {
            .login-card {
                padding-right: 12px;
                padding-left: 12px;
            }

            .signup-prompt {
                font-size: 15px;
            }
        }
    </style>
</head>
<body>
    <main class="login-layout">
        <section class="login-card" aria-labelledby="login-title">
            <form action="" method="post">
                <h1 id="login-title">LOGIN</h1>

                <div class="login-field">
                    <label for="username">Username</label>
                    <input id="username" name="username" type="text" placeholder="Enter username" autocomplete="username" required>
                </div>

                <div class="login-field">
                    <label for="password">Password</label>
                    <input id="password" name="password" type="password" placeholder="Password" autocomplete="current-password" required>
                </div>

                <button class="submit-button" type="submit" name="login">Sign in</button>
                <p class="signup-prompt">Don't have an account? <a href="register.php">Sign Up</a></p>
            </form>
        </section>
    </main>
</body>
</html>