<?php
$insert=NULL;
$headers= True;
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$nickname=$_POST['nickname'];
$email=$_POST['email'];
$password=$_POST['password'];
// $confirm=$_POST['confirm'];
//DATABASE CONNECTION
// $conn=new mysqli('localhost','root','CokGizliParola','letmehack');
include "../dbcontrol.php";

$password = sha1($password); //Password Encrypted
if($conn->connect_error){
    die('Connection Failed:'.$conn->connect_error);
}
else{
    echo "Mysql veritabanı bağlantısı başarılı! ";
    $vkey=sha1(time().$firstname);//Key
}
    $password = sha1($password); //Password Encrypted
    echo $firstname,$lastname,$nickname,$email,$password;
    $stmt=$conn->prepare("INSERT INTO users(firstname,lastname,nickname,email,passwd) VALUES(?,?,?,?,?)");
    $stmt->bind_param("sssss",$firstname,$lastname,$nickname,$email,$password);


    // $stmt=$conn->prepare("INSERT INTO users2($firstname) VALUES(?)");
    // var_dump($stmt);
    // $stmt->bind_param("s","$firstname");


    // $stmt = $conn->prepare("INSERT INTO users2 (fn) VALUES (?)");
    // $stmt->bind_param("s", $firstname);

    // var_dump($stmt);
    $stmt->execute();
    echo "Registration Sucessfully";
    $stmt->close();
    $conn->close();
if(isset($_POST['register']))
{
    $email_id=$_POST['email'];
    $pass=$_POST['password'];
    $code=rand();


    $message = "Your Activation Code is ".$code."";
    $to=$email;
    $subject="Activation Code For Talkerscode.com";
    $from = 'your email';
    $body='Your Activation Code is '.$code.' Please Click On This link <a href="verify.php">Verify.php?id='.$db_id.'&code='.$code.'</a>to activate your account.';
    $headers = "From:".$from;
    mail($to,$subject,$body,$headers);

    echo "An Activation Code Is Sent To You Check You Emails";
}





?>