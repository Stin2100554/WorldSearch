<!doctype html>
<html>
	<head>
		<title>WorldSearch</title>
		<link rel="stylesheet" href="<?=base_url('styles/MainStyle.css')?>" type="text/css">
		<link rel="icon" href="<?=base_url('images/favicon.ico')?>" type="image/x-icon">
	</head>
	
	<body>
	<div id="mainWrapper"> <!--mainwrapper closes in footer.-->
	<div id="mainLimiter"> <!--limit width of page contents-->
		<div id="header">
			<div id="logo">
				<picture>
					<source media="(min-width:800px)" srcset="<?=base_url('images/Logo800px.png')?>"> <!--Standard Size-->
					<img src="<?=base_url('images/Logo300px.png')?>" alt="Logo"> <!--Mobile Size + Fallback-->
				</picture>
			</div>
			<div id="navWrapper">
				<div id="navButtons">
					<div class="navButton" onclick="window.location.href = '<?=base_url('index.php/about')?>'"><b>Home</b></div>
					<div class="navButton" onclick="window.location.href = '<?=base_url('index.php/about/debug')?>'"><b>Today</b></div>
					<div class="navButton" onclick="window.location.href = '<?=base_url('index.php/about/debug')?>'"><b>Archive</b></div>
				</div>
			</div>
		</div>
		<!--continue to next page component-->