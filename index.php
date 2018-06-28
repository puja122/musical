<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
<link rel="icon" type="image/png" href="resources/icon1.png">
<title>MY MUSIC: Music Store</title>
<link href="https://fonts.googleapis.com/css?family=Clicker+Script" rel="stylesheet"> 
<link rel="stylesheet" href="css/loader.css">
<script>
	function removeloader(){
		var ele = document.getElementById("loader");
		opacity = 1;
		id=setInterval(fade,5);
		function fade(){
			if( opacity <= 0){
				clearInterval(id);
				ele.style.display = "none";
			}else{
			ele.style.opacity = opacity;
			opacity = opacity - 0.005;
			}
		}
	}
</script>
</head>

<body onload="removeloader()">
<!--loader division-->
<div id="loader" align="center">
	<img src="resources/loading-cylon-red.svg" width="500" height="25" id="loader-cylon"><br>
	<div id="loading-txt">
		<b>MY MUSIC</b>
	</div><br>
	<img src="resources/loading-bubbles.svg" width="64" height="64" id="loader-bubble">
</div>
<!--loader ends-->

<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container-fluid text-center">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#heads">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php"><img src="resources/acoustic-guitar.svg" style="height:100px; width:100px ;"></a><div id="my music"><b>MY MUSIC</b></div>
		</div>
</html>