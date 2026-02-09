<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mata Kuliah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Tambah Mata Kuliah</h2>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('matakuliah.store') }}" method="POST">
            @csrf
            
            <div class="mb-3">
                <label>Kode MK</label>
                <input type="text" name="kode_mk" class="form-control" placeholder="Contoh: MK001" value="{{ old('kode_mk') }}">
            </div>
            
            <div class="mb-3">
                <label>Nama Mata Kuliah</label>
                <input type="text" name="nama_mk" class="form-control" placeholder="Contoh: Pemrograman Web" value="{{ old('nama_mk') }}">
            </div>
            
            <div class="mb-3">
                <label>SKS (1-6)</label>
                <input type="number" name="sks" class="form-control" min="1" max="6" placeholder="Masukkan SKS (1-6)" value="{{ old('sks') }}">
            </div>
            
            <div class="mb-3">
                <label>Semester</label>
                <input type="number" name="semester" class="form-control" placeholder="Semester" value="{{ old('semester') }}">
            </div>
            
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('matakuliah.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>
</html>