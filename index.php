<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5 border rounded py-5 shadow" style="max-width: 360px;">
        <h1 class="h3 mb-3 text-center">Login</h1>

        <?php if(isset($_GET['incorrect'])) :?>
            <div class="alert alert-warning">
                Incorrect email or password!
            </div>
        <?php endif ?>

        <form action="_actions/login.php" method="post">
            <input type="email" name="email" class="form-control mb-2" placeholder="Email" required>
            <input type="password" name="password" class="form-control mb-2" placeholder="Password" required>
            <button class="w-100 btn btn-primary">Login</button>
        </form>
        <br>
        <div class="text-center"><a href="register.php">Register</a></div>
    </div>
</body>
</html>