<!---

Command Execution LAB 1 

-->

<html>
<head>
    <title>Command Execution LAB 1</title>
</head>

<body> 
<h1>ONLİNE WHOİS ARACI</h1>

<p>Lutfen bir domain giriniz:</p>

		<form action="#" method="post">
			<input type="text" name="domain" size="25">
			<input type="submit" value="submit" name="submit">
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