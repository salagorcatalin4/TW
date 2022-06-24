<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insert data from form to mysql database php</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-2">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h2>Add Record From Database PHP</h2>
            </div>

            <form action="insert-process.php" method="post">
                <div class="form-group">
                    <label>Nume personaj</label>
                    <input type="text" name="nume_personaj" class="form-control" required="">
                </div>
                <div class="form-group">
                    <label>id_ocupatie</label>
                    <input type="text" name="id_ocupatie" class="form-control" required="">
                </div>
                <div class="form-group">
                    <label>id_rezultat</label>
                    <input type="text" name="id_rezultat" class="form-control" required="">
                </div>
                <div class="form-group">
                    <label>id_accesoriu</label>
                    <input type="text" name="id_accesoriu" class="form-control" required="">
                </div>
                <div class="form-group">
                    <label>id_tip_personaj</label>
                    <input type="text" name="id_tip_personaj" class="form-control" required="">
                </div>
                <input type="submit" class="btn btn-primary" name="submit" value="save">
            </form>
        </div>
    </div>
</div>
</body>
</html>