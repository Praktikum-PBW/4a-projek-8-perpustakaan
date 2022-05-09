<?php
	require 'koneksi.php';
	// Cek Session
    session_start();
    header("Location: login.php");
        exit;
?>