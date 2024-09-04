<?php
session_start();
session_unset(); // Elimina todas las variables de sesión
session_destroy(); // Destruye la sesión

// Redirige al usuario a la página de inicio o al login
header("Location: index.php");
exit(); // Asegúrate de usar exit() después de header()
?>
