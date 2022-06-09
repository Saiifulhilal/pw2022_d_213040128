<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
}
require 'functions.php';

// Query ke tabel asus_data
$asuransi = query("SELECT * FROM asuransi");
// Query tabel asus_data sesuai keyword pencarian
if (isset($_GET["cari"])) {
  $keyword = $_GET["keyword"];
  $query = "SELECT * FROM asuransi
              WHERE 
            nama LIKE '%$keyword%'";
  $asuransi = query($query);
}
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Asuransi</title>
</head>

<body>

  <div class="container">
    <h1 class="align-midcle">Asuransi</h1>
    <a href="tambah.php" class="btn btn-primary">Tambah Data</a>
    <form action="" method="GET" class="mt-4">
      <div class="input-group mb-4 mt-4 w-25">
        <input type="text" class="form-control" name="keyword" placeholder="Masukkan Keyword Pencarian.." autocomplete="off">
        <button class="btn btn-primary" type="submit" name="cari">Cari</button>
      </div>
    </form>
    <a class="btn btn-primary text-left" href="logout.php">Logout</a>
    <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Gambar</th>
      <th scope="col">Asuransi</th>
      <th scope="col">detail</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
      <?php
      $no = 1;
      foreach ($asuransi as $row) : ?>
        <tr>
          <th scope="row" class="align-middle"><?php echo $no++; ?></th>
          <td class="align-middle">
            <img src="img/<?php echo $row["gambar"] ?>" class="card-img-top img-fluid mb-3" style="max-height: 150px; min-height: 150px;">
          </td>
          <td class="align-middle"><?php echo $row["nama"]; ?></td>
          <td class="align-middle"><?php echo $row["detail"]; ?></td>
          <td class="align-middle">
            <a href="ubah.php?id=<?= $row["id"]; ?>" class="btn btn-info justify-warning-end">ubah</a>
            <a href="hapus.php?id=<?= $row["id"]; ?>" class="btn btn-danger justify-content-end" onclick="return confirm('yakin?');">hapus</a>
          </td>
        </tr>
      <?php endforeach; ?>
      </tbody>
    </table>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>