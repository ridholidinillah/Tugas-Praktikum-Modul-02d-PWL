# LOG KONSULTASI AI - MODUL 02d

**Nama:** Muhammad Ridho Lidinillah
**NIM:** 43240408
**Mata Kuliah:** Pemrograman Web Lanjut

## Sesi 1: Perbaikan Validasi Mahasiswa

**Tanya:** Bagaimana cara menambahkan validasi unique pada NIM dan required pada data lain?

**Jawab AI:**
Menggunakan `$request->validate([...])` pada function store dan update.

## Sesi 2: Perbaikan Fitur Edit & Hapus

**Tanya:**
Bagaimana cara memperbaiki error saat data tidak ditemukan?

**Jawab AI:**
Mengganti method `find($id)` menjadi `findOrFail($id)` agar otomatis menampilkan 404 jika data tidak ada.

## Sesi 3: Pembuatan CRUD Mata Kuliah (Tantangan)

**Tanya:**
Saya ingin membuat tabel Mata Kuliah dengan Primary Key 'kode_mk' (String), bukan ID angka. Bagaimana migrasinya?

**Jawab AI:**
Mengubah `$table->id()` menjadi `$table->string('kode_mk')->primary()` di file migrasi, dan menambahkan `protected $keyType = 'string';` di Model.

## Sesi 4: Relasi & Validasi SKS

**Tanya:**
Bagaimana membuat dropdown otomatis ambil data dari tabel Mata Kuliah?

**Jawab AI:**
Mengirim data `Matakuliah::all()` dari Controller ke View, lalu melakukan looping `@foreach` di dalam tag `<select>`.
