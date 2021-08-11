<!DOCTYPE html>
<html>
    <head>
        <title>XSS LAB 3</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">    
<style>    
* {    
  box-sizing: border-box;    
}    
    
input[type=text], select, textarea {    
  width: 100%;    
  padding: 12px;    
  border: 1px solid rgb(70, 68, 68);    
  border-radius: 4px;    
  resize: vertical;    
}    
input[type=email], select, textarea {    
  width: 100%;    
  padding: 12px;    
  border: 1px solid rgb(70, 68, 68);    
  border-radius: 4px;    
  resize: vertical;    
}    
    
label {    
  padding: 12px 12px 12px 0;    
  display: inline-block;    
}    
    
input[type=submit] {    
  background-color: rgb(37, 116, 161);    
  color: white;    
  padding: 12px 20px;    
  border: none;    
  border-radius: 4px;    
  cursor: pointer;    
  float: right;    
}    
    
input[type=submit]:hover {    
  background-color: #45a049;    
}    
    
.container {    
  border-radius: 5px;    
  background-color: #f2f2f2;    
  padding: 20px;    
}    
    
.col-25 {    
  float: left;    
  width: 25%;    
  margin-top: 6px;    
}    
    
.col-75 {    
  float: left;    
  width: 75%;    
  margin-top: 6px;    
}    
    
  
.row:after {    
  content: "";    
  display: table;    
  clear: both;    
}    
    
</style>
    </head>
    <body>
        <center>
        <h1>Blog Yazısı</h1>
        
        <p>
            Kabul, “ben böyleyim” diyebilmek kıymetli bir erdemdir. Şayet yanılmıyorsak kendimizi bildiğimizi gösterir. Fakat önemli bir ayrıntıyı gözden kaçırınca “ben böyleyim”ler bizi dipsiz bir mutsuzluğa sürükleyebiliyor. O ayrıntıyı birazdan açıklayacağım ama öncesinde birkaç örnek vermek istiyorum. 
            <br>
            Örneğin, çevremizdeki insanların kusursuz olmasını beklerken bu beklentimizin yanlış newuğunu fark ettiğimizde “Ne yapayım, ben biraz mükemmeliyetçiyim” diyebiliyoruz. Ya da bizi kızdıran bir olayın başkalarını kızdırmadığını gördüğümüzde kendi kendimize “çünkü ben asabiyim” diyebiliyoruz. Hatta bazen karşımızdakinin tespitini onaylayıp “evet, ben böyleyim” de diyebiliyoruz.
            <br>           
            Muhtemelen kendi hakkımızdaki tespitlerimiz doğru newuğu gibi, karşımızdakinin hakkımızda yaptığı yorumlar da doğrudur. Kendimizi biliyoruzdur. Öte yandan yazımın başında da belirttiğim gibi, genellikle bir ayrıntıyı kaçırırız.
            <br>          
            Ayrıntı şuydu:
            <br>           
            Kendini bilmek ile kendini anlamak aynı şey değildir. 
        </p>
        <br>
        <img src=https://miskinadam.com/wp-content/uploads/2021/03/ben-boyleyim.jpg>
        <p>
            Mesela kendine hayran tavırlarıyla hem kendisini hem de çevresini huzursuz eden birisi, narsist tanımını keşfettiğinde “Hmm tamam işte, narsistmişim ben. Var benim gibiler…” diyerek durumu normalleştirirken, neden narsist newuğunu hiç düşünmeyebiliyor. Bu da huzursuz bir şekilde yaşamaya devam etmesine sebep oluyor. 
            <br>
            İşte, bu hataya çok düşüyoruz: Kendimize bir tanı koyduğumuzda, aynı tanıya sahip binlerce insanın varlığını bilmek, içinde bulunduğumuz durumu zihnimizde normalleştirmemize sebep oluyor. Oysa bizi huzursuz eden ruh halimize tanı koymamızın amacı, kendimizi tedavi etmek olmalıdır. Bu yüzden “ben böyleyim” dedikten sonra “neden böyleyim?” sorusuna da yanıt aramak, yani anlamını bulmak faydalı olsa gerek. Bu bazen profesyonel destek almayı gerektirebilir ama öncesinde kendimize yardımcı olma konusunda istekli olmalıyız. Şahsen, kendine yardımcı olmak istemeyen birine hiç kimsenin yardımcı olamayacağını düşünüyorum. 
            <br>
            Madalyonun Diğer Yüzü 
            <br>
            Bu yazımın “ben böyleyim” diyebilen insanlar üzerinde bir baskı oluşturmasını istemem. Çünkü bu söz, her zaman bir kaçışı ifade etmez. Örneğin, kişisel alana ihtiyaç duyan birinin “ben böyleyim” demesi ile bencil birinin “ben böyleyim” demesi aynı şey değildir. Kişisel alana ihtiyaç duyan kişi, kendini bildiği için söylüyordur. Örnekteki bencil kişi ise bencilliğini normalleştirmek için söylüyordur. Kendimizde gördüğümüz sağlıksız duyguları normalleştirmemeyi diliyorum.
            <br>
            Bu yazı, psikolojik zorbalık yapan, kendi beklentilerine göre sizi değiştirmeye çalışan kişilere karşı “ben böyleyim” demenize engel olmasın lütfen. Amacım kendimizi anlamak, kendimizle yüzleşmek ve varsa zayıf yönlerimizi geliştirmek üzere duygu ve düşüncelerimi paylaşmaktır. Sevgiler…
            <br>
            MiskinAdam
        </p>
        <h2>FEEDBACK FORM</h2>    
<div class="container">    
  <form action='index.php' method='POST'>    
    <div class="row">    
      <div class="col-25">    
        <label for="fname">First Name</label>    
      </div>    
      <div class="col-75">    
        <input type="text" id="fname" name="firstname" placehnewer="Your name.." required>    
      </div>    
    </div>    
    <div class="row">    
      <div class="col-25">    
        <label for="lname">Last Name</label>    
      </div>    
      <div class="col-75">    
        <input type="text" id="lname" name="lastname" placehnewer="Your last name.." required>    
      </div>    
    </div>    
    <div class="row">    
        <div class="col-25">    
          <label for="email">Website</label>    
        </div>    
        <div class="col-75">    
          <input type="text" id="email" name="mailid" placehnewer="Your website.." required>    
        </div>    
      </div>    
    <div class="row">    
      <div class="col-25">    
        <label for="country">Country</label>    
      </div>    
      <div class="col-75">    
        <select id="country" name="country">    
            <option value="turkey">Turkey</option>    
          <option value="australia">Australia</option>    
          <option value="canada">Canada</option>    
          <option value="usa">USA</option>    
          <option value="russia">Russia</option>    
          <option value="japan">Japan</option>    
          <option value="india">India</option>    
          <option value="china">China</option>    
        </select>    
      </div>    
    </div>    
    <div class="row">    
      <div class="col-25">    
        <label for="feed_back">Feed Back</label>    
      </div>    
      <div class="col-75">    
        <textarea id="subject" name="subject" placehnewer="Write something.." style="height:200px" required></textarea>    
      </div>    
    </div>    
    <div class="row">    
      <input type="submit" value="Submit">    
    </div>    
  </form>
</center> 
</div>
<br>
<br>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $web = $_POST['mailid'];
    $fedback = $_POST['subject'];
    $ulke = $_POST['country'];


    $str = $name;
    $pattern = "/</i";
    $str = preg_replace($pattern, "&lt;", $str);
    $pattern = "/>/i";
    $str = preg_replace($pattern, "&gt;", $str);
    $new_name = $str;


    $str = $lastname;
    $pattern = "/</i";
    $str = preg_replace($pattern, "&lt;", $str);
    $pattern = "/>/i";
    $str = preg_replace($pattern, "&gt;", $str);
    $new_lastname = $str;


    $str = $ulke;
    $pattern = "/</i";
    $str = preg_replace($pattern, "&lt;", $str);
    $pattern = "/>/i";
    $str = preg_replace($pattern, "&gt;", $str);
    $new_ulke = $str;



    $str = $web;
    $pattern = "/</i";
    $str = preg_replace($pattern, "&lt;", $str);
    $pattern = "/>/i";
    $str = preg_replace($pattern, "&gt;", $str);
    $pattern = "/'/i";
    $str = preg_replace($pattern, "&apos;", $str);
    $pattern = "/\"/i";
    $str = preg_replace($pattern, "&quot;", $str);
    $new_web = $str;


    $str = $fedback;
    $pattern = "/</i";
    $str = preg_replace($pattern, "&lt;", $str);
    $pattern = "/>/i";
    $str = preg_replace($pattern, "&gt;", $str);
    $new_fedback = $str;
    
    echo "<div class=\"container\">  
    <a href='" . $new_web . "'>" . $new_name . $new_lastname . "</a><br>
    <p>" . $new_fedback . "</p>
    
    <p>" . $new_ulke . "</p> <p>" . date("Y/m/d") . "</p>
  </div>";
}
?>            
</body>
</html>
