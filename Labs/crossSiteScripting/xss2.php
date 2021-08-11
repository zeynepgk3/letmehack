<!-- 

XSS LAB 2

-->
<html>
<head>
<title>XSS LAB 2</title>
</head>
<body>
<label>type home.jpg</label>
<form action='index.php' method='POST' id="xss2">
<input type="text" id="xss" name="xss2-2"><br><br>
<input type="submit" value="Submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['xss2-2'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
        $str = $name;
        $pattern = "/</i";
        $str = preg_replace($pattern, "&lt;", $str);
        $pattern = "/>/i";
        $str = preg_replace($pattern, "&gt;", $str);
    $xss = '<img src=' . $str . ' >';
    echo $xss;
    }
}
?>
</body>
</html>
