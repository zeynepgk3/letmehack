<html>

<head>

    <title>File Inclusion LAB 1</title>

</head>

<body>

<h1>Harry Potter</h1>


<form method="get">

   <select name="filmler">

      <option value="film1">Felsefe Tasi</option>
      <option value="film2">Sirlar Odasi</option>
      <option value="film3">Azkaban Tutsagi</option>
      <option value="film4">Ates Kadehi</option>

   </select>

   <input type="submit">

</form>


<?php
if (isset($_GET['filmler'])) {

    include($_GET['filmler']);
}

?>

</body>

</html>