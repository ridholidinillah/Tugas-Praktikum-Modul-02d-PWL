<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Edit Data Mahasiswa</h2>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('mahasiswa.update', $mahasiswa->nim) }}" method="POST">
            @csrf
            @method('PUT') <div class="mb-3">
                <label>NIM</label>
                <input type="text" name="nim" class="form-control" value="{{ $mahasiswa->nim }}" readonly>
            </div>
            
            <div class="mb-3">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" value="{{ old('nama', $mahasiswa->nama) }}">
            </div>
            
            <div class="mb-3">
                <label>Kelas</label>
                <input type="text" name="kelas" class="form-control" value="{{ old('kelas', $mahasiswa->kelas) }}">
            </div>
            
            <div class="mb-3">
                <label>Mata Kuliah</label>
                <select name="matakuliah" class="form-select">
                    <option value="">-- Pilih Mata Kuliah --</option>
                    @foreach ($matakuliahs as $mk)
                        <option value="{{ $mk->nama_mk }}" 
                            {{ $mahasiswa->matakuliah == $mk->nama_mk ? 'selected' : '' }}>
                            {{ $mk->nama_mk }}
                        </option>
                    @endforeach
                </select>
            </div>
            
            <button type="submit" class="btn btn-primary">Update Data</button>
            <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</body>
</html>