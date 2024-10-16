<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Dosen</title>
    <!-- Link ke CSS Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4 text-center">Data Dosen</h2>
        <table class="table table-striped table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>NIDN</th>
                    <th>Nama Dosen</th>
                    <th>Foto Dosen</th>
                    <th>Tanggal Mulai Tugas</th>
                    <th>Bidang Keilmuan</th>
                    <th>Jenjang Pendidikan</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php $no = 1; @endphp
                @foreach ($dosens as $item)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $item->nidn }}</td>
                    <td>{{ $item->nama_dosen }}</td>
                    <td>
                        <img src="{{ asset($item->foto_dosen) }}" alt="Foto Dosen" class="img-thumbnail" width="50">
                    </td>
                    <td>{{ $item->tgl_mulai_tugas }}</td>
                    <td>{{ $item->bidang_keilmuan }}</td>
                    <td>{{ $item->jenjang_pendidikan }}</td>
                    <td class="text-center">
                        <a href="#" class="btn btn-sm btn-primary">Edit</a>
                        <a href="#" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- Link ke JS Bootstrap dan jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
