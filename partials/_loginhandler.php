<?php
$showError = "false";
$login = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    $sql = "Select * from users where username='$username'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if($num == 1){
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row['password'])){
            session_start();
            $login = true;
            $sql0 = "INSERT INTO `login` (`username`, `password`, `dt`) VALUES ('$username', '$password', current_timestamp())";
            $result0 = mysqli_query($conn, $sql0);
            $_SESSION['loggedin'] = true;
            $_SESSION['sno'] = $row['sno'];
            $_SESSION['username'] = $username;
            echo "logged in". $username;
            header("Location: /disease_cat.php");
        } 
       
    }
    header("Location: /welcome.php");
      
}

?>