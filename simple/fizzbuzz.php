<?php
/*
 * Author: https://github.com/kormin
 * Date Created: May 24, 2016
 * Description: Fizz Buzz
 * Resources: 
 * https://en.wikipedia.org/wiki/Fizz_buzz
 * 
 */

// require_once(__DIR__.'/assets/constants.php');
require_once('../../assets/index.php');
define('TITLE', 'Fizz Buzz');
define('DESCR', "Fizz buzz is a group word game for children to teach them about division.<br>Players take turns to count incrementally, replacing any number divisible by three with the word \"fizz\", and any number divisible by five with the word \"buzz\".<br>Description taken from wikipedia.org");
$input = array(
	'num',
	'Enter limit: ',
);
$sub = 'submit';

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
				<p>
				<?=DESCR;?>
				</p>
			</div>
		</div>
		<div class="container">
			<form class="" method="get" >
				<div class="row form-group ">
					<label for="<?=$input[0];?>" class="control-label col-sm-4"><?=$input[1];?></label>
					<input type="text" id="<?=$input[0];?>" name="<?=$input[0];?>" class="form-control" >
				</div>
				<br>
				<div class="row form-group " >
					<div class="col-xs-offset-5 col-xs-7">
						<button type="submit" id="<?=$sub;?>" class="btn btn-default" name="<?=$sub;?>" value="<?=$sub;?>"><?=$sub;?></button>
					</div>
				</div>
			</form>
		</div>
		<div class="container">
			<div class="row" id="">
				<?php
				if (!empty($_GET[$sub])) {
					unset($_GET[$sub]);
					$len = $_GET[$input[0]];
					for($i=1;$i<=$len;$i++) {
						$c1 = $i % 3;
						$c2 = $i % 5;
						if($c1 == 0 && $c2 == 0){
							echo "FIZZBUZZ<br>";
						}else if($c1 == 0) {
							echo "FIZZ<br>";
						}else if ($c2 == 0) {
							echo "BUZZ<br>";
						}else {
							echo "$i<br>";
						}
					}
				}
				?>
			</div>
		</div>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="<?=JQRY;?>" type="text/javascript"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<!-- <script src="<?=JS; ?>/bootstrap.min.js"></script> -->
		<script type="text/javascript">
			// variables
			window.onload = function() {
				$(document).ready(main());
			}
			function main() {
			}
		</script>
	</body>
</html>