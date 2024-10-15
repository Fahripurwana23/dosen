<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <title>Document</title>
</head>
<body>

    <div class="container mt-5">
        <h2 class="mb-4">Data Dosen</h2>
        <table class="table table-striped table-bordered table-hover">
            <thead>
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
                    <td><img src="{{ asset($item->foto_dosen) }}" alt="Foto Dosen" width="50"></td>
                    <td>{{ $item->tgl_mulai_tugas }}</td>
                    <td>{{ $item->bidang_keilmuan }}</td>
                    <td>{{ $item->jenjang_pendidikan }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>
