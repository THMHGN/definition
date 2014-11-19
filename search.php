<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<body bgcolor="#222">
<style media="screen" type="text/css">
a {
    color: red;
    text-decoration: none;
}
</style>
<font color='white'>
<center>
<form method="post">
<input type="text" placeholder="Enter word" name="word"><br>
<button name="name" value="Search" type="submit">Search</button>
</form>
</body>
</html>
<?php

$word = $_POST["word"]; 

echo "Search definition of: <a href='http://dictionary.reference.com/browse/".$word."'>".$word."</a>";

echo "<br /><iframe src='http://dictionary.reference.com/browse/".$word."' width='275' height='450' scrolling='yes' frameBorder='0'></iframe>";

echo "<br /><iframe src='http://www.vertalen.nu/vertaal?vertaal=".$word."&van=en&naar=nl' width='275' height='435' scrolling='yes' frameBorder='0'></iframe>";

?>
