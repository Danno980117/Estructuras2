<?php
	$cantidad=0;
	$nombres='';
	//PHP es una lenguaje de expresiones
?>
<table>
		<tr>
			<th>Nombres</th>
			<th>Apellidos</th>
			<th>DNI</th>
		</tr>
<?php if (1): ?>
	<style type="text/css">
		td{
			font-family: Arial;
			background: green;
			color: white;
		}
	</style>
	<tr>
		<td>Luis</td>
		<td>Gutierrez</td>
		<td>12345678</td>
	</tr>
	<tr>
		<td>Juan</td>
		<td>Huaroto</td>
		<td>123456789</td>
	</tr>
<?php endif; ?>
	</table>