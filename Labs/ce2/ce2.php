<html>
<head>
    <title>Command Execution LAB 2</title>
</head>

<body> 

<h1>ONLINE WHOİS ARACI</h1>

<p>Lutfen bir domain giriniz:</p>

		<form action="#" method="post">
			<input type="text" name="domain" size="25">
			<input type="submit" value="submit" name="submit">
		</form>


<?php

if( isset( $_POST[ 'submit' ] ) ) {

    $target = $_REQUEST[ 'domain' ];

    $blacklist = array(
        '|' => '',
        ';' => '',
    );

    $target = str_replace( array_keys( $blacklist ), $blacklist, $target );
    

    $whois = shell_exec("whois " . $target);
    echo '<pre>';
    print_r($whois);

}
    
?>

</body>

</html>
