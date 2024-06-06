CREATE TABLE `anggota` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `jenis_kelamin` enum('laki','perempuan') NOT NULL DEFAULT 'laki',
  `alamat` text NOT NULL,
  `status` enum('aktif','non aktif') NOT NULL DEFAULT 'aktif'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;