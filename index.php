<html>
<head>
<meta http-equiv="refresh" content="3;url=index.php">
<link rel="stylesheet" type="text/css" href="main.css">
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

<title>UK towns described in one word</title>
</head>

<body>

<?php

/* Random name generator*/
// Code to use array of simple names
//$male = array ("Martin", "Peter", "David", "Michael", "Kevin", "Nicholas", "Richard", "Reece", "Joseph", "Isaac");
//$last = array ("Stilwell", "Price", "McTague", "Mullholland", "Eyre", "Hooper", "Shaw", "Desmond");


$word = explode ("\n", file_get_contents('lists/adjectives.txt'));
$town = explode ("\n", file_get_contents('lists/uk-towns.txt'));

shuffle ($word);
shuffle ($town);

//radomly generate hex value for div background colours
$hex = array ('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f');
$hexStringTop = "#". $hex[rand(0,15)].$hex[rand(0,15)].$hex[rand(0,15)].$hex[rand(0,15)].$hex[rand(0,15)].$hex[rand(0,15)] ;
$hexStringBottom = "#". $hex[rand(0,15)].$hex[rand(0,15)].$hex[rand(0,15)].$hex[rand(0,15)].$hex[rand(0,15)].$hex[rand(0,15)] ;

echo "<div class='town' style=background-color:" . $hexStringTop. ">"  . $town[0] . "</div>";
echo "<div class='word' style=background-color:" . $hexStringBottom. ">" . $word[0]. "</div>";

?>

</body>
</html>
