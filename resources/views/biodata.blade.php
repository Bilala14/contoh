<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keterangan Responden</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container my-5">
    <h3 class="text-center mb-4">Keterangan Responden</h3>

    <div class="alert alert-info">
        <strong>Jenis Pelayanan Dipilih:</strong> {{ $pelayanan }}
    </div>

    <form action="/biodata" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Responden</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat Responden</label>
            <textarea class="form-control" id="alamat" name="alamat" rows="2" required></textarea>
        </div>

        <div class="mb-3">
            <label for="nohp" class="form-label">No HP Responden</label>
            <input type="text" class="form-control" id="nohp" name="nohp" required>
        </div>

        <button type="submit" class="btn btn-success">Kirim</button>
    </form>
</div>
</body>
</html>
