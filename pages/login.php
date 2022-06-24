<!DOCTYPE html>
<html lang="en">
<head>

    <title>Login Form </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    <form method="post" id="formValidation" class="all_forms margin">
        <h3>Login</h3>

        <label for="email">Email</label>
        <input type="email" placeholder="Email" id="email" name="email">

        <label for="password">Password</label>
        <input type="password" placeholder="Password" id="password" name="password">

        <div class="buttons">
            <button name="submit_log" type="submit" class="btn">Log In</button>
            <button name="home" class="btn">Home</button>


        </div>
        <div class="msg" id="msg">

        </div>
    </form>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
    <script src="/js/submit_login.js"></script>


</body>
</html>
