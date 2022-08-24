<?php
    $showError = "false";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        include 'partials/_dbconnect.php';
        $doc_name = $_POST['doc_name'];
        $doc_pic = $_POST['doc_pic'];
        // $ = $_POST[''];
        // $ = $_POST[''];
        // $ = $_POST[''];
        // $ = $_POST[''];
        // $ = $_POST[''];
        // $ = $_POST[''];
        // $ = $_POST[''];
        // $ = $_POST[''];
        // $ = $_POST[''];


        // Check whether this doctor exists
        $existSql = "select * from `doc_list` where doc_name = 'doc_name'";
        $result = mysqli_query($conn, $existSql);
        $numRows = mysqli_num_rows($result);
        if($numRows>0){
            $showError = "doctor name already in use";
        }
        else{
            // if($password == $cpassword){
            //     $hash = password_hash($password, PASSWORD_DEFAULT);
                $sql = "INSERT INTO `doc_list` (`doc_name`, 'doc_img', `doc_gender`, `doc_dob`, `doc_category`, `doc_designation`, `doc_discipline`, `doc_reg_council`, `doc_mob_no`, `doc_hospital_id`, `doc_time`, `dt`) 
                VALUES ('$doc_name', '$doc_pic', 'male', '2021-05-01', 'private', '123456789', 'arthopadics', 'icmr', '1400134829', '541', '2021-05-12 02:29:53.000000', current_timestamp());";
                $result = mysqli_query($conn, $sql);
                
                if($result){
                    $showAlert = true;
                    // header("Location: /welcome.php?signupsuccess=true");
                    exit();
                }

            }
            // else{
            //     $showError = "Passwords do not match"; 
                
            // }
        // }
        // header("Location: /welcome.php?signupsuccess=false&error=$showError");

    }
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script>
    var loadFile = function(event) {
        var image = document.getElementById('output');
        image.src = URL.createObjectURL(event.target.files[0]);
    };
    </script>
    <style>
    #profilepic {
        position: relative;
        width: 140px;
        height: 150px;
        border: 2px solid black;
        margin: 25px;
    }
    </style>
    <title>doc registration</title>
</head>

<body>
    <?php require 'partials/_nav.php';?>
    <h4 class="text-center py-2"> DOC-REGISTRATION</h4>
    <div class="col-sm-6 offset-md-3 my-3 border">
        
        <div class="container mx-1">
            <form class="row g-3" action="doc_reg.php" method="post">
                <h5 class="text-center ">: Basic Info :</h5>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="doc_name" placeholder="First Name" aria-label="First Name">
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="Last Name" aria-label="Last Name">
                </div>
                <div id="profilepic">
                    <p><input type="file" accept="image/*" name="doc_pic" id="doc_pic" onchange="loadFile(event)"
                            style="display: none;"></p>
                    <p><label for="doc_pic" style="cursor: pointer;"><img src="img/dp1.jpg" class="card-img"
                                alt="Upload Photo"></label></p>
                    <!-- <p><img id="output" width="140" height="150"/></p> -->
                </div>
                <div class="col-md-6 mx-2">
                    <h6>Gender :</h6>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                            value="option1">
                        <label class="form-check-label" for="inlineRadio1">Female</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                            value="option2">
                        <label class="form-check-label" for="inlineRadio2">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                            value="option2">
                        <label class="form-check-label" for="inlineRadio2">Other</label>
                    </div>
                    <div class="my-3 mb-3">
                        <label class="date" for="myDate">DOB :</label>
                        <input type="date" id="myDate" value="YYYY-MM-DD">
                    </div>
                    <h6>Category :</h6>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                            value="option1">
                        <label class="form-check-label" for="inlineRadio1">Gov./Public</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                            value="option2">
                        <label class="form-check-label" for="inlineRadio2">Private</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                            value="option2">
                        <label class="form-check-label" for="inlineRadio2">Both</label>
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="inputdesignation" class="form-label"> <h6>Designation/Post :</h6></label>
                    <select id="inputdesignation" class="form-select">
                        <option selected>Choose...</option>
                        <option>Medical Supritendent</option>
                        <option>Deputy Medical Supritendent</option>
                        <option>Chief Medical Officer</option>
                        <option>Senior Medical Officer</option>
                        <option> Medical Officer</option>
                        <option>Director</option>
                        <option>Principal</option>
                        <option>General Physician</option>
                        <option>General Surgeon</option>
                        <option>Cardiac Surgeon</option>
                        <option>Others</option>
                    </select>
                </div>
                <div class="col-md-9">
                    <h6>Discipline :</h6>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                            value="option1">
                        <label class="form-check-label" for="inlineRadio1">Allopathy</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                            value="option2">
                        <label class="form-check-label" for="inlineRadio2">Dental</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                            value="option3">
                        <label class="form-check-label" for="inlineRadio2">Ayurveda</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                            value="option4">
                        <label class="form-check-label" for="inlineRadio1">Yoga</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                            value="option5">
                        <label class="form-check-label" for="inlineRadio2">Naturopathy</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                            value="option6">
                        <label class="form-check-label" for="inlineRadio2">Unani</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                            value="option7">
                        <label class="form-check-label" for="inlineRadio1"></label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                            value="option8">
                        <label class="form-check-label" for="inlineRadio2"></label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                            value="option9">
                        <label class="form-check-label" for="inlineRadio2">Other</label>
                    </div>
                </div>
                <div class="col-md-3">
                    <h6>Registration With :</h6>
                </div>
                <div class="col-md-6">    
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">Medical Council of India (MCI)</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option2">
                        <label class="form-check-label" for="inlineCheckbox1">Dental Council of India (DCI)</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option3">
                        <label class="form-check-label" for="inlineCheckbox1">Central Council of Indian Medicine</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option4">
                        <label class="form-check-label" for="inlineCheckbox1">Central Council of Homeopathy
                            (CCH)</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option5">
                        <label class="form-check-label" for="inlineCheckbox1">State Medical Councils/Boards</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option6">
                        <label class="form-check-label" for="inlineCheckbox1">Other</label>
                    </div>
                </div>
                
                   
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail4">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Password</label>
                    <input type="password" class="form-control" id="inputPassword4">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Address</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Address 2</label>
                    <input type="text" class="form-control" id="inputAddress2"
                        placeholder="Apartment, studio, or floor">
                </div>
                <div class="col-md-6">
                    <label for="inputCity" class="form-label">City</label>
                    <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="col-md-4">
                    <label for="inputState" class="form-label">State</label>
                    <select id="inputState" class="form-select">
                        <option selected>Select...</option>
                        <option>Andhra Pradesh</option>
                        <option>Arunachal Pradesh</option>
                        <option>Assam</option>
                        <option>Bihar</option>
                        <option>Chhattisgarh</option>
                        <option>Goa</option>
                        <option>Gujarat</option>
                        <option>Haryana</option>
                        <option>Himachal Pradesh</option>
                        <option>Jharkhand</option>
                        <option>Karnataka</option>
                        <option>Kerala</option>
                        <option>Madhya Pradesh</option>
                        <option>Maharashtra</option>
                        <option>Manipur</option>
                        <option>Meghalaya</option>
                        <option>Mizoram</option>
                        <option>Nagaland</option>
                        <option>Odisha</option>
                        <option>Punjab</option>
                        <option>Rajasthan</option>
                        <option>Sikkim</option>
                        <option>Tamil Nadu</option>
                        <option>Telangana</option>
                        <option>Tripura</option>
                        <option>Uttar Pradesh</option>
                        <option>Uttarakhand</option>
                        <option>West Bengal</option>
                        <option>Andaman and Nicobar Island</option>
                        <option>Chandigarh</option>
                        <option>Dadra and Nagar Haveli and Daman and Diu</option>
                        <option>Delhi</option>
                        <option>Ladakh</option>
                        <option>Lakshadweep</option>
                        <option>Jammu and Kashmir</option>
                        <option>Puducherry</option>

                    </select>
                </div>
                <div class="col-md-2">
                    <label for="inputZip" class="form-label">Pin Code</label>
                    <input type="text" class="form-control" id="inputZip">
                </div>
            
                <!-- <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Check me out
                        </label>
                    </div>
                </div> -->
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    -->
</body>

</html>