<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit();
}

// Fetch profiles for Tinder-like feature
// Handle like/dislike actions
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Amigos</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Buscar Amigos</h1>
    <div class="profile">
        <img src="profile.jpg" alt="Profile Picture">
        <h2>Nombre del Usuario</h2>
        <button>❤️</button>
        <button>❌</button>
    </div>
    <a href="diario.php">Volver al Diario</a>
    <a href="perfil.php">Ver Perfil</a>
</body>
</html>
