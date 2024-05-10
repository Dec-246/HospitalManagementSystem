<?php
require('testSessions.php');
require('testAuthorize.php');
?>
<!doctype html>
<html>
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>View staff</title>
        <link rel="stylesheet" href="css/global.css" type="text/css" />

        <link rel="stylesheet" href="css/mobile.css" type="text/css" media="only screen and (max-width : 620px)" />

        <link rel="stylesheet" href="css/desktop.css" type="text/css" media="only screen and (min-width : 621px)" />

        
    </head>
<body>
<div class="container">
	<header>
		<h1>Welcome</h1>
		<ul>
			<li><a href="testLogout.php">Logout</a></li>
		</ul>
	</header>
</div>
<?php
require('testDebugger.php');
?>
</body>
</html>
