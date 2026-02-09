<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Tambah Data Mahasiswa</h2>
        
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('mahasiswa.store') }}" method="POST">
            @csrf 
            
            <div class="mb-3">
                <label>NIM</label>
                <input type="text" name="nim" class="form-control" placeholder="Masukkan NIM" value="{{ old('nim') }}">
            </div>
            
            <div class="mb-3">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Lengkap" value="{{ old('nama') }}">
            </div>
            
            <div class="mb-3">
                <label>Kelas</label>
                <input type="text" name="kelas" class="form-control" placeholder="Contoh: SI-P1" value="{{ old('kelas') }}">
            </div>
            
            <div class="mb-3">
                <label>Mata Kuliah</label>
                <select name="matakuliah" class="form-select">
                    <option value="">-- Pilih Mata Kuliah --</option>
                    @foreach ($matakuliahs as $mk)
                        <option value="{{ $mk->nama_mk }}" {{ old('matakuliah') == $mk->nama_mk ? 'selected' : '' }}>
                            {{ $mk->nama_mk }} ({{ $mk->sks }} SKS)
                        </option>
                    @endforeach
                </select>
            </div>
            
            <button type="submit" class="btn btn-primary">Simpan Data</button>
            <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>
</html>