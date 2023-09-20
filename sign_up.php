<!DOCTYPE html>
<html>
<head>
<style>
input[type=text], [type=password]
{
width: 30%; 
padding: 12px 20px; 
margin: 8px 0; 
display: inline-block;
border: 1px solid #ecc; 
box-sizing: border-box;
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
$rpass=$_POST['rpassword'];
$sql1 = "SELECT * FROM logindb where un= '".$user."'";
$result1 = $conn->query($sql1); 
if($result1->num_rows == 0)
{
if($npass==$rpass)
{
$sql2 = "INSERT INTO logindb (un, pd, ut) VALUES ('".$user."', '".$npass."', 'websiteuser')";

if(mysqli_query($conn, $sql2))
{
function_alert("New user created successfully"); 
}
else
{
echo "Error: " .$sql. "<br>" .mysqli_error($conn);
}
}
else
 {
function_alert("Passwords did not match");
}
}

else
{
function_alert("username is already taken");
}
}
?>

<h1 style="text-align:center;" style="font-size: 70px;">SIGN UP PAGE</h1>
<br><br><br><br><br><br>
<form autocomplete="off" action="sign_up.php" method="post" align="center">
<label for="uname"><b>Username</b></label>
<input type="text" placeholder="Enter Username" name="nusername" required>
<br><br><br>
<label for="pass"><b>Enter new Password</b></label>
<input type="password" placeholder="Enter Password" name="npassword" required>
<br><br><br>
<label for="pass"><b>Re-Enter Password</b></label>
<input type="password" placeholder="Enter Password" name="rpassword" required>
<br><br><br>
<button type="submit" name="nuser">ADD USERS</button>
</form>
<form action="home_page.php" align="center">
<br><br><br>
<button type="submit" name="bhome">RETURN TO LOGIN PAGE</button>
</form>
</body>
</html>


