  <?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbtubes  = "dbtubes";

    $conn = mysqli_connect($hostname, $username, $password, $dbtubes);

    // 
    function query($query) {
      $conn = koneksi();
      $data = mysqli_query($conn, $query) or die(mysqli_error($conn));
      
      $rows = [];
      while($row = mysqli_fetch_assoc($data)) {
          $rows[] = $row;
      
      }
      return $rows;
      }
  ?>