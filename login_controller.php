<?php
include("config.php");
if(isset($_GET['room_id']))
$_SESSION['room_id']=($_GET['room_id']);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    if($user=="")
    {
        $errmsg_arr="You must enter a username.";
        $errflag=true;

    }
    if($pass=="")
    {
        $errmsg_arr="You must enter a password.";
        $errflag=true;
    }
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt=$conn->prepare("select * from users where user_email= :user and user_password= :pass");
		$stmt->execute(array(
            ':user'=> $user,
		    ':pass'=> $pass
        ));
		$row=$stmt->fetch();
    $_SESSION['user_id']=$row['user_id'];
    
    $_SESSION['username'] = $user;
    if($row['user_admin']==1)
    {        
        $_SESSION['admin'] = true;
        // header('location: admin/index.php');
    }
    else if($row['user_admin']==0)
    {
        $_SESSION['admin'] = false;
        // header('location: index.php');
    }
    else
    {
        echo "NOO USR";
    }
}

if(isset($_SESSION['username'])){
if($_SESSION['admin']){
  header('Location: admin/index.php');
}else{
  header('Location: index.php');
}
}
?>