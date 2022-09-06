
<?php 
    include "connect.php";
    include "script.php";
 ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Système de pagination en php</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="table-responsive">
                    <table class="table table-hover table-borderred">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Articles</th>
                                <th>Prix</th>
                            </tr>
                        </thead>

                        <tbody>
                          <?php 
                          while ($products =$reqProducts->fetch()) {
                           ?>
                           <tr>
                                <td><?= $products['id'];?></td>
                                <td><?= $products['articles'];?></td>
                                <td><?= $products['prix'];?></td>
                           </tr>
                           <?php
                          }
                          
                          ?>
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>