<!DOCTYPE html>
<html>
<head>
<title>DELETE MOVIE EXPERTS</title>
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
$dbname = "logindb";
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
$user=$_POST['nusername'];
$npass=$_POST['npassword'];
$sql = "DELETE FROM logindb WHERE un= '".$user."' AND pd= '".$npass."'";
if(mysqli_query($conn, $sql))
{
function_alert(" Movie expert deleted successfully");
}

}
?>
<h1 style="text-align:center;" style="font-size: 70px;">DELETE MOVIE EXPERT PAGE</h1>
<br><br><br>
<form autocomplete="off" action="delete_movieexpert.php" method="post" align="center">
<label for="uname"><b>Username</b></label>
<input type="text" placeholder="Enter Username" name="nusername" required>
<br><br><br>
<label for="pass"><b>Enter Password</b></label>
<input type="password" placeholder="Enter Password" name="npassword" required>
<br><br><br>
<button type="submit" name="nuser">DELETE</button>
</form>
</body>
</html>
