<?php
$insert=NULL;
$headers= True;
$firstname=$_POST['firstname'];
$surname=$_POST['surname'];
$email=$_POST['email'];
$password=$_POST['password'];
$confirim=$_POST['confirim'];
//DATABASE CONNECTION
$conn=new mysqli('localhost','root','','letmehack');
$password = sha1($password); //Password Encrypted
if($conn->connect_error){
    die('Connection Failed:'.$conn->connect_error);
}
else{
    $vkey=sha1(time().$firstname);//Key
}
    $password = sha1($password); //Password Encrypted
    $stmt=$conn->prepare("insert into registration($firstname,$surname,$email,$password,$confirim,$vkey) values(?,?,?,?,?,?)");
    $stmt->bind_param("s,s,s,i,i","$firstname,$surname,$email,$password,$confirim,$vkey");
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