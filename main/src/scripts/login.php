<?php
$email=$_POST['email'];
$password=$_POST['password'];
if($_POST)
{
    include "../dbcontrol.php";
    echo $email,$password;
    //Username and Password sent from Form
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, "passwd");
    $password = sha1($password);
    $sql = "SELECT * FROM users WHERE email='$email' AND '$password'";
    $query = mysqli_query($conn, $sql);
    $res=mysqli_num_rows($query);

    //If result match $username and $password Table row must be 1 row
    if($res == 1)
    {
        header("Location: ../index.php",TRUE,301);


    }
    else
    {
        echo "Invalid Username or Password";
    }
}
?>