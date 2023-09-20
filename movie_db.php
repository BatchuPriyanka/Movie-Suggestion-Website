<!DOCTYPE html>
<html>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "movies";
$conn = new mysqli($servername, $username, $password, $dbname);
 if($conn->connect_error) {
die("Connection failed: " .$conn->connect_error);
  }
   function function_alert($message)
   {
echo "<script>alert('$message');</script>";
   }
$year_start = $_POST['mood_year1'];
$year_end = $_POST['mood_year2'];
$lang = $_POST['language'];
$genre_movie = $_POST['mood_category2'];
$sql = "SELECT title, year, duration, genre, country, language, director, writer, actors, description FROM movies where year>= '".$year_start."' AND year<='".$year_end."' AND language='".$lang."' AND genre='".$genre_movie."'";
$result = $conn->query($sql); 
if($result->num_rows > 0)
{
while($row = $result->fetch_assoc())
{
echo "<br> <b>Name</b>: ".$row["title"]. "<br>\n";
echo "<br> <b>Year</b>: ".$row["year"]. "<br>\n";
echo "<br> <b>Duration</b>: ".$row["duration"]. "<br>\n"; 
echo "<br> <b>Genre</b>: ".$row["genre"]. "<br>\n";
echo "<br> <b>Country</b>: ".$row["country"]. "<br>\n"; 
echo "<br> <b>Language</b>: ".$row["language"]. "<br>\n"; 
echo "<br> <b>Director</b>: ".$row["director"]. "<br>\n"; 
echo "<br> <b>Writer</b>: ".$row["writer"]. "<br>\n";
echo "<br> <b>Actors</b>: ".$row["actors"]. "<br>\n";
echo "<br> <b>Description</b>: ".$row["description"]. "<br>\n";
echo '<hr/>';
}
}
else
{
function_alert("No specfic results are found in the movie database");
}
$conn->close();
?>
</body>
</html>
