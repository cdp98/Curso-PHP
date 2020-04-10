<?php
session_start();
require 'config.php';

unset($_SESSION['banco']);
header("Location: index.php");
exit;
?>