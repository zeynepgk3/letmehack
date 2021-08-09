<!DOCTYPE html>
<html lang="en">
<head>
    <style type="text/css">
        h1{
            
            text-align: center;
            font-size: xx-large;
        }

        p { 
            font-size:x-large;
            text-align: center;
        }

        #resim {
            text-align: center;
        }

        #ad {
            width: 100%;
            height: 40px;
            
        }
        #soyad {
            width: 100%;
            height: 40px;
        }

        #buton {
            width: 100%;
            height: 40px;
            
        }

        #form {
            background-color:lightcoral;
            margin: auto;
            width: 60%;
            border: 1px solid black;
            padding: 2rem;
            
            border-radius: 2rem 2rem;
        }
        #sonuc {
            text-align: center;
        }
        
    </style>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Falcı Abla</title>
</head>
<body>
    <h1 >FALCI ABLA</h1>
    <div id="resim">
        <img src="https://lh3.googleusercontent.com/9g5WyEE7qRKxb3i5D15PeXw0jwhJQWRPgIy8T6R8FMgaZ-GWoOr3Q7U7OftG5gICOYo" alt="Falcı Abla" style="width:200px;height:200px;">    

    </div>

<!-- HTML Kısmı -->

    <p>Adını ve soyadını gir, Falcı ablan isim falına baksın, gelicekte seni ne beklediğini gör :) </p>
    <br>
    <div>
        <form id="form" method="GET" action="<?php echo $_SERVER["PHP_SELF"];?>" >
            <div>
                <input type="text" id="ad" name="ad" placeholder="Adın">
            </div>
            <br>
            <div>
                <input type="text" id="soyad" name="soyad" placeholder="Soyadın" >
            </div>
            <br>
            <div>
                <button id="buton" type="submit" name="form" value="submit">FALIMA BAK</button>
            </div>
        </form>
    </div>
    <br />

<!-- PHP Kısmı -->
    <div id="sonuc">
        <?php
        
        if(isset($_GET["ad"]) && isset($_GET["soyad"])) {   
            $ad = $_GET["ad"];
            $soyad = $_GET["soyad"];    
    
            if($ad == "") {
                echo "Lütfen Ad kısmını doldurun";       
            }
    
            elseif ($soyad == "") {
                echo "Lütfen Soyad kısmını doldurun";
            }
    
            else { 
                $array = array('Adında M olan biri var arkandan konuşuyor dikkat et !','Yeni bir iş kuracaksın çok zengin olacaksın bir yıl içinde','Kısmetin açılmaya başlıyacak 5 gün sonra gözlerini dört aç','aslında dikkatli baktığımda yanlımışım bir şey yokmuş :/', 'Evli,Mutlu,Çocuklu günler çok yakın senin için', 'Bekarlık sultanlık derler senin kaderinde padişahlık var ' , );
                $rastgele=array_rand($array,1);
                
                echo "Sevgili " . guvenlik($ad) . " " . guvenlik($soyad) . " " . "seni burda görmek çok güzel ben Falcı Ablan. İsim falında bakıyorumda aslında çok ilginç şeyler görüyorum :" . " " . $array[$rastgele] ;   
            }
        }
        ?>
    </div>
    

<!-- Guvenlik -->
   
<?php
    function guvenlik($veri) {  
        $girdi = str_replace("<", "&lt;", $veri);
        $girdi = str_replace(">", "&gt;", $girdi);
        $girdi = urldecode($girdi);
        
        return $girdi;
    }
?>

<!-- Bypass için %3Ch1%3Eemrah%3C%2Fh1%3E gibi url encode kullanmalısın -->
<br>
<p>by emr4h</p>

</body>
</html>
