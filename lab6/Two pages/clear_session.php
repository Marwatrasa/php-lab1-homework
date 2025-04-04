<?php
// Start the session
session_start();

// Clear all session data
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect back to page1
header('Location: page1.php');
exit();
?>