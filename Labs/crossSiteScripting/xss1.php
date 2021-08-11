<!--

XSS LAB 1

-->
<html>
<head>
<title>XSS LAB 1</title>
</head>
<body>
<form action='lab1.php' method='POST' id="xss1">
<input type="text" id="xss" name="xss1-1"><br><br>
<input type="submit" value="Submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['xss1-1'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}
?>
</body>
</html>
