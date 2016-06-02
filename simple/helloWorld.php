<?php
/*
 * Author: https://github.com/kormin
 * Date Created: May 24, 2016
 * Description: Hello World
 * Resources:
 * 
 */

// require_once(__DIR__.'/assets/constants.php');
require_once('../../assets/index.php');
define('TITLE', 'Hello World');
define('DESCR', "");
$id = "disp";

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title><?=TITLE;?></title>

		<meta name="description" content="Program to display capital cities">
		<meta name="keywords" content="php,html5,forms,inputs">
		<link rel="author" href="https://github.com/kormin">
		<link href="<?=TWBS;?>" rel="stylesheet" type="text/css">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container">
			<div class="row text-center">
				<h3><?=TITLE;?></h3>
				<p>Hello World in HTML</p>
				<p>
				<?php echo TITLE.' in PHP';?>
				</p>
			</div>
		</div>
		<div class="container text-center">
			<div class="row" id="<?=$id;?>">
			</div>
		</div>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<!-- <script src="<?=JQRY;?>" type="text/javascript"></script> -->
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<!-- <script src="<?=TWBS_JS;?>"></script> -->
		<script type="text/javascript">
			// variables
			window.onload = function() {
				main();
				// $(document).ready(main());
			}
			function main() {
				console.log("<?=TITLE;?>");
				var disp = document.getElementById("<?=$id;?>");
				disp.innerHTML = "<?=TITLE;?> in JS";
			}
		</script>
	</body>
</html>