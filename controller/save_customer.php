<?php

require('../db/database.php');
$db = new Database();

$id_cus = $_POST['id_cus'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];
$jk = $_POST['jk'];

// -- CARA LANGSUNG 
// $db->query("INSERT INTO books (no_induk, judul, penulis, tahun, penerbit, subjek) VALUES ('$no', '$judul', '$penulis', '$tahun', '$penerbit', '$subject')");

// -- MENGGUNKAN BIND
$db->query('INSERT INTO customers (id_cus, nama, alamat, telp, jk) VALUES (:id_cus, :nama, :alamat, :telp, :jk)');

$db->bind(':id_cus', $id_cus);
$db->bind(':nama', $nama);
$db->bind(':alamat', $alamat);
$db->bind(':telp', $telp);
$db->bind(':jk', $jk);

// print_r($db);
// var_dump($_POST);
// exit;

$db->execute();

header("Location: ../data_customer.php");