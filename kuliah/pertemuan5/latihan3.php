<?php 
// Representasi data mahasiswa

    $mahasiswa = [
    ["Saiful Hilal", "213040128", "saiful.213040128@mail.unpas.ac.id",
    "teknik Informatika"],
    ["Julio Faridh", "213040143", "julio.213040143@mail.unpas.ac.id",
    "teknik Informatika"],
    ["muhamad ridwan", "213040111", "muhamad.213040111@mail.unpas.ac.id",
    "teknik Informatika"]
];


?>
<?php foreach($mahasiswa as $mhs) { ?>
<ul>
    <li>Nama : <?php echo $mhs[0]; ?> </li>
    <li>NPM : <?php echo $mhs[1]; ?> </li>
    <li>Email : <?php echo $mhs[2];?></li>
    <li>Jurusan : <?php echo $mhs[3];?> </li>
</ul>
<?php }?>