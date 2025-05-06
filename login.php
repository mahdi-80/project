<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login_style.css">
    <title>Login</title>
</head>
<body>
    <div class="main">
        <input type="checkbox" id="chkToggle" aria-hidden="true">
        <div class="signup">
        <form action="register_action.php" method = "POST">
                <label for="chkToggle">Sign Up</label>
                <input type="text" placeholder="username" required name="username">
                <input type="email" placeholder="email" required name="email">
                <input type="password" placeholder="password" required name="password">
                <button>SignUp</button>
            </form>
        </div>
        <div class="login">
        <form action="login_action.php" method = "POST">
                <label for="chkToggle">Login</label>
                <input type="text" placeholder="Username" required name="username">
                <input type="password" placeholder="Password" required name="password">
                <button>Login</button>
            </form>
        </div>
        
    </div>
</body>
</html>
