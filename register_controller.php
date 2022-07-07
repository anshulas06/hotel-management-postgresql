<?php
include("config.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $email=$_POST['email'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $dob=$_POST['dob'];
    $phone=$_POST['phone'];
    $pass=$_POST['pass'];
    
    $query="insert into users(user_email, user_fname, user_lname, user_dob, user_phone, user_password) values(:email, :fname, :lname, :dob, :phone, :pass)";
    $stmt=$conn->prepare($query);
    
    $stmt->execute(array(
        ":email"=> $email,
        ":fname"=> $fname,
        ":lname"=> $lname,
        ":dob"=> $dob,
        ":phone"=> $phone,
        ":pass"=> $pass
    ));

    $_SESSION['user_id'] = $conn->lastInsertId();
    $_SESSION['username'] = $email;
    $_SESSION['firstname'] = $fname;
    $_SESSION['lastname'] = $lname;
    // echo $_SESSION['username'];
    header('location: index.php');
}

?>