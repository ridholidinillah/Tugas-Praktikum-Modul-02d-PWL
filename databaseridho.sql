-- SQL Dump untuk Database Sekolah (Project Laravel)
-- Dibuat oleh: Muhammad Ridho Lidinillah
-- Tanggal: 11 Februari 2026

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+07:00";

-- --------------------------------------------------------

--
-- 1. Struktur table `matakuliahs`
--

CREATE TABLE IF NOT EXISTS `matakuliahs` (
  `kode_mk` varchar(10) NOT NULL,
  `nama_mk` varchar(255) NOT NULL,
  `sks` int(11) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`kode_mk`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data (Data Dummy) untuk table `matakuliahs`
--

INSERT INTO `matakuliahs` (`kode_mk`, `nama_mk`, `sks`, `semester`, `created_at`, `updated_at`) VALUES
('MK001', 'Pemrograman Web Lanjut', 4, '4', NOW(), NOW()),
('MK002', 'Basis Data Terdistribusi', 3, '4', NOW(), NOW()),
('MK003', 'Kecerdasan Buatan', 3, '5', NOW(), NOW()),
('MK004', 'Jaringan Komputer', 3, '3', NOW(), NOW()),
('MK005', 'Metodologi Penelitian', 2, '6', NOW(), NOW());

-- --------------------------------------------------------

--
-- 2. Struktur table `mahasiswas`
--

CREATE TABLE IF NOT EXISTS `mahasiswas` (
  `nim` varchar(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `matakuliah` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data (Data Dummy) untuk table `mahasiswas`
--

INSERT INTO `mahasiswas` (`nim`, `nama`, `kelas`, `matakuliah`, `created_at`, `updated_at`) VALUES
('43240408', 'Muhammad Ridho Lidinillah', 'SI-P1', 'Pemrograman Web Lanjut', NOW(), NOW()),
('43240101', 'Dwi Rahmawati', 'SI-P2', 'Basis Data Terdistribusi', NOW(), NOW()),
('43240102', 'Budi Santoso', 'TI-M1', 'Kecerdasan Buatan', NOW(), NOW()),
('43240103', 'Siti Aminah', 'SI-P1', 'Pemrograman Web Lanjut', NOW(), NOW()),
('43240104', 'Andi Saputra', 'TI-K2', 'Jaringan Komputer', NOW(), NOW());

COMMIT;