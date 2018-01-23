<!DOCTYPE html>
<html>
<head>
	<title>Welcome to the Post Page</title>
</head>
<body>

	<h1>Welcome to the Post Page</h1>

	<?php 
		if (count($args) > 0) {
			echo <<<EOD
<p>Look up id number $args[0] in the database</p>
<table>
	<thead>
		<td>Titulo</td>
		<td>Cantidad</td>
	</thead>
	<tbody>
EOD;
			$facturas = json_decode(file_get_contents('data/facturas.json'))->ALL;
			foreach ((array)$facturas[$args[0]] as $key => $value) {
				echo "<td>" . $value . "</td>";
			}
			
		} else echo <<<EOD
	</tbody>
</table>
<p>Post given is not valid</p>
EOD;
	?>
		

</body>
</html>