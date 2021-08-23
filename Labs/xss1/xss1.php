<!--

XSS LAB 1

-->
<html>
<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <link rel="stylesheet" href="./lab1/css/lab1.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/6444dbd282.js" crossorigin="anonymous"></script>


<title>XSS LAB 1</title>
</head>
<body>

<div class="adam">
      <img   src="./lab1/img/logo.svg" alt="Love"  >
        </div>

<div class="calcu">
        <p style="text-align: center"> Example:  Marie John</p> 
</div>


<form class="calcu"; action='#' method='POST' id="xss1">
<input type="text" id="xss" name="xss1-1"><br><br>
<input type="submit" class="love " value="Calculate Love">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['xss1-1'];
    if (empty($name)) {
        echo "Name is empty. Try AGAİN!";
    } else {
        echo $name;
        echo "    " . " You are the Perfect couple"; 
        
            
            
        
      
    }
}
?>
</body>
</html>
