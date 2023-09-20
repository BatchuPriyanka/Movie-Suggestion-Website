<!DOCTYPE html>
<html>
<head>
<title></title>
<style>
input[type=text], [type=password] { width: 30%;
padding: 12px 20px; 
margin: 8px 0; 
display: inline-block; 
border: 1px solid #ccc;
box-sizing: border-box;
}

button {
background-color: #04AA6D; color: white;
padding: 14px 20px;
 margin: 8px 0; 
 border: none; 
 cursor: pointer; 
 width: 10%;
}
button:hover { 
    opacity: 0.8;
}
</style>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "logindb";
$conn = new mysqli($servername, $username, $password, $dbname);
if(!$conn) {
die("Connection failed: " .mysqli_connect_error()); 
}
function function_alert($message)
{
echo "<script>alert('$message');</script>";
}
if(isset($_POST['loginbt']))
{
$user=$_POST['username'];
$pass=$_POST['password'];
$usertype=$_POST['usertype'];
$sql = "SELECT * FROM logindb where un= '".$user."' AND pd<='".$pass."' AND ut='".$usertype."'";
$result = $conn->query($sql);
 if($result->num_rows == 1)
{
if($usertype=="admin")
{
?>
<script type="text/javascript">window.location="admin.php"</script>
<?php
}
 if($usertype=="movieexpert")
{
?>
<script type="text/javascript">window.location="movieexpert.php"</script>
<?php 
}
if($usertype=="websiteuser")
{
?>
<script type="text/javascript">window.location="websiteuser.php"</script>
<?php
}
}

else
{
function_alert("Login details are not valid");
}
}
?>

<h1 align="center">Movie suggestions </h1>
<br><br><br><br><br><br>

<form autocomplete="off" action="home_page.php" method="post" align="center">

<label for="uname"><b>Username</b></label>
<input type="text" placeholder="Enter Username" name="username" required>
<br><br><br>
<label for="pass"><b>Password</b></label>
 
<input type="password" placeholder="Enter Password" name="password" required>
<br><br><br>
<label for="ut"><b>User type </b></label>
<select name="usertype">
<option value="admin">Admin</option>
<option value="movieexpert">Movie Expert</option>
<option value="websiteuser">Website user</option>
</select>
<br><br><br>
<button type="submit" name="loginbt">Login</button>
<br>
</form>
</div>
</body>
</html>



