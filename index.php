<?php require_once 'config.php'; ?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Data Mahasiswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body style="font-family: 'Poppins', sans-serif;">
  <!-- Start Nav -->
  <?php
  require_once 'navbar.php';
  ?>
  <!-- End Nav -->

  <!-- Start Contianer -->
  <div class="container">
    <h1 class="mt-3">Data Mahasiswa Universitas Jambi</h1>
    <div class="mt-3">
      <?php
      $sql = "SELECT * FROM mahasiswa";
      $query = mysqli_query($db, $sql);
      while ($mahasiswa = mysqli_fetch_array($query)) {
      ?>
        <div class="card mb-2" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title"><?= $mahasiswa['nama']; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= $mahasiswa['nim']; ?></h6>
          </div>
        </div>
      <?php
      }
      ?>
    </div>
  </div>
  <!-- End Container -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>