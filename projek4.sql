-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping data for table akademik2.dosen: ~3 rows (approximately)
DELETE FROM `dosen`;
INSERT INTO `dosen` (`id`, `nama`, `nrp`) VALUES
	(1, 'pak asep', '1'),
	(2, 'pppp', '4445'),
	(15, 'aas', '13');

-- Dumping data for table akademik2.kelas: ~2 rows (approximately)
DELETE FROM `kelas`;
INSERT INTO `kelas` (`id`, `nama`, `prodi_id`, `dosen_id`) VALUES
	(1, 'tif e', 1, 1),
	(2, 'TIF O 2029', 2, 2);

-- Dumping data for table akademik2.mahasiswa: ~4 rows (approximately)
DELETE FROM `mahasiswa`;
INSERT INTO `mahasiswa` (`id`, `nama`, `nim`, `kelas_id`, `prodi_id`, `prodi`) VALUES
	(1, 'ega', '6666', 1, 1, '2'),
	(2, 'aa', '44', 2, 2, '1'),
	(3, 'nando', '2', 1, 1, '1'),
	(10, 'yaya', '126', 1, NULL, '1');

-- Dumping data for table akademik2.prodi: ~2 rows (approximately)
DELETE FROM `prodi`;
INSERT INTO `prodi` (`id`, `nama`, `singkatan`) VALUES
	(1, 'TEKNIK INFORMATIKA', 'TIF'),
	(2, 'PERBAIKAN PERAWATAN MESIN', 'PPM');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
