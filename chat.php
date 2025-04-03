<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit();
}

// Handle sending and receiving messages
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Chat</h1>
    <div class="chat-window">
        <!-- Chat messages will go here -->
    </div>
    <form method="post" action="">
        <input type="text" name="message" required>
        <button type="submit">Enviar</button>
    </form>
    <a href="diario.php">Volver al Diario</a>
    <a href="perfil.php">Ver Perfil</a>
</body>
</html>
