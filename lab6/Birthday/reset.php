<?php
// Delete the birthday cookie
setcookie('user_birthday', '', time() - 3600, '/');

// Redirect back to the main page
header('Location: ' . str_replace('reset.php', 'index.php', $_SERVER['PHP_SELF']));
exit();
?>