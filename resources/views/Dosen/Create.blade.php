<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Dosen</title>
    <!-- Link ke CSS Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4 text-center">Tambah Data Dosen</h2>
        <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 row">
                <label for="nidn" class="col-sm-2 col-form-label">NIDN :</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="nidn" name="nidn" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nama_dosen" class="col-sm-2 col-form-label">Nama Dosen :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama_dosen" name="nama_dosen" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="tgl_mulai_tugas" class="col-sm-2 col-form-label">Tanggal Mulai Tugas :</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="tgl_mulai_tugas" name="tgl_mulai_tugas" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="bidang_keilmuan" class="col-sm-2 col-form-label">Bidang Keilmuan :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="bidang_keilmuan" name="bidang_keilmuan" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="type" class="col-sm-2 col-form-label">Jenjang Pendidikan :</label>
                <div class="col-sm-10">
                    <select class="form-select form-control" id="type" name="type" required>
                        <option selected disabled hidden>Pilih</option>
                        <option value="s2">S2</option>
                        <option value="s3">S3</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="foto_dosen" class="col-sm-2 col-form-label">Foto Dosen :</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control-file" id="foto_dosen" name="foto_dosen" required>
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary mt-3">Tambah Data</button>
                <a href="{{ route('index') }}" class="btn btn-secondary mt-3">Kembali</a>
            </div>
        </form>
    </div>

    <!-- Link ke JS Bootstrap dan jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
