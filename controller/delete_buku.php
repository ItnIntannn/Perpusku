<?php

// menambahkan class databse
require('../db/database.php');
$db = new Database();

// mengambil data no menggunakan GET
$no = $_GET['no'];

// buat query untuk melakkan pengapusan data di table
$db->query('DELETE FROM books WHERE no_induk=:no_induk');

// binding data query dengan variable
$db->bind('no_induk', $no);

// execute query ke databse
$db->execute();

// kembalikan ke halaman data_buku.php
header("Location: ../data_buku.php");
