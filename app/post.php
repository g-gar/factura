<!DOCTYPE html>
<html>
<head>
	<title>Welcome to the Post Page</title>
</head>
<body>

	<h1>Welcome to the Post Page</h1>

	<?php if (count($args) > 0) { ?>
		<p>Look up id number <?=$args[0]?> in the database</p>
	<?php } else { ?>
		<p>Retrieving all registers from the database</p>
	<?php } ?>

<?php
	echo <<<EOD
<table>
	<thead>
		<td>Titulo</td>
		<td>Cantidad</td>
	</thead>
	<tbody>
EOD;
	
	$facturas = json_decode(file_get_contents('data/facturas.json'))->ALL;
	$ids = count($args) > 0 ? array($args[0]) : array_keys($facturas);

	foreach ($ids as $i => $id) {
		if (array_key_exists($id, array_keys($facturas))) {
			echo "<tr>";	
			foreach ($facturas[$id] as $j => $factura) {
				echo "<td>" . $factura . "</td>";
			}
			echo "</tr>";
		} else echo "<tr><td>Error</td><td>Error</td></tr>";
	}
			
	echo <<<EOD
	</tbody>
</table>
EOD;
?>
		

</body>
</html>