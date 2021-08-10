<?php
session_start();
$lab=$_GET['lab'];
if(!isset($_SESSION['uid'])){
    $_SESSION['uid'] = md5(uniqid());
}
if (isset($_POST['htmllab1'])){
    if ($_SESSION[$_SESSION['uid']]['up']==1) {
        exec("sudo /usr/local/bin/docker rm -rf ".$_SESSION['uid']."-htmllab1",$output,$retval);
        var_dump($output);
        $_SESSION[$_SESSION['uid']]['up']=0;
    } else {
        exec("sudo /usr/local/bin/docker run --rm -d --name ".$_SESSION['uid']."-htmllab1 -p 0:80 htmllab" ,$output,$retval);
        var_dump($output);
        $_SESSION[$_SESSION['uid']]['up']=1;
    }

}
if ($_SESSION[$_SESSION['uid']]['up']) {
    exec("sudo /usr/local/bin/docker inspect --format='{{range \$p, \$conf := .NetworkSettings.Ports}}{{(index \$conf 0).HostPort}} {{end}}' " . $_SESSION['uid']. "-htmllab1",$port,$retval);
    var_dump($output);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <style>
       
    </style>
 
</head>
<body>  
    <form action="?"name="htmllab1" method="POST">
        <?php
           if (!$_SESSION[$_SESSION['uid']]['up']){
        ?>
            <button type="submit" name="htmllab1">Lab1 Başlat</button>
        <?php
           }else{
        ?>
            <button type="submit" name="htmllab1">Lab1 Kapat</button>
        <?php
           }
        ?>
    </form>
           <br><br><br>
        <?php
           if ($_SESSION[$_SESSION['uid']]['up']){
        ?>
        <br><br>
        <a href="http://localhost:<?php echo $port[0]; ?>/htmlinjection.php">http://localhost:<?php echo $port[0]; ?> </a>
        <?php
           }
        ?>

    
    <button><a  href="http://localhost:8080" target="_blank">Admin Panel</a></button>
    <button><a  href="dbcontrol.php" target="_blank">VeriTabanı Bağlantı Kontrolü</a></button>
    
</body>
</html>