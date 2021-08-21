<?php
$email=$_POST['email'];
$password=$_POST['password'];
if($_POST)
{
    include "./dbcontrol.php";
    //Username and Password sent from Form
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, "passwd");
    $password = sha1($password);
    $sql = "SELECT * FROM users WHERE email='$email' AND '$password'";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($query);
    $res=mysqli_num_rows($query);

    //If result match $username and $password Table row must be 1 row
    if($res == 1)
    {
        setcookie($row['vkey'],serialize($row), time()+3600);
        // echo $_COOKIE[$row['firstname']];
        $user_info=unserialize($_COOKIE[$row['vkey']]);
        header("Location: ./index.php",TRUE,301);
    }
    else
    {
        setcookie($row['vkey'],serialize($row), time()+3600);
        $user_info=unserialize($_COOKIE[$row['vkey']]);


        // echo $_COOKIE[$row['lastname']];
        echo "Invalid Username or Password";
    }
}
?>