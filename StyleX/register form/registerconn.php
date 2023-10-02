<?php

 if($_SERVER['REQUEST_METHOD']=='POST')
 {
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    //connect to database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "stylex";
    // making connection 
    $conn=mysqli_connect($servername,$username,$password,$database);
    if(!$conn){
        die(' Sorry! There is Some Problem');
    }
    else{
      
   //insert data into the table
   $sql = "INSERT INTO `register` (`fname`,`lname`, `email`, `pass`) VALUES ( '$fname','$lname','$email','$pass')";
   $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "
        <div class='alert alert-warning alert-dismissible fade show' role='alert'>
        <strong>Hey!</strong> You Register Successfully;
        <button type='submit' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>";
      
    } 
    else {
        echo "The Record Has Been Inserted Successfully Because Of the Error " . mysqli_error($conn);
    }
 }
 } 
?>