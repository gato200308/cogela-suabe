<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: index.html');
    exit();
}

// Handle emotion diary entry
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Save emotion entry to database
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diario de Emociones</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Diario de Emociones</h1>
    <form method="post" action="">
        <label for="emocion">¿Cómo te sientes hoy?</label>
        <textarea id="emocion" name="emocion" required></textarea>
        <button type="submit">Guardar</button>
    </form>
    <a href="cuenta.php">Ver Perfil</a>
    <a href="tinder.php">Buscar Amigos</a>
</body>
</html>
