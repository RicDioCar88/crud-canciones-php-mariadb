<?php
include 'config.php';

$stmt = $pdo->query('SELECT * FROM Canciones');
$Canciones = $stmt->fetchAll();
?>

<h2>Listado de Canciones</h2>

<!-- Botón para crear una nueva canción -->
<a href="create.php">Crear nueva Canciones</a>
<br><br>
<table>

<?php foreach ($Canciones as $Cancion): ?>
		<tr></tr>
		<tr>
			<td><?php echo $Cancion['titulo']; ?></td>
			<td><?php echo $Cancion['artista']; ?></td>
			<td><?php echo $Cancion['album']; ?></td>
			<td><a href="edit.php?id=<?php echo $Cancion['id']; ?>">Editar</a>
        <a href="delete.php?id=<?php echo $Cancion['id']; ?>">Eliminar</a></td>
		</tr>
	

   
<?php endforeach; ?>
</table>
