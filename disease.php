<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>diasease</title>
</head>

<body>
    <?php require 'partials/_nav.php';?>
    <?php require 'partials/_dbconnect.php'?>
    <div class="col-sm-6 offset-md-3 border">
        <ul class="nav nav-tabs">
            <li class="nav-item mx-0.5">
                <a class="nav-link active" data-bs-toggle="tab" href="#overview">Overview</a>
            </li>
            <li class="nav-item mx-0.5">
                <a class="nav-link" data-bs-toggle="tab" href="#symptoms">symptoms</a>
            </li>
            <li class="nav-item mx-0.5">
                <a class="nav-link" data-bs-toggle="tab" href="#causes">Causes</a>
            </li>
            <li class="nav-item mx-0.5">
                <a class="nav-link" data-bs-toggle="tab" href="#medication">Medication</a>
            </li>
            <li class="nav-item mx-0.5">
                <a class="nav-link" data-bs-toggle="tab" href="#diagnosis">Diagnosis</a>
            </li>
            <li class="nav-item mx-0.5">
                <a class="nav-link" data-bs-toggle="tab" href="#complications">Complications</a>
            </li>
            <li class="nav-item mx-0.5">
                <a class="nav-link" data-bs-toggle="tab" href="#precaution">Precaution</a>
            </li>
            <li class="nav-item mx-0.5">
                <a class="nav-link" data-bs-toggle="tab" href="#diet">Diet Plan</a>
            </li>
        </ul>

        <div class="container mb-5" id="disease_info">
            <!-- <h1 class="py-2"> DISEASE </h1> -->
            <div class="tab my-3 "  id="overview">
                <img src="https://source.unsplash.com/400x300/?  ,disease" class="col-md-4 offset-md-4 float-md-end mb-3 ms-md-3"
                alt="...">
                <!-- <p><b><h2>' . $name . '</h2></b></p> -->
                <p> 
                <?php
                    $id = $_GET['id'];
                    $sql = "SELECT * FROM `disease_list` WHERE disease_id=$id"; 
                    $result = mysqli_query($conn, $sql);
                    $noResult = true;
                    while($row = mysqli_fetch_assoc($result)){
                        $noResult = false;
                        $disease_id = $row['disease_id'];
                        $name = $row['disease_name'];
                        $overview = $row['disease_desc'];
                        echo "$overview";
                       // echo var_dump($noResult);
                        if($noResult){
                                echo '<div class="jumbotron jumbotron-fluid">
                                        <div class="container">
                                            <p class="display-4">No Data Found</p>
                                            <p class="lead"> Be the first person to give discription.</p>
                                        </div>
                                    </div> ';
                            }
                    }        
                ?>
            </div>
            <div class="tab my-3 "  id="symptoms">
                <img src="https://source.unsplash.com/400x300/?  ,disease" class="col-md-4 offset-md-4 float-md-end mb-3 ms-md-3"
                alt="...">
                <!-- <p><b><h2>' . $name . '</h2></b></p> -->
                <p> 
                <?php
                    $id = $_GET['id'];
                    $sql = "SELECT * FROM `disease_list` WHERE disease_id=$id"; 
                    $result = mysqli_query($conn, $sql);
                    $noResult = true;
                    while($row = mysqli_fetch_assoc($result)){
                        $noResult = false;
                        $disease_id = $row['disease_id'];
                        $name = $row['disease_name'];
                        $overview = $row['disease_symp'];
                        echo "$overview";
                       // echo var_dump($noResult);
                        if($noResult){
                                echo '<div class="jumbotron jumbotron-fluid">
                                        <div class="container">
                                            <p class="display-4">No Data Found</p>
                                            <p class="lead"> Be the first person to give discription.</p>
                                        </div>
                                    </div> ';
                            }
                    }        
                ?>
            </div>
            <div class="tab my-3 "  id="causes">
                <img src="https://source.unsplash.com/400x300/?  ,disease" class="col-md-4 offset-md-4 float-md-end mb-3 ms-md-3"
                alt="...">
                <!-- <p><b><h2>' . $name . '</h2></b></p> -->
                <p> 
                <?php
                    $id = $_GET['id'];
                    $sql = "SELECT * FROM `disease_list` WHERE disease_id=$id"; 
                    $result = mysqli_query($conn, $sql);
                    $noResult = true;
                    while($row = mysqli_fetch_assoc($result)){
                        $noResult = false;
                        $disease_id = $row['disease_id'];
                        $name = $row['disease_name'];
                        $overview = $row['disease_cause'];
                        echo "$overview";
                       // echo var_dump($noResult);
                        if($noResult){
                                echo '<div class="jumbotron jumbotron-fluid">
                                        <div class="container">
                                            <p class="display-4">No Data Found</p>
                                            <p class="lead"> Be the first person to give discription.</p>
                                        </div>
                                    </div> ';
                            }
                    }        
                ?>
            </div>
            <div class="tab my-3 "  id="medication">
                <img src="https://source.unsplash.com/400x300/?  ,disease" class="col-md-4 offset-md-4 float-md-end mb-3 ms-md-3"
                alt="...">
                <!-- <p><b><h2>' . $name . '</h2></b></p> -->
                <p> 
                <?php
                    $id = $_GET['id'];
                    $sql = "SELECT * FROM `disease_list` WHERE disease_id=$id"; 
                    $result = mysqli_query($conn, $sql);
                    $noResult = true;
                    while($row = mysqli_fetch_assoc($result)){
                        $noResult = false;
                        $disease_id = $row['disease_id'];
                        $name = $row['disease_name'];
                        $overview = $row['disease_desc'];
                        echo "$overview";
                       // echo var_dump($noResult);
                        if($noResult){
                                echo '<div class="jumbotron jumbotron-fluid">
                                        <div class="container">
                                            <p class="display-4">No Data Found</p>
                                            <p class="lead"> Be the first person to give discription.</p>
                                        </div>
                                    </div> ';
                            }
                    }        
                ?>
            </div>
            <div class="tab my-3 "  id="diagnosis">
                <img src="https://source.unsplash.com/400x300/?  ,disease" class="col-md-4 offset-md-4 float-md-end mb-3 ms-md-3"
                alt="...">
                <!-- <p><b><h2>' . $name . '</h2></b></p> -->
                <p> 
                <?php
                    $id = $_GET['id'];
                    $sql = "SELECT * FROM `disease_list` WHERE disease_id=$id"; 
                    $result = mysqli_query($conn, $sql);
                    $noResult = true;
                    while($row = mysqli_fetch_assoc($result)){
                        $noResult = false;
                        $disease_id = $row['disease_id'];
                        $name = $row['disease_name'];
                        $overview = $row['disease_diagno'];
                        echo "$overview";
                       // echo var_dump($noResult);
                        if($noResult){
                                echo '<div class="jumbotron jumbotron-fluid">
                                        <div class="container">
                                            <p class="display-4">No Data Found</p>
                                            <p class="lead"> Be the first person to give discription.</p>
                                        </div>
                                    </div> ';
                            }
                    }        
                ?>
            </div>
            <div class="tab my-3 "  id="complications">
                <img src="https://source.unsplash.com/400x300/?  ,disease" class="col-md-4 offset-md-4 float-md-end mb-3 ms-md-3"
                alt="...">
                <!-- <p><b><h2>' . $name . '</h2></b></p> -->
                <p> 
                <?php
                    $id = $_GET['id'];
                    $sql = "SELECT * FROM `disease_list` WHERE disease_id=$id"; 
                    $result = mysqli_query($conn, $sql);
                    $noResult = true;
                    while($row = mysqli_fetch_assoc($result)){
                        $noResult = false;
                        $disease_id = $row['disease_id'];
                        $name = $row['disease_name'];
                        $overview = $row['disease_desc'];
                        echo "$overview";
                       // echo var_dump($noResult);
                        if($noResult){
                                echo '<div class="jumbotron jumbotron-fluid">
                                        <div class="container">
                                            <p class="display-4">No Data Found</p>
                                            <p class="lead"> Be the first person to give discription.</p>
                                        </div>
                                    </div> ';
                            }
                    }        
                ?>
            </div>
            <div class="tab my-3 "  id="precaution">
                <img src="https://source.unsplash.com/400x300/?  ,disease" class="col-md-4 offset-md-4 float-md-end mb-3 ms-md-3"
                alt="...">
                <!-- <p><b><h2>' . $name . '</h2></b></p> -->
                <p> 
                <?php
                    $id = $_GET['id'];
                    $sql = "SELECT * FROM `disease_list` WHERE disease_id=$id"; 
                    $result = mysqli_query($conn, $sql);
                    $noResult = true;
                    while($row = mysqli_fetch_assoc($result)){
                        $noResult = false;
                        $disease_id = $row['disease_id'];
                        $name = $row['disease_name'];
                        $overview = $row['disease_desc'];
                        echo "$overview";
                       // echo var_dump($noResult);
                        if($noResult){
                                echo '<div class="jumbotron jumbotron-fluid">
                                        <div class="container">
                                            <p class="display-4">No Data Found</p>
                                            <p class="lead"> Be the first person to give discription.</p>
                                        </div>
                                    </div> ';
                            }
                    }        
                ?>
            </div>
            <div class="tab my-3 "  id="diet">
                <img src="https://source.unsplash.com/400x300/?  ,disease" class="col-md-4 offset-md-4 float-md-end mb-3 ms-md-3"
                alt="...">
                <!-- <p><b><h2>' . $name . '</h2></b></p> -->
                <p> 
                <?php
                    $id = $_GET['id'];
                    $sql = "SELECT * FROM `disease_list` WHERE disease_id=$id"; 
                    $result = mysqli_query($conn, $sql);
                    $noResult = true;
                    while($row = mysqli_fetch_assoc($result)){
                        $noResult = false;
                        $disease_id = $row['disease_id'];
                        $name = $row['disease_name'];
                        $overview = $row['disease_desc'];
                        echo "$overview";
                       // echo var_dump($noResult);
                        if($noResult){
                                echo '<div class="jumbotron jumbotron-fluid">
                                        <div class="container">
                                            <p class="display-4">No Data Found</p>
                                            <p class="lead"> Be the first person to give discription.</p>
                                        </div>
                                    </div> ';
                            }
                    }        
                ?>
            </div>
           

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