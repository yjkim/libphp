<?php
	require_once('libphp.php');
	$libphp = new libphp;
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>libphp test</title>
</head>
<body>
	<h1>$libphp->transpose test</h1>
<?php
	$input = array();
	array_push($input, array(1,2,3));
	array_push($input, array(4,5,6));	
	$output = $libphp->transpose($input);
	echo $libphp->draw_html_matrix($output);
?>
	<hr />
</body>
</html>
