<!doctype html>
<html>
	<head>
		<title>WorldSearch</title>
		<link id="lightMode" rel="stylesheet" href="<?=base_url('styles/MainStyle.css')?>" type="text/css" />
		<link id="darkMode" rel="stylesheet" href="<?=base_url('styles/DarkStyle.css')?>" type="text/css" />
		<link rel="icon" href="<?=base_url('images/favicon.ico')?>" type="image/x-icon" />
		
		<script>
		//Detects if the user uses dark mode on their device.
		if (window.matchMedia('(prefers-color-scheme)').media !== 'not all') {
			console.log('Styleswitcher supported!');
		} else {
			console.log('Incompatible with styleswitcher!');
		}
		//0 = Light
		//1 = Dark
		const usingDarkMode = window.matchMedia("(prefers-color-scheme: dark)");
		usingDarkMode.addListener(x => {
			if (x.matches) {
				//If the visitor uses dark mode, run this script.
				document.styleSheets[1].disabled = false;
			} else {
				//If the user uses light mode or the script fails for whatever reason, run this.
				document.styleSheets[1].disabled = true;
			}
			//Ideally, this can react to changes to the style, so the alternate style should be disabled.
		});
		</script>
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
					<div class="navButton" onclick="window.location.href = '<?=base_url('index.php/map/view/today')?>'"><b>Today</b></div>
					<div class="navButton" onclick="window.location.href = '<?=base_url('index.php/map')?>'"><b>Archive</b></div>
				</div>
			</div>
		</div>
		<!--continue to next page component-->