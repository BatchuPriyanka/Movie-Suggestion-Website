<!DOCTYPE html>
<html>
<head>
<title>DELETE MOVIES</title>
<style>
input[type=text], [type=password]
{
width: 30%; padding: 12px 20px; margin: 8px 0; display: inline-block;
border: 1px solid #ccc; box-sizing: border-box;
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
$mid=$_POST['movieid'];
$sql = "DELETE FROM movies WHERE mid= '".$mid."'";
$sql1 = "SELECT * FROM movies WHERE mid= '".$mid."'";
$result=$conn->query($sql1);
if($result->num_rows>0 && $conn->query($sql))
{
function_alert(" Movie deleted successfully");
}
else{
    function_alert("No such movie exists");
}
}
?>
<h1 style="text-align:center;" style="font-size: 70px;">DELETE MOVIE PAGE</h1>
<br><br><br>
<form autocomplete="off" action="delete_movie.php" method="post" align="center">
<label for="idno"><b>Movie Id</b></label>
<input type="text" placeholder="Enter id" name="movieid" required>
<br><br><br>
<button type="submit" name="nuser">DELETE</button>
</form>
</body>
</html>
