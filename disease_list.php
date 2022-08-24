<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>disease list</title>
</head>

<body>
    <?php require 'partials/_nav.php';?>
    <?php require 'partials/_dbconnect.php'?>
    <!-- <div class="col-sm-6 offset-md-3 border"> -->
    <div class="container">
        <h2 class="text-center py-2"> DISEASE LIST </h2>
         <div class="row">
            <?php
            $id = $_GET['catid'];
            $sql = "SELECT * FROM `disease_list` WHERE disease_cat_id=$id"; 
            $result = mysqli_query($conn, $sql);
            $noResult = true;
            while($row = mysqli_fetch_assoc($result)){
                $noResult = false;
                $disease_id = $row['disease_id'];
                $name = $row['disease_name'];
                $overview = $row['disease_desc']; 
                // $id = $row['disease_id'];
                // $id = $row['disease_id'];
                // $id = $row['disease_id'];
                // $id = $row['disease_id'];
                // $id = $row['disease_id'];
                // $id = $row['disease_id'];
                // $disease_time = $row['timestamp']; 
                // $disease_user_id = $row['disease_user_id']; 
                // $sql2 = "SELECT user_email FROM `users` WHERE sno='$disease_user_id'";
                // $result2 = mysqli_query($conn, $sql2);
                // $row2 = mysqli_fetch_assoc($result2);
                

                echo'<div class="col-md-4 my-2">
                <div class="card" style="width: 18rem;">
                    <img src="https://source.unsplash.com/500x400/?  '. $name .' ,disease" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><a href="disease.php?id=' . $disease_id . '"> '. $name .'</a></h5>
                        <p class="card-text">'. substr($overview, 0, 250) .'  ...</p>
                        <a href="disease.php?id=' . $disease_id . '" button class="btn btn-primary" type="button" ">See Details</a>
                    </div>
                </div>
                
              </div>';

                // echo 
                // ' <div class="clearfix my-3">
                //     <img src="https://source.unsplash.com/400x300/? ,disease" class="col-md-4 offset-md-4 float-md-end mb-3 ms-md-3"
                //     alt="...">
                //     <p><b><h2>' . $name . '</h2></b></p>
                // <p>' . $overview . '</p>
            
                // </div>';

            }
                // echo var_dump($noResult);
                if($noResult){
                    echo '<div class="jumbotron jumbotron-fluid">
                            <div class="container">
                                <p class="display-4">No Data Found</p>
                                <p class="lead"> Be the first person to give discription.</p>
                            </div>
                        </div> ';
                }
            ?>

        </div>
    </div>   
    <!-- </div> -->

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