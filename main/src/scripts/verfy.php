<?php
$email=$_POST['email'];
// IsSMTP();
$email->SMTPDebug = 1; // hata ayiklama: 1 = hata ve mesaj, 2 = sadece mesaj
$email->SMTPAuth = true;
$email->SMTPSecure = 'ssl'; // Güvenli baglanti icin ssl normal baglanti icin tls
$email->Host = "mail.siteismi.com"; // Mail sunucusuna ismi
$email->Port = 465; // Gucenli baglanti icin 465 Normal baglanti icin 587
$email->IsHTML(true);
$email->SetLanguage("tr", "phpmailer/language");
$email->CharSet  ="utf-8";
$email->Username = ""; // Mail adresimizin kullanicı adi
$email->Password = "PASSWORD"; // Mail adresimizin sifresi
$email->SetFrom("isim@siteismi.com", "Isim"); // Mail attigimizda gorulecek ismimiz
$email->AddAddress("ahmetmakal@msn.com"); // Maili gonderecegimiz kisi yani alici
$email->Subject = "Mesaj Basligi"; // Konu basligi
$email->Body = "Mesaj icerigi"; // Mailin icerigi
if(!$email->Send()){
echo "Mailer Error: ".$email->ErrorInfo;
} else {
echo "Mesaj gonderildi";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register for Pied Piper</title>
    <style>
        html, body {
            height: 100%;
            width: 100%;
        }

        body, body {
            display: flex;
        }

        h1 {
            margin: auto;
        }
    </style>
</head>
<body>

</body>
</html>
