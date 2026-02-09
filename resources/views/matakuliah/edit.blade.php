<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mata Kuliah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Edit Mata Kuliah</h2>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('matakuliah.update', $matakuliah->kode_mk) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="mb-3">
                <label>Kode MK</label>
                <input type="text" name="kode_mk" class="form-control" value="{{ $matakuliah->kode_mk }}" readonly>
            </div>
            
            <div class="mb-3">
                <label>Nama Mata Kuliah</label>
                <input type="text" name="nama_mk" class="form-control" value="{{ old('nama_mk', $matakuliah->nama_mk) }}">
            </div>
            
            <div class="mb-3">
                <label>SKS (1-6)</label>
                <input type="number" name="sks" class="form-control" min="1" max="6" value="{{ old('sks', $matakuliah->sks) }}">
            </div>
            
            <div class="mb-3">
                <label>Semester</label>
                <input type="number" name="semester" class="form-control" value="{{ old('semester', $matakuliah->semester) }}">
            </div>
            
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('matakuliah.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</body>
</html>