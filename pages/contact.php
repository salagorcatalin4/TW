
<!DOCTYPE html>
<html lang="en">
<head>

    <title>Contact</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    <form  method="post" id="formValidation" class="all_forms margin_reg">
        <h3>Forma contact</h3>

        <label for="name">Nume</label>
        <input type="text" placeholder="Nume" id="name" name="name" >

        <label for="email">Email</label>
        <input type="email" placeholder="Email" id="email" name="email" >

        <label for="textarea">Mesaj</label>
        <textarea class="textarea" name="comment" id="comment" placeholder="Mesajul"></textarea>


        <div class="buttons">
            <button name="submit_contact" type="submit" class="btn" id="send">Trimite</button>
            <a href="index.html">
                <button name="home" class="btn">Home</button>
            </a>
        </div>
            <div class="msg" id="msg">

            </div>
 
    </form>

    <script type="text/javascript"  src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript"  src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
    <script src="/js/submit_contact.js"></script>

</body>
</html>
