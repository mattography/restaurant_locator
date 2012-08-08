<html>
<head>
<title>roScripts - Ajax auto-suggest</title>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<script src="lib/prototype.js" type="text/javascript"></script>
	<script src="src/scriptaculous.js" type="text/javascript"></script>
	<script src="src/unittest.js" type="text/javascript"></script>
	<link rel="stylesheet" href="css/style.css" type="text/css" />

</head>
	<body>
	
		<div id="container">
	
			<form method="get" action="">
				<label for="testinput">Search</label><br />
				<input type="text" id="search" name="search" autocomplete="off" class="input" value="" /><br />
				<div id="update" style="display:none;position:relative;"></div>
				<input type="image" name="register" class="submit-btn" src="http://www.roscripts.com/images/btn.gif" alt="submit" title="submit" />
			</form>

			<script type="text/javascript" language="javascript" charset="utf-8">

				  new Ajax.Autocompleter('search','update','response.php', { tokens: ','} );
				
			</script>
		
		</div>

	</body>
</html>