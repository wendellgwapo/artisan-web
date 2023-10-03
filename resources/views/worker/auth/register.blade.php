<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Worker Register Form</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="form-container">
        <form action="" method="post">
            <h2>REGISTER</h2>
    
            <label>Name</label>
            <input type="text" name="name" required placeholder="enter your name">
    
            <label>Email</label>
            <input type="email" name="email" required placeholder="enter your email">
    
            <label>Password</label>
            <input type="password" name="password" required placeholder="enter your password">

            <label>Repeat Password</label>
            <input type="password" name="password" required placeholder="confirm your password">
    
            <input type="submit" name="submit" value="REGISTER" class="form-btn">
            <p>already have an account? <a href="login_worker">login now</a></p>
        </form>
    </div>
</body>
</html>