<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1 class="text-center mb-4">Masukkan Data Pegawai</h1>

        <form action="proses.php" method="GET">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Pegawai:</label><br>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>

            <div class="mb-3">
                <label for="jabatan" class="form-label">Jabatan:</label><br>
                <input type="text" class="form-control" id="jabatan" name="jabatan" required>
            </div>

            <div class="mb-3">
                <label for="tunjangan" class="form-label">Tunjangan:</label><br>
                <input type="text" class="form-control" id="tunjangan" name="tunjangan" required>
            </div>

            <div class="d-flex">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </div>
</body>

</html>