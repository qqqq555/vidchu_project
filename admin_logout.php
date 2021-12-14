<?php
    session_start();
    unset($_SESSION['admin_account']);
	header('refresh:0;url=index.html');
	exit;
?>