<?php

require('../db/database.php');
$db = new Database();

$no = $_POST['no_induk'];
$id_cus = $_POST['id_cus'];

// -- CARA LANGSUNG 
// $db->query("INSERT INTO books (no_induk, judul, penulis, tahun, penerbit, subjek) VALUES ('$no', '$judul', '$penulis', '$tahun', '$penerbit', '$subject')");

// -- MENGGUNKAN BIND
$db->query('INSERT INTO loans (id_cus, no_induk, start_date) VALUES (:id_cus, :no_induk, now())');

$db->bind(':id_cus', $id_cus);
$db->bind(':no_induk', $no);

// print_r($db);
// var_dump($_POST);
// exit;

$db->execute();

header("Location: ../data_pinjam.php");