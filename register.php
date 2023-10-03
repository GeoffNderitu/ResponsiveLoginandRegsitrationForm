<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container-flip">
        <div class="card-flip">
            <div class="box login">
                <h4>Already have an account?</h4>
                <button class="login_btn">Login Here</button>
            </div>
            <div class="box register">
                <h4>Don't have an account?</h4>
                <button class="register_btn">Register Here</button>
            </div>
        </div>
        <div class="formLog active">
                <div class="form login_form active">
                    <form action="" method="">
                        <h4>Log In</h4>
                        <input type="text" placeholder="username" name="log_username" required>
                        <input type="password" placeholder="password" name="log_username">
                        <input type="submit" value="Login">
                        <a href="#" class="forgot">Forgot Password</a>
                    </form>
                </div>
                <div class="form register_form">
                    <form action="" method="">
                        <h4>Register</h4>
                        <input type="text" placeholder="username" name="reg_username" required>
                        <input type="email" placeholder="email" name="reg_email" required>
                        <input type="password" placeholder="password" name="reg_password">
                        <input type="submit" value="Register">
                    </form>
                </div>
            </div>
    </div>
    <script>
        const login_btn = document.querySelector('.login_btn');
        const register_btn = document.querySelector('.register_btn');
        const formLog = document.querySelector('.formLog');
        const body = document.querySelector('body');

        register_btn.onclick = function(){
        formLog.classList.add('active');
        body.classList.add('active');
        }

        login_btn.onclick = function(){
        formLog.classList.remove('active');
        body.classList.remove('active');
        }
    </script>
</body>
</html>
