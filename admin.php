<!DOCTYPE html>
<html>
<head>
<title>ADMIN</title>
<style>
input[type=text], [type=password] 
{
    width: 30%;
padding: 12px 20px;
 margin: 8px 0; 
 display: inline-block; 
 border: 1px solid #ccc;
box-sizing: border-box;
}
button
{
background-color: #04AA6D; 
color: white;
padding: 14px 20px; 
margin: 8px 0; 
border: none; 
cursor: pointer;
 width: 10%;
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
echo "<script>alert('$message');</scripts"; 
}
if(isset($_POST['nuser']))
{
$user=$_POST['nusername'];
$npass=$_POST['npassword'];
$rpass=$_POST['rpassword'];
$sql1 = "SELECT * FROM logindb where un= '".$user."'";
$result1 = $conn->query($sql1);
 
if($resu1t1->num_rows == 0) 
{
    if($npass == $rpass)
    {
$sql2 = "INSERT INTO logindb(un, pd, ut) VALUES ('".$user."', '".$npass."', 'movieexpert')";

if(mysqli_query($conn, $sql2))
{
function_alert("New Movie expert created successfully");
}
 else
 {
    echo "Error: " .$sql. "<br>" .mysqli_error($conn);
 }
}

else
{
 function_alert("Passwords not matched");
}
}

else
{
function_alert("username is already taken");
}
}
?>

<h1 style="text-align:center;" style="font-size: 70px;">ADMIN HOMEPAGE</h1>
<form action="add_movieexpert.php" method="post" align="center">
<br><br>
<br><br>
<button type="submit" class="btn btn-primary">Add Movie Expert</button>
</form>
<form action="delete_movieexpert.php" method="post" align="center">
<br><br>
<button type="submit" class="btn btn-primary">Delete Movie Expert</button>
</form>
<form action="delete_websiteuser.php" method="post" align="center">
<br><br>
<button type="submit" class="btn btn-primary">Delete Website User</button>
</form>
</body>
</html>

