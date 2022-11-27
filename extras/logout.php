<?php
session_start();

// destroy the session
session_destroy();
header('Location: /php_learning/_starter_files/13_sessions.php');
