-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2024 at 08:13 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sasando`
--

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

CREATE TABLE `forms` (
  `uuid` char(36) NOT NULL,
  `jsa_uuid` char(36) DEFAULT NULL,
  `jsa_safety_permit_uuid` char(36) DEFAULT NULL,
  `jsa_person_group_uuid` char(36) DEFAULT NULL,
  `to_carry_out_work` varchar(255) NOT NULL,
  `unit_territory` varchar(255) NOT NULL,
  `start_date` varchar(255) NOT NULL,
  `finish_date` varchar(255) NOT NULL,
  `start_time` varchar(255) NOT NULL,
  `finish_time` varchar(255) NOT NULL,
  `job_base_number` varchar(255) NOT NULL,
  `company_or_field` varchar(255) NOT NULL,
  `delay_start_time` varchar(255) DEFAULT NULL,
  `delay_start_date` varchar(255) DEFAULT NULL,
  `delay_finish_time` varchar(255) DEFAULT NULL,
  `delay_excuse` varchar(255) DEFAULT NULL,
  `approve_start_competent_person` varchar(255) NOT NULL,
  `approve_start_production_supervisor` varchar(255) NOT NULL,
  `approve_start_job_user` varchar(255) NOT NULL,
  `approve_start_job_field` varchar(255) NOT NULL,
  `clearance_competent_person` varchar(255) NOT NULL,
  `clearance_production_supervisor` varchar(255) NOT NULL,
  `clearance_job_user` varchar(255) NOT NULL,
  `clearance_job_field` varchar(255) NOT NULL,
  `third_party_date` varchar(255) DEFAULT NULL,
  `third_party_time` varchar(225) DEFAULT NULL,
  `third_party_person` varchar(255) DEFAULT NULL,
  `cancellation_competent_person` varchar(255) DEFAULT NULL,
  `cancellation_production_supervisor` varchar(255) DEFAULT NULL,
  `cancellation_job_user` varchar(255) DEFAULT NULL,
  `cancellation_job_field` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`uuid`, `jsa_uuid`, `jsa_safety_permit_uuid`, `jsa_person_group_uuid`, `to_carry_out_work`, `unit_territory`, `start_date`, `finish_date`, `start_time`, `finish_time`, `job_base_number`, `company_or_field`, `delay_start_time`, `delay_start_date`, `delay_finish_time`, `delay_excuse`, `approve_start_competent_person`, `approve_start_production_supervisor`, `approve_start_job_user`, `approve_start_job_field`, `clearance_competent_person`, `clearance_production_supervisor`, `clearance_job_user`, `clearance_job_field`, `third_party_date`, `third_party_time`, `third_party_person`, `cancellation_competent_person`, `cancellation_production_supervisor`, `cancellation_job_user`, `cancellation_job_field`, `created_at`, `updated_at`) VALUES
('9b6d0028-5f77-490a-bb0a-e230b2e107f4', '9b6cf12e-8784-4fcf-a054-7f192d16f62d', '1e0a03f8-cb7d-11ee-841d-9c5c8e3fd3aa', '9b5b7b9f-0079-4242-a296-1b38acc7ca21', 'Perbaikan dan penambalan kebocoran expantion join cyclone #2', 'Boiler #2', '2024-02-28', '2024-02-29', '08:00', '16:00', 'WO', 'PT. PJBS PLTU Bolok / Mekanik', NULL, NULL, NULL, NULL, 'Mansur Hasan', 'Meijumez Frids Ndun', 'Evri Angga Yurida', 'Mekanik', 'Mansur Hasan', 'Meijumez Frids Ndun', 'Evri Angga Yurida', 'Mekanik', '2024-02-26', '12:00', 'Egidius Gideon Gusti Keba', NULL, NULL, NULL, NULL, '2024-02-25 22:16:03', '2024-03-03 22:58:26');

-- --------------------------------------------------------

--
-- Table structure for table `form_additional_notes`
--

CREATE TABLE `form_additional_notes` (
  `uuid` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form_additional_notes`
--

INSERT INTO `form_additional_notes` (`uuid`, `name`, `created_at`, `updated_at`) VALUES
('9b63ddef-ee0e-454d-b44a-847df87973e8', 'Pastikan pekerja yang terlibat sudah berpengalaman dan berkompetent/ ahli', '2024-02-21 09:17:55', '2024-02-21 09:17:55'),
('9b63de11-a707-424a-9033-c7db60f6ce5f', 'Apabila pekerjaan dilakukan di luar Jam dan atau di luar Hari Kerja, permit ini harus dilengkapi dengan Surat Pemberitahuan ke Pemimpin Tertinggi Unit', '2024-02-21 09:18:17', '2024-02-21 09:18:17');

-- --------------------------------------------------------

--
-- Table structure for table `form_descriptions`
--

CREATE TABLE `form_descriptions` (
  `uuid` char(36) NOT NULL,
  `name` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `form_descriptions`
--

INSERT INTO `form_descriptions` (`uuid`, `name`, `created_at`, `updated_at`) VALUES
('4b7cafd4-cee8-11ee-a3c2-9c5c8e3fd3aa', 'Ventilasi cukup / di buka untuk sirkulasi udara', NULL, '2024-02-20 01:38:48'),
('4b7cfc04-cee8-11ee-a3c2-9c5c8e3fd3aa', 'Diperlukan ventilasi udara darurat', NULL, NULL),
('4b7d3ab7-cee8-11ee-a3c2-9c5c8e3fd3aa', 'Diperlukan penerangan tambahan', NULL, NULL),
('4b7d7897-cee8-11ee-a3c2-9c5c8e3fd3aa', 'Bebas dari gas yang berbahaya, mudah terbakar, meledak (lakukan gas test disekitar area pekerjaan)', NULL, '2024-02-21 03:06:30'),
('5a5e3766-cf01-11ee-a3c2-9c5c8e3fd3aa', 'Diperlukan Fire Watch / standby person', NULL, '2024-02-20 01:38:41'),
('5a5e59e1-cf01-11ee-a3c2-9c5c8e3fd3aa', 'Tersedia form monitoring Fire Watch', NULL, NULL),
('5a5e773e-cf01-11ee-a3c2-9c5c8e3fd3aa', 'Pemeriksaan peralatan yang standar dan aman', NULL, NULL),
('5a5e94ab-cf01-11ee-a3c2-9c5c8e3fd3aa', 'Seluruh alat harus bebas percikan listrik', NULL, NULL),
('5a5eb231-cf01-11ee-a3c2-9c5c8e3fd3aa', 'Diperlukan 2 way radio di tempat kerja', NULL, NULL),
('5a5ecef5-cf01-11ee-a3c2-9c5c8e3fd3aa', 'Akankah memulai pekerjaan ini membahayakan pekerjaan lain yang sedang berlangsung', NULL, NULL),
('5a5eec44-cf01-11ee-a3c2-9c5c8e3fd3aa', 'Instruksi khusus harus dibaca', NULL, NULL),
('5a5f0990-cf01-11ee-a3c2-9c5c8e3fd3aa', 'Pintu keluar darurat & Alat gawat darurat tersedia dan aman', NULL, NULL),
('5a5f26e4-cf01-11ee-a3c2-9c5c8e3fd3aa', 'Diperlukan pelayanan gawat darurat untuk standby', NULL, NULL),
('5a5f4414-cf01-11ee-a3c2-9c5c8e3fd3aa', 'Peralatan mesin las sudah di grounding', NULL, NULL),
('5a5f618f-cf01-11ee-a3c2-9c5c8e3fd3aa', 'Stistem pemadam kebakaran fixed dalam kondisi ready', NULL, NULL),
('5a5f7f2b-cf01-11ee-a3c2-9c5c8e3fd3aa', 'Diperlukan Impairment permit', NULL, '2024-02-21 03:08:21'),
('5a5f9c91-cf01-11ee-a3c2-9c5c8e3fd3aa', 'Diperlukan pemasangan rambu \"Ada pekerjaan panas di sekitar\"', NULL, NULL),
('5a5fb946-cf01-11ee-a3c2-9c5c8e3fd3aa', 'Dibutuhkan pemasangan fire blanket di tempat pekerjaan', NULL, NULL),
('5a5fd685-cf01-11ee-a3c2-9c5c8e3fd3aa', 'Diperlukan pemasangan baricade di sekitar radius 11m dari lokasi tempat pekerjaan', NULL, NULL),
('5a601237-cf01-11ee-a3c2-9c5c8e3fd3aa', 'Area dibawah/ disekitar pekerjaan dibersihkan, disingkirkan, dilindungi/ di tutupi dari bahan yang mudah terbakar', NULL, NULL),
('5a602f18-cf01-11ee-a3c2-9c5c8e3fd3aa', 'Diperlukan ketersediaan air/ selang air', NULL, NULL),
('5a604c64-cf01-11ee-a3c2-9c5c8e3fd3aa', 'Diperlukan pembasahan area', NULL, NULL),
('5a606c31-cf01-11ee-a3c2-9c5c8e3fd3aa', 'Lakukan pengecekan bila konstruksi mudah terbakar', NULL, NULL),
('5a608acd-cf01-11ee-a3c2-9c5c8e3fd3aa', 'Diperlukan alat pemadam kebakaran portable/ APAR', NULL, NULL),
('5a60a8c1-cf01-11ee-a3c2-9c5c8e3fd3aa', 'Diperlukan rencana penanganan keadaan darurat/ rescue plan', NULL, NULL),
('9b7b29be-09d2-4649-8f7b-114e6b0272bb', 'Gas detector sudah dikalibrasi', '2024-03-03 23:13:56', '2024-03-03 23:13:56'),
('9b7b29cd-f96e-4ef9-ba16-6da27183e0db', 'Mudah terbakar (<5% LEL)', '2024-03-03 23:14:06', '2024-03-03 23:14:06'),
('9b7b29de-fb83-42b1-a8fb-16de9ab961d6', 'Oksigen (19.5 - 23.5 %)', '2024-03-03 23:14:17', '2024-03-03 23:14:17'),
('9b7b2c6e-926a-4a93-9d4a-e21e8ac00f07', 'Hidrogen Sulfida (<10 ppm)', '2024-03-03 23:21:27', '2024-03-03 23:21:27'),
('9b7b2c85-e87a-48d0-a10a-6bf7ab52ae86', 'Karbon Monoksida (<25 ppm)', '2024-03-03 23:21:42', '2024-03-03 23:21:42'),
('9b7b2ca1-80b9-4734-a552-d5a75217b99e', 'Karbon Dioksida (<5000 ppm)', '2024-03-03 23:22:00', '2024-03-03 23:22:00'),
('9b7b2cb5-9f99-4912-9a34-59f4c619b381', 'Chlorine (< 0.5 ppm)', '2024-03-03 23:22:13', '2024-03-03 23:22:13'),
('9b7b2cc2-1d07-4a03-b346-b485a639ba6f', 'Nitrogen Dioksida (< 3 ppm)', '2024-03-03 23:22:22', '2024-03-03 23:22:22'),
('9b7b2cce-9a94-46d6-8b3a-f235e19fbe41', 'Oxide of Nitrogen (<3 ppm)', '2024-03-03 23:22:30', '2024-03-03 23:22:30'),
('9b7b2ce0-c870-4939-b914-c020c06aba03', 'Metana (< 10%)', '2024-03-03 23:22:42', '2024-03-03 23:22:42'),
('9b7b2cec-95f6-4c39-aeb6-a2585cd33997', 'Amonia (< 25 ppm)', '2024-03-03 23:22:49', '2024-03-03 23:22:49'),
('9b7b2cf8-7758-43da-b064-792943711e3f', 'Particulate (< 10%)', '2024-03-03 23:22:57', '2024-03-03 23:22:57'),
('9b7b2d43-7ee9-4983-8dbb-1b96ca531aa3', 'Sulfur Dioksida (< 2 ppm)', '2024-03-03 23:23:46', '2024-03-03 23:23:46'),
('9b7b2d50-9ab8-4b7e-979e-854a74b9425b', 'Bebas gas beracun lainnya', '2024-03-03 23:23:55', '2024-03-03 23:23:55'),
('9b7b2d5c-f008-4cab-967b-826bf8563f07', 'Bebas dari energi lainnya (uap, tekanan, listrik, bising, panas, debu. Dll)', '2024-03-03 23:24:03', '2024-03-03 23:24:03'),
('9b7b2d67-3131-409d-943b-f8320ba669d5', 'Ventilasi di buka untuk sirkulasi udara', '2024-03-03 23:24:10', '2024-03-03 23:24:10'),
('9b7b2e13-dde2-4103-82d3-6301b3f03f38', 'Diperlukan ventilasi udara darurat', '2024-03-03 23:26:03', '2024-03-03 23:26:03'),
('9b7b34e1-e55d-4e35-9f83-627f63583237', 'Pemeriksaan peralatan', '2024-03-03 23:45:05', '2024-03-03 23:45:05'),
('9b7b34ee-98a1-46ce-a20d-c8de966d38db', 'Diperlukan pemasangan triangle catrol personal lift', '2024-03-03 23:45:13', '2024-03-03 23:45:13'),
('9b7b34fb-5e78-4701-aed0-c423811249c4', 'Tersedia standby person', '2024-03-03 23:45:21', '2024-03-03 23:45:21'),
('9b7b3506-d686-45ed-b847-d746054fe7d5', 'Tersedia absensi keluar masuk ruang terbatas', '2024-03-03 23:45:29', '2024-03-03 23:45:29'),
('9b7b3511-cdc8-42e0-9e3b-0e7c2d7a97f3', 'Seluruh alat harus bebas percikan listrik', '2024-03-03 23:45:36', '2024-03-03 23:45:36'),
('9b7b351e-5f71-42e1-9b05-cc1e4f85b99d', 'Diperlukan 2 way radio di tempat kerja/ sistem komunikasi', '2024-03-03 23:45:44', '2024-03-03 23:45:44'),
('9b7b352a-0d7d-455f-8bce-209e11fad0da', 'Instruksi khusus harus dibaca', '2024-03-03 23:45:52', '2024-03-03 23:45:52'),
('9b7b3545-7642-48f9-b080-ca8a9d8d7a15', 'Pemasangan Blower include belalai', '2024-03-03 23:46:10', '2024-03-03 23:46:10'),
('9b7b3550-febd-4ec4-8061-de4d22bd83c9', 'Apakah memulai pekerjaan ini membahayakan pekerjaan lain yang sedang berlangsung', '2024-03-03 23:46:17', '2024-03-03 23:46:17'),
('9b7b355d-cfd6-40fb-9489-8009f7ca6de8', 'Tersedia Pintu keluar darurat & Alat gawat Darurat', '2024-03-03 23:46:26', '2024-03-03 23:46:26'),
('9b7b356c-fd30-4b2f-9701-f80c18f62adb', 'Diperlukan penerangan tambahan (lampu arus DC)', '2024-03-03 23:46:36', '2024-03-03 23:46:36'),
('9b7b3578-2b47-4878-9fa2-1c47ade2f5b8', 'Diperlukan baricade disekitar tempat pekerjaan', '2024-03-03 23:46:43', '2024-03-03 23:46:43'),
('9b7b3583-f0c9-44fd-b6f2-5e04826861e4', 'Diperlukan Emergency Plan Procedure', '2024-03-03 23:46:51', '2024-03-03 23:46:51'),
('9b7b358f-390b-4dcc-ba47-677c9d3e04ef', 'Terpasang rambu \"Confined Space Enter by Permit Only\"', '2024-03-03 23:46:58', '2024-03-03 23:46:58'),
('9b7b359a-0107-475c-962a-7562393a336e', 'Telah ditentukan patokan waktu masuk keluar ruang terbatas', '2024-03-03 23:47:05', '2024-03-03 23:47:05'),
('9b7b35a5-361e-4bab-ab84-dcdaf4c17b8a', 'Tersedia air minum di tempat kerja', '2024-03-03 23:47:13', '2024-03-03 23:47:13'),
('9b7b35af-ed4d-4605-899d-901c3c9af1a0', 'Tersedia tali pengaman/ life lines dan peralatan P3K', '2024-03-03 23:47:20', '2024-03-03 23:47:20'),
('9b7b360b-dea8-41d9-ac11-c2bb31fc3667', 'Pekerja sudah mendapatkan pelatihan WAH awareness/ akses tali (include attendence list awareness)', '2024-03-03 23:48:20', '2024-03-03 23:48:20'),
('9b7b3616-fcd8-49df-afaa-84a59e6a254c', 'Inspeksi full body harness', '2024-03-03 23:48:27', '2024-03-03 23:48:27'),
('9b7b365c-f1b0-4129-ad1e-260bbcf2b8b4', 'Pemeriksaan peralatan dan material (WAH tools equipment design, static line, anchor point), atap mudah pecah/ rapuh', '2024-03-03 23:49:13', '2024-03-03 23:49:13'),
('9b7b366d-8949-48a6-96d1-9445c95a45b1', 'Akankah memulai pekerjaan ini membahayakan pekerjaan lain yang sedang berlangsung/ berbahaya dari pekerjaan lainnya', '2024-03-03 23:49:24', '2024-03-03 23:49:24'),
('9b7b367c-8133-43eb-95d5-6ceb517d038f', 'Tersedia emergency plan procedure', '2024-03-03 23:49:34', '2024-03-03 23:49:34'),
('9b7b3688-1ce3-4698-bcd7-0f724c47ab42', 'Penyelamatan di ketinggian harus bisa dicapai dalam waktu 5 menit', '2024-03-03 23:49:41', '2024-03-03 23:49:41'),
('9b7b3699-00e4-477c-9fb3-f5de85961936', 'Kajian kemungkinan jatuh di berbagai kondisi area tempat (cuaca buruk/ pada maintenance kendaraan)', '2024-03-03 23:49:52', '2024-03-03 23:49:52'),
('9b7b36b4-51e5-4ce4-8476-595116c08e24', 'Jangan menggunakan tangga yang rusak atau tangga berbahan metal untuk pekerjaan lsitrik', '2024-03-03 23:50:10', '2024-03-03 23:50:10'),
('9b7b36dd-9fbe-46b6-85ca-fcb3f7aecd8b', 'Tambahkan tinggi tangga 1 meter di atas tempat yang di tuju/ sisakan 4 anak tangga dari ujung tempat yang dituju', '2024-03-03 23:50:37', '2024-03-03 23:50:37'),
('9b7b36eb-a517-4272-8fa3-a811c904f91f', 'Jangan menambahkan tangga tambahan sehingga tangga tumpang tindih', '2024-03-03 23:50:46', '2024-03-03 23:50:46'),
('9b7b36f8-19bd-4ab8-8cd5-efedace59e3d', 'Amankan puncak tangga, agar tidak bergeser di tempatnya', '2024-03-03 23:50:55', '2024-03-03 23:50:55'),
('9b7b3702-b31e-4065-9dce-3aed64cf82ae', 'Sudut kemiringan 75 derajat dari posisi vertikal', '2024-03-03 23:51:02', '2024-03-03 23:51:02'),
('9b7b3714-7121-457c-834c-47fb40013c73', 'Keempat kakinya harus menancap pada dasar', '2024-03-03 23:51:13', '2024-03-03 23:51:13'),
('9b7b3720-13fd-49d9-aba8-f0a8ffd5f031', 'Tempat kerja tidak boleh dari 2 meter di atas permukaan yang dituju', '2024-03-03 23:51:21', '2024-03-03 23:51:21'),
('9b7b372c-35e0-43e7-9d32-25a170dc5ed3', 'Ukuran maksimum untuk pijakan perancah maksimal 2 meter dan tebal 50 mm', '2024-03-03 23:51:29', '2024-03-03 23:51:29'),
('9b7b373b-8c90-4761-8d76-b6ea1202168a', 'Lakukan penilaian bahaya, terutama pada kabel listrik', '2024-03-03 23:51:39', '2024-03-03 23:51:39'),
('9b7b3746-d6e3-4e34-bdec-516435cfc819', 'Jika ketinggian alat angkat mencapai 8 m atau mengenai kabel listrik, harus memperoleh ijin petugas kelistrikan', '2024-03-03 23:51:46', '2024-03-03 23:51:46'),
('9b7b3752-9535-4a17-8940-80e0ac3e1cb3', 'Tegangan lebih besar dari 415 Volt, jarak aman ditentukan petugas listrik', '2024-03-03 23:51:54', '2024-03-03 23:51:54'),
('9b7b3760-562a-4016-8f0f-736d00e458f3', 'Pastikan muatan kerja aman (safe work load)', '2024-03-03 23:52:03', '2024-03-03 23:52:03'),
('9b7b376f-352b-4866-a56d-71f40914564f', 'Kondisi tanah harus kokoh dan stabil', '2024-03-03 23:52:13', '2024-03-03 23:52:13'),
('9b7b377e-29e4-4ce2-8e4e-1f229a4875a4', 'Safety belt harus diikat ke platform', '2024-03-03 23:52:22', '2024-03-03 23:52:22'),
('9b7b3789-5047-4b30-8746-90059dc442e2', 'Lakukan penilaian bahaya, terutama pada kabel listrik', '2024-03-03 23:52:30', '2024-03-03 23:52:30'),
('9b7b3793-e0fc-45d0-8bf3-5d46d1e04c75', 'Jika ketinggian alat angkat mencapai 8 m atau mengenai kabel listrik, harus memperoleh ijin petugas kelistrikan', '2024-03-03 23:52:37', '2024-03-03 23:52:37'),
('9b7b37a0-073d-4801-8a89-b41890846255', 'Tegangan lebih besar dari 415 Volt, jarak aman ditentukan petugas listrik', '2024-03-03 23:52:45', '2024-03-03 23:52:45'),
('9b7b37ab-b558-4937-9b15-54657c91f88f', 'Pastikan muatan kerja aman (safe work load)', '2024-03-03 23:52:52', '2024-03-03 23:52:52'),
('9b7b37b7-ba90-414c-93e1-d4f53e5436dd', 'Kondisi tanah harus kokoh dan stabil', '2024-03-03 23:53:00', '2024-03-03 23:53:00'),
('9b7b37c3-0234-44f0-8264-522f3d126df2', 'Safety belt harus diikat ke platform', '2024-03-03 23:53:08', '2024-03-03 23:53:08'),
('9b7b37d0-1782-44e8-86ea-b950ecaf4c9f', 'Safety belt harus diikat pada kerangka', '2024-03-03 23:53:16', '2024-03-03 23:53:16'),
('9b7b37da-a3cf-442d-a045-de32d0838122', 'Forklift tidak boleh melintas saat kerangka diangkat', '2024-03-03 23:53:23', '2024-03-03 23:53:23'),
('9b7b37e5-4472-43b2-89ee-3e05242a23d4', 'Pengemudi forklift harus siaga saat pekerjaan dilakukan', '2024-03-03 23:53:30', '2024-03-03 23:53:30'),
('9b7b37f1-76b9-4754-aa17-5f49a1866526', 'Scafolder harus berkompeten dan tersertifikasi', '2024-03-03 23:53:38', '2024-03-03 23:53:38'),
('9b7b37fb-fbbb-4453-976d-025cbf840bc6', 'Ada sertifikat material scaffolding masih valid', '2024-03-03 23:53:45', '2024-03-03 23:53:45'),
('9b7b3807-b88d-4c34-b1ba-be7255fd73ac', 'Gambar struktur terencana scaffolding/ man cages beserta kalkulasi perhitungan', '2024-03-03 23:53:53', '2024-03-03 23:53:53'),
('9b7b3816-9021-4b8e-9a63-fb83d057e875', 'Instalasi scafolding harus stabil', '2024-03-03 23:54:02', '2024-03-03 23:54:02'),
('9b7b3821-d45a-4528-942b-3da141563511', 'Pegangan dan papan harus dipasang dimana pekerja bisa terjatuh dari ketinggian', '2024-03-03 23:54:10', '2024-03-03 23:54:10'),
('9b7b382e-ca9a-4313-b434-daabe38f60a5', 'Jarak pegangan dan papan tidak boleh lebih dari 765 mm', '2024-03-03 23:54:18', '2024-03-03 23:54:18'),
('9b7b383a-9d9e-4ed8-917e-b892a9d8f404', 'Pemasangan double pegangan/ handrail, pegangan harus dipasang anatar 910 mm dan 1150 mm di atas platform', '2024-03-03 23:54:26', '2024-03-03 23:54:26'),
('9b7b3845-a103-47d7-84db-0b0fc1b248bd', 'Scafolding harus dicek/ diinspeksi atau setelah terekspos cuaca buruk/ perubahan struktur', '2024-03-03 23:54:33', '2024-03-03 23:54:33'),
('9b7b3850-9843-43f4-9f31-fac1adbc8f94', 'Material tidak boleh disimpan discaffolding dalam waktu lama', '2024-03-03 23:54:40', '2024-03-03 23:54:40'),
('9b7b385d-9036-4fc3-98af-3f95311a170c', 'Ditagging Hijau sesuai load design structure dan kondisi oleh inspector scaffolding yang bersertifikasi', '2024-03-03 23:54:49', '2024-03-03 23:54:49'),
('9b7b3868-f72d-48d0-be69-9ab62bc96452', 'Ditagging Merah jika struktur tidak standar/ belum stabil', '2024-03-03 23:54:56', '2024-03-03 23:54:56'),
('9b7b38a2-255c-41de-a385-b1bb91aa1319', 'Dokumen JSA telah mengidentifikasi kondisi cuaca', '2024-03-03 23:55:34', '2024-03-03 23:55:34'),
('9b7b38b1-bce2-464b-85ed-51f39a97a638', 'Memiliki Dokumen Instruksi Kerja Pekerjaan yang Akan Dilakukan', '2024-03-03 23:55:44', '2024-03-03 23:55:44'),
('9b7b38bd-9956-4877-89d4-68b8189e7ffb', 'Personil penyelam memiliki lisensi penyelam (Pekerjaan Bawah Air)', '2024-03-03 23:55:52', '2024-03-03 23:55:52'),
('9b7b38c9-a0d6-463b-9674-f9275c67669e', 'Memiliki Diving Medical Certificates yang masih berlaku (Pekerjaan Bawah Air)', '2024-03-03 23:56:00', '2024-03-03 23:56:00'),
('9b7b38d5-92ee-42c2-baa5-f27298317842', 'Memiliki Surat Ijin Usaha dari Direktur Jenderal Perhubungan (Pekerjaan Bawah Air)', '2024-03-03 23:56:08', '2024-03-03 23:56:08'),
('9b7b38e2-0180-4cf4-a37b-87c6949e134a', 'Pekerjaan/ pekerja yang berada pada jarak 1.5 meter dari tepi air dan diatas permukaan air wajib memakai jaket pelampung (live vest)', '2024-03-03 23:56:16', '2024-03-03 23:56:16'),
('9b7b38ed-e496-4c4f-930a-14780198dc5f', 'Tersedia Surface Supplied Breathing Apparatus (SSBA)', '2024-03-03 23:56:23', '2024-03-03 23:56:23'),
('9b7b38f8-c6fe-4022-a8cf-9b6e57788ae2', 'Mempunyai compressor yang terpasang catridge penyaring udara oksigen untuk penyelaman area tertentu diluar dari open water (CWP, dll)', '2024-03-03 23:56:31', '2024-03-03 23:56:31'),
('9b7b3903-8f49-4c89-9b9b-0c34234b2eed', 'Tersedia life buoy (life ring) yang terpasang tali pengikat (life line)', '2024-03-03 23:56:38', '2024-03-03 23:56:38'),
('9b7b390f-8ed5-4d40-bac1-2d244e6c9296', 'Tersedia diving suit yang sesuai dan kondisinya masih baik', '2024-03-03 23:56:46', '2024-03-03 23:56:46'),
('9b7b391d-64a1-471d-af33-c81053900ee0', 'Pekerja yang terlibat dalam kondisi yang sehat', '2024-03-03 23:56:55', '2024-03-03 23:56:55'),
('9b7b3928-5cf4-4293-bbbc-cbe1d6cd55f4', 'Tersedia standby person', '2024-03-03 23:57:02', '2024-03-03 23:57:02'),
('9b7b3933-9be3-46fe-88ad-68ea83de1917', 'Penerangan mencukupi untuk bekerja malam hari', '2024-03-03 23:57:09', '2024-03-03 23:57:09'),
('9b7b393f-0be5-4c3d-a927-2a1463f27ba9', 'Telah memasang Rambu Tanda Peringatan (safety sign)', '2024-03-03 23:57:17', '2024-03-03 23:57:17'),
('9b7b394a-9d01-4500-a3d4-cd5145d5ee57', 'Tersedia tim dan peralatan rescue untuk penanganan korban di dalam air / permukaan air', '2024-03-03 23:57:24', '2024-03-03 23:57:24'),
('9b7b3956-64b5-406e-9df1-a313cffb8c37', 'Telah memiliki Water Rescue Plan dan disosialisasikan', '2024-03-03 23:57:32', '2024-03-03 23:57:32'),
('9b7b3961-991a-488c-a83f-d81084b253b0', 'Mengkoordinasikan kepada pekerjaan lainnya disekitar pekerjaan near and underwater dan pemasangan safety sign', '2024-03-03 23:57:39', '2024-03-03 23:57:39'),
('9b7b396c-b9e2-4265-9b0f-25c1289f00d4', 'Cuaca dalam kondisi yang baik/ cerah', '2024-03-03 23:57:47', '2024-03-03 23:57:47'),
('9b7b3979-5fc8-40a7-b4f9-3f6190bbd02d', 'Terdapat rencana kerja dan mapping/ denah pekerjaan yang sudah diketahui dan disosialisasikan kepada pemilik area, proses dan yang terlibat', '2024-03-03 23:57:55', '2024-03-03 23:57:55'),
('9b7b3984-6b0e-4cfd-9841-ce6ac8a9fb77', 'Telah menyiapkan perlengkapan komunikasi dan berfungsi dengan baik', '2024-03-03 23:58:02', '2024-03-03 23:58:02'),
('9b7b3990-1b8d-471c-bcfd-16d50f22a909', 'Kapal boat/ perahu dalam kondisi baik', '2024-03-03 23:58:10', '2024-03-03 23:58:10'),
('9b7b39a6-4c67-4b02-acfd-10ad6d5dcfcb', 'Memahami semua tahapan pekerjaan dan proses didalamnya', '2024-03-03 23:58:24', '2024-03-03 23:58:24'),
('9b7b39b1-ec5c-4c20-9ce5-afa326484edd', 'Memahami semua peralatan yang akan digunakan dalam pekerjaan', '2024-03-03 23:58:32', '2024-03-03 23:58:32'),
('9b7b39bd-0b6d-46b2-82d7-731e65ee858d', 'Berkomunikasi ke pemilik otoritas saluran listrik (terkait jarak aman sumber bahaya terhadap personil dan peralatan)', '2024-03-03 23:58:39', '2024-03-03 23:58:39'),
('9b7b39c7-9325-445b-b45b-1e67d644a78d', 'Memastikan pemenuhan persyaratan yang ditetapkan oleh Pemilik Otoritas saluran Listrik untuk pekerjaan yang aman', '2024-03-03 23:58:46', '2024-03-03 23:58:46'),
('9b7b39d2-cc67-4c11-81c0-8b4d4b135d90', 'Memeriksa Peralatan kerja sesuai standar dan aman digunakan', '2024-03-03 23:58:53', '2024-03-03 23:58:53'),
('9b7b39df-3e7c-47b5-af32-dd465825710e', 'Diperlukan 2 way radio di tempat kerja', '2024-03-03 23:59:02', '2024-03-03 23:59:02'),
('9b7b39e9-cea1-4992-aa02-c4562eeabbd8', 'Competent person memeriksa indikator visual yang tersedia sebelum memulai pekerjaan', '2024-03-03 23:59:09', '2024-03-03 23:59:09'),
('9b7b39f7-5068-4351-ae88-596f57dc34e6', 'Akankah memulai pekerjaan ini membahayakan pekerjaan lain yang sedang berlangsung', '2024-03-03 23:59:17', '2024-03-03 23:59:17'),
('9b7b3a01-d338-4091-89ed-f984960d5707', 'Memerlukan Jalur keluar darurat & Alat gawat darurat dan tersedia', '2024-03-03 23:59:24', '2024-03-03 23:59:24'),
('9b7b3a0c-61f5-4215-b18c-c4235a86dd15', 'Diperlukan pelayanan gawat darurat untuk standby dan mudah diakses', '2024-03-03 23:59:31', '2024-03-03 23:59:31'),
('9b7b3a1b-1125-415e-a84a-ee915f84c64f', 'Mengidentifikasi faktor alam yang bisa menggangu pekerjaan (badai dan petir)', '2024-03-03 23:59:41', '2024-03-03 23:59:41'),
('9b7b3a26-1619-4258-838d-093bc0e7e573', 'Diperlukan rencana penanganan keadaan darurat/ rescue plan', '2024-03-03 23:59:48', '2024-03-03 23:59:48'),
('9b7b3a31-b652-447f-a584-29bd0d716fa0', 'Memeriksa jarak aman manuver crane dengan kabel listrik bertegangan', '2024-03-03 23:59:56', '2024-03-03 23:59:56'),
('9b7b3a3d-c001-4e16-84c7-3fdb2b4849e5', 'Diperlukan alat pemadam kebakaran portable/ APAR khusus listrik', '2024-03-04 00:00:04', '2024-03-04 00:00:04'),
('9b7b3a4a-3d6e-40f5-badf-a850dd98b2d8', 'Membagi 3 area kerja untuk personil dan orang lain (area A for Electricity Authority Approval required, area B for authorised person dan area C for unauthorized person)', '2024-03-04 00:00:12', '2024-03-04 00:00:12'),
('9b7b3a55-ccbc-4706-a5d1-983482bb61d1', 'Operator crane harus berkompeten dan tersertifikasi', '2024-03-04 00:00:19', '2024-03-04 00:00:19'),
('9b7b3a62-6dce-48f2-8ad4-9aa7e2ccf226', 'Personil memiliki sertifikat yang relevan terkait pekerjaan vicinity', '2024-03-04 00:00:28', '2024-03-04 00:00:28'),
('9b7b3a6d-b1ba-4e17-81eb-9fd1d0063f99', 'Menggunakan peralatan penggalian yang tahan rambatan listrik', '2024-03-04 00:00:35', '2024-03-04 00:00:35'),
('9b7b3a7a-36b6-4017-9ac9-36c4637d55de', 'Menggunakan non-powered hand tools', '2024-03-04 00:00:43', '2024-03-04 00:00:43'),
('9b7b3a85-443b-4118-a1aa-f69a38cfe49c', 'Menggunakan APD yang standar (Tahanan/ resistansi APD harus lebih besar daripada arus listrik yang akan dikerjakan)', '2024-03-04 00:00:50', '2024-03-04 00:00:50'),
('9b7b3a91-8851-4e3a-a26b-95f18dd58255', 'Memasang barrirer untuk mencegah kontak langsung dengan kabel bertegangan', '2024-03-04 00:00:58', '2024-03-04 00:00:58'),
('9b7b3a9d-d93c-444b-b8aa-a2c810728f17', 'Semua pekerja harus sudah diberikan safety induction untuk bekerja dengan aman', '2024-03-04 00:01:07', '2024-03-04 00:01:07'),
('9b7b3aa8-941d-415d-bf25-ea62ad3cf1ac', 'Diperlukan Rambu-rambu selama bekerja', '2024-03-04 00:01:14', '2024-03-04 00:01:14'),
('9b7b3ab7-a900-4eaf-bfa6-ff0af0d530f4', 'Diperlukan Impairment permit', '2024-03-04 00:01:23', '2024-03-04 00:01:23');

-- --------------------------------------------------------

--
-- Table structure for table `form_description_jsa_safety_permit`
--

CREATE TABLE `form_description_jsa_safety_permit` (
  `uuid` char(36) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `form_description_uuid` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jsa_safety_permit_uuid` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form_description_jsa_safety_permit`
--

INSERT INTO `form_description_jsa_safety_permit` (`uuid`, `form_description_uuid`, `jsa_safety_permit_uuid`, `created_at`, `updated_at`) VALUES
('9b63589b-1af5-4e5b-93ba-31b5d25a432b', '4b7cafd4-cee8-11ee-a3c2-9c5c8e3fd3aa', '1e0a03f8-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-02-21 03:05:06', '2024-02-21 03:05:06'),
('9b635906-5ad4-4218-860c-7f6ce506cbc3', '4b7cfc04-cee8-11ee-a3c2-9c5c8e3fd3aa', '1e0a03f8-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-02-21 03:06:16', '2024-02-21 03:06:16'),
('9b635912-9f27-455f-8c87-7873c899224f', '4b7d3ab7-cee8-11ee-a3c2-9c5c8e3fd3aa', '1e0a03f8-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-02-21 03:06:24', '2024-02-21 03:06:24'),
('9b63591c-0d46-482c-9523-a65048bd6901', '4b7d7897-cee8-11ee-a3c2-9c5c8e3fd3aa', '1e0a03f8-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-02-21 03:06:30', '2024-02-21 03:06:30'),
('9b635926-3a52-4bcf-a4af-45c84957261a', '5a5e3766-cf01-11ee-a3c2-9c5c8e3fd3aa', '1e0a03f8-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-02-21 03:06:37', '2024-02-21 03:06:37'),
('9b63593a-d002-4841-884d-b57ce237d642', '5a5e59e1-cf01-11ee-a3c2-9c5c8e3fd3aa', '1e0a03f8-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-02-21 03:06:50', '2024-02-21 03:06:50'),
('9b635943-bca5-413a-85e0-d0e836f445e1', '5a5e773e-cf01-11ee-a3c2-9c5c8e3fd3aa', '1e0a03f8-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-02-21 03:06:56', '2024-02-21 03:06:56'),
('9b63596f-9e26-4d5e-abb1-36a600eccc7c', '5a5e94ab-cf01-11ee-a3c2-9c5c8e3fd3aa', '1e0a03f8-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-02-21 03:07:25', '2024-02-21 03:07:25'),
('9b635978-7bd9-4aa1-af3d-0a2b033a553c', '5a5eb231-cf01-11ee-a3c2-9c5c8e3fd3aa', '1e0a03f8-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-02-21 03:07:31', '2024-02-21 03:07:31'),
('9b635981-370f-4c8a-9d27-51b50c8fc318', '5a5ecef5-cf01-11ee-a3c2-9c5c8e3fd3aa', '1e0a03f8-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-02-21 03:07:37', '2024-02-21 03:07:37'),
('9b635990-270c-4662-bddb-6956409c57bd', '5a5eec44-cf01-11ee-a3c2-9c5c8e3fd3aa', '1e0a03f8-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-02-21 03:07:46', '2024-02-21 03:07:46'),
('9b63599b-bc7c-4eff-aaa4-07ce31d1abf9', '5a5f0990-cf01-11ee-a3c2-9c5c8e3fd3aa', '1e0a03f8-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-02-21 03:07:54', '2024-02-21 03:07:54'),
('9b6359a5-ce85-4b27-a5cd-589e9c8a7661', '5a5f26e4-cf01-11ee-a3c2-9c5c8e3fd3aa', '1e0a03f8-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-02-21 03:08:01', '2024-02-21 03:08:01'),
('9b6359b0-8e99-4be3-972e-5dbea799404c', '5a5f4414-cf01-11ee-a3c2-9c5c8e3fd3aa', '1e0a03f8-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-02-21 03:08:08', '2024-02-21 03:08:08'),
('9b6359ba-6f5b-440a-bdf3-272294a48a3a', '5a5f618f-cf01-11ee-a3c2-9c5c8e3fd3aa', '1e0a03f8-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-02-21 03:08:14', '2024-02-21 03:08:14'),
('9b6359c5-65df-4c1a-a452-7ac0d7eb1682', '5a5f7f2b-cf01-11ee-a3c2-9c5c8e3fd3aa', '1e0a03f8-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-02-21 03:08:21', '2024-02-21 03:08:21'),
('9b6359d0-aa76-4317-972f-4bc20bc9ce13', '5a5f9c91-cf01-11ee-a3c2-9c5c8e3fd3aa', '1e0a03f8-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-02-21 03:08:29', '2024-02-21 03:08:29'),
('9b6359db-5614-49e6-96ff-10cd8487934e', '5a5fb946-cf01-11ee-a3c2-9c5c8e3fd3aa', '1e0a03f8-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-02-21 03:08:36', '2024-02-21 03:08:36'),
('9b635a27-5e02-40d3-a880-ffb0a6678ea4', '5a5fd685-cf01-11ee-a3c2-9c5c8e3fd3aa', '1e0a03f8-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-02-21 03:09:25', '2024-02-21 03:09:25'),
('9b635a31-a898-4d1e-bfc5-a9f535f43fca', '5a601237-cf01-11ee-a3c2-9c5c8e3fd3aa', '1e0a03f8-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-02-21 03:09:32', '2024-02-21 03:09:32'),
('9b635a3c-f7e4-41ba-b0a4-1aaa790ef436', '5a602f18-cf01-11ee-a3c2-9c5c8e3fd3aa', '1e0a03f8-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-02-21 03:09:40', '2024-02-21 03:09:40'),
('9b635a48-b20c-4052-b170-3e8520cc75e4', '5a604c64-cf01-11ee-a3c2-9c5c8e3fd3aa', '1e0a03f8-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-02-21 03:09:47', '2024-02-21 03:09:47'),
('9b635a54-a363-42d1-8857-777ad8b35980', '5a606c31-cf01-11ee-a3c2-9c5c8e3fd3aa', '1e0a03f8-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-02-21 03:09:55', '2024-02-21 03:09:55'),
('9b635a5f-3883-4e48-9d61-b474d1c9b58c', '5a608acd-cf01-11ee-a3c2-9c5c8e3fd3aa', '1e0a03f8-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-02-21 03:10:02', '2024-02-21 03:10:02'),
('9b635a69-91f2-411c-9d63-8abc86eef315', '5a60a8c1-cf01-11ee-a3c2-9c5c8e3fd3aa', '1e0a03f8-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-02-21 03:10:09', '2024-02-21 03:10:09'),
('9b7b29be-27c5-4a5a-beb2-b96c7859bc8c', '9b7b29be-09d2-4649-8f7b-114e6b0272bb', '1e0a25a4-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:13:56', '2024-03-03 23:13:56'),
('9b7b29ce-24db-441f-b673-515b330d4dae', '9b7b29cd-f96e-4ef9-ba16-6da27183e0db', '1e0a25a4-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:14:06', '2024-03-03 23:14:06'),
('9b7b29df-1be9-4e0a-baeb-5857d828fd6d', '9b7b29de-fb83-42b1-a8fb-16de9ab961d6', '1e0a25a4-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:14:17', '2024-03-03 23:14:17'),
('9b7b2c6e-fbf2-4e5f-b7ac-3f6e149b4f7e', '9b7b2c6e-926a-4a93-9d4a-e21e8ac00f07', '1e0a25a4-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:21:27', '2024-03-03 23:21:27'),
('9b7b2c86-0ee9-41f8-bb9a-c0878e2ec377', '9b7b2c85-e87a-48d0-a10a-6bf7ab52ae86', '1e0a25a4-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:21:42', '2024-03-03 23:21:42'),
('9b7b2ca1-de3c-471e-8ca1-356019c66ce7', '9b7b2ca1-80b9-4734-a552-d5a75217b99e', '1e0a25a4-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:22:00', '2024-03-03 23:22:00'),
('9b7b2cb5-fc7f-4eaf-8d8e-27aeb31c2aba', '9b7b2cb5-9f99-4912-9a34-59f4c619b381', '1e0a25a4-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:22:14', '2024-03-03 23:22:14'),
('9b7b2cc2-4ce2-49fd-ae53-fbdc9d7cc738', '9b7b2cc2-1d07-4a03-b346-b485a639ba6f', '1e0a25a4-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:22:22', '2024-03-03 23:22:22'),
('9b7b2cce-d4bd-43b9-ae02-6f7b3e9c929a', '9b7b2cce-9a94-46d6-8b3a-f235e19fbe41', '1e0a25a4-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:22:30', '2024-03-03 23:22:30'),
('9b7b2ce0-e36c-484b-ad19-549195a72d45', '9b7b2ce0-c870-4939-b914-c020c06aba03', '1e0a25a4-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:22:42', '2024-03-03 23:22:42'),
('9b7b2cec-bb0d-40ba-93cd-384e1eec487c', '9b7b2cec-95f6-4c39-aeb6-a2585cd33997', '1e0a25a4-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:22:49', '2024-03-03 23:22:49'),
('9b7b2cf8-9e27-406a-a686-4e66d17e0d98', '9b7b2cf8-7758-43da-b064-792943711e3f', '1e0a25a4-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:22:57', '2024-03-03 23:22:57'),
('9b7b2d43-d6bc-4992-867c-ce78cf53b123', '9b7b2d43-7ee9-4983-8dbb-1b96ca531aa3', '1e0a25a4-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:23:47', '2024-03-03 23:23:47'),
('9b7b2d51-0a07-4a60-b8b1-9485c7d2cd43', '9b7b2d50-9ab8-4b7e-979e-854a74b9425b', '1e0a25a4-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:23:55', '2024-03-03 23:23:55'),
('9b7b2d5d-1026-48a2-9aa6-4caa0e4efd7b', '9b7b2d5c-f008-4cab-967b-826bf8563f07', '1e0a25a4-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:24:03', '2024-03-03 23:24:03'),
('9b7b2d67-4e1c-4546-a82e-c6d818796be1', '9b7b2d67-3131-409d-943b-f8320ba669d5', '1e0a25a4-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:24:10', '2024-03-03 23:24:10'),
('9b7b2e14-322a-4d5c-8407-818302416a19', '9b7b2e13-dde2-4103-82d3-6301b3f03f38', '1e0a25a4-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:26:03', '2024-03-03 23:26:03'),
('9b7b34e1-fb04-4e6d-ab6f-78e0bfd7e418', '9b7b34e1-e55d-4e35-9f83-627f63583237', '1e0a25a4-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:45:05', '2024-03-03 23:45:05'),
('9b7b34ee-bebc-4648-8b15-3d3e17fe2f2f', '9b7b34ee-98a1-46ce-a20d-c8de966d38db', '1e0a25a4-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:45:13', '2024-03-03 23:45:13'),
('9b7b34fb-9aed-4357-85c2-243fe9fefe6e', '9b7b34fb-5e78-4701-aed0-c423811249c4', '1e0a25a4-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:45:21', '2024-03-03 23:45:21'),
('9b7b3506-ee91-4aad-9bb6-c29f058cc471', '9b7b3506-d686-45ed-b847-d746054fe7d5', '1e0a25a4-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:45:29', '2024-03-03 23:45:29'),
('9b7b3512-27bb-42a9-835d-0810997f93a7', '9b7b3511-cdc8-42e0-9e3b-0e7c2d7a97f3', '1e0a25a4-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:45:36', '2024-03-03 23:45:36'),
('9b7b351e-9413-4a76-8128-d745cd0bf837', '9b7b351e-5f71-42e1-9b05-cc1e4f85b99d', '1e0a25a4-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:45:44', '2024-03-03 23:45:44'),
('9b7b352a-589d-45c9-bb6d-6f54aa491334', '9b7b352a-0d7d-455f-8bce-209e11fad0da', '1e0a25a4-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:45:52', '2024-03-03 23:45:52'),
('9b7b3545-989c-4428-805b-c12252bfcdd8', '9b7b3545-7642-48f9-b080-ca8a9d8d7a15', '1e0a25a4-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:46:10', '2024-03-03 23:46:10'),
('9b7b3551-502b-4866-b1d5-b05cb2265220', '9b7b3550-febd-4ec4-8061-de4d22bd83c9', '1e0a25a4-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:46:18', '2024-03-03 23:46:18'),
('9b7b355e-29f1-4a33-95df-d3b7ae9632d2', '9b7b355d-cfd6-40fb-9489-8009f7ca6de8', '1e0a25a4-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:46:26', '2024-03-03 23:46:26'),
('9b7b356d-34ba-4135-b56a-56274b8265b1', '9b7b356c-fd30-4b2f-9701-f80c18f62adb', '1e0a25a4-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:46:36', '2024-03-03 23:46:36'),
('9b7b3578-7b42-46bb-95a2-9e828e1be3c4', '9b7b3578-2b47-4878-9fa2-1c47ade2f5b8', '1e0a25a4-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:46:43', '2024-03-03 23:46:43'),
('9b7b3584-15b2-477e-9229-7bf0ece2f0cf', '9b7b3583-f0c9-44fd-b6f2-5e04826861e4', '1e0a25a4-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:46:51', '2024-03-03 23:46:51'),
('9b7b358f-5a4a-476f-85f6-f858d58b8f7e', '9b7b358f-390b-4dcc-ba47-677c9d3e04ef', '1e0a25a4-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:46:58', '2024-03-03 23:46:58'),
('9b7b359a-2522-44ac-b257-ce4ffc8220a6', '9b7b359a-0107-475c-962a-7562393a336e', '1e0a25a4-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:47:05', '2024-03-03 23:47:05'),
('9b7b35a5-55c0-4b0e-859e-4b7622b0afd4', '9b7b35a5-361e-4bab-ab84-dcdaf4c17b8a', '1e0a25a4-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:47:13', '2024-03-03 23:47:13'),
('9b7b35b0-3328-4c36-8a04-a0f0d8f491e3', '9b7b35af-ed4d-4605-899d-901c3c9af1a0', '1e0a25a4-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:47:20', '2024-03-03 23:47:20'),
('9b7b360c-30fb-47ab-b044-79881cf066c9', '9b7b360b-dea8-41d9-ac11-c2bb31fc3667', '1e0a4252-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:48:20', '2024-03-03 23:48:20'),
('9b7b3617-3219-4ddd-b10a-182816f9c9ab', '9b7b3616-fcd8-49df-afaa-84a59e6a254c', '1e0a4252-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:48:27', '2024-03-03 23:48:27'),
('9b7b365d-31c8-40f7-b81f-5f4b6cf2dacc', '9b7b365c-f1b0-4129-ad1e-260bbcf2b8b4', '1e0a4252-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:49:13', '2024-03-03 23:49:13'),
('9b7b366d-c02e-44d7-afe5-149c671e0484', '9b7b366d-8949-48a6-96d1-9445c95a45b1', '1e0a4252-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:49:24', '2024-03-03 23:49:24'),
('9b7b367c-a5f0-4d3a-bf8b-5e92f935d1f6', '9b7b367c-8133-43eb-95d5-6ceb517d038f', '1e0a4252-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:49:34', '2024-03-03 23:49:34'),
('9b7b3688-34d0-451a-a76b-205a786b7ece', '9b7b3688-1ce3-4698-bcd7-0f724c47ab42', '1e0a4252-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:49:41', '2024-03-03 23:49:41'),
('9b7b3699-3df7-4a76-a195-6bb5b0956fe2', '9b7b3699-00e4-477c-9fb3-f5de85961936', '1e0a4252-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:49:52', '2024-03-03 23:49:52'),
('9b7b36b4-c7c1-47ed-9eb8-caec01e9b8f6', '9b7b36b4-51e5-4ce4-8476-595116c08e24', '1e0a4252-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:50:10', '2024-03-03 23:50:10'),
('9b7b36dd-c1fe-4867-b788-ee5f711d7374', '9b7b36dd-9fbe-46b6-85ca-fcb3f7aecd8b', '1e0a4252-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:50:37', '2024-03-03 23:50:37'),
('9b7b36eb-e106-4ad2-bfdc-85c15b9b8cb9', '9b7b36eb-a517-4272-8fa3-a811c904f91f', '1e0a4252-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:50:47', '2024-03-03 23:50:47'),
('9b7b36f8-5863-4d7f-a724-744eb5f97ed9', '9b7b36f8-19bd-4ab8-8cd5-efedace59e3d', '1e0a4252-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:50:55', '2024-03-03 23:50:55'),
('9b7b3702-cc5b-41ef-b6e3-c461974cfc95', '9b7b3702-b31e-4065-9dce-3aed64cf82ae', '1e0a4252-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:51:02', '2024-03-03 23:51:02'),
('9b7b3714-bf49-4aa3-af53-1b78aa88b9b3', '9b7b3714-7121-457c-834c-47fb40013c73', '1e0a4252-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:51:13', '2024-03-03 23:51:13'),
('9b7b3720-33ea-451a-b397-e693f9f2e7d6', '9b7b3720-13fd-49d9-aba8-f0a8ffd5f031', '1e0a4252-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:51:21', '2024-03-03 23:51:21'),
('9b7b372c-57a6-4180-837e-812a3b811a6a', '9b7b372c-35e0-43e7-9d32-25a170dc5ed3', '1e0a4252-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:51:29', '2024-03-03 23:51:29'),
('9b7b373b-b132-447d-8fa3-dab002d7e6a7', '9b7b373b-8c90-4761-8d76-b6ea1202168a', '1e0a4252-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:51:39', '2024-03-03 23:51:39'),
('9b7b3747-25c2-411a-a927-4ee6e55cdd37', '9b7b3746-d6e3-4e34-bdec-516435cfc819', '1e0a4252-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:51:46', '2024-03-03 23:51:46'),
('9b7b3752-c627-4c43-a13d-396f6b1b19f8', '9b7b3752-9535-4a17-8940-80e0ac3e1cb3', '1e0a4252-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:51:54', '2024-03-03 23:51:54'),
('9b7b3760-705c-4f60-bbe7-4a0dc0910be8', '9b7b3760-562a-4016-8f0f-736d00e458f3', '1e0a4252-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:52:03', '2024-03-03 23:52:03'),
('9b7b376f-62bd-4025-8ae5-bdbb3d70312b', '9b7b376f-352b-4866-a56d-71f40914564f', '1e0a4252-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:52:13', '2024-03-03 23:52:13'),
('9b7b377e-6733-4225-a868-70c906d405c9', '9b7b377e-29e4-4ce2-8e4e-1f229a4875a4', '1e0a4252-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:52:23', '2024-03-03 23:52:23'),
('9b7b3789-6891-465f-acd0-69ad90019d18', '9b7b3789-5047-4b30-8746-90059dc442e2', '1e0a4252-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:52:30', '2024-03-03 23:52:30'),
('9b7b3794-1f20-44c9-b33b-f5ae25bef6fb', '9b7b3793-e0fc-45d0-8bf3-5d46d1e04c75', '1e0a4252-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:52:37', '2024-03-03 23:52:37'),
('9b7b37a0-25f2-430a-8c30-173fa6ef07bc', '9b7b37a0-073d-4801-8a89-b41890846255', '1e0a4252-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:52:45', '2024-03-03 23:52:45'),
('9b7b37ab-e9e6-42f5-9891-390101c85eef', '9b7b37ab-b558-4937-9b15-54657c91f88f', '1e0a4252-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:52:52', '2024-03-03 23:52:52'),
('9b7b37b7-ef9f-47dc-9704-4b35b739f4e3', '9b7b37b7-ba90-414c-93e1-d4f53e5436dd', '1e0a4252-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:53:00', '2024-03-03 23:53:00'),
('9b7b37c3-46e9-4cfc-b8bd-0240b3997517', '9b7b37c3-0234-44f0-8264-522f3d126df2', '1e0a4252-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:53:08', '2024-03-03 23:53:08'),
('9b7b37d0-3205-43af-ad08-ae6210c6c7f3', '9b7b37d0-1782-44e8-86ea-b950ecaf4c9f', '1e0a4252-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:53:16', '2024-03-03 23:53:16'),
('9b7b37da-bffe-4084-bc25-40c7a4d57fe7', '9b7b37da-a3cf-442d-a045-de32d0838122', '1e0a4252-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:53:23', '2024-03-03 23:53:23'),
('9b7b37e5-6b03-46fb-a228-816881c775b6', '9b7b37e5-4472-43b2-89ee-3e05242a23d4', '1e0a4252-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:53:30', '2024-03-03 23:53:30'),
('9b7b37f1-94f8-42b9-ad85-4fada14090a2', '9b7b37f1-76b9-4754-aa17-5f49a1866526', '1e0a4252-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:53:38', '2024-03-03 23:53:38'),
('9b7b37fc-1971-4148-8154-868e5bcf7f78', '9b7b37fb-fbbb-4453-976d-025cbf840bc6', '1e0a4252-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:53:45', '2024-03-03 23:53:45'),
('9b7b3807-d3ef-4576-a51c-a8ad9ef21c6c', '9b7b3807-b88d-4c34-b1ba-be7255fd73ac', '1e0a4252-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:53:53', '2024-03-03 23:53:53'),
('9b7b3816-d7b5-4502-b9d1-07345449c704', '9b7b3816-9021-4b8e-9a63-fb83d057e875', '1e0a4252-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:54:03', '2024-03-03 23:54:03'),
('9b7b3821-f49f-4f5b-98cb-c99ea14d6a73', '9b7b3821-d45a-4528-942b-3da141563511', '1e0a4252-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:54:10', '2024-03-03 23:54:10'),
('9b7b382e-ff31-4bc1-949d-c516d466847c', '9b7b382e-ca9a-4313-b434-daabe38f60a5', '1e0a4252-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:54:18', '2024-03-03 23:54:18'),
('9b7b383a-b8f0-4ab4-9ee4-2010d4cdaf45', '9b7b383a-9d9e-4ed8-917e-b892a9d8f404', '1e0a4252-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:54:26', '2024-03-03 23:54:26'),
('9b7b3845-f6bd-4cb9-8430-2966997dd736', '9b7b3845-a103-47d7-84db-0b0fc1b248bd', '1e0a4252-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:54:33', '2024-03-03 23:54:33'),
('9b7b3850-b407-4dde-8073-5e633944cf1a', '9b7b3850-9843-43f4-9f31-fac1adbc8f94', '1e0a4252-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:54:40', '2024-03-03 23:54:40'),
('9b7b385d-ab1d-4e76-bdb2-832e0901ea2f', '9b7b385d-9036-4fc3-98af-3f95311a170c', '1e0a4252-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:54:49', '2024-03-03 23:54:49'),
('9b7b3869-18ab-4b27-bd01-5e3a1c295704', '9b7b3868-f72d-48d0-be69-9ab62bc96452', '1e0a4252-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:54:56', '2024-03-03 23:54:56'),
('9b7b38a2-4155-4429-bd48-dc86c676f502', '9b7b38a2-255c-41de-a385-b1bb91aa1319', '1e0aadde-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:55:34', '2024-03-03 23:55:34'),
('9b7b38b1-f494-4f8d-82d5-85418581c156', '9b7b38b1-bce2-464b-85ed-51f39a97a638', '1e0aadde-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:55:44', '2024-03-03 23:55:44'),
('9b7b38bd-b404-4df9-865d-9bd8309d6169', '9b7b38bd-9956-4877-89d4-68b8189e7ffb', '1e0aadde-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:55:52', '2024-03-03 23:55:52'),
('9b7b38c9-bc44-4bfc-8c8b-f0be161ef8dd', '9b7b38c9-a0d6-463b-9674-f9275c67669e', '1e0aadde-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:56:00', '2024-03-03 23:56:00'),
('9b7b38d5-be50-4ee3-811e-208428c5af9e', '9b7b38d5-92ee-42c2-baa5-f27298317842', '1e0aadde-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:56:08', '2024-03-03 23:56:08'),
('9b7b38e2-2263-4640-9f18-523db250adf8', '9b7b38e2-0180-4cf4-a37b-87c6949e134a', '1e0aadde-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:56:16', '2024-03-03 23:56:16'),
('9b7b38ee-0a79-4a7b-b0f2-6563dc377f88', '9b7b38ed-e496-4c4f-930a-14780198dc5f', '1e0aadde-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:56:24', '2024-03-03 23:56:24'),
('9b7b38f8-f9e5-489c-bc9d-e4bfb5b19cbe', '9b7b38f8-c6fe-4022-a8cf-9b6e57788ae2', '1e0aadde-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:56:31', '2024-03-03 23:56:31'),
('9b7b3904-4025-4893-8955-6eedbb36dd8b', '9b7b3903-8f49-4c89-9b9b-0c34234b2eed', '1e0aadde-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:56:38', '2024-03-03 23:56:38'),
('9b7b390f-cc32-4af8-b573-0905f0af47ce', '9b7b390f-8ed5-4d40-bac1-2d244e6c9296', '1e0aadde-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:56:46', '2024-03-03 23:56:46'),
('9b7b391d-82c6-49f9-99b3-e6c71678a404', '9b7b391d-64a1-471d-af33-c81053900ee0', '1e0aadde-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:56:55', '2024-03-03 23:56:55'),
('9b7b3928-a30c-4d22-a580-66201498ad9a', '9b7b3928-5cf4-4293-bbbc-cbe1d6cd55f4', '1e0aadde-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:57:02', '2024-03-03 23:57:02'),
('9b7b3933-bf1e-4231-8aac-8f591569e693', '9b7b3933-9be3-46fe-88ad-68ea83de1917', '1e0aadde-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:57:09', '2024-03-03 23:57:09'),
('9b7b393f-435d-4ab8-94f3-02cf985448dd', '9b7b393f-0be5-4c3d-a927-2a1463f27ba9', '1e0aadde-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:57:17', '2024-03-03 23:57:17'),
('9b7b394a-bc9b-4a7a-8594-a207d0399f46', '9b7b394a-9d01-4500-a3d4-cd5145d5ee57', '1e0aadde-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:57:24', '2024-03-03 23:57:24'),
('9b7b3956-8198-4974-94a3-6ef64aab1838', '9b7b3956-64b5-406e-9df1-a313cffb8c37', '1e0aadde-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:57:32', '2024-03-03 23:57:32'),
('9b7b3961-c7ed-4462-98d1-ad484ea23e6b', '9b7b3961-991a-488c-a83f-d81084b253b0', '1e0aadde-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:57:39', '2024-03-03 23:57:39'),
('9b7b396c-d770-4d87-af44-e9079358b2e7', '9b7b396c-b9e2-4265-9b0f-25c1289f00d4', '1e0aadde-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:57:47', '2024-03-03 23:57:47'),
('9b7b3979-7b7c-40c0-8461-979b9c7e0670', '9b7b3979-5fc8-40a7-b4f9-3f6190bbd02d', '1e0aadde-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:57:55', '2024-03-03 23:57:55'),
('9b7b3984-9ef8-4454-be93-aba624587951', '9b7b3984-6b0e-4cfd-9841-ce6ac8a9fb77', '1e0aadde-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:58:02', '2024-03-03 23:58:02'),
('9b7b3990-398e-43f6-bbb7-6d378bddd8e3', '9b7b3990-1b8d-471c-bcfd-16d50f22a909', '1e0aadde-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:58:10', '2024-03-03 23:58:10'),
('9b7b39a6-7106-46e5-903c-c6707ccb5e8e', '9b7b39a6-4c67-4b02-acfd-10ad6d5dcfcb', '1e0a785e-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:58:24', '2024-03-03 23:58:24'),
('9b7b39b2-42fa-4c93-8487-69dd015ac6be', '9b7b39b1-ec5c-4c20-9ce5-afa326484edd', '1e0a785e-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:58:32', '2024-03-03 23:58:32'),
('9b7b39bd-200d-4332-9cf6-2b8c5de1eeaa', '9b7b39bd-0b6d-46b2-82d7-731e65ee858d', '1e0a785e-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:58:39', '2024-03-03 23:58:39'),
('9b7b39c7-b71b-4c23-839d-79cc708e1769', '9b7b39c7-9325-445b-b45b-1e67d644a78d', '1e0a785e-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:58:46', '2024-03-03 23:58:46'),
('9b7b39d2-edf0-4302-b5dc-50f3a8e9daa8', '9b7b39d2-cc67-4c11-81c0-8b4d4b135d90', '1e0a785e-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:58:54', '2024-03-03 23:58:54'),
('9b7b39df-5616-4a3f-ab27-cc47d975d0e5', '9b7b39df-3e7c-47b5-af32-dd465825710e', '1e0a785e-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:59:02', '2024-03-03 23:59:02'),
('9b7b39ea-0b89-4fe4-90ab-fd2e6de21a8b', '9b7b39e9-cea1-4992-aa02-c4562eeabbd8', '1e0a785e-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:59:09', '2024-03-03 23:59:09'),
('9b7b39f7-6f24-43d2-9ffb-d30cbb46e900', '9b7b39f7-5068-4351-ae88-596f57dc34e6', '1e0a785e-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:59:17', '2024-03-03 23:59:17'),
('9b7b3a01-f2a6-44c1-b942-97891c0b1cb1', '9b7b3a01-d338-4091-89ed-f984960d5707', '1e0a785e-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:59:24', '2024-03-03 23:59:24'),
('9b7b3a0c-98d2-4def-836f-11ceec68631a', '9b7b3a0c-61f5-4215-b18c-c4235a86dd15', '1e0a785e-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:59:31', '2024-03-03 23:59:31'),
('9b7b3a1b-2bd8-427d-aa2a-775ae350daab', '9b7b3a1b-1125-415e-a84a-ee915f84c64f', '1e0a785e-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:59:41', '2024-03-03 23:59:41'),
('9b7b3a26-334e-4a6c-8594-92c06ce7f360', '9b7b3a26-1619-4258-838d-093bc0e7e573', '1e0a785e-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:59:48', '2024-03-03 23:59:48'),
('9b7b3a31-d973-42a5-bfd5-6f86d740018e', '9b7b3a31-b652-447f-a584-29bd0d716fa0', '1e0a785e-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-03 23:59:56', '2024-03-03 23:59:56'),
('9b7b3a3d-daef-4234-9300-504a07d49951', '9b7b3a3d-c001-4e16-84c7-3fdb2b4849e5', '1e0a785e-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-04 00:00:04', '2024-03-04 00:00:04'),
('9b7b3a4a-5f5c-4c96-84da-923ffb521aeb', '9b7b3a4a-3d6e-40f5-badf-a850dd98b2d8', '1e0a785e-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-04 00:00:12', '2024-03-04 00:00:12'),
('9b7b3a55-f84f-4042-bbb1-2f6b3720d3cc', '9b7b3a55-ccbc-4706-a5d1-983482bb61d1', '1e0a785e-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-04 00:00:19', '2024-03-04 00:00:19'),
('9b7b3a62-b8a3-425c-a55f-1133c5e2622d', '9b7b3a62-6dce-48f2-8ad4-9aa7e2ccf226', '1e0a785e-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-04 00:00:28', '2024-03-04 00:00:28'),
('9b7b3a6d-d957-4ef9-b341-0f4e39085b79', '9b7b3a6d-b1ba-4e17-81eb-9fd1d0063f99', '1e0a785e-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-04 00:00:35', '2024-03-04 00:00:35'),
('9b7b3a7a-5c8a-4b91-95c8-32817bdb700a', '9b7b3a7a-36b6-4017-9ac9-36c4637d55de', '1e0a785e-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-04 00:00:43', '2024-03-04 00:00:43'),
('9b7b3a85-68d2-48c7-bff5-fc1ed2e5febd', '9b7b3a85-443b-4118-a1aa-f69a38cfe49c', '1e0a785e-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-04 00:00:51', '2024-03-04 00:00:51'),
('9b7b3a91-a8c1-4b43-adbc-cdb25a650ee6', '9b7b3a91-8851-4e3a-a26b-95f18dd58255', '1e0a785e-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-04 00:00:59', '2024-03-04 00:00:59'),
('9b7b3a9d-f255-4bcd-8082-a4b73e7c3359', '9b7b3a9d-d93c-444b-b8aa-a2c810728f17', '1e0a785e-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-04 00:01:07', '2024-03-04 00:01:07'),
('9b7b3aa8-c75d-4c83-bb42-4e824a81ff9e', '9b7b3aa8-941d-415d-bf25-ea62ad3cf1ac', '1e0a785e-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-04 00:01:14', '2024-03-04 00:01:14'),
('9b7b3ab7-cb46-4944-834a-3eb7ff21c030', '9b7b3ab7-a900-4eaf-bfa6-ff0af0d530f4', '1e0a785e-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-03-04 00:01:24', '2024-03-04 00:01:24');

-- --------------------------------------------------------

--
-- Table structure for table `form_form_additional_note`
--

CREATE TABLE `form_form_additional_note` (
  `uuid` char(36) NOT NULL,
  `form_uuid` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `form_additional_note_uuid` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `form_form_description`
--

CREATE TABLE `form_form_description` (
  `uuid` char(36) NOT NULL,
  `form_uuid` char(36) DEFAULT NULL,
  `form_description_uuid` char(36) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `form_form_description`
--

INSERT INTO `form_form_description` (`uuid`, `form_uuid`, `form_description_uuid`, `created_at`, `updated_at`) VALUES
('9b6d07a5-1e03-4460-8fe6-b5da29fb53e1', '9b6d0028-5f77-490a-bb0a-e230b2e107f4', '5a5e773e-cf01-11ee-a3c2-9c5c8e3fd3aa', '2024-02-25 22:37:00', '2024-02-25 22:37:00'),
('9b6d08a8-930a-4fbb-b530-5aa55bcd5271', '9b6d0028-5f77-490a-bb0a-e230b2e107f4', '4b7cfc04-cee8-11ee-a3c2-9c5c8e3fd3aa', '2024-02-25 22:39:50', '2024-02-25 22:39:50'),
('9b6d08a8-ad50-4276-96a8-4a39b1fa74f6', '9b6d0028-5f77-490a-bb0a-e230b2e107f4', '4b7d3ab7-cee8-11ee-a3c2-9c5c8e3fd3aa', '2024-02-25 22:39:50', '2024-02-25 22:39:50'),
('9b6d08a8-f857-4b25-89ef-69116ba3f9c8', '9b6d0028-5f77-490a-bb0a-e230b2e107f4', '5a5e3766-cf01-11ee-a3c2-9c5c8e3fd3aa', '2024-02-25 22:39:50', '2024-02-25 22:39:50');

-- --------------------------------------------------------

--
-- Table structure for table `form_form_protective_equipment`
--

CREATE TABLE `form_form_protective_equipment` (
  `uuid` char(36) NOT NULL,
  `form_uuid` char(36) DEFAULT NULL,
  `form_protective_equipment_uuid` char(36) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `form_form_protective_equipment`
--

INSERT INTO `form_form_protective_equipment` (`uuid`, `form_uuid`, `form_protective_equipment_uuid`, `created_at`, `updated_at`) VALUES
('9b6d0028-b57b-40cb-986b-5bd4ddd9e4b1', '9b6d0028-5f77-490a-bb0a-e230b2e107f4', 'adb54635-cee8-11ee-a3c2-9c5c8e3fd3aa', '2024-02-25 22:16:04', '2024-02-25 22:16:04'),
('9b6d08a9-47be-4d98-8543-b7149e7dc8d4', '9b6d0028-5f77-490a-bb0a-e230b2e107f4', '96c473b5-cf01-11ee-a3c2-9c5c8e3fd3aa', '2024-02-25 22:39:50', '2024-02-25 22:39:50'),
('9b6d08a9-6932-44b8-8753-719fdd785654', '9b6d0028-5f77-490a-bb0a-e230b2e107f4', '96c49456-cf01-11ee-a3c2-9c5c8e3fd3aa', '2024-02-25 22:39:50', '2024-02-25 22:39:50'),
('9b6d08a9-88e4-46b2-a7f7-e3bc546a2876', '9b6d0028-5f77-490a-bb0a-e230b2e107f4', '96c4af8b-cf01-11ee-a3c2-9c5c8e3fd3aa', '2024-02-25 22:39:50', '2024-02-25 22:39:50'),
('9b6d08a9-e0e7-487f-b7b8-d8f7ffa222c5', '9b6d0028-5f77-490a-bb0a-e230b2e107f4', '96c4ca70-cf01-11ee-a3c2-9c5c8e3fd3aa', '2024-02-25 22:39:50', '2024-02-25 22:39:50');

-- --------------------------------------------------------

--
-- Table structure for table `form_jsa_worker`
--

CREATE TABLE `form_jsa_worker` (
  `uuid` char(36) NOT NULL,
  `form_uuid` char(36) DEFAULT NULL,
  `jsa_worker_uuid` char(36) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `form_jsa_worker`
--

INSERT INTO `form_jsa_worker` (`uuid`, `form_uuid`, `jsa_worker_uuid`, `created_at`, `updated_at`) VALUES
('9b6d0758-56af-4287-82d3-7da1b9487b2c', '9b6d0028-5f77-490a-bb0a-e230b2e107f4', '4fb9b000-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-02-25 22:36:09', '2024-02-25 22:36:09'),
('9b6d08aa-01f5-47e9-b949-241b479dbd06', '9b6d0028-5f77-490a-bb0a-e230b2e107f4', '4fb95cf0-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-02-25 22:39:50', '2024-02-25 22:39:50'),
('9b6d08aa-2851-4098-942e-adbe1423a6db', '9b6d0028-5f77-490a-bb0a-e230b2e107f4', '4fb97794-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-02-25 22:39:51', '2024-02-25 22:39:51');

-- --------------------------------------------------------

--
-- Table structure for table `form_protective_equipments`
--

CREATE TABLE `form_protective_equipments` (
  `uuid` char(36) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `form_protective_equipments`
--

INSERT INTO `form_protective_equipments` (`uuid`, `name`, `created_at`, `updated_at`) VALUES
('96c473b5-cf01-11ee-a3c2-9c5c8e3fd3aa', 'Welding Mask', NULL, NULL),
('96c49456-cf01-11ee-a3c2-9c5c8e3fd3aa', 'Welding Jacket', NULL, NULL),
('96c4af8b-cf01-11ee-a3c2-9c5c8e3fd3aa', 'Ear Plug', NULL, NULL),
('96c4ca70-cf01-11ee-a3c2-9c5c8e3fd3aa', 'Appron set', NULL, NULL),
('adb54635-cee8-11ee-a3c2-9c5c8e3fd3aa', 'Baju tahan panas / api', NULL, NULL),
('adb58b15-cee8-11ee-a3c2-9c5c8e3fd3aa', 'Helm', NULL, NULL),
('adb5cad6-cee8-11ee-a3c2-9c5c8e3fd3aa', 'Sepatu Safety Kulit', NULL, NULL),
('adb62711-cee8-11ee-a3c2-9c5c8e3fd3aa', 'Safety Glassess/ googles', NULL, NULL),
('adb66714-cee8-11ee-a3c2-9c5c8e3fd3aa', 'Welding Glove', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jsas`
--

CREATE TABLE `jsas` (
  `uuid` char(36) NOT NULL,
  `name` varchar(255) NOT NULL,
  `job_base` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `person_group_uuid` char(36) DEFAULT NULL,
  `start_date` varchar(255) NOT NULL,
  `finish_date` varchar(255) NOT NULL,
  `start_time` varchar(255) NOT NULL,
  `finish_time` varchar(255) NOT NULL,
  `jsa_creator` varchar(255) NOT NULL,
  `jsa_creator_position` varchar(255) NOT NULL,
  `jsa_supervisor_k3` varchar(255) NOT NULL,
  `jsa_supervisor_k3_unit` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jsas`
--

INSERT INTO `jsas` (`uuid`, `name`, `job_base`, `location`, `person_group_uuid`, `start_date`, `finish_date`, `start_time`, `finish_time`, `jsa_creator`, `jsa_creator_position`, `jsa_supervisor_k3`, `jsa_supervisor_k3_unit`, `status`, `created_at`, `updated_at`) VALUES
('9b6cf12e-8784-4fcf-a054-7f192d16f62d', 'Perbaikan Gearbox MOV CWP yang Patah', 'WO990308', 'CWP Pump House', '9b5b7b9f-0079-4242-a296-1b38acc7ca21', '2024-01-10', '2024-10-11', '08:00', '20:04', 'Tony Dwi', 'Safetyman PT. MKP', 'M Chairuddin Yunus', 'PLN Nusantara Power Services Bolok', 'Closed', '2024-02-25 21:34:11', '2024-03-04 00:05:19');

-- --------------------------------------------------------

--
-- Table structure for table `jsa_danger_controls`
--

CREATE TABLE `jsa_danger_controls` (
  `uuid` char(36) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jsa_danger_controls`
--

INSERT INTO `jsa_danger_controls` (`uuid`, `name`, `created_at`, `updated_at`) VALUES
('9b5aa3a3-2b94-4036-9da0-5da501a02fa6', 'Pekerja telah mengikuti awareness manual handling', '2024-02-16 19:12:27', '2024-02-16 19:14:59'),
('9b5aa496-28d7-4c88-8f56-055e3f76ac74', 'Menempatkan Pengawas Pekerjaan, Memperhatikan arah jalan, Jaga jarak aman', '2024-02-16 19:15:06', '2024-02-16 19:15:06'),
('9b5aa49f-7e01-4987-92f6-b86d3e83b69c', 'Gunakan safety Googles', '2024-02-16 19:15:12', '2024-02-16 19:15:12'),
('9b5aa4a8-0dd2-4dd0-96d6-2e3a5d72b917', 'Gunakan respirator mask', '2024-02-16 19:15:18', '2024-02-16 19:15:18'),
('9b5aa4b9-569a-497b-b906-8fa82edc05ae', 'Implementasi Confened Space Permit, PTW Permit, Pemeriksaan gas berbahaya sebelum bekerja dengan Gas Detector, Penyediaan Lampu Penerangan DC dan Penyediaan Blower', '2024-02-16 19:15:29', '2024-02-16 19:15:29'),
('9b5aa4c4-a3a0-4066-b1c2-15be459831cb', 'Gunakan APD Safety Shoes', '2024-02-16 19:15:37', '2024-02-16 19:15:37'),
('9b5aa4ce-094b-4f35-a2ef-9e2c9dba189c', 'Implementasi Working At Hight Permit, Gunakan APD Saferty Helmet, Safety Shoes dan Full Body Harnes', '2024-02-16 19:15:43', '2024-02-16 19:15:43'),
('9b5aa4de-7d3a-4d2f-9aeb-c71a14963748', 'Gunakan APD Safety Helmet', '2024-02-16 19:15:54', '2024-02-16 19:15:54'),
('9b5aa4f5-383b-4470-a477-d2f115709314', 'Implementasi PTW Permit', '2024-02-16 19:16:08', '2024-02-16 19:16:08');

-- --------------------------------------------------------

--
-- Table structure for table `jsa_impacts`
--

CREATE TABLE `jsa_impacts` (
  `uuid` char(36) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jsa_impacts`
--

INSERT INTO `jsa_impacts` (`uuid`, `name`, `created_at`, `updated_at`) VALUES
('9b5a362e-2677-49b8-8370-e8d4f3f243a0', 'Cidera Punggung', '2024-02-16 14:06:23', '2024-02-16 14:06:23'),
('9b5a3641-d12f-4b00-9ffa-fc2cb430286d', 'Terbentu pipa / Menabrak', '2024-02-16 14:06:36', '2024-02-16 14:06:36'),
('9b5a364b-37b6-41b4-83a7-28e7d6f80e11', 'Iritasi pada mata', '2024-02-16 14:06:42', '2024-02-16 14:06:42'),
('9b5a3654-0d28-44bf-a5cf-5738f57ae677', 'Gangguan Pernafasan', '2024-02-16 14:06:48', '2024-02-16 14:06:48'),
('9b5a365c-bc11-4240-a473-d698d72c705f', 'Terpapar Gas Beracun, Terbentur, Sesak Nafas, Tersengat arus listrik', '2024-02-16 14:06:54', '2024-02-16 14:06:54'),
('9b5a366f-3d25-4d6c-99f3-f9ec56a12c8c', 'Terpeleset', '2024-02-16 14:07:06', '2024-02-16 14:07:06'),
('9b5a367c-cf00-46a6-a877-141abde8f676', 'Terjatuh dari ketinggian', '2024-02-16 14:07:15', '2024-02-16 14:07:21'),
('9b5a3690-809f-44d5-b225-6556014c08f1', 'Terbentur benda keras', '2024-02-16 14:07:28', '2024-02-16 14:07:28'),
('9b5a369f-b61d-4ee3-9ba5-cb736735315d', 'Terjepit / tersengat arus listrik', '2024-02-16 14:07:37', '2024-02-16 14:07:37');

-- --------------------------------------------------------

--
-- Table structure for table `jsa_impact_jsa_danger_control`
--

CREATE TABLE `jsa_impact_jsa_danger_control` (
  `uuid` char(36) NOT NULL,
  `jsa_impact_uuid` char(36) DEFAULT NULL,
  `jsa_danger_control_uuid` char(36) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jsa_impact_jsa_danger_control`
--

INSERT INTO `jsa_impact_jsa_danger_control` (`uuid`, `jsa_impact_uuid`, `jsa_danger_control_uuid`, `created_at`, `updated_at`) VALUES
('9b5aaf5e-e562-4aaf-be13-97c414edc406', '9b5a362e-2677-49b8-8370-e8d4f3f243a0', '9b5aa3a3-2b94-4036-9da0-5da501a02fa6', '2024-02-16 19:45:15', '2024-02-16 19:45:15'),
('9b5aaf6d-d6dd-4851-81f2-6bbfc5c61a86', '9b5a3641-d12f-4b00-9ffa-fc2cb430286d', '9b5aa496-28d7-4c88-8f56-055e3f76ac74', '2024-02-16 19:45:25', '2024-02-16 19:45:25'),
('9b5aaf7b-b30f-429a-8644-2ba146730320', '9b5a364b-37b6-41b4-83a7-28e7d6f80e11', '9b5aa49f-7e01-4987-92f6-b86d3e83b69c', '2024-02-16 19:45:34', '2024-02-16 19:45:34'),
('9b5aaf90-8067-4eca-952e-83d49b97f648', '9b5a3654-0d28-44bf-a5cf-5738f57ae677', '9b5aa4a8-0dd2-4dd0-96d6-2e3a5d72b917', '2024-02-16 19:45:48', '2024-02-16 19:45:48'),
('9b5aaf9e-7dda-481f-8ed9-22ade408d56e', '9b5a365c-bc11-4240-a473-d698d72c705f', '9b5aa4b9-569a-497b-b906-8fa82edc05ae', '2024-02-16 19:45:57', '2024-02-16 19:45:57'),
('9b5aafae-5fb6-4fb0-9795-34be0f6eacb1', '9b5a366f-3d25-4d6c-99f3-f9ec56a12c8c', '9b5aa4c4-a3a0-4066-b1c2-15be459831cb', '2024-02-16 19:46:08', '2024-02-16 19:46:08'),
('9b5aafc1-f681-40f3-8208-c193dc20081f', '9b5a367c-cf00-46a6-a877-141abde8f676', '9b5aa4ce-094b-4f35-a2ef-9e2c9dba189c', '2024-02-16 19:46:20', '2024-02-16 19:46:20'),
('9b5aafda-fa92-4951-a451-97915e1d4aca', '9b5a3690-809f-44d5-b225-6556014c08f1', '9b5aa4de-7d3a-4d2f-9aeb-c71a14963748', '2024-02-16 19:46:37', '2024-02-16 19:46:37'),
('9b5ab060-d364-44fc-92bf-67d12e532d9b', '9b5a369f-b61d-4ee3-9ba5-cb736735315d', '9b5aa4f5-383b-4470-a477-d2f115709314', '2024-02-16 19:48:04', '2024-02-16 19:48:04');

-- --------------------------------------------------------

--
-- Table structure for table `jsa_jsa_safety_permit`
--

CREATE TABLE `jsa_jsa_safety_permit` (
  `uuid` char(36) NOT NULL,
  `jsa_uuid` char(36) DEFAULT NULL,
  `jsa_safety_permit_uuid` char(36) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jsa_jsa_safety_permit`
--

INSERT INTO `jsa_jsa_safety_permit` (`uuid`, `jsa_uuid`, `jsa_safety_permit_uuid`, `created_at`, `updated_at`) VALUES
('9b733d9b-4542-4004-8c25-21471f69793d', '9b6cf12e-8784-4fcf-a054-7f192d16f62d', '1e0a03f8-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-02-29 00:42:51', '2024-02-29 00:42:51');

-- --------------------------------------------------------

--
-- Table structure for table `jsa_jsa_worker`
--

CREATE TABLE `jsa_jsa_worker` (
  `uuid` char(36) NOT NULL,
  `jsa_uuid` char(36) DEFAULT NULL,
  `jsa_worker_uuid` char(36) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jsa_jsa_worker`
--

INSERT INTO `jsa_jsa_worker` (`uuid`, `jsa_uuid`, `jsa_worker_uuid`, `created_at`, `updated_at`) VALUES
('9b6cf12f-0d57-498d-adf8-386ca5080c1e', '9b6cf12e-8784-4fcf-a054-7f192d16f62d', '4fb91fe9-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-02-25 21:34:11', '2024-02-25 21:34:11'),
('9b6cf12f-3e77-42cd-bb9b-249c7846247c', '9b6cf12e-8784-4fcf-a054-7f192d16f62d', '4fb93fbe-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-02-25 21:34:11', '2024-02-25 21:34:11'),
('9b6cf12f-5503-4200-bc93-53be7909fa6e', '9b6cf12e-8784-4fcf-a054-7f192d16f62d', '4fb95cf0-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-02-25 21:34:11', '2024-02-25 21:34:11'),
('9b6cf12f-add0-4a8f-803a-78936f6def3b', '9b6cf12e-8784-4fcf-a054-7f192d16f62d', '4fb97794-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-02-25 21:34:12', '2024-02-25 21:34:12'),
('9b6cf12f-dbdc-435a-a91a-af662284ce98', '9b6cf12e-8784-4fcf-a054-7f192d16f62d', '4fb9942e-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-02-25 21:34:12', '2024-02-25 21:34:12'),
('9b6cf12f-f32e-4450-ae7c-e4d93984635c', '9b6cf12e-8784-4fcf-a054-7f192d16f62d', '4fb9b000-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-02-25 21:34:12', '2024-02-25 21:34:12'),
('9b6cf130-1259-4c72-af98-0f107309fe35', '9b6cf12e-8784-4fcf-a054-7f192d16f62d', '4fb9c90f-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-02-25 21:34:12', '2024-02-25 21:34:12'),
('9b6cf130-31c2-4183-a0c1-25747169027d', '9b6cf12e-8784-4fcf-a054-7f192d16f62d', '4fb9e19e-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-02-25 21:34:12', '2024-02-25 21:34:12'),
('9b6cf130-4859-4e68-8f36-9fc5ab53a34c', '9b6cf12e-8784-4fcf-a054-7f192d16f62d', '4fb9f9dd-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-02-25 21:34:12', '2024-02-25 21:34:12'),
('9b6cf130-67b5-42b5-9bf5-ffab3ca791e4', '9b6cf12e-8784-4fcf-a054-7f192d16f62d', '4fba1840-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-02-25 21:34:12', '2024-02-25 21:34:12'),
('9b6cf130-79ed-44f4-bd2c-84fc3b8a529e', '9b6cf12e-8784-4fcf-a054-7f192d16f62d', '4fba42ac-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-02-25 21:34:12', '2024-02-25 21:34:12'),
('9b6cf130-8c7b-44d9-937e-0a506edbe0b0', '9b6cf12e-8784-4fcf-a054-7f192d16f62d', '4fba66f5-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-02-25 21:34:12', '2024-02-25 21:34:12');

-- --------------------------------------------------------

--
-- Table structure for table `jsa_jsa_work_stage`
--

CREATE TABLE `jsa_jsa_work_stage` (
  `uuid` char(36) NOT NULL,
  `jsa_uuid` char(36) DEFAULT NULL,
  `jsa_work_stage_uuid` char(36) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jsa_jsa_work_stage`
--

INSERT INTO `jsa_jsa_work_stage` (`uuid`, `jsa_uuid`, `jsa_work_stage_uuid`, `created_at`, `updated_at`) VALUES
('9b6cf130-b663-4f36-be09-57cf4ed97080', '9b6cf12e-8784-4fcf-a054-7f192d16f62d', '64dd99b4-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-02-25 21:34:12', '2024-02-25 21:34:12'),
('9b6cf130-cf4e-4344-be1e-84891a7c26d2', '9b6cf12e-8784-4fcf-a054-7f192d16f62d', '64ddc583-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-02-25 21:34:12', '2024-02-25 21:34:12'),
('9b6cf130-eeab-4806-9b0d-40a017c5e4f4', '9b6cf12e-8784-4fcf-a054-7f192d16f62d', '64ddff87-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-02-25 21:34:12', '2024-02-25 21:34:12');

-- --------------------------------------------------------

--
-- Table structure for table `jsa_jsa_work_tool`
--

CREATE TABLE `jsa_jsa_work_tool` (
  `uuid` char(36) NOT NULL,
  `jsa_uuid` char(36) DEFAULT NULL,
  `jsa_work_tool_uuid` char(36) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jsa_jsa_work_tool`
--

INSERT INTO `jsa_jsa_work_tool` (`uuid`, `jsa_uuid`, `jsa_work_tool_uuid`, `created_at`, `updated_at`) VALUES
('9b6cf131-1baf-4518-8a1c-3fb2a5da22e0', '9b6cf12e-8784-4fcf-a054-7f192d16f62d', '759ebfb9-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-02-25 21:34:13', '2024-02-25 21:34:13'),
('9b6cf131-4ebe-4f23-a429-3eff3e8d924c', '9b6cf12e-8784-4fcf-a054-7f192d16f62d', '759edd45-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-02-25 21:34:13', '2024-02-25 21:34:13'),
('9b6cf131-72f0-4470-b0ea-a10a457b825a', '9b6cf12e-8784-4fcf-a054-7f192d16f62d', '759f1a86-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-02-25 21:34:13', '2024-02-25 21:34:13');

-- --------------------------------------------------------

--
-- Table structure for table `jsa_k3l_appeal_of_regulations`
--

CREATE TABLE `jsa_k3l_appeal_of_regulations` (
  `uuid` char(36) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jsa_k3l_appeal_of_regulations`
--

INSERT INTO `jsa_k3l_appeal_of_regulations` (`uuid`, `name`, `created_at`, `updated_at`) VALUES
('e3d8c269-cb7c-11ee-841d-9c5c8e3fd3aa', 'DILARANG Merokok di area kerja.', NULL, NULL),
('e3d8f7c5-cb7c-11ee-841d-9c5c8e3fd3aa', 'Jagalah kebersihan lingkungan di area kerja.', NULL, NULL),
('e3d9147a-cb7c-11ee-841d-9c5c8e3fd3aa', 'Jika ada kondisi bahaya/ tidak aman di sekitar, segera lapor kepada pengawas area.', NULL, NULL),
('e3d92fba-cb7c-11ee-841d-9c5c8e3fd3aa', 'Dilarang berjalan/ memasuki area yang tidak tercantum dalam permit tanpa seizin dari pengawas area.', NULL, NULL),
('e3d94a63-cb7c-11ee-841d-9c5c8e3fd3aa', 'Dilarang menyentuh peralatan dan tombol emergency di sekitar area tanpa izin.', NULL, NULL),
('e3d9646a-cb7c-11ee-841d-9c5c8e3fd3aa', 'Selalu berkoordinasi sebelum pekerjaan.', NULL, NULL),
('e3d98047-cb7c-11ee-841d-9c5c8e3fd3aa', 'Pengawas Pekerja dan Safety Officer Wajib memberikan Safety Talk & Safety Breafing kepada para pekerja sebelum pekerjaan dimulai.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jsa_person_groups`
--

CREATE TABLE `jsa_person_groups` (
  `uuid` char(36) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jsa_person_groups`
--

INSERT INTO `jsa_person_groups` (`uuid`, `name`, `created_at`, `updated_at`) VALUES
('9b5b7b9f-0079-4242-a296-1b38acc7ca21', 'Mekanik', '2024-02-17 05:16:23', '2024-02-17 05:17:46'),
('9b5b7bae-cb6f-426b-a30c-622814cdd12c', 'Elektrik', '2024-02-17 05:16:33', '2024-02-17 05:17:56'),
('9b73c800-e8a0-4cb3-adb1-268047d20004', 'I&C', '2024-02-29 07:09:50', '2024-02-29 07:09:50');

-- --------------------------------------------------------

--
-- Table structure for table `jsa_pics`
--

CREATE TABLE `jsa_pics` (
  `uuid` char(36) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jsa_pics`
--

INSERT INTO `jsa_pics` (`uuid`, `name`, `created_at`, `updated_at`) VALUES
('9b5a90d7-1a12-41bd-861f-159ddf892b00', 'Pengawas Pekerjaan', '2024-02-16 18:19:53', '2024-02-16 18:19:53'),
('9b5a9757-aa0b-4432-a8dd-bcd17c2dfde2', 'Pelaksana Pekerjaan', '2024-02-16 18:38:04', '2024-02-16 18:38:04');

-- --------------------------------------------------------

--
-- Table structure for table `jsa_potential_hazards`
--

CREATE TABLE `jsa_potential_hazards` (
  `uuid` char(36) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jsa_potential_hazards`
--

INSERT INTO `jsa_potential_hazards` (`uuid`, `name`, `created_at`, `updated_at`) VALUES
('9b5a2694-4524-4993-9a13-4228f05a2352', 'Alat Kerja / Tools Kerja', '2024-02-16 13:22:46', '2024-02-16 13:22:46'),
('9b5a26b0-4bab-41c0-b994-7525cca4d28e', 'Pipa Scaffolding', '2024-02-16 13:23:04', '2024-02-16 13:23:04'),
('9b5a26ba-824c-47fb-a731-32dd62a9e9b7', 'Debu Batubara', '2024-02-16 13:23:11', '2024-02-16 13:23:11'),
('9b5a26cd-2de1-4cf4-a92a-ca5348c8ce3f', 'Furnice', '2024-02-16 13:23:23', '2024-02-16 13:23:23'),
('9b5a3502-3e29-442d-b36f-1efefc31a968', 'Naik / Turun Tangga', '2024-02-16 14:03:07', '2024-02-16 14:03:07'),
('9b5a350b-c7bc-41a0-aefc-4df93123f519', 'Benda Keras', '2024-02-16 14:03:13', '2024-02-16 14:03:13'),
('9b5a351a-bc74-4b73-b481-84177d8a46cb', 'Peralatan Kerja', '2024-02-16 14:03:23', '2024-02-16 14:03:23'),
('9b5a3544-3f64-4aff-b31b-0732072593ca', 'Lokasi Ketinggian', '2024-02-16 14:03:50', '2024-02-16 14:03:50'),
('9b6eb7c3-a733-4ed6-818b-e973a5f6f019', 'awddawd', '2024-02-26 18:45:17', '2024-02-26 18:45:17'),
('9b6eb7d4-674d-466f-9531-54ee3005b5fc', 'awdwddw', '2024-02-26 18:45:28', '2024-02-26 18:45:28');

-- --------------------------------------------------------

--
-- Table structure for table `jsa_potential_hazard_jsa_impact`
--

CREATE TABLE `jsa_potential_hazard_jsa_impact` (
  `uuid` char(36) NOT NULL,
  `jsa_potential_hazard_uuid` char(36) DEFAULT NULL,
  `jsa_impact_uuid` char(36) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jsa_potential_hazard_jsa_impact`
--

INSERT INTO `jsa_potential_hazard_jsa_impact` (`uuid`, `jsa_potential_hazard_uuid`, `jsa_impact_uuid`, `created_at`, `updated_at`) VALUES
('9b5a413d-4126-48de-9527-5feb3c4ed71d', '9b5a2694-4524-4993-9a13-4228f05a2352', '9b5a362e-2677-49b8-8370-e8d4f3f243a0', '2024-02-16 14:37:18', '2024-02-16 14:37:18'),
('9b5a4153-9db3-41ad-a694-169572f8ccc2', '9b5a26b0-4bab-41c0-b994-7525cca4d28e', '9b5a3641-d12f-4b00-9ffa-fc2cb430286d', '2024-02-16 14:37:33', '2024-02-16 14:37:33'),
('9b5a4162-46e9-41d5-b6d1-4f29973d3bab', '9b5a26ba-824c-47fb-a731-32dd62a9e9b7', '9b5a364b-37b6-41b4-83a7-28e7d6f80e11', '2024-02-16 14:37:43', '2024-02-16 14:37:43'),
('9b5a416f-6ae9-4d2a-8b1e-d8a4c6d59b9d', '9b5a26ba-824c-47fb-a731-32dd62a9e9b7', '9b5a3654-0d28-44bf-a5cf-5738f57ae677', '2024-02-16 14:37:51', '2024-02-16 14:37:51'),
('9b5a417f-0df0-4a8b-a89f-91f86f1a6fba', '9b5a26cd-2de1-4cf4-a92a-ca5348c8ce3f', '9b5a365c-bc11-4240-a473-d698d72c705f', '2024-02-16 14:38:02', '2024-02-16 14:38:02'),
('9b5a4197-d3fd-480b-9151-d0442d368ab4', '9b5a3502-3e29-442d-b36f-1efefc31a968', '9b5a366f-3d25-4d6c-99f3-f9ec56a12c8c', '2024-02-16 14:38:18', '2024-02-16 14:38:18'),
('9b5a41af-0a94-42d5-a779-e90ed01bd185', '9b5a3544-3f64-4aff-b31b-0732072593ca', '9b5a367c-cf00-46a6-a877-141abde8f676', '2024-02-16 14:38:33', '2024-02-16 14:38:33'),
('9b5a41bd-f760-4bb2-b475-eb408d7bcff0', '9b5a350b-c7bc-41a0-aefc-4df93123f519', '9b5a3690-809f-44d5-b225-6556014c08f1', '2024-02-16 14:38:43', '2024-02-16 14:38:43'),
('9b5a41d4-e086-4e7d-99e6-7c63a4cfdca0', '9b5a351a-bc74-4b73-b481-84177d8a46cb', '9b5a369f-b61d-4ee3-9ba5-cb736735315d', '2024-02-16 14:38:58', '2024-02-16 14:38:58');

-- --------------------------------------------------------

--
-- Table structure for table `jsa_safety_permits`
--

CREATE TABLE `jsa_safety_permits` (
  `uuid` char(36) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jsa_safety_permits`
--

INSERT INTO `jsa_safety_permits` (`uuid`, `name`, `created_at`, `updated_at`) VALUES
('1e0a03f8-cb7d-11ee-841d-9c5c8e3fd3aa', 'Hot Work', NULL, NULL),
('1e0a25a4-cb7d-11ee-841d-9c5c8e3fd3aa', 'Cofined Space', NULL, NULL),
('1e0a4252-cb7d-11ee-841d-9c5c8e3fd3aa', 'Working at Height', NULL, NULL),
('1e0a5da1-cb7d-11ee-841d-9c5c8e3fd3aa', 'Isolasi / PTW', NULL, NULL),
('1e0a785e-cb7d-11ee-841d-9c5c8e3fd3aa', 'Vicinity', NULL, NULL),
('1e0a92ff-cb7d-11ee-841d-9c5c8e3fd3aa', 'Exavatione', NULL, NULL),
('1e0aadde-cb7d-11ee-841d-9c5c8e3fd3aa', 'Near & Underwater', NULL, '2024-02-19 22:54:15'),
('1e0ac8a0-cb7d-11ee-841d-9c5c8e3fd3aa', 'Chemical', NULL, '2024-02-20 01:32:14'),
('9b613474-3037-4d56-98f9-819223debd85', 'Radiasi', '2024-02-20 01:32:21', '2024-02-20 01:32:21'),
('9b613482-6d71-490d-b74c-cec7e26540f4', 'Lifting', '2024-02-20 01:32:30', '2024-02-20 01:32:30'),
('9b61348f-81ff-4129-9c02-4afdbb6beb49', 'Thing', '2024-02-20 01:32:39', '2024-02-20 01:32:39');

-- --------------------------------------------------------

--
-- Table structure for table `jsa_skills_or_positions`
--

CREATE TABLE `jsa_skills_or_positions` (
  `uuid` char(36) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jsa_skills_or_positions`
--

INSERT INTO `jsa_skills_or_positions` (`uuid`, `name`, `created_at`, `updated_at`) VALUES
('9b586dee-4db1-48de-864a-7f7875362056', 'Koordinator', '2024-02-15 16:50:37', '2024-02-15 16:52:06'),
('9b586df9-2245-43ef-b6ea-0ab7fa5fea58', 'Safety Officer', '2024-02-15 16:50:44', '2024-02-15 16:52:14'),
('9b586e8f-0f1e-4a23-8813-3ffa0e8e07e5', 'Teknisi', '2024-02-15 16:52:22', '2024-02-15 16:52:22'),
('9b586e9a-03f8-45ba-a898-83be1fd27bb6', 'Helper', '2024-02-15 16:52:30', '2024-02-15 16:52:30');

-- --------------------------------------------------------

--
-- Table structure for table `jsa_workers`
--

CREATE TABLE `jsa_workers` (
  `uuid` char(36) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jsa_workers`
--

INSERT INTO `jsa_workers` (`uuid`, `name`, `created_at`, `updated_at`) VALUES
('4fb91fe9-cb7d-11ee-841d-9c5c8e3fd3aa', 'Misdi', NULL, NULL),
('4fb93fbe-cb7d-11ee-841d-9c5c8e3fd3aa', 'Tony Dwi', NULL, '2024-02-17 04:23:18'),
('4fb95cf0-cb7d-11ee-841d-9c5c8e3fd3aa', 'Abdul Ahmad', NULL, '2024-02-17 04:23:35'),
('4fb97794-cb7d-11ee-841d-9c5c8e3fd3aa', 'Suharyono', NULL, '2024-02-15 01:39:47'),
('4fb9942e-cb7d-11ee-841d-9c5c8e3fd3aa', 'Meon', NULL, NULL),
('4fb9b000-cb7d-11ee-841d-9c5c8e3fd3aa', 'Aldy', NULL, NULL),
('4fb9c90f-cb7d-11ee-841d-9c5c8e3fd3aa', 'Jandro', NULL, NULL),
('4fb9e19e-cb7d-11ee-841d-9c5c8e3fd3aa', 'Ricky', NULL, NULL),
('4fb9f9dd-cb7d-11ee-841d-9c5c8e3fd3aa', 'Aris', NULL, NULL),
('4fba1840-cb7d-11ee-841d-9c5c8e3fd3aa', 'Bernat', NULL, NULL),
('4fba42ac-cb7d-11ee-841d-9c5c8e3fd3aa', 'Marno', NULL, NULL),
('4fba66f5-cb7d-11ee-841d-9c5c8e3fd3aa', 'Yudha', NULL, '2024-02-15 01:39:16'),
('9b6ba428-f281-4dfe-94e7-3476b0f8fe5e', 'test1', '2024-02-25 06:02:59', '2024-02-25 06:02:59');

-- --------------------------------------------------------

--
-- Table structure for table `jsa_worker_jsa_skill_or_position`
--

CREATE TABLE `jsa_worker_jsa_skill_or_position` (
  `uuid` char(36) NOT NULL,
  `jsa_worker_uuid` char(36) DEFAULT NULL,
  `jsa_skill_or_position_uuid` char(36) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jsa_worker_jsa_skill_or_position`
--

INSERT INTO `jsa_worker_jsa_skill_or_position` (`uuid`, `jsa_worker_uuid`, `jsa_skill_or_position_uuid`, `created_at`, `updated_at`) VALUES
('9b5a3177-3e04-4f8c-b1bb-81a20f84c89c', '4fb97794-cb7d-11ee-841d-9c5c8e3fd3aa', '9b586dee-4db1-48de-864a-7f7875362056', '2024-02-16 13:53:12', '2024-02-16 13:53:12'),
('9b5b6888-faa0-40d5-b338-56bfe9c53d19', '4fb91fe9-cb7d-11ee-841d-9c5c8e3fd3aa', '9b586dee-4db1-48de-864a-7f7875362056', '2024-02-17 04:23:01', '2024-02-17 04:23:01'),
('9b5b68a3-c735-45ad-8218-4c27cfc85c02', '4fb93fbe-cb7d-11ee-841d-9c5c8e3fd3aa', '9b586df9-2245-43ef-b6ea-0ab7fa5fea58', '2024-02-17 04:23:18', '2024-02-17 04:23:18'),
('9b5b68bd-2fd3-4cf6-aa30-537f319d7803', '4fb95cf0-cb7d-11ee-841d-9c5c8e3fd3aa', '9b586e8f-0f1e-4a23-8813-3ffa0e8e07e5', '2024-02-17 04:23:35', '2024-02-17 04:23:35'),
('9b5b68c8-0a98-4fc1-81e0-5a97ec2b5f25', '4fb9942e-cb7d-11ee-841d-9c5c8e3fd3aa', '9b586e9a-03f8-45ba-a898-83be1fd27bb6', '2024-02-17 04:23:42', '2024-02-17 04:23:42'),
('9b5b68d2-fe0c-44bb-8a0f-fa439be10e8f', '4fb9b000-cb7d-11ee-841d-9c5c8e3fd3aa', '9b586e9a-03f8-45ba-a898-83be1fd27bb6', '2024-02-17 04:23:49', '2024-02-17 04:23:49'),
('9b5b68de-e111-4dcf-9272-cf39c0dd9a51', '4fb9c90f-cb7d-11ee-841d-9c5c8e3fd3aa', '9b586e9a-03f8-45ba-a898-83be1fd27bb6', '2024-02-17 04:23:57', '2024-02-17 04:23:57'),
('9b5b68ea-e957-4d37-9608-c5fd86973cd2', '4fb9e19e-cb7d-11ee-841d-9c5c8e3fd3aa', '9b586e9a-03f8-45ba-a898-83be1fd27bb6', '2024-02-17 04:24:05', '2024-02-17 04:24:05'),
('9b5b68f5-ab68-493a-8f2a-7bce6ee9324e', '4fb9f9dd-cb7d-11ee-841d-9c5c8e3fd3aa', '9b586e9a-03f8-45ba-a898-83be1fd27bb6', '2024-02-17 04:24:12', '2024-02-17 04:24:12'),
('9b5b6901-9ac2-406f-bcc2-fc0f5ad8149e', '4fba1840-cb7d-11ee-841d-9c5c8e3fd3aa', '9b586e9a-03f8-45ba-a898-83be1fd27bb6', '2024-02-17 04:24:20', '2024-02-17 04:24:20'),
('9b5b6919-3802-40e1-a876-a6caa16d28b2', '4fba42ac-cb7d-11ee-841d-9c5c8e3fd3aa', '9b586e9a-03f8-45ba-a898-83be1fd27bb6', '2024-02-17 04:24:35', '2024-02-17 04:24:35'),
('9b5b6925-8d61-4d2f-87e6-4590f66264e9', '4fba66f5-cb7d-11ee-841d-9c5c8e3fd3aa', '9b586e9a-03f8-45ba-a898-83be1fd27bb6', '2024-02-17 04:24:43', '2024-02-17 04:24:43'),
('9b6ba429-309d-4183-a337-ae66b8d94462', '9b6ba428-f281-4dfe-94e7-3476b0f8fe5e', '9b586dee-4db1-48de-864a-7f7875362056', '2024-02-25 06:02:59', '2024-02-25 06:02:59'),
('9b6ba429-50fd-452d-ae55-2f9c23fa77e9', '9b6ba428-f281-4dfe-94e7-3476b0f8fe5e', '9b586df9-2245-43ef-b6ea-0ab7fa5fea58', '2024-02-25 06:02:59', '2024-02-25 06:02:59'),
('9b6ba429-62fc-40f2-998c-6ec47483e7f3', '9b6ba428-f281-4dfe-94e7-3476b0f8fe5e', '9b586e8f-0f1e-4a23-8813-3ffa0e8e07e5', '2024-02-25 06:02:59', '2024-02-25 06:02:59'),
('9b6ba429-8f11-4caf-b67d-63de6cf20bcc', '9b6ba428-f281-4dfe-94e7-3476b0f8fe5e', '9b586e9a-03f8-45ba-a898-83be1fd27bb6', '2024-02-25 06:02:59', '2024-02-25 06:02:59');

-- --------------------------------------------------------

--
-- Table structure for table `jsa_work_stages`
--

CREATE TABLE `jsa_work_stages` (
  `uuid` char(36) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jsa_work_stages`
--

INSERT INTO `jsa_work_stages` (`uuid`, `name`, `created_at`, `updated_at`) VALUES
('64dd99b4-cb7d-11ee-841d-9c5c8e3fd3aa', 'Persiapan Peralatan ( Membawa, Menempatkan Scaffolding & Tools Kerja )', NULL, '2024-02-16 14:05:14'),
('64ddc583-cb7d-11ee-841d-9c5c8e3fd3aa', 'Pemasangan Scaffolding', NULL, NULL),
('64ddff87-cb7d-11ee-841d-9c5c8e3fd3aa', 'Penyelesaiaan Pekerjaan ( Pelepasan Scaffolding )', NULL, '2024-02-16 13:52:10'),
('9b6bb241-3a27-4c3d-af40-a8b7fe1b1fbe', 'Pekerjaan Dimulai', '2024-02-25 06:42:24', '2024-02-25 06:42:24');

-- --------------------------------------------------------

--
-- Table structure for table `jsa_work_stage_jsa_pic`
--

CREATE TABLE `jsa_work_stage_jsa_pic` (
  `uuid` char(36) NOT NULL,
  `jsa_work_stage_uuid` char(36) DEFAULT NULL,
  `jsa_pic_uuid` char(36) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jsa_work_stage_jsa_pic`
--

INSERT INTO `jsa_work_stage_jsa_pic` (`uuid`, `jsa_work_stage_uuid`, `jsa_pic_uuid`, `created_at`, `updated_at`) VALUES
('9b5a9cb1-f905-4f1a-989d-a79a65000127', '64dd99b4-cb7d-11ee-841d-9c5c8e3fd3aa', '9b5a90d7-1a12-41bd-861f-159ddf892b00', '2024-02-16 18:53:02', '2024-02-16 18:53:02'),
('9b5a9cbf-1e45-4dfc-94f9-3c9610fcf046', '64dd99b4-cb7d-11ee-841d-9c5c8e3fd3aa', '9b5a9757-aa0b-4432-a8dd-bcd17c2dfde2', '2024-02-16 18:53:11', '2024-02-16 18:53:11'),
('9b5a9cc9-570f-4aeb-a7ff-435359adefcb', '64ddc583-cb7d-11ee-841d-9c5c8e3fd3aa', '9b5a90d7-1a12-41bd-861f-159ddf892b00', '2024-02-16 18:53:18', '2024-02-16 18:53:18'),
('9b5a9cc9-7113-47e2-986d-945613cfb4f2', '64ddc583-cb7d-11ee-841d-9c5c8e3fd3aa', '9b5a9757-aa0b-4432-a8dd-bcd17c2dfde2', '2024-02-16 18:53:18', '2024-02-16 18:53:18'),
('9b5a9cd5-c684-417a-9229-d2b1ddcf0aba', '64ddff87-cb7d-11ee-841d-9c5c8e3fd3aa', '9b5a90d7-1a12-41bd-861f-159ddf892b00', '2024-02-16 18:53:26', '2024-02-16 18:53:26'),
('9b5a9cd5-e856-43c8-bb40-86eea76719a3', '64ddff87-cb7d-11ee-841d-9c5c8e3fd3aa', '9b5a9757-aa0b-4432-a8dd-bcd17c2dfde2', '2024-02-16 18:53:26', '2024-02-16 18:53:26'),
('9b6bb241-cc0b-46a1-8741-5404ef843420', '9b6bb241-3a27-4c3d-af40-a8b7fe1b1fbe', '9b5a90d7-1a12-41bd-861f-159ddf892b00', '2024-02-25 06:42:24', '2024-02-25 06:42:24'),
('9b6bb241-feef-4f77-a53e-248a9075b2d6', '9b6bb241-3a27-4c3d-af40-a8b7fe1b1fbe', '9b5a9757-aa0b-4432-a8dd-bcd17c2dfde2', '2024-02-25 06:42:24', '2024-02-25 06:42:24');

-- --------------------------------------------------------

--
-- Table structure for table `jsa_work_stage_jsa_potential_hazard`
--

CREATE TABLE `jsa_work_stage_jsa_potential_hazard` (
  `uuid` char(36) NOT NULL,
  `jsa_work_stage_uuid` char(36) DEFAULT NULL,
  `jsa_potential_hazard_uuid` char(36) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jsa_work_stage_jsa_potential_hazard`
--

INSERT INTO `jsa_work_stage_jsa_potential_hazard` (`uuid`, `jsa_work_stage_uuid`, `jsa_potential_hazard_uuid`, `created_at`, `updated_at`) VALUES
('9b5a34ea-9897-4fd0-ac4b-54223ddba694', '64dd99b4-cb7d-11ee-841d-9c5c8e3fd3aa', '9b5a2694-4524-4993-9a13-4228f05a2352', '2024-02-16 14:02:51', '2024-02-16 14:02:51'),
('9b5a34ea-b4ef-4af2-8a53-9d14240465a7', '64dd99b4-cb7d-11ee-841d-9c5c8e3fd3aa', '9b5a26b0-4bab-41c0-b994-7525cca4d28e', '2024-02-16 14:02:51', '2024-02-16 14:02:51'),
('9b5a34ea-d447-4929-bf59-db1c519f5a2b', '64dd99b4-cb7d-11ee-841d-9c5c8e3fd3aa', '9b5a26ba-824c-47fb-a731-32dd62a9e9b7', '2024-02-16 14:02:51', '2024-02-16 14:02:51'),
('9b5a34eb-0b9f-4e4a-a78c-ac766ab76a0f', '64dd99b4-cb7d-11ee-841d-9c5c8e3fd3aa', '9b5a26cd-2de1-4cf4-a92a-ca5348c8ce3f', '2024-02-16 14:02:51', '2024-02-16 14:02:51'),
('9b5a3575-f88e-4a4a-8152-39fbd987a97e', '64ddc583-cb7d-11ee-841d-9c5c8e3fd3aa', '9b5a26cd-2de1-4cf4-a92a-ca5348c8ce3f', '2024-02-16 14:04:22', '2024-02-16 14:04:22'),
('9b5a3576-1fb8-451e-914b-3d7f36a216d6', '64ddc583-cb7d-11ee-841d-9c5c8e3fd3aa', '9b5a3502-3e29-442d-b36f-1efefc31a968', '2024-02-16 14:04:22', '2024-02-16 14:04:22'),
('9b5a3576-3ef8-4b10-830b-a8cb3d598ff2', '64ddc583-cb7d-11ee-841d-9c5c8e3fd3aa', '9b5a350b-c7bc-41a0-aefc-4df93123f519', '2024-02-16 14:04:23', '2024-02-16 14:04:23'),
('9b5a3576-75a0-43cf-a3d7-f99e6f756b7e', '64ddc583-cb7d-11ee-841d-9c5c8e3fd3aa', '9b5a351a-bc74-4b73-b481-84177d8a46cb', '2024-02-16 14:04:23', '2024-02-16 14:04:23'),
('9b5a3576-8c41-451a-898e-4c6b1be95f4c', '64ddc583-cb7d-11ee-841d-9c5c8e3fd3aa', '9b5a3544-3f64-4aff-b31b-0732072593ca', '2024-02-16 14:04:23', '2024-02-16 14:04:23'),
('9b5a3595-83d4-4b8a-8c14-b55a81152b1f', '64ddff87-cb7d-11ee-841d-9c5c8e3fd3aa', '9b5a2694-4524-4993-9a13-4228f05a2352', '2024-02-16 14:04:43', '2024-02-16 14:04:43'),
('9b5a3595-aea2-4256-b745-f93552887050', '64ddff87-cb7d-11ee-841d-9c5c8e3fd3aa', '9b5a26b0-4bab-41c0-b994-7525cca4d28e', '2024-02-16 14:04:43', '2024-02-16 14:04:43'),
('9b5a3595-cda8-4a0f-a9b6-6ea383f6584d', '64ddff87-cb7d-11ee-841d-9c5c8e3fd3aa', '9b5a26ba-824c-47fb-a731-32dd62a9e9b7', '2024-02-16 14:04:43', '2024-02-16 14:04:43'),
('9b5a403e-7995-47a1-84dc-7ea4a5f670f4', '64ddff87-cb7d-11ee-841d-9c5c8e3fd3aa', '9b5a3502-3e29-442d-b36f-1efefc31a968', '2024-02-16 14:34:31', '2024-02-16 14:34:31'),
('9b6bb241-6cfe-463a-b8f4-0ccadad4d506', '9b6bb241-3a27-4c3d-af40-a8b7fe1b1fbe', '9b5a2694-4524-4993-9a13-4228f05a2352', '2024-02-25 06:42:24', '2024-02-25 06:42:24');

-- --------------------------------------------------------

--
-- Table structure for table `jsa_work_tools`
--

CREATE TABLE `jsa_work_tools` (
  `uuid` char(36) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jsa_work_tools`
--

INSERT INTO `jsa_work_tools` (`uuid`, `name`, `created_at`, `updated_at`) VALUES
('759ebfb9-cb7d-11ee-841d-9c5c8e3fd3aa', 'Kunci Pas Ring', NULL, NULL),
('759edd45-cb7d-11ee-841d-9c5c8e3fd3aa', 'Kunci Scaffolding', NULL, NULL),
('759f1a86-cb7d-11ee-841d-9c5c8e3fd3aa', 'Scaffolding', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2024_02_06_132959_create_jsa_person_groups_table', 1),
(3, '2024_02_06_133247_create_jsas_table', 1),
(4, '2024_02_06_134604_create_jsa_safety_permits_table', 1),
(5, '2024_02_06_134657_create_jsa_workers_table', 1),
(6, '2024_02_06_134746_create_jsa_skills_or_positions_table', 1),
(7, '2024_02_06_134859_create_jsa_work_tools_table', 1),
(8, '2024_02_06_135024_create_jsa_jsa_safety_permit_table', 1),
(9, '2024_02_06_135239_create_jsa_k3l_appeal_of_regulations_table', 1),
(10, '2024_02_06_135319_create_jsa_work_stages_table', 1),
(11, '2024_02_06_135346_create_jsa_potential_hazards_table', 1),
(12, '2024_02_06_135410_create_jsa_danger_controls_table', 1),
(13, '2024_02_06_135428_create_jsa_pics_table', 1),
(14, '2024_02_06_135455_create_jsa_impacts_table', 1),
(15, '2024_02_06_142755_create_jsa_jsa_worker_table', 1),
(16, '2024_02_06_143012_create_jsa_worker_jsa_skill_or_position_table', 1),
(17, '2024_02_06_144958_create_jsa_jsa_work_tool_table', 1),
(18, '2024_02_06_145157_create_jsa_jsa_work_stage_table', 1),
(19, '2024_02_06_145309_create_jsa_work_stage_jsa_potential_hazard_table', 1),
(20, '2024_02_06_145443_create_jsa_potential_hazard_jsa_impact_table', 1),
(21, '2024_02_06_154341_create_jsa_impact_jsa_danger_control_table', 1),
(22, '2024_02_08_143836_create_forms_table', 1),
(23, '2024_02_08_143837_create_form_descriptions_table', 1),
(24, '2024_02_08_144103_create_form_form_description_table', 1),
(25, '2024_02_08_144321_create_form_protective_equipments_table', 1),
(26, '2024_02_08_144422_create_form_form_protective_equipment_table', 1),
(27, '2024_02_08_144657_create_form_additional_notes_table', 1),
(28, '2024_02_08_144737_create_form_form_additional_note_table', 1),
(29, '2024_02_08_145029_create_form_workers_table', 1),
(30, '2024_02_08_145232_create_form_form_worker_table', 1),
(31, '2024_02_08_145408_create_form_skill_or_positions_table', 1),
(32, '2024_02_08_145502_create_form_form_skill_or_position_table', 1),
(33, '2024_02_08_152755_create_ptws_table', 1),
(34, '2024_02_08_154109_create_ptw_descriptions_table', 1),
(35, '2024_02_08_154255_create_ptw_ptw_description_table', 1),
(36, '2024_02_08_154530_create_ptw_isolation_methods_table', 1),
(37, '2024_02_08_154614_create_ptw_desctription_ptw_isolation_method_table', 1),
(38, '2024_02_08_155553_create_ptw_notes_table', 1),
(39, '2024_02_08_155628_create_ptw_ptw_note_table', 1),
(40, '2024_02_08_155823_create_ptw_jsa_safety_permit_table', 1),
(41, '2024_02_16_021119_create_jsa_form_table', 2),
(42, '2024_02_16_215558_create_jsa_jsa_pics_table', 3),
(43, '2024_02_16_220307_create_jsa_work_stage_jsa_pics_table', 4),
(44, '2024_02_16_221033_create_jsa_work_stage_jsa_pics_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `ptws`
--

CREATE TABLE `ptws` (
  `uuid` char(36) NOT NULL,
  `ptw_number` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `kks_equipment_number` varchar(255) DEFAULT NULL,
  `job_name` varchar(255) NOT NULL,
  `job_duration` varchar(255) NOT NULL,
  `field_or_company` varchar(255) NOT NULL,
  `working_party` varchar(225) NOT NULL,
  `work_status` varchar(255) NOT NULL,
  `certificate` varchar(255) NOT NULL,
  `knowing` varchar(255) NOT NULL,
  `knowing_position` varchar(255) NOT NULL,
  `approve_start_ptw_officer` varchar(255) NOT NULL,
  `approve_start_maintenance_supervisor` varchar(255) NOT NULL,
  `approve_start_date` varchar(255) NOT NULL,
  `approve_start_time` varchar(255) NOT NULL,
  `clearance_ptw_officer` varchar(255) NOT NULL,
  `clearance_maintenance_supervisor` varchar(255) NOT NULL,
  `third_party_person` varchar(255) NOT NULL,
  `third_party_date` varchar(225) NOT NULL,
  `third_party_time` varchar(225) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ptws`
--

INSERT INTO `ptws` (`uuid`, `ptw_number`, `location`, `kks_equipment_number`, `job_name`, `job_duration`, `field_or_company`, `working_party`, `work_status`, `certificate`, `knowing`, `knowing_position`, `approve_start_ptw_officer`, `approve_start_maintenance_supervisor`, `approve_start_date`, `approve_start_time`, `clearance_ptw_officer`, `clearance_maintenance_supervisor`, `third_party_person`, `third_party_date`, `third_party_time`, `created_at`, `updated_at`) VALUES
('9b6d09de-4d8d-4e52-b6d8-9b44ddc0b292', 'PTW003', 'Turbin Unit 2', NULL, 'Inspection Condensate Extraction Pumu Unit 2', '20 Hari', 'PT. PJBS Project', 'No', 'Offline', 'Access Certificate', 'Mohamad Chairudin Yusuf', 'Supervisor K3', 'Arnold Sarira', 'Evri Angga Yurida', '2024-02-26', '12:00', 'Arnold Sarira', 'Evri Angga Yurida', 'Erwin Harwanto', '2024-02-27', '12:00', '2024-02-25 22:43:13', '2024-03-04 00:06:24'),
('9b73ca89-b5be-457c-94a0-7646590bb638', 'PTW001', 'Crusher', '12345', 'Perbaikan Drum Shieve B', '3 Jam', 'Mekanik', 'No', 'Offline', 'PTW Certificate', 'Mohamad Chairuddin Yunus', 'Supervisor K3', 'Arnold', 'Evri Angga', '2024-02-29', '00:00', 'Arnold', 'Evri Angga', 'Tony', '2024-02-29', '12:00', '2024-02-29 07:16:55', '2024-02-29 07:19:00');

-- --------------------------------------------------------

--
-- Table structure for table `ptw_descriptions`
--

CREATE TABLE `ptw_descriptions` (
  `uuid` char(36) NOT NULL,
  `name` text NOT NULL,
  `isolation_by` varchar(255) NOT NULL,
  `isolation_signature_date` varchar(255) NOT NULL,
  `area` varchar(255) DEFAULT NULL,
  `restoration_by` varchar(255) DEFAULT NULL,
  `restoration_signature_date` varchar(255) DEFAULT NULL,
  `pmt_by` varchar(255) DEFAULT NULL,
  `pmt_signature_date` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ptw_descriptions`
--

INSERT INTO `ptw_descriptions` (`uuid`, `name`, `isolation_by`, `isolation_signature_date`, `area`, `restoration_by`, `restoration_signature_date`, `pmt_by`, `pmt_signature_date`, `created_at`, `updated_at`) VALUES
('9b68d0f1-325b-4c1d-b2a6-7033b5c77bc9', 'Breaker Motor ID Fan A & B Unit2', 'Salim Lamusa', '2024-02-01', NULL, NULL, NULL, NULL, NULL, '2024-02-23 20:20:43', '2024-02-24 21:02:41'),
('9b6ac746-c202-41fa-91fb-802b4060a9d9', 'Breaker Motor PA Fan A & B Unit 2', 'Salim Lamusa', '2023-02-02', NULL, NULL, NULL, NULL, NULL, '2024-02-24 19:45:21', '2024-02-24 19:45:21'),
('9b6ac7e9-dcac-4ef5-858c-ad507385fb8f', 'Breaker Motor Return Fan A & B Unit 2', 'Salim Lamusa', '2023-02-02', NULL, NULL, NULL, NULL, NULL, '2024-02-24 19:47:08', '2024-02-24 19:47:08'),
('9b6ac81e-87ed-42b7-a1cb-dffcc2a6892d', 'Breaker Motor SA Fan A & B Unit 2', 'Salim Lamusa', '2023-02-02', NULL, NULL, NULL, NULL, NULL, '2024-02-24 19:47:42', '2024-02-24 19:47:42');

-- --------------------------------------------------------

--
-- Table structure for table `ptw_description_ptw_isolation_method`
--

CREATE TABLE `ptw_description_ptw_isolation_method` (
  `uuid` char(36) NOT NULL,
  `ptw_description_uuid` char(36) DEFAULT NULL,
  `ptw_isolation_method_uuid` char(36) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ptw_description_ptw_isolation_method`
--

INSERT INTO `ptw_description_ptw_isolation_method` (`uuid`, `ptw_description_uuid`, `ptw_isolation_method_uuid`, `created_at`, `updated_at`) VALUES
('9b68d0f1-6390-40db-9bbd-009285fba850', '9b68d0f1-325b-4c1d-b2a6-7033b5c77bc9', '9b68be85-f972-4b71-8853-01f38e0c77db', '2024-02-23 20:20:43', '2024-02-23 20:20:43'),
('9b68ee18-07ac-4957-adb4-cccbfaf8ce7f', '9b68d0f1-325b-4c1d-b2a6-7033b5c77bc9', '9b68be94-023d-4531-a206-7d0c11c6f8a7', '2024-02-23 21:42:14', '2024-02-23 21:42:14'),
('9b68f1d9-b996-4bba-9dcb-74135675350b', '9b68d0f1-325b-4c1d-b2a6-7033b5c77bc9', '9b68bea3-d040-4c98-9114-a907998773dc', '2024-02-23 21:52:44', '2024-02-23 21:52:44'),
('9b6ac746-db29-41a5-bad4-f4b03ffb6aeb', '9b6ac746-c202-41fa-91fb-802b4060a9d9', '9b68be85-f972-4b71-8853-01f38e0c77db', '2024-02-24 19:45:21', '2024-02-24 19:45:21'),
('9b6ac747-0261-48e3-82af-92c69be55655', '9b6ac746-c202-41fa-91fb-802b4060a9d9', '9b68be94-023d-4531-a206-7d0c11c6f8a7', '2024-02-24 19:45:21', '2024-02-24 19:45:21'),
('9b6ac747-4097-420d-a113-b40b153735e0', '9b6ac746-c202-41fa-91fb-802b4060a9d9', '9b68bea3-d040-4c98-9114-a907998773dc', '2024-02-24 19:45:21', '2024-02-24 19:45:21'),
('9b6ac7ea-352a-472d-a76b-654e527b0fe6', '9b6ac7e9-dcac-4ef5-858c-ad507385fb8f', '9b68be85-f972-4b71-8853-01f38e0c77db', '2024-02-24 19:47:08', '2024-02-24 19:47:08'),
('9b6ac7ea-56e7-4662-8e69-9b4810d15e97', '9b6ac7e9-dcac-4ef5-858c-ad507385fb8f', '9b68be94-023d-4531-a206-7d0c11c6f8a7', '2024-02-24 19:47:08', '2024-02-24 19:47:08'),
('9b6ac7ea-8dbc-4146-8e55-65039c1aaf4e', '9b6ac7e9-dcac-4ef5-858c-ad507385fb8f', '9b68bea3-d040-4c98-9114-a907998773dc', '2024-02-24 19:47:08', '2024-02-24 19:47:08'),
('9b6ac81e-9e81-44cb-9e23-34a17c10bc8f', '9b6ac81e-87ed-42b7-a1cb-dffcc2a6892d', '9b68be85-f972-4b71-8853-01f38e0c77db', '2024-02-24 19:47:42', '2024-02-24 19:47:42'),
('9b6ac81e-befa-41d3-86f8-95db1abbee30', '9b6ac81e-87ed-42b7-a1cb-dffcc2a6892d', '9b68be94-023d-4531-a206-7d0c11c6f8a7', '2024-02-24 19:47:42', '2024-02-24 19:47:42'),
('9b6ac81e-f17e-41e4-b725-5a360fdd1eba', '9b6ac81e-87ed-42b7-a1cb-dffcc2a6892d', '9b68bea3-d040-4c98-9114-a907998773dc', '2024-02-24 19:47:43', '2024-02-24 19:47:43');

-- --------------------------------------------------------

--
-- Table structure for table `ptw_isolation_methods`
--

CREATE TABLE `ptw_isolation_methods` (
  `uuid` char(36) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ptw_isolation_methods`
--

INSERT INTO `ptw_isolation_methods` (`uuid`, `name`, `created_at`, `updated_at`) VALUES
('9b68be85-f972-4b71-8853-01f38e0c77db', 'Switch Off', '2024-02-23 19:29:13', '2024-02-23 19:29:13'),
('9b68be94-023d-4531-a206-7d0c11c6f8a7', 'Rack Out', '2024-02-23 19:29:22', '2024-02-23 19:29:22'),
('9b68bea3-d040-4c98-9114-a907998773dc', 'Lock & Tagging', '2024-02-23 19:29:33', '2024-02-23 19:29:33');

-- --------------------------------------------------------

--
-- Table structure for table `ptw_jsa_safety_permit`
--

CREATE TABLE `ptw_jsa_safety_permit` (
  `uuid` char(36) NOT NULL,
  `ptw_uuid` char(36) DEFAULT NULL,
  `jsa_safety_permit_uuid` char(36) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ptw_jsa_safety_permit`
--

INSERT INTO `ptw_jsa_safety_permit` (`uuid`, `ptw_uuid`, `jsa_safety_permit_uuid`, `created_at`, `updated_at`) VALUES
('9b6d09de-c188-4f29-8692-4c3875bbccb6', '9b6d09de-4d8d-4e52-b6d8-9b44ddc0b292', '1e0a25a4-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-02-25 22:43:13', '2024-02-25 22:43:13'),
('9b6d09de-f40d-4129-93c8-17b8119ad510', '9b6d09de-4d8d-4e52-b6d8-9b44ddc0b292', '1e0a5da1-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-02-25 22:43:13', '2024-02-25 22:43:13'),
('9b6d09df-1347-497a-ab66-b85ccc23533f', '9b6d09de-4d8d-4e52-b6d8-9b44ddc0b292', '1e0a785e-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-02-25 22:43:13', '2024-02-25 22:43:13'),
('9b73ca8a-804f-4af0-9cc5-bb7b76910fe6', '9b73ca89-b5be-457c-94a0-7646590bb638', '1e0a03f8-cb7d-11ee-841d-9c5c8e3fd3aa', '2024-02-29 07:16:56', '2024-02-29 07:16:56');

-- --------------------------------------------------------

--
-- Table structure for table `ptw_notes`
--

CREATE TABLE `ptw_notes` (
  `uuid` char(36) NOT NULL,
  `name` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ptw_notes`
--

INSERT INTO `ptw_notes` (`uuid`, `name`, `created_at`, `updated_at`) VALUES
('9b6ac41a-a04e-4483-81a1-0a346f0bf610', 'Catatan Tambahan 1', '2024-02-24 19:36:29', '2024-02-24 19:36:29'),
('9b6ac423-2e57-422d-8051-0ac02a861c0c', 'Catatan Tambahan 2', '2024-02-24 19:36:34', '2024-02-24 19:36:34'),
('9b6ac42b-790f-4373-9893-e211626b8151', 'Catatan Tambahan 3', '2024-02-24 19:36:40', '2024-02-24 19:36:40');

-- --------------------------------------------------------

--
-- Table structure for table `ptw_ptw_description`
--

CREATE TABLE `ptw_ptw_description` (
  `uuid` char(36) NOT NULL,
  `ptw_uuid` char(36) DEFAULT NULL,
  `ptw_description_uuid` char(36) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ptw_ptw_description`
--

INSERT INTO `ptw_ptw_description` (`uuid`, `ptw_uuid`, `ptw_description_uuid`, `created_at`, `updated_at`) VALUES
('9b73ca89-d001-4d6f-942a-ad753e9fe6f9', '9b73ca89-b5be-457c-94a0-7646590bb638', '9b68d0f1-325b-4c1d-b2a6-7033b5c77bc9', '2024-02-29 07:16:55', '2024-02-29 07:16:55'),
('9b73ca89-ec83-4749-9efb-3bcf5667f2da', '9b73ca89-b5be-457c-94a0-7646590bb638', '9b6ac746-c202-41fa-91fb-802b4060a9d9', '2024-02-29 07:16:55', '2024-02-29 07:16:55'),
('9b73ca8a-0b84-4a2c-86b9-0cd0f0f747d5', '9b73ca89-b5be-457c-94a0-7646590bb638', '9b6ac7e9-dcac-4ef5-858c-ad507385fb8f', '2024-02-29 07:16:55', '2024-02-29 07:16:55'),
('9b73ca8a-53c8-407a-b83b-c8e31ec4928f', '9b73ca89-b5be-457c-94a0-7646590bb638', '9b6ac81e-87ed-42b7-a1cb-dffcc2a6892d', '2024-02-29 07:16:56', '2024-02-29 07:16:56'),
('9b73cb47-b8bd-4a10-8ea3-271019ec3431', '9b73ca89-b5be-457c-94a0-7646590bb638', '9b68d0f1-325b-4c1d-b2a6-7033b5c77bc9', '2024-02-29 07:19:00', '2024-02-29 07:19:00'),
('9b73cb47-d221-4c9f-8f25-baf61cfbde8a', '9b73ca89-b5be-457c-94a0-7646590bb638', '9b6ac746-c202-41fa-91fb-802b4060a9d9', '2024-02-29 07:19:00', '2024-02-29 07:19:00'),
('9b73cb47-f68d-4d8a-b3e7-72fea40be0d6', '9b73ca89-b5be-457c-94a0-7646590bb638', '9b6ac7e9-dcac-4ef5-858c-ad507385fb8f', '2024-02-29 07:19:00', '2024-02-29 07:19:00'),
('9b73cb48-3610-4c92-87bc-823969c4f13a', '9b73ca89-b5be-457c-94a0-7646590bb638', '9b6ac81e-87ed-42b7-a1cb-dffcc2a6892d', '2024-02-29 07:19:00', '2024-02-29 07:19:00');

-- --------------------------------------------------------

--
-- Table structure for table `ptw_ptw_note`
--

CREATE TABLE `ptw_ptw_note` (
  `uuid` char(36) NOT NULL,
  `ptw_uuid` char(36) DEFAULT NULL,
  `ptw_note_uuid` char(36) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `forms_approve_start_job_field_uuid_foreign` (`approve_start_job_field`),
  ADD KEY `forms_clearance_job_field_uuid_foreign` (`clearance_job_field`),
  ADD KEY `person_group_uuid` (`jsa_person_group_uuid`),
  ADD KEY `jsa_uuid` (`jsa_uuid`),
  ADD KEY `forms_jsa_safety_permit_uuid_foreign` (`jsa_safety_permit_uuid`);

--
-- Indexes for table `form_additional_notes`
--
ALTER TABLE `form_additional_notes`
  ADD PRIMARY KEY (`uuid`);

--
-- Indexes for table `form_descriptions`
--
ALTER TABLE `form_descriptions`
  ADD PRIMARY KEY (`uuid`);

--
-- Indexes for table `form_description_jsa_safety_permit`
--
ALTER TABLE `form_description_jsa_safety_permit`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `form_description_uuid` (`form_description_uuid`,`jsa_safety_permit_uuid`),
  ADD KEY `jsa_safety_permit_uuid` (`jsa_safety_permit_uuid`);

--
-- Indexes for table `form_form_additional_note`
--
ALTER TABLE `form_form_additional_note`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `form_description_uuid` (`form_uuid`),
  ADD KEY `form_additional_note_uuid` (`form_additional_note_uuid`),
  ADD KEY `form_description_uuid_2` (`form_uuid`,`form_additional_note_uuid`);

--
-- Indexes for table `form_form_description`
--
ALTER TABLE `form_form_description`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `form_form_description_form_uuid_foreign` (`form_uuid`),
  ADD KEY `form_form_description_form_description_uuid_foreign` (`form_description_uuid`);

--
-- Indexes for table `form_form_protective_equipment`
--
ALTER TABLE `form_form_protective_equipment`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `form_form_protective_equipment_form_uuid_foreign` (`form_uuid`),
  ADD KEY `fk_form_protective_equipment` (`form_protective_equipment_uuid`);

--
-- Indexes for table `form_jsa_worker`
--
ALTER TABLE `form_jsa_worker`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `form_form_worker_form_uuid_foreign` (`form_uuid`),
  ADD KEY `jsa_worker_uuid` (`jsa_worker_uuid`);

--
-- Indexes for table `form_protective_equipments`
--
ALTER TABLE `form_protective_equipments`
  ADD PRIMARY KEY (`uuid`);

--
-- Indexes for table `jsas`
--
ALTER TABLE `jsas`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `jsas_person_group_uuid_foreign` (`person_group_uuid`);

--
-- Indexes for table `jsa_danger_controls`
--
ALTER TABLE `jsa_danger_controls`
  ADD PRIMARY KEY (`uuid`);

--
-- Indexes for table `jsa_impacts`
--
ALTER TABLE `jsa_impacts`
  ADD PRIMARY KEY (`uuid`);

--
-- Indexes for table `jsa_impact_jsa_danger_control`
--
ALTER TABLE `jsa_impact_jsa_danger_control`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `fk_jsa_impact_1` (`jsa_impact_uuid`),
  ADD KEY `fk_jsa_danger_control` (`jsa_danger_control_uuid`);

--
-- Indexes for table `jsa_jsa_safety_permit`
--
ALTER TABLE `jsa_jsa_safety_permit`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `jsa_jsa_safety_permit_jsa_uuid_foreign` (`jsa_uuid`),
  ADD KEY `jsa_jsa_safety_permit_jsa_safety_permit_uuid_foreign` (`jsa_safety_permit_uuid`);

--
-- Indexes for table `jsa_jsa_worker`
--
ALTER TABLE `jsa_jsa_worker`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `jsa_jsa_worker_jsa_uuid_foreign` (`jsa_uuid`),
  ADD KEY `jsa_jsa_worker_jsa_worker_uuid_foreign` (`jsa_worker_uuid`);

--
-- Indexes for table `jsa_jsa_work_stage`
--
ALTER TABLE `jsa_jsa_work_stage`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `jsa_jsa_work_stage_jsa_uuid_foreign` (`jsa_uuid`),
  ADD KEY `fk_jsa_work_stage` (`jsa_work_stage_uuid`);

--
-- Indexes for table `jsa_jsa_work_tool`
--
ALTER TABLE `jsa_jsa_work_tool`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `jsa_jsa_work_tool_jsa_uuid_foreign` (`jsa_uuid`),
  ADD KEY `fk_jsa_work_tool` (`jsa_work_tool_uuid`);

--
-- Indexes for table `jsa_k3l_appeal_of_regulations`
--
ALTER TABLE `jsa_k3l_appeal_of_regulations`
  ADD PRIMARY KEY (`uuid`);

--
-- Indexes for table `jsa_person_groups`
--
ALTER TABLE `jsa_person_groups`
  ADD PRIMARY KEY (`uuid`);

--
-- Indexes for table `jsa_pics`
--
ALTER TABLE `jsa_pics`
  ADD PRIMARY KEY (`uuid`);

--
-- Indexes for table `jsa_potential_hazards`
--
ALTER TABLE `jsa_potential_hazards`
  ADD PRIMARY KEY (`uuid`);

--
-- Indexes for table `jsa_potential_hazard_jsa_impact`
--
ALTER TABLE `jsa_potential_hazard_jsa_impact`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `fk_jsa_potential_hazard_1` (`jsa_potential_hazard_uuid`),
  ADD KEY `fk_jsa_impact` (`jsa_impact_uuid`);

--
-- Indexes for table `jsa_safety_permits`
--
ALTER TABLE `jsa_safety_permits`
  ADD PRIMARY KEY (`uuid`);

--
-- Indexes for table `jsa_skills_or_positions`
--
ALTER TABLE `jsa_skills_or_positions`
  ADD PRIMARY KEY (`uuid`);

--
-- Indexes for table `jsa_workers`
--
ALTER TABLE `jsa_workers`
  ADD PRIMARY KEY (`uuid`);

--
-- Indexes for table `jsa_worker_jsa_skill_or_position`
--
ALTER TABLE `jsa_worker_jsa_skill_or_position`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `jsa_worker_jsa_skill_or_position_jsa_worker_uuid_foreign` (`jsa_worker_uuid`),
  ADD KEY `fk_jsa_worker_skill_position` (`jsa_skill_or_position_uuid`);

--
-- Indexes for table `jsa_work_stages`
--
ALTER TABLE `jsa_work_stages`
  ADD PRIMARY KEY (`uuid`);

--
-- Indexes for table `jsa_work_stage_jsa_pic`
--
ALTER TABLE `jsa_work_stage_jsa_pic`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `jsa_work_stage_jsa_pic_jsa_work_stage_uuid_foreign` (`jsa_work_stage_uuid`),
  ADD KEY `jsa_work_stage_jsa_pic_jsa_pic_uuid_foreign` (`jsa_pic_uuid`);

--
-- Indexes for table `jsa_work_stage_jsa_potential_hazard`
--
ALTER TABLE `jsa_work_stage_jsa_potential_hazard`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `fk_jsa_work_stage_1` (`jsa_work_stage_uuid`),
  ADD KEY `fk_jsa_potential_hazard` (`jsa_potential_hazard_uuid`);

--
-- Indexes for table `jsa_work_tools`
--
ALTER TABLE `jsa_work_tools`
  ADD PRIMARY KEY (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ptws`
--
ALTER TABLE `ptws`
  ADD PRIMARY KEY (`uuid`);

--
-- Indexes for table `ptw_descriptions`
--
ALTER TABLE `ptw_descriptions`
  ADD PRIMARY KEY (`uuid`);

--
-- Indexes for table `ptw_description_ptw_isolation_method`
--
ALTER TABLE `ptw_description_ptw_isolation_method`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `fk_ptw_description` (`ptw_description_uuid`),
  ADD KEY `fk_ptw_isolation_method` (`ptw_isolation_method_uuid`);

--
-- Indexes for table `ptw_isolation_methods`
--
ALTER TABLE `ptw_isolation_methods`
  ADD PRIMARY KEY (`uuid`);

--
-- Indexes for table `ptw_jsa_safety_permit`
--
ALTER TABLE `ptw_jsa_safety_permit`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `ptw_jsa_safety_permit_ptw_uuid_foreign` (`ptw_uuid`),
  ADD KEY `fk_jsa_safety_permit` (`jsa_safety_permit_uuid`);

--
-- Indexes for table `ptw_notes`
--
ALTER TABLE `ptw_notes`
  ADD PRIMARY KEY (`uuid`);

--
-- Indexes for table `ptw_ptw_description`
--
ALTER TABLE `ptw_ptw_description`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `ptw_ptw_description_ptw_uuid_foreign` (`ptw_uuid`),
  ADD KEY `ptw_ptw_description_ptw_description_uuid_foreign` (`ptw_description_uuid`);

--
-- Indexes for table `ptw_ptw_note`
--
ALTER TABLE `ptw_ptw_note`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `ptw_ptw_note_ptw_uuid_foreign` (`ptw_uuid`),
  ADD KEY `ptw_ptw_note_ptw_note_uuid_foreign` (`ptw_note_uuid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `forms`
--
ALTER TABLE `forms`
  ADD CONSTRAINT `forms_ibfk_1` FOREIGN KEY (`jsa_uuid`) REFERENCES `jsas` (`uuid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `forms_jsa_safety_permit_uuid_foreign` FOREIGN KEY (`jsa_safety_permit_uuid`) REFERENCES `jsa_safety_permits` (`uuid`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `forms_propmted_by_uuid_foreign` FOREIGN KEY (`jsa_person_group_uuid`) REFERENCES `jsa_person_groups` (`uuid`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `form_description_jsa_safety_permit`
--
ALTER TABLE `form_description_jsa_safety_permit`
  ADD CONSTRAINT `form_description_jsa_safety_permit_ibfk_1` FOREIGN KEY (`form_description_uuid`) REFERENCES `form_descriptions` (`uuid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `form_description_jsa_safety_permit_ibfk_2` FOREIGN KEY (`jsa_safety_permit_uuid`) REFERENCES `jsa_safety_permits` (`uuid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `form_form_additional_note`
--
ALTER TABLE `form_form_additional_note`
  ADD CONSTRAINT `form_form_additional_note_ibfk_1` FOREIGN KEY (`form_uuid`) REFERENCES `forms` (`uuid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `form_form_additional_note_ibfk_2` FOREIGN KEY (`form_additional_note_uuid`) REFERENCES `form_additional_notes` (`uuid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `form_form_description`
--
ALTER TABLE `form_form_description`
  ADD CONSTRAINT `form_form_description_form_description_uuid_foreign` FOREIGN KEY (`form_description_uuid`) REFERENCES `form_descriptions` (`uuid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `form_form_description_form_uuid_foreign` FOREIGN KEY (`form_uuid`) REFERENCES `forms` (`uuid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `form_form_protective_equipment`
--
ALTER TABLE `form_form_protective_equipment`
  ADD CONSTRAINT `fk_form_protective_equipment` FOREIGN KEY (`form_protective_equipment_uuid`) REFERENCES `form_protective_equipments` (`uuid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `form_form_protective_equipment_form_uuid_foreign` FOREIGN KEY (`form_uuid`) REFERENCES `forms` (`uuid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `form_jsa_worker`
--
ALTER TABLE `form_jsa_worker`
  ADD CONSTRAINT `form_form_worker_form_uuid_foreign` FOREIGN KEY (`form_uuid`) REFERENCES `forms` (`uuid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `form_jsa_worker_ibfk_1` FOREIGN KEY (`jsa_worker_uuid`) REFERENCES `jsa_workers` (`uuid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jsas`
--
ALTER TABLE `jsas`
  ADD CONSTRAINT `jsas_person_group_uuid_foreign` FOREIGN KEY (`person_group_uuid`) REFERENCES `jsa_person_groups` (`uuid`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `jsa_impact_jsa_danger_control`
--
ALTER TABLE `jsa_impact_jsa_danger_control`
  ADD CONSTRAINT `fk_jsa_danger_control` FOREIGN KEY (`jsa_danger_control_uuid`) REFERENCES `jsa_danger_controls` (`uuid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_jsa_impact_1` FOREIGN KEY (`jsa_impact_uuid`) REFERENCES `jsa_impacts` (`uuid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jsa_jsa_safety_permit`
--
ALTER TABLE `jsa_jsa_safety_permit`
  ADD CONSTRAINT `jsa_jsa_safety_permit_jsa_safety_permit_uuid_foreign` FOREIGN KEY (`jsa_safety_permit_uuid`) REFERENCES `jsa_safety_permits` (`uuid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jsa_jsa_safety_permit_jsa_uuid_foreign` FOREIGN KEY (`jsa_uuid`) REFERENCES `jsas` (`uuid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jsa_jsa_worker`
--
ALTER TABLE `jsa_jsa_worker`
  ADD CONSTRAINT `jsa_jsa_worker_jsa_uuid_foreign` FOREIGN KEY (`jsa_uuid`) REFERENCES `jsas` (`uuid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jsa_jsa_worker_jsa_worker_uuid_foreign` FOREIGN KEY (`jsa_worker_uuid`) REFERENCES `jsa_workers` (`uuid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jsa_jsa_work_stage`
--
ALTER TABLE `jsa_jsa_work_stage`
  ADD CONSTRAINT `fk_jsa_work_stage` FOREIGN KEY (`jsa_work_stage_uuid`) REFERENCES `jsa_work_stages` (`uuid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jsa_jsa_work_stage_jsa_uuid_foreign` FOREIGN KEY (`jsa_uuid`) REFERENCES `jsas` (`uuid`) ON DELETE CASCADE;

--
-- Constraints for table `jsa_jsa_work_tool`
--
ALTER TABLE `jsa_jsa_work_tool`
  ADD CONSTRAINT `fk_jsa_work_tool` FOREIGN KEY (`jsa_work_tool_uuid`) REFERENCES `jsa_work_tools` (`uuid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jsa_jsa_work_tool_jsa_uuid_foreign` FOREIGN KEY (`jsa_uuid`) REFERENCES `jsas` (`uuid`) ON DELETE CASCADE;

--
-- Constraints for table `jsa_potential_hazard_jsa_impact`
--
ALTER TABLE `jsa_potential_hazard_jsa_impact`
  ADD CONSTRAINT `fk_jsa_impact` FOREIGN KEY (`jsa_impact_uuid`) REFERENCES `jsa_impacts` (`uuid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_jsa_potential_hazard_1` FOREIGN KEY (`jsa_potential_hazard_uuid`) REFERENCES `jsa_potential_hazards` (`uuid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jsa_worker_jsa_skill_or_position`
--
ALTER TABLE `jsa_worker_jsa_skill_or_position`
  ADD CONSTRAINT `fk_jsa_worker_skill_position` FOREIGN KEY (`jsa_skill_or_position_uuid`) REFERENCES `jsa_skills_or_positions` (`uuid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jsa_worker_jsa_skill_or_position_jsa_worker_uuid_foreign` FOREIGN KEY (`jsa_worker_uuid`) REFERENCES `jsa_workers` (`uuid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jsa_work_stage_jsa_pic`
--
ALTER TABLE `jsa_work_stage_jsa_pic`
  ADD CONSTRAINT `jsa_work_stage_jsa_pic_jsa_pic_uuid_foreign` FOREIGN KEY (`jsa_pic_uuid`) REFERENCES `jsa_pics` (`uuid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jsa_work_stage_jsa_pic_jsa_work_stage_uuid_foreign` FOREIGN KEY (`jsa_work_stage_uuid`) REFERENCES `jsa_work_stages` (`uuid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jsa_work_stage_jsa_potential_hazard`
--
ALTER TABLE `jsa_work_stage_jsa_potential_hazard`
  ADD CONSTRAINT `fk_jsa_potential_hazard` FOREIGN KEY (`jsa_potential_hazard_uuid`) REFERENCES `jsa_potential_hazards` (`uuid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_jsa_work_stage_1` FOREIGN KEY (`jsa_work_stage_uuid`) REFERENCES `jsa_work_stages` (`uuid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ptw_description_ptw_isolation_method`
--
ALTER TABLE `ptw_description_ptw_isolation_method`
  ADD CONSTRAINT `fk_ptw_description` FOREIGN KEY (`ptw_description_uuid`) REFERENCES `ptw_descriptions` (`uuid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_ptw_isolation_method` FOREIGN KEY (`ptw_isolation_method_uuid`) REFERENCES `ptw_isolation_methods` (`uuid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ptw_jsa_safety_permit`
--
ALTER TABLE `ptw_jsa_safety_permit`
  ADD CONSTRAINT `fk_jsa_safety_permit` FOREIGN KEY (`jsa_safety_permit_uuid`) REFERENCES `jsa_safety_permits` (`uuid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ptw_jsa_safety_permit_ptw_uuid_foreign` FOREIGN KEY (`ptw_uuid`) REFERENCES `ptws` (`uuid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ptw_ptw_description`
--
ALTER TABLE `ptw_ptw_description`
  ADD CONSTRAINT `ptw_ptw_description_ptw_description_uuid_foreign` FOREIGN KEY (`ptw_description_uuid`) REFERENCES `ptw_descriptions` (`uuid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ptw_ptw_description_ptw_uuid_foreign` FOREIGN KEY (`ptw_uuid`) REFERENCES `ptws` (`uuid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ptw_ptw_note`
--
ALTER TABLE `ptw_ptw_note`
  ADD CONSTRAINT `ptw_ptw_note_ptw_note_uuid_foreign` FOREIGN KEY (`ptw_note_uuid`) REFERENCES `ptw_notes` (`uuid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ptw_ptw_note_ptw_uuid_foreign` FOREIGN KEY (`ptw_uuid`) REFERENCES `ptws` (`uuid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
