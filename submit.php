<?php
mysql_connect("DATABASE LOCATION","DATABASE USERNAME","DATABASE PASSWORD");
mysql_select_db("PUT THE DATABASE NAME HERE");
$name=$_POST['name'];
$class=$_POST['class'];
$submit=$_POST['submit'];

$dbLink = mysql_connect("DATABASE LOCATION", "DATABASE  USERNAME", "DATABASE PASSWORD");
	mysql_query("SET character_set_client=utf8", $dbLink);
	mysql_query("SET character_set_connection=utf8", $dbLink);

if($submit)
{
if($name&&$class)
{
$insert=mysql_query("INSERT INTO TABLE_NAME (name,class) VALUES ('$name','$class') ");
}
else
{
echo "please fill out all fields";
}
}
?>

<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/index.css" type="text/css">
<title>Petition: Sign Up</title>

</head>
<body>

<div id="header">
<div id="insideheader">
<p style="font-size: 40px;color:#E6E6DC;">Insert Title Here</p>
</div>
</div>


<div id="nav">
<div id="insidenav">
<a href="index.html" style="text-decoration:none;font-size: 30px;">Home</a> <a href="#" style="text-decoration:none;font-size: 30px;"> | </a>
<a href="sign.php" style="text-decoration:none;font-size: 30px;">Sign the Petition</a>  <a href="#" style="text-decoration:none;font-size: 30px;"> | </a>
<a href="view.php" style="text-decoration:none;font-size: 30px;">View the Petition</a> <a href="#" style="text-decoration:none;font-size: 30px;"> | </a>
<a href="comments.php" style="text-decoration:none;font-size: 30px;">Notes</a>
</div>
</div>

<div id="body">

<center>
<p style="font-size: 40px;">Thank you for signing the Petition!</p>
<p style="font-size: 30px;"><a style="text-decoration:none; color: #BD2031;" href="view.php"> Click Here to View the Petition </a></p>
</center>

</div>
</body>
</html>