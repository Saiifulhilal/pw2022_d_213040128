<?php
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
    <h1 class="align-midcle">Daftar Asuransi</h1>

    <form action="" method="GET" class="mt-4">
      <a class="btn btn-primary action-button" role="button" data-bs-hover-animate="pulse" href="login.php">Login</a>
      <div class="input-group mb-2 mt-3 w-25">
        <input type="text" class="form-control" name="keyword" placeholder="Masukkan Keyword Pencarian.." autocomplete="off">
        <button class="btn btn-primary" type="submit" name="cari">Cari</button>
      </div>
    </form>

    <div class="intro">
      <h2 class="text-center" id="Produk" style="margin-top: 110px">Produk</h2>
    </div>
    <div class="tab-content">
      <div class="row">
        <?php if (empty($asuransi)) : ?>
          <div class="col-md-12">
            <h1 class="text-center">Data produk tidak ditemukan!</h3>
          </div>
        <?php endif; ?>
      </div>
      <div class="tab-pane active" role="tabpanel" id="tab-1">
        <div class="card-group">
          <div class="container-fluid">
            <div class="row">
              <?php foreach ($asuransi as $row) : ?>
                <div class="col-md-4">
                  <div class="card shadow mt-3">
                    <img class="card-img-top img-fluid max-foto" src="img/<?= $row['gambar']; ?>" style="max-height: 200px; min-height: 200px;">
                    <div class="card-body">
                      <h4 class="card-title"><?= $row['nama']; ?></h4>
                      <a href="detail.php?id=<?= $row['id']; ?>" class="btn btn-primary">Detail</a>
                    </div>
                  </div>
                </div>
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