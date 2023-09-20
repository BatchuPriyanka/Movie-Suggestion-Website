<!DOCTYPE html>
<html>
<head>
<title>WEBSITE USER HOMEPAGE</title>
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
<? php
?>

<body style="background-color: powderblue;">
<h1 style="text-align:center;" style="font-size: 70px;">MOVIE SUGGESTIONS</h1>
<form action="movie_db.php" method="post">
<label for="mood_year1" style="font-size: 30px;"><b>Year</b></label>
<br>
<label>From:</label>
<input type="number" name="mood_year1" id="mood_year1" value="2015" required="" >
<br>
<label>To:</label>
<input type="number" name="mood_year2" id="mood_year2" value="2019" required="">
<br><br><br>
<label style="font-size: 30px;"><b>Language</b></label>
<input type="text" name="language" placeholder="Language">
<br><br><br>
<label for="mood_category2" style="font-size: 30px;"><b>Genre</b></label>
<br><br>
<input type="checkbox" value="action" name="mood_category2">
<label for="mood_category2" style="font-size: 20px;"> Action
</label>
<br>
<input type="checkbox" value="adventure" name="mood_category2">
<label for="mood_category2" style="font-size: 20px;"> Adventure
</label>
<br>
<input type="checkbox" value="animation" name="mood_category2">
<label for="mood_category2" style="font-size: 20px;"> Animation
</label>
<br>
<input type="checkbox" value="biography" name="mood_category2">
<label for="mood_category2" style="font-size: 20px;"> Biography
</label>
<br>
<input type="checkbox" value="comedy" name="mood_category2">
<label for="mood_category2" style="font-size: 20px;"> Comedy
</label>
<br>
<input type="checkbox" value="crime" name="mood_category2">
<label for="mood_category2" style="font-size: 20px;"> Crime
</label>
<br>
<input type="checkbox" value="drama" name="mood_category2">
<label for="mood_category2" style="font-size: 20px;"> Drama
</label>
<br>
<input type="checkbox" value="family" name="mood_category2">
<label for="mood_category2" style="font-size: 20px;"> Family
</label>
<br>
<input type="checkbox" value="history" name="mood_category2">
<label for="mood_category2" style="font-size: 20px;"> History
</label>
<br>
<input type="checkbox" value="horror" name="mood_category2">
<label for="mood_category2" style="font-size: 20px;"> Horror
</label>
<br>
<input type="checkbox" value="mystery" name="mood_category2">
<label for="mood_category2" style="font-size: 20px;"> Mystery
</label>
<br>
<input type="checkbox" value="romance" name="mood_category2">
<label for="mood_category2" style="font-size: 20px;"> Romance
</label>
<br>
<input type="checkbox" value="Sci Fi" name="mood_category2">
<label for="mood_category2" style="font-size: 20px;"> Sci-Fi
</label>
<br>
<input type="checkbox" value="Thriller" name="mood_category2">
<label for="mood_category2" style="font-size: 20px;"> Thriller
</label>
<br>
<input type="checkbox" va1ue="Western" name="mood_category2">
<label for="mood_category2" style="font-size: 20px;"> Western
</label>
<br><br>
<button type="submit" c1ass="btn btn-primary">Apply These Filters</button>
</form>
</body>
</html>

