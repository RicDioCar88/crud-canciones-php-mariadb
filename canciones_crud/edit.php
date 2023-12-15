<?php
include 'config.php';

// Comprobando si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST['titulo'];
    $artista = $_POST['artista'];
    $album = $_POST['album'];
    $id = $_POST['id'];

    $stmt = $pdo->prepare("UPDATE Canciones SET titulo = ?, artista = ? ,album = ? WHERE id = ?");
    $stmt->execute([$titulo, $artista,$album, $id]);

    header('Location: index.php');
    exit;
}

$id = $_GET['id'];
$stmt = $pdo->query("SELECT * FROM Canciones WHERE id = $id");
$Cancion = $stmt->fetch();

?>

<h2>Editar Canción</h2>

<form action="edit.php" method="post">
    <input type="hidden" name="id" value="<?php echo $Cancion['id']; ?>">
    titulo: <input type="text" name="titulo" value="<?php echo $Cancion['titulo']; ?>"><br>
    artista: <input type="text" name="artista" value="<?php echo $Cancion['artista']; ?>"><br>
    album: <input type="text" name="album" value="<?php echo $Cancion['album']; ?>"><br>
    <input type="submit" value="Guardar Cambios">
</form>
