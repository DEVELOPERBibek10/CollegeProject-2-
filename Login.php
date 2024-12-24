<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Form </title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="Login.css" />
</head>

<body>
    <div class="container">
        <div class="center">
            <h1>Login</h1>
            <form method="GET" action="./dbconnection.php">
                <div class="txt_field">
                    <input type="email" name="email" required>
                    <span></span>
                    <label>Email</label>
                </div>
                <div class="txt_field">
                    <input type="password" name="password" required>
                    <span></span>
                    <label>Password</label>
                </div>

                <input name="submit" type="Submit" value="LogIn">
            </form>
        </div>
    </div>
</body>

</html>