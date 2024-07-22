<?php

// menambahkan class databse
require('../db/database.php');
$db = new Database();

// mengambil data no menggunakan GET
$no = $_GET['id'];

// buat query untuk melakkan pengapusan data di table
$db->query('DELETE FROM loans WHERE id=:id');

// binding data query dengan variable
$db->bind('id', $id);

// execute query ke databse
$db->execute();

// kembalikan ke halaman data_buku.php
header("Location: ../data_pinjam.php");
