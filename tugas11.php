<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Processing</title>
    <link rel="stylesheet" href="tugas11.css">
</head>
<body>

<div class="container">
    <?php
    if (isset($_POST['InputNama'])){ 
        $nama = $_POST['nama']; 
        echo "<h2>Nama Anda:</h2>";
        echo "<p>$nama</p>";
    }
    ?>

    <?php
    if (isset($_POST['InputTeman'])) {
        echo "<h2>Daftar Teman-teman Saya Belajar PHP:</h2>";
        echo "<ul>";
        for ($i = 1; $i <= 4; $i++) {
            $nama_teman = $_POST['nama'.$i];
            echo "<li>$nama_teman</li>";
        }
        echo "</ul>";
    }
    ?>

    <?php
    if (isset($_POST['Login'])) {
        $user = $_POST['username'];
        $pass = $_POST['password'];
        if ($user == "adit" && $pass == "adit") {
            echo "<h2>Login berhasil, selamat</h2>";
        } else {
            echo "<h2>Login Gagal, maaf ulang lagi</h2>";
        }
    }
    ?>

    <?php
    if (isset($_POST['PilihProdi'])){
        $programstudi = $_POST['prodi'];
        echo "<h2>Program studi yang Anda pilih:</h2>";
        echo "<p><b>$programstudi</b></p>";
    }
    ?>

    <?php
    if (isset($_POST['PilihKpop'])){
        echo "<h2>Kpop favorit Anda:</h2>";
        echo "<ul>";
        foreach ($_POST['kpop'] as $band){
            echo "<li>$band</li>";
        }
        echo "</ul>";
    }
    ?>

    <?php
    if (isset($_POST['PilihHantu'])){
        $film = $_POST['hantu'];
        echo "<h2>Film Hantu Favorit Anda:</h2>";
        echo "<p><b>$film</b></p>";
    }
    ?>

    <?php
    if (isset($_POST['PilihListHantu'])){
        $film = $_POST['listhantu'];
        echo "<h2>Film Hantu Favorit Anda:</h2>";
        echo "<p><b>$film</b></p>";
    }
    ?>

    <?php
    if (isset($_POST['ProsesSaran'])){
        $saran = nl2br($_POST['saran']);
        echo "<h2>Kritik/Saran Anda:</h2>";
        echo "<p>$saran</p>";
    }
    ?>
</div>

</body>
</html>
