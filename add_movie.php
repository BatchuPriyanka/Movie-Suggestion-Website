<!DOCTYPE html>
<html>
<head>
<title>ADD MOVIES</title>
<style>
input[type=text], [type=password]
{
width: 30%; padding: 12px 20px; margin: 8px 0; display: inline-block;
border: lpx solid #ccc; box-sizing: border-box;
}
button
{
background-color: #04AA6D; color: white;
padding: 14px 20px; margin: 8px 0; border: none; cursor: pointer; width: 10%;
}
button:hover
{ 
    opacity: 0.8;
}
</style>
</head>
<body style="background-color: powderblue;">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "movies";
$conn = new mysqli($servername, $username, $password, $dbname); 
if(!$conn)
{
die("Connection failed: " .mysqli_connect_error());
 }
function function_alert($message)
{
echo "<script>alert('$message');</script>"; 
}
if(isset($_POST['nuser']))
{
$mid=$_POST['mid'];
$title=$_POST['title'];
$year=$_POST['year'];
$genre=$_POST['genre'];
$dur=$_POST['dur'];
$cou=$_POST['cou'];
$lan=$_POST['lan'];
$dir=$_POST['dir'];
$wri=$_POST['wri'];
$act=$_POST['act'];
$des=$_POST['des'];

$sql1 = "SELECT * FROM movies where mid= '".$mid."'";
$result1 = $conn->query($sql1); 
if($result1->num_rows == 0)
{

$sql2 = "INSERT INTO movies (mid, title, year, genre, duration, country, language, director, writer, actors, description) VALUES ('".$mid."','".$title."','".$year."','".$genre."','".$dur."','".$cou."','".$lan."','".$dir."','".$wri."','".$act."','".$des."')";

if(mysqli_query($conn, $sql2))
{
function_alert("New Movie added successfully");
 }

}
}
?>
<h1 style="text-align:center;" style="font-size: 70px;">ADD MOVIE PAGE</h1>
<br><br>
<form autocomplete="off" action="add_movie.php" method="post" align="center">
<label for="mid"><b>Movie Id</b></label>
<input type="text" placeholder="Enter movieid" name="mid" required>
<br><br><br>

<label for="title"><b>Title</b></label>
<input type="text" placeholder="Enter Movie name" name="title" required>
<br><br><br>

<label for="year"><b>Year</b></label>
<input type="text" placeholder="Enter year" name="year" required>
<br><br><br>

<label for="genre"><b>Genre</b></label>
<input type="text" placeholder="Enter genre" name="genre" required>
<br><br><br>

<label for="dur"><b>Duration</b></label>
<input type="text" placeholder="Enter duration" name="dur" required>
<br><br><br>

<label for="cou"><b>Country</b></label>
<input type="text" placeholder="Enter country" name="cou" required>
<br><br><br>

<label for="lan"><b>Language</b></label>
<input type="text" placeholder="Enter Language" name="lan" required>
<br><br><br>

<label for="dir"><b>Director</b></label>
<input type="text" placeholder="Enter Director name" name="dir" required>
<br><br><br>

<label for="wri"><b>Writer</b></label>
<input type="text" placeholder="Enter Writer name" name="wri" required>
<br><br><br>

<label for="act"><b>Actors</b></label>
<input type="text" placeholder="Enter Actor names" name="act" required>
<br><br><br>

<label for="des"><b>Description</b></label>
<input type="text" placeholder="Enter Description" name="des" required>
<br><br><br>
<button type="submit" name="nuser">ADD</button>
</form>
</body>
</html>

