

<?
header("Content-type: text/html; charset=utf-8");
$u = $_GET['u'];
$n = $_GET['n'];
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>
		<script type="text/javascript" src='http://apps.bdimg.com/libs/jquery/1.9.1/jquery.min.js'></script>
	</head>
	<title><? echo $n ?></title>
	<style type="text/css">*{margin: 0; padding: 0;} iframe{display: block;width: 100%; }html{overflow: hidden;}body{overflow: hidden;}</style>
	<body>
		<iframe id="iframe" src="<? echo $u ?>" frameborder="0"></iframe>
		<div id="c"></div>
		<script type="text/javascript">
		$(document).ready(function(){
			function windowResize(){
				var h = $(window).height();
				$('#iframe').attr('height', h);
			}
			if(window.addEventListener) {
				window.addEventListener("resize",windowResize,false);
			} else if(window.attachEvent) {
				window.attachEvent("onresize",windowResize,false);
			}
			windowResize();
		});
		</script>
	</body>
</html>
