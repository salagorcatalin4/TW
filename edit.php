<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit and Update Data PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-2">
    <div class="page-header">
        <h2>Editeaza lista personajelor</h2>
    </div>
    <div class="row">
        <div class="col-md-12">
            <?php
            include 'mydbCon.php';
            $query = "SELECT * FROM personaje WHERE id_personaj='" . $_GET["id_personaj"] . "'";
            $result=mysqli_query($dbCon,$query);
            $pesonaj = mysqli_fetch_assoc($result);
            ?>
            <form action="update-process.php" method="POST">
                <input type="hidden" name="id_personaj" value="<?php echo $_GET["id_personaj"]; ?>" class="form-control" required="">
                <div class="form-group">
                    <label for="nume">Numele personajului</label>
                    <input type="text" name="nume_personaj" class="form-control" value="<?php echo $pesonaj['nume_personaj']; ?>" required="">
                </div>
                <div class="form-group">
                    <label for="id">id_ocupatie</label>
                    <input type="text" name="id_ocupatie" class="form-control" value="<?php echo $pesonaj['id_ocupatie']; ?>" required="">
                </div>
                <div class="form-group">
                    <label for="rezultat">id_rezultat</label>
                    <input type="text" name="id_rezultat" class="form-control" value="<?php echo $pesonaj['id_rezultat']; ?>" required="">
                </div>
                <div class="form-group">
                    <label for="accesoriu">id_rezultat</label>
                    <input type="text" name="id_accesoriu" class="form-control" value="<?php echo $pesonaj['id_accesoriu']; ?>" required="">
                </div>
                <div class="form-group">
                    <label for="tip_personaj">id_rezultat</label>
                    <input type="text" name="id_tip_personaj" class="form-control" value="<?php echo $pesonaj['id_tip_personaj']; ?>" required="">
                </div>
                <button type="submit" class="btn btn-primary" value="submit">Submit</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>