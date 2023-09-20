<!DOCTYPE html>
<html>
<head>
<title>MOVIE EXPERT HOMEPAGE</title>
<style>
button {
background-color: #04AA6D; color: white;
padding: 14px 20px; margin: 8px 0; border: none; cursor: pointer; width: 10%;
}

button:hover {
     opacity: 0.8;
}
</style>
</head>
<body style="background-color: powderblue;">
<?php
?>
<h1 style="text-align:center;" style="font-size: 70px;">MOVIE EXPERT HOMEPAGE</h1>
<form action="add_movie.php" method="post" align="center">
<br><br>
<br><br>
<button type="submit" class="btn btn-primary">Add New Movies</button>
</form>
<form action="delete_movie.php" method="post" align="center">
<br><br>
<button type="submit" class="btn btn-primary">Delete Movies</button>
</form>
<form action="update_movie.php" method="post" align="center">
<br><br>
<button type="submit" class="btn btn-primary">Update Movies</button>
</form>
</body>
</html>
