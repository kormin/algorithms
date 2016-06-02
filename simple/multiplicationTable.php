<?php
/*
 * Author: https://github.com/kormin
 * Date Created: May 24, 2016
 * Description: Fizz Buzz
 * Resources: 
 * https://en.wikipedia.org/wiki/Multiplication_table
 * 
 */

// require_once(__DIR__.'/assets/constants.php');
require_once('../../assets/index.php');
define('TITLE', 'Multiplication Table');
define('DESCR', "In mathematics, a multiplication table is a mathematical table used to define a multiplication operation for an algebraic system.<br>The decimal multiplication table was traditionally taught as an essential part of elementary arithmetic around the world, as it lays the foundation for arithmetic operations with base-ten numbers. Many educators believe it is necessary to memorize the table up to 9 × 9.<br>Description taken from wikipedia.org");
$input = array(
	'col',
	'Enter number of columns: ',
	'number',
	'row',
	'Enter number of rows: ',
	'number'
);
$sub = 'enter';
$out = 'output';

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
					<input type="<?=$input[2];?>" id="<?=$input[0];?>" name="<?=$input[0];?>" class="form-control" >
				</div>
				<br>
				<div class="row form-group ">
					<label for="<?=$input[3];?>" class="control-label col-sm-4"><?=$input[4];?></label>
					<input type="<?=$input[5];?>" id="<?=$input[3];?>" name="<?=$input[3];?>" class="form-control" >
				</div>
				<br>
				<!-- <div class="row form-group " >
					<div class="col-xs-offset-5 col-xs-7">
						<button type="submit" id="<?=$sub;?>" class="btn btn-default" name="<?=$sub;?>" value="<?=$sub;?>"><?=$sub;?></button>
					</div>
				</div> -->
			</form>
		</div>
		<div class="container">
			<div class="row" >
				<table class="table table-responsive table-striped table-hover" >
					<tbody id="<?=$out;?>"></tbody>
				</table>
			</div>
		</div>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="<?=JQRY;?>" type="text/javascript"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="<?=TWBS_JS;?>"></script>
		<script type="text/javascript">
			// variables
			var col, row, colid, rowid, target;
			window.onload = function() {
				$(document).ready(main());
			}
			function main() {
				target = document.getElementById('<?=$out;?>');
				// var stat = false;
				// var id = setTimeout(function() {
				// 	// var stat = setVal();
				// 	setVal();
				// }, 1000);
				colid = document.getElementById('<?=$input[0];?>');
				rowid = document.getElementById('<?=$input[3];?>');
				// colid.onkeyup = function(){
				// 	if(this.value>0) {
				// 		col = this.value;
 				// 		console.log(this.value);
				// 		rowid.onkeyup = function(){
				// 			if(this.value>0) {
				// 				row = this.value;
				// 				console.log(this.value);
				// 				makeTable(target);
				// 			}
				// 		};
				// 	}
				// };
				colid.onkeyup = function(){colkey()};
				rowid.onkeyup = function(){colkey()};
			}
			function colkey() {
				col = colid.value;
				row = rowid.value;
				if (col>0 && row>0) {
					makeTable(target);
				}
			}
			function setVal() {
				col = colid.value;
				row = rowid.value;
				// if (col<=0 && row<=0) {
				// 	return false;
				// }
			}
			function makeTable(target) {
				var i,i1;
				// var table = document.createElement('table');
				$('#'+'<?=$out;?>').empty();
				var tr = document.createElement('tr');
				var tc = document.createElement('th');
				tc.appendChild(document.createTextNode('#'));
				tr.appendChild(tc);
				for(i=1;i<=col;i++) {
					tc = document.createElement('th');
					tc.appendChild(document.createTextNode(i));
					tr.appendChild(tc);
				}
				target.appendChild(tr);
				for(i=1;i<=row;i++) {
					tr = document.createElement('tr');
					tc = document.createElement('th');
					tc.appendChild(document.createTextNode(i));
					tr.appendChild(tc);
					for(i1=1;i1<=col;i1++) {
						tc = document.createElement('td');
						tc.appendChild(document.createTextNode(i1*i));
						tr.appendChild(tc);
					}
					target.appendChild(tr);
				}
				// target.appendChild(table);
			}
			function getCol() {
				var col = document.getElementById('<?=$input[0];?>');
				var col1 = col.value;
				if(col1<=0) {
					alert(col1);
					setTimeout(function(){getCol()}, 800);
				}else{
					return col1;
				}
			}
			function getRow() {
				var row = document.getElementById('<?=$input[3];?>');
				return row;
			}
		</script>
	</body>
</html>