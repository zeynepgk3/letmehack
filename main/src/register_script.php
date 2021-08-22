<?php
$insert = NULL;
$headers = True;
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$nickname = $_POST['nickname'];
$email = $_POST['email'];
$password = $_POST['password'];

include "./dbcontrol.php";

$password = sha1($password); //Password Encrypted
if ($conn->connect_error) {
    die('Connection Failed:' . $conn->connect_error);
} else {
    // echo "Mysql veritabanı bağlantısı başarılı! ";
    // $vkey = sha1(time() . $firstname); //Key
}
$password = sha1($password); //Password Encrypted
$isExistEmail = mysqli_query($conn, "SELECT *FROM users  WHERE email='$email'");
$isExistNick = mysqli_query($conn, "SELECT *FROM users  WHERE nickname='$nickname'");


if (mysqli_num_rows($isExistEmail) > 0) {
    $status = 'Bu mail ile zaten kayıt yapıldı. Tekrar deneyiniz';
    $status_icon = "fa-times";
    $isRegistered=false;
} else if (mysqli_num_rows($isExistNick) > 0) {
    $status = 'Bu nick kullanılıyor. Başka bir tane deneyiniz.';
    $status_icon = "fa-times";
    $isRegistered=false;
} else {
    $stmt = $conn->prepare("INSERT INTO users(firstname,lastname,nickname,email,passwd) VALUES(?,?,?,?,?)");
    $stmt->bind_param("sssss", $firstname, $lastname, $nickname, $email, $password);
    $stmt->execute();
    $status = 'Kayıt başarılı! Şimdi giriş yapabilirsin.';
    $isRegistered=true;
    $status_icon = "fa-check";
    $stmt->close();
}

$conn->close();
if (isset($_POST['register'])) {
    $email_id = $_POST['email'];
    $pass = $_POST['password'];
    $code = rand();

    $message = "Your Activation Code is " . $code . "";
    $to = $email;
    $subject = "Activation Code For Talkerscode.com";
    $from = 'your email';
    $body = 'Your Activation Code is ' . $code . ' Please Click On This link <a href="verify.php">Verify.php?id=' . $db_id . '&code=' . $code . '</a>to activate your account.';
    $headers = "From:" . $from;
    mail($to, $subject, $body, $headers);

    // echo "An Activation Code Is Sent To You Check You Emails";
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include "./layout/header.php";
    ?>
    <section id="main-container" class="main-container">
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-sm-12 m-auto text-center">

                    <div class="comments-form border-box">
                        <i class="fas <?php echo $status_icon; ?> text-red fa-10x"></i>
                        <br>
                        <h6><?php echo $status ?></h6>
                        <script>
                            let isRegistered=<?php echo $isRegistered ?>;
                            if (isRegistered) {
                                setTimeout(function() {
                                    window.location="./index.php";
                                }, 1500);
                            }else{
                                setTimeout(function() {
                                window.history.back();
                            }, 3000);
                            }
                            
                        </script>
                    </div><!-- Comments form end -->

                </div><!-- Main row end -->

            </div><!-- Conatiner end -->
    </section>
</body>
</html>