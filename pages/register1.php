<!DOCTYPE html>
<html lang="en">
<head>

    <title>Inregistrare</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/main.css">
    
</head>
<body>
    <form  method="post" id="formValidation" class="all_forms margin_reg">
        <h3>Inregistrare</h3>

        <label for="email">Email:</label>
        <input type="email" placeholder="Email" id="email" name="email">

        <label for="password">Parola</label>
        <input type="password" placeholder="Password" id="password" name="password">

        <label for="confirmpassword">Confirma parola</label>
        <input type="password" placeholder="Confirm Password" id="confirmpassword" name="confirmpassword">


        <div class="buttons">
            <button name="submit_reg" type="submit" class="btn" id="send">Inregistrare</button>
            <a href="index.html">
                <button name="home" class="btn">Home</button>
            </a>
        </div>
        <span id="response"></span>
        <div class="msg" id="msg"></div>
    
    </form>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
    <script src="/js/formValidation.js"></script>

</body>
</html>