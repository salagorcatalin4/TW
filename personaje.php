<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD gogoasa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container mt-2">
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <?php include 'msg.php';  ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        </div>
        <div class="col-md-12">
            <div class="float-left">
                <h2>Lista personajelor</h2>
            </div>
            <div class="float-right">
                <a href="add.php" class="btn btn-success">Adauga un personaj nou</a>
            </div>

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Nume perosonaj</th>
                    <th scope="col">id_ocupatie</th>
                    <th scope="col">id_rezultat</th>
                    <th scope="col">id_accesoriu</th>
                    <th scope="col">id_tip_personaj</th>
                </tr>
                </thead>
                <tbody>
                <?php
                include 'mydbCon.php';
                $query="select * from personaje limit 200";
                $result=mysqli_query($dbCon,$query);
                ?>
                <?php if ($result->num_rows > 0): ?>
                    <?php while($array=mysqli_fetch_row($result)): ?>
                        <tr>
                            <th scope="row"><?php echo $array[1];?></th>
                            <td><?php echo $array[2];?></td>
                            <td><?php echo $array[3];?></td>
                            <td><?php echo $array[4];?></td>
                            <td><?php echo $array[5];?></td>
                            <td>
                                <a href="edit.php?id_personaj=<?php echo $array[0];?>" class="btn btn-primary">Edit</a>
                                <a href="delete.php?id_personaj=<?php echo $array[0];?>" class="btn btn-danger">Delete</a>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="3" rowspan="1" headers="">No Data Found</td>
                    </tr>
                <?php endif; ?>
                <?php mysqli_free_result($result); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>