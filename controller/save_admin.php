<?php

require('../db/database.php');
$db = new Database();

$username = $_POST['username'];
$password = $_POST['password'];
$jk = $_POST['jk'];
$status = $_POST['status'];


// -- CARA LANGSUNG 
// $db->query("INSERT INTO books (no_induk, judul, penulis, tahun, penerbit, subjek) VALUES ('$no', '$judul', '$penulis', '$tahun', '$penerbit', '$subject')");

// -- MENGGUNKAN BIND
$db->query('INSERT INTO admins (username, password, jk, status) VALUES (:username, :password, :jk, :status)');

$db->bind(':username', $username);
$db->bind(':password', $password);
$db->bind(':jk', $jk);
$db->bind(':status', $status);

// print_r($db);
// var_dump($_POST);
// exit;

$db->execute();

header("Location: ../data_admin.php");