<!DOCTYPE html>
<html>
<style>
* {
	box-sizing: border-box;
}
h1{
	text-align: center;
	background-color: lightyellow;
	color: black;
	font-family: Arial;
	padding: 20px;
	border: 5px yellow;
}
a{
	text-decoration:none;
	color: black;
	transition: 0.6s ease;
}
p{
	text-align: center;
	background-color: lightyellow;
	color: black;
	font-family: Arial;
	padding: 10px;
	border: 5px yellow;
}
.outer-grid{
	display: flex;
	flex-wrap: wrap;
	padding: 0 4px;
}
.inner-grid{
	flex: 25%;
	max-width: 25%;
	padding: 0 4px;
}
.inner-grid img{
	margin-top: 8px;
	width: 100%;
	padding: 10px;
}
@media screen and (max-width: 800px){
	.inner-grid{
		flex: 50%;
		max-width: 50%;
	}
}
@media screen and (max-width: 600px){
	.inner-grid{
		flex: 100%;
		max-width: 100%;
	}
}
</style>
<body>
<h1>MY PERSONAL PHOTO ALBUM</h1>
<div class ="outer-grid">
<div class ="inner-grid">
<a href ="hoami1.html">
<img src="elementary.png">
<p>ELEMENTARY DAYS</p>
<img src="ed1.jpg" height="222">
</div>

<div class="inner-grid">
<a href ="hoami2.html">
<img src="highschool.png">
<p>HIGH SCHOOL DAYS</p>
<img src="hd1.jpg" height="222">
</div>

<div class="inner-grid">
<a href ="hoami3.html">
<img src="seniorhighschool.png">
<p>SENIOR HIGH SCHOOL DAYS</p>
<img src="sh1.jpg" height="222">
</div>

<div class="inner-grid">
<a href ="hoami4.html">
<img src="college.png">
<p>COLLEGE DAYS</p>
<img src="cd1.jpg" height="222">
</div>
</div>
</body>
</html>