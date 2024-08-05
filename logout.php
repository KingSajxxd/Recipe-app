<?php
session_start();

// Destroy all sessions
session_destroy();

// Redirect to a default page (e.g., index.php) or a login page
header('Location: login.php');
exit;