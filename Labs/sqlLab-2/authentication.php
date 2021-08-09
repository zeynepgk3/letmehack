
<?php
    include('connection.php');  

    function security($input) {

        return addslashes($input);
    }

    if(isset($_POST["form"]))   
    {
        $username = security( $_POST["kullaniciAdi"] );
        
        $password = security( $_POST["parola"] );
        
       
		
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
