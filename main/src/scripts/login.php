<?php
$email=$_POST['email'];
$password=$_POST['password'];
if($_POST)
{
    $conn=new mysqli('localhost','root','','letmehack');
    //Username and Password sent from Form
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $password = md5($password);
    $sql = "SELECT * FROM userpass WHERE email='$email' AND '$password'";
    $query = mysqli_query($conn, $sql);
    $res=mysqli_num_rows($query);

    //If result match $username and $password Table row must be 1 row
    if($res == 1)
    {
        header("Location: welcome.php");
    }
    else
    {
        echo "Invalid Username or Password";
    }
}
?>

<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>LOGIN</title>

    <style>
        body{
            background-color: #efeee8;
            font-family: 'Lato', sans-serif;
        }
        @import url('https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,700&family=Roboto:ital,wght@1,100&display=swap');
        .login{
            position: fixed;
            top: 0;
            left: 0;
            padding: 100px;
            height: 100%;
            background-color: #fff;
            box-shadow: 0 5px 10px 0 rgba(0,0,0,.35);
        }
        .login-form{
            display: table;
            margin: auto;
        }
        .title{
            font-weight: 800;
            font-size: 30px;
            font-family: 'Lato', sans-serif;
            text-align: center;

        }
        .form-group{
            margin-bottom: 25px;
        }
        .form-control{
            width: 250px;
            padding: 10px;
            color: antiquewhite;
            border: 2px solid #ccc;
            background-color: maroon;

        }
        .btn{
            background-color: indianred;
            color:#fff;
            cursor: pointer;
            font-weight: 700;
            font-size: 16px;
            width: 150px;
            height: 50px;
            border-radius: 3px;
            border:none;

        }
        .form-control:focus{
            border: 3px solid #3557ff;

        }

    </style>
</head>
<body>
<div class="login">
    <h2 class="title">LOGİN</h2>
    <form action="login.php" method="post">
        <div class="login-form">
            <b>E-Mail</b>
            <div class="form-group">

                <input class="form-control" type="email" name="email" id="email">
                <?php
                if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                    echo "$email mail adresi geçerli bir adrestir.";
                }else{
                    echo "$email mail adresi geçerli bir adres değildir.";
                }
                ?>
            </div>
            <b>Password</b>
            <div class="form-group">

                <input class="form-control" type="password" name="password" id="password">
            </div>
            <div class="form-group">
                <button class="btn">LOGIN</button>
            </div>
            <div class="form-group">
                <button class="btn">REGISTER</button>
            </div>

        </div>

    </form>

</div>






</body>
</html>
