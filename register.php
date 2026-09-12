<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form action="registration.php" method="post">
            <h2 class = "containerRegis">Register</h2>
            <?php if(isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <label for="username">NPM</label>
            <input type="text" id="username" name="username" placeholder="NPM" required>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Password" required>
            <button type="submit">Register</button>
        </form>
        <p>Sudah punya akun? <a href="index.php">Login di sini</a></p>
    </div>
</body>
</html>
