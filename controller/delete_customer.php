<?php

// menambahkan class databse
require('../db/database.php');
$db = new Database();

// mengambil data no menggunakan GET
$no = $_GET['id_cus'];

// buat query untuk melakkan pengapusan data di table
$db->query('DELETE FROM customers WHERE id_cus=:id_cus');

// binding data query dengan variable
$db->bind('id_cus', $id_cus);

// execute query ke databse
$db->execute();

// kembalikan ke halaman data_buku.php
header("Location: ../data_customer.php");
