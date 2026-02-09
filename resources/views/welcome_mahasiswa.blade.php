<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modul 1 Laravel 12 - {{ $nama }}</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #1a2980 0%, #26d0ce 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .container {
            background: white;
            border-radius: 20px;
            box-shadow: 0 25px 70px rgba(0, 0, 0, 0.3);
            padding: 40px;
            max-width: 1000px;
            width: 100%;
            animation: slideUp 0.8s ease-out;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(40px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .header {
            text-align: center;
            margin-bottom: 40px;
            padding-bottom: 25px;
            border-bottom: 3px solid #1a2980;
            position: relative;
        }

        .header::after {
            content: '';
            position: absolute;
            bottom: -3px;
            left: 50%;
            transform: translateX(-50%);
            width: 200px;
            height: 5px;
            background: linear-gradient(90deg, #1a2980, #26d0ce);
            border-radius: 5px;
        }

        h1 {
            color: #333;
            font-size: 2.3rem;
            margin-bottom: 15px;
            background: linear-gradient(90deg, #1a2980, #26d0ce);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .nama-mahasiswa {
            color: #1a2980;
            font-weight: 800;
            font-size: 2.5rem;
            letter-spacing: 0.5px;
            margin: 10px 0;
            text-shadow: 2px 2px 4px rgba(26, 41, 128, 0.1);
        }

        .info-mahasiswa {
            background: linear-gradient(135deg, #f8f9ff 0%, #e3f2fd 100%);
            padding: 20px;
            border-radius: 15px;
            margin: 25px 0;
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            gap: 15px;
            border: 2px solid #e0f7fa;
        }

        .info-item {
            text-align: center;
            padding: 10px 20px;
        }

        .info-label {
            color: #666;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 5px;
        }

        .info-value {
            color: #1a2980;
            font-size: 1.2rem;
            font-weight: bold;
        }

        .intro {
            font-size: 1.15rem;
            color: #555;
            line-height: 1.7;
            margin: 30px 0;
            text-align: center;
            padding: 25px;
            background: #f0f8ff;
            border-radius: 12px;
            border-left: 5px solid #1a2980;
            box-shadow: inset 0 2px 10px rgba(0,0,0,0.05);
        }

        .mata-kuliah-section {
            margin: 40px 0;
        }

        .section-title {
            color: #1a2980;
            font-size: 1.8rem;
            margin-bottom: 30px;
            padding-bottom: 15px;
            border-bottom: 2px solid #e0f7fa;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .section-title::before {
            content: '📚';
            font-size: 1.5rem;
        }

        .mata-kuliah-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 25px;
            margin-top: 20px;
        }

        .mata-kuliah-card {
            background: linear-gradient(145deg, #ffffff 0%, #f0f8ff 100%);
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(26, 41, 128, 0.1);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            border: 1px solid #e0f7fa;
        }

        .mata-kuliah-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 35px rgba(26, 41, 128, 0.2);
            border-color: #1a2980;
        }

        .mata-kuliah-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 6px;
            height: 100%;
            background: linear-gradient(180deg, #1a2980, #26d0ce);
        }

        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .kode-mk {
            font-weight: bold;
            color: #1a2980;
            font-size: 1rem;
            background: #e0f7fa;
            padding: 4px 12px;
            border-radius: 15px;
            letter-spacing: 1px;
        }

        .semester-badge {
            background: #26d0ce;
            color: white;
            padding: 4px 12px;
            border-radius: 15px;
            font-size: 0.85rem;
        }

        .nama-mk {
            color: #222;
            font-size: 1.3rem;
            margin: 15px 0;
            font-weight: 600;
            line-height: 1.4;
        }

        .card-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
            padding-top: 15px;
            border-top: 1px dashed #ddd;
        }

        .sks {
            background: linear-gradient(90deg, #1a2980, #26d0ce);
            color: white;
            padding: 6px 18px;
            border-radius: 20px;
            font-weight: bold;
            font-size: 1rem;
        }

        .status {
            color: #26d0ce;
            font-weight: bold;
            font-size: 0.9rem;
        }

        .footer {
            text-align: center;
            margin-top: 50px;
            padding-top: 25px;
            border-top: 2px solid #e0f7fa;
            color: #666;
        }

        .ai-badge {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: linear-gradient(90deg, #1a2980, #26d0ce);
            color: white;
            padding: 12px 30px;
            border-radius: 30px;
            font-weight: bold;
            margin-top: 15px;
            box-shadow: 0 5px 15px rgba(26, 41, 128, 0.3);
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }

        .copyright {
            margin-top: 20px;
            font-size: 0.9rem;
            color: #888;
        }

        @media (max-width: 768px) {
            .container {
                padding: 25px;
            }
            
            h1 {
                font-size: 1.8rem;
            }
            
            .nama-mahasiswa {
                font-size: 2rem;
            }
            
            .mata-kuliah-grid {
                grid-template-columns: 1fr;
            }
            
            .info-mahasiswa {
                flex-direction: column;
                text-align: center;
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 20px;
            }
            
            .header {
                margin-bottom: 25px;
            }
            
            .nama-mahasiswa {
                font-size: 1.8rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Modul Sesi 3 - Laravel 12</h1>
            <div class="nama-mahasiswa">{{ $nama }}</div>
        </div>
        
        <div class="info-mahasiswa">
            <div class="info-item">
                <div class="info-label">NIM</div>
                <div class="info-value">{{ $nim }}</div>
            </div>
            <div class="info-item">
                <div class="info-label">Kelas</div>
                <div class="info-value">{{ $kelas }}</div>
            </div>
            <div class="info-item">
                <div class="info-label">Jumlah Matkul</div>
                <div class="info-value">{{ count($mataKuliah) }} Mata Kuliah</div>
            </div>
            <div class="info-item">
                <div class="info-label">Total SKS</div>
                <div class="info-value">
                    {{ array_sum(array_column($mataKuliah, 'sks')) }} SKS
                </div>
            </div>
        </div>

        <div class="intro">
            <p>✨ Selamat datang di halaman akademik saya! 
            Ini adalah implementasi pertama saya menggunakan Laravel 12 untuk menampilkan data mahasiswa dan mata kuliah secara dinamis.</p>
        </div>

        <div class="mata-kuliah-section">
            <h2 class="section-title">Daftar Mata Kuliah Semester Ini</h2>
            
            @if(isset($mataKuliah) && count($mataKuliah) > 0)
                <div class="mata-kuliah-grid">
                    @foreach($mataKuliah as $index => $mk)
                    <div class="mata-kuliah-card">
                        <div class="card-header">
                            <div class="kode-mk">{{ $mk['kode'] }}</div>
                            <div class="semester-badge">{{ $mk['semester'] }}</div>
                        </div>
                        <div class="nama-mk">{{ $mk['nama'] }}</div>
                        <div class="card-footer">
                            <div class="sks">{{ $mk['sks'] }} SKS</div>
                            <div class="status">Aktif</div>
                        </div>
                    </div>
                    @endforeach
                </div>
            @else
                <p style="text-align: center; color: #666; padding: 20px; background: #f8f9fa; border-radius: 10px;">
                    📝 Data mata kuliah belum tersedia.
                </p>
            @endif
        </div>

        <div class="footer">
            <p>Sistem Informasi - STMIK IKMI CIREBON</p>
            <div class="ai-badge">
                <span>🤖</span>
                <span>Dikembangkan dengan DeepSeek AI Assistant</span>
            </div>
            <div class="copyright">
                &copy; 2024 {{ $nama }} - Laravel 12 Learning Project
            </div>
        </div>
    </div>
</body>
</html>