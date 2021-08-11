<!---

Command Execution LAB 1 

-->

<html>
<head>
          <!-- Required meta tags -->
          <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <link rel="stylesheet" href="lab1/lab1.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/6444dbd282.js" crossorigin="anonymous"></script>
    
    <title>Command Execution LAB 1</title>
</head>

<body> 
<img  style="text-align:center;" src="/lab22/img/who.svg" alt="Who is"  >
 <h1 class="font-weight-bold" style="text-align: center" >WHOIS domain lookup</h1> 

<p style="text-align: center"> Search the WHOIS database to find key information about a domain</p> 



                    
		<form action="#" method="post" style="text-align:center">
			<input type="text" name="domain" size="25">
			<input type="submit" value="Search" name="submit"  class="btn btn-success" >
		</form>



<?php

if( isset( $_POST[ 'submit' ] ) ) {

    $target = $_REQUEST[ 'domain' ];

    $whois = shell_exec("whois " . $target);
    echo '<pre>';
    print_r($whois);

}
    
?>

</body>

</html>