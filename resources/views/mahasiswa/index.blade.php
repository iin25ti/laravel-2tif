<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light p-4">

    <div class="container">
        <!-- Form Tambah Data -->
        <div class="card shadow-sm mb-4">
            <div class="card-header bg-success text-white">
                <h4 class="mb-0">Tambah Data Mahasiswa</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('mahasiswa.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="nama" class="form-label">Nama Mahasiswa</label>
                            <input type="text" name="nama" id="nama" class="form-control" required placeholder="Masukkan Nama">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="nim" class="form-label">NIM</label>
                            <input type="text" name="nim" id="nim" class="form-control" required placeholder="Masukkan NIM">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="prodi" class="form-label">Program Studi</label>
                            <input type="text" name="prodi" id="prodi" class="form-control" placeholder="Masukkan Prodi">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea name="alamat" id="alamat" class="form-control" rows="2" placeholder="Masukkan Alamat"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Simpan Data</button>
                </form>
            </div>
        </div>

        <!-- Tabel Daftar Data -->
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Daftar Mahasiswa</h4>
            </div>
            <div class="card-body">
                @if(isset($mahasiswa) && count($mahasiswa) > 0)
                    <table class="table table-bordered table-striped align-middle">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>NIM</th>
                                <th>Prodi</th>
                                <th>Tgl Lahir</th>
                                <th>Alamat</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($mahasiswa as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama ?? '-' }}</td>
                                    <td>{{ $item->nim ?? '-' }}</td>
                                    <td>{{ $item->prodi ?? '-' }}</td>
                                    <td>{{ $item->tgl_lahir ?? '-' }}</td>
                                    <td>{{ $item->alamat ?? '-' }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <div class="alert alert-info mb-0">
                        Belum ada data mahasiswa.
                    </div>
                @endif
            </div>
        </div>
    </div>

</body>
</html>