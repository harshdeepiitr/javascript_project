<html>
<head>
<title>php test</title>
</head>
<?php
switch ($_REQUEST['action']){
	case 'write':
		file_put_contents('config.json', $_REQUEST['config']);
		break;
	}	
?>
</body>
</html>