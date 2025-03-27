<?php
// Mengecek apakah data berhasil dikirim menggunakan metode GET
if (isset($_GET['nama']) && isset($_GET['jabatan']) && isset($_GET['tunjangan'])) {
    $nama = htmlspecialchars($_GET['nama']);
    $jabatan = htmlspecialchars($_GET['jabatan']);
    $tunjangan = htmlspecialchars($_GET['tunjangan']);
} else {
    $nama = $jabatan = $tunjangan = "Tidak terisi";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <h1 class="text-center mb-3">Data Pegawai</h1>

        <div class="card">
            <div class="card-body">
                <p><strong>Nama Pegawai:</strong> <?php echo $nama; ?></p>
                <p><strong>Jabatan:</strong> <?php echo $jabatan; ?></p>
                <p><strong>Tunjangan:</strong> <?php echo $tunjangan; ?></p>
            </div>
        </div>

        <div class="d-flex mt-2">
            <a href="index.php" class="btn btn-secondary">Kembali ke form data pegawai</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>