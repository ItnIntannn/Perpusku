<?php

// menambahkan class databse
require('../db/database.php');
$db = new Database();

// mengambil data no menggunakan GET
$username = $_GET['username'];

// buat query untuk melakkan pengapusan data di table
$db->query('DELETE FROM admins WHERE username=:username');

// binding data query dengan variable
$db->bind(':username', $username);

// execute query ke databse
$db->execute();

// kembalikan ke halaman data_buku.php
header("Location: ../data_admin.php");
