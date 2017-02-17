<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Oosterplas Doet</title>
</head>

<style>
	#slideshow{
		width: 100%;
		height: 400px;
		background-color: blue;

	}

	#logo{
		width: 7.5%;
		height: 75px;
		
		margin-left: 100px;
	}

	#content1{
		width: 33%;
		height: 400px;
		display: inline-block;
		
	}

	#content2{
		width: 34%;
		height: 400px;
		display: inline-block;
		
	}
	#content3{
		width: 30%;
		height: 200px;
		display: inline-block;
	}

/*////////////////////NAVBAR////////////////////////// */
	ul {
    list-style-type: none;
    margin: 0;
    margin-top: 15px;
    padding: 0;
    overflow: hidden;
    background-color: white;
    width: 80%;
    float: right;
	}

	li {
    float: left;
	}

	li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    color: black;
	}

	/* Kleur */
	li a:hover {
    background-color: #556B2F;
	}

/*////////////////////NAVBAR////////////////////////// */	

</style>

<body>

	<ul class="navbar">
		<li><a href="#"><b>HOME</b></a></li>
		<li><a href="#"><b>OVER ONS</b></a></li>
		<li><a href="#"><b>ACTIVITEITENKALENDER</b></a></li>
		<li><a href="#"><b>BEDRIJVEN</b></a></li>
		<li><a href="#"><b>BUURTBEWONERS</b></a></li>
	</ul>

	<div id="logo"> <h1>logo</h1></div>

	<div id="slideshow">
	<img src="img/banner2.jpg" alt="bos" style="width: 100%; height: auto; background-color: #ec671c; background-blend-mode: multiply;">

	</div>


	<div id="content1"></div>
	<div id="content1"></div>
	<div id="content2"></div>
</body>
</html>