<?php
if ($_POST['password'] === $_POST['confirmPassword']) {
    echo "<h1>doğru girdiniz</h1>";
    }
    else {
        echo "yanlış girdiniz";
}
?>