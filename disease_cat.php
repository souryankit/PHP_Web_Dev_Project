<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Disease Category</title>
</head>

<body>
    <?php require 'partials/_nav.php';?>
    <?php require 'partials/_dbconnect.php'?>
    <div class="container">
        <h2 class="text-center my-4">DISEASE CATEGORIES</h2>
        <div class="row">
        <?php 
         $sql = "SELECT * FROM `disease_cat`";
         $result = mysqli_query($conn, $sql);
         while($row = mysqli_fetch_assoc($result)){
            $id = $row['disease_cat_id'];
            $cat_name = $row['disease_cat_name'];
            $cat_desc = $row['disease_cat_desc'];

            echo'<div class="col-md-4 my-2">
                <div class="card" style="width: 18rem;">
                    <img src="https://source.unsplash.com/500x400/?  '. $cat_name .' ,disease" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><a href="disease_list.php?catid=' . $id . '"> '. $cat_name .'</a></h5>
                        <p class="card-text">'. substr($cat_desc, 0, 200) .'  ...</p>
                        <a href="disease_list.php?catid=' . $id . '" button class="btn btn-primary" type="button" ">See Details</a>
                    </div>
                </div>
            </div>';
         }
         ?>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
     -->
</body>

</html>