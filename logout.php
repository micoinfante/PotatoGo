<?php
session_start();
unset($_SESSION[$login]);
unset($_SESSION[$[pass]]);

header('Refresh: 2; URL = admin.php');
?>
