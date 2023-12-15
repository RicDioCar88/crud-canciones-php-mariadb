<?php
include 'config.php';

$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST['titulo'];
    $artista = $_POST['artista'];
    $album = $_POST['album'];
    

    try {
        $sql = "INSERT INTO Canciones (titulo, artista, album) VALUES (:titulo,:artista,:album)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['titulo' => $titulo, 'artista' => $artista, 'album' => $album]);

        $message = 'Tu canción se ha añadido con éxito!';
    } catch (PDOException $e) {
        $message = 'Error al añadir la canción: ' . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir Cancion</title>
</head>
<body>
<h2>Añadir nueva Canción</h2>

<?php if (!empty($message)): ?>
    <p><?= $message ?></p>
<?php endif; ?>

<form action="create.php" method="post">
    <label for="titulo">titulo:</label>
    <input type="text" name="titulo" id="titulo" required>
    <br>
    <label for="artista">Artista:</label>
    <textarea name="artista" id="artista"></textarea>
    <br>
    <label for="album">"Album":</label>
    <input type="text" name="album" id="album" required>
    <br>
    <br>
    <input type="submit" value="Añadir Canción">
</form>

</body>
</html>
