<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form action="login.php" method="post">
        <h2 class="login-heading">Sign-In</h2>
            <?php if(isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <label for="username">NPM</label>
            <input type="text" id="username" name="username" placeholder="Masukkan NPM" required>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Password" required>
            <button type="submit">Sign In</button>
        </form>
        <p>Belum punya account? <a href="register.php">Register</a></p>
    </div>
</body>
</html>
