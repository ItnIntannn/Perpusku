<?php
require('controller/islogin.php');

// menggunakan class database
require('db/database.php');
$db = new Database();

$no = @$_GET['no'];

// buat query untuk mengambil data di table
$db->query('SELECT * FROM books WHERE no_induk=:no_induk');

// binding data query dengan variable
$db->bind(':no_induk', $no);

// execute query ke databse
$buku = $db->single();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | General Form Elements</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <?php
    require('template/header.php');
    ?>

    <?php
    require('template/sidebar.php');
    ?>



    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6" style="color: #610014;">
              <h1>Buku</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item" ><a href="#" style="color: #610014;">Home</a></li>
                <li class="breadcrumb-item active" style="color: #EAAAB8;">
                  <?php
                  if ($no) {
                    echo 'Edit Buku';
                  } else {
                    echo 'Tambah Buku';
                  }
                  ?>
                </li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">

        <form enctype="multipart/form-data" action="<?php echo (@$no ? 'controller/update_buku.php' : 'controller/save_buku.php'); ?>" method="POST">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-3">
                <!-- general form elements -->
                <div class="card card-danger" style="color: #D5647C;">
                  <div class="card-header"  style="background-color: #D5647C;">
                    <h3 class="card-title" style="color: #610014;">Gambar</h3>
                  </div>
                  <div class="form-group mb-0">
                    <div class="input-group">
                      <div class="custom-file m-3">
                        <input type="file" name="image" class="custom-file-input" id="exampleInputFile" accept="image/*">
                        <label class="custom-file-label" for="examplelnputFile" >Pilih</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- left column -->
              <div class="col-md-9">
                <!-- general form elements -->
                <div class="card card-primary" >
                  <div class="card-header" style="background-color: #D5647C;">
                    <h3 class="card-title" style="color: #610014;">
                      <?php
                      if ($no) {
                        echo 'Edit Buku';
                      } else {
                        echo 'Tambah Buku';
                      }
                      ?>
                    </h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->

                  <div class="card-body">
                    <div class="form-group">
                      <label for="no_induk" style="color: #610014;">No Induk</label>
                      <input type="text" class="form-control" name="no_induk" id="no_induk" placeholder="Masukkan No Induk" required <?= @$buku['no_induk'] ? 'readonly' : ''; ?> value="<?php echo @$buku['no_induk'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="judul" style="color: #610014;">Judul</label>
                      <input type="text" class="form-control"  name="judul" id="judul" placeholder="Masukkan Judul" required value="<?php echo @$buku['judul'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="penulis" style="color: #610014;">Penulis</label>
                      <input type="text" class="form-control" name="penulis" id="penulis" placeholder="Masukkan Penulis" required value="<?php echo @$buku['penulis'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="tahun" style="color: #610014;">Tahun Terbit</label>
                      <input style="color: #EAAAB8;" type="number" class="form-control" name="tahun" id="tahun" placeholder="Masukkan Tahun Terbit" required value="<?php echo @$buku['tahun'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="penerbit" style="color: #610014;">Penerbit</label>
                      <input type="text" class="form-control" name="penerbit" id="penerbit" placeholder="Masukkan Penerbit" required value="<?php echo @$buku['penerbit'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="subject" style="color: #610014;">Subject</label>
                      <input type="text" class="form-control" name="subject" id="subject" placeholder="Masukkan Subject" value="<?php echo @$buku['subjek'] ?>">
                    </div>

                    <!-- /.card-body -->

                    <div class="card-footer">
                      <button type="submit" class="btn" style="background-color: #D5647C; color: #610014;">Simpan</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <?php
    require('template/footer.php');
    ?>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- bs-custom-file-input -->
  <script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- Page specific script -->
  <script>
    $(function() {
      bsCustomFileInput.init();
    });
  </script>

</body>

</html>