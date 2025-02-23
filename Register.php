<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sign Up / Registration Form </title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="Register.css" />
</head>

<body>
    <div class="container">
        <div class="center">
            <h1>Register</h1>
            <form method="POST" action="./dbconnection.php">
                <div class="txt_field">
                    <input type="text" name="name" required>
                    <span></span>
                    <label>Name</label>
                </div>
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
                    <div></div>
                <input name="submit" type="Submit" value="Sign Up">
            </form>
        </div>
    </div>
</body>

</html>