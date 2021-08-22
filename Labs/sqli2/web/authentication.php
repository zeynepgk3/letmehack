
<?php
    include('connection.php');

    function secur($input) {

        $girdi = addslashes($input);
        return $girdi;
    }

    if(isset($_POST["form"]))   
    {
        $username = $_POST["kullaniciAdi"];
        $username = secur($username);
        $password = $_POST["parola"];
        $password = secur($password);
       
		
        $sql = "select * from Users where username = '$username' and passwd = '$password'";         
        $result = mysqli_query($conn, $sql); 
        
        if(!$result) {
            echo "Sen Kimsin ve ona ne yaptın ?";
        }

        else
        {
            $row = mysqli_fetch_array($result);

            if($row["username"]) {

                $message =  "<p>Hesabına hoşgeldin <b>" . ucwords($row["username"]) . "</b>, Umarım iyisindir seni görmek ne güzel :)</p>";
            }

            else
            {
                $message = "Evladım balık hafızalı olma zamanı değil hemen o parolayı hatırla";
            }

        }

        mysqli_close($conn);
    }
    echo $message; 
    
    
?>
