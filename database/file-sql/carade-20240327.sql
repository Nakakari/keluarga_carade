/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100427 (10.4.27-MariaDB)
 Source Host           : localhost:3306
 Source Schema         : carade

 Target Server Type    : MySQL
 Target Server Version : 100427 (10.4.27-MariaDB)
 File Encoding         : 65001

 Date: 27/03/2024 13:22:55
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for answers
-- ----------------------------
DROP TABLE IF EXISTS `answers`;
CREATE TABLE `answers`  (
  `id` bigint UNSIGNED NOT NULL,
  `question_id` bigint NOT NULL,
  `user_id` int NOT NULL,
  `question_item_id` int NULL DEFAULT NULL,
  `id_anggota_keluarga` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `answer` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `nomor_kk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer_point` int NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of answers
-- ----------------------------
INSERT INTO `answers` VALUES (116864, 2, 6, NULL, '2598', '10', '012102910291029', 1, '2023-08-09 15:50:19', '2023-08-09 15:50:19', NULL);
INSERT INTO `answers` VALUES (116865, 3, 6, NULL, '2598', '10', '012102910291029', 1, '2023-08-09 15:50:19', '2023-08-09 15:50:19', NULL);
INSERT INTO `answers` VALUES (116866, 9, 6, NULL, '2598', 'tdk', '012102910291029', 1, '2023-08-09 15:50:19', '2023-08-09 15:50:19', NULL);
INSERT INTO `answers` VALUES (116867, 1, 6, 2, '2598', '>= 2500 gram', '012102910291029', 1, '2023-08-09 15:50:19', '2023-08-09 15:50:19', NULL);
INSERT INTO `answers` VALUES (116868, 4, 6, 4, '2598', 'Dokter umum', '012102910291029', 1, '2023-08-09 15:50:19', '2023-08-09 15:50:19', NULL);
INSERT INTO `answers` VALUES (116869, 5, 6, 9, '2598', 'Lahir Premature', '012102910291029', 1, '2023-08-09 15:50:19', '2023-08-09 15:50:19', NULL);
INSERT INTO `answers` VALUES (116870, 6, 6, 12, '2598', 'Tidak', '012102910291029', 1, '2023-08-09 15:50:19', '2023-08-09 15:50:19', NULL);
INSERT INTO `answers` VALUES (116871, 7, 6, 14, '2598', 'Tidak', '012102910291029', 1, '2023-08-09 15:50:19', '2023-08-09 15:50:19', NULL);
INSERT INTO `answers` VALUES (116872, 8, 6, 16, '2598', 'ASI + Susu Formula\r\n', '012102910291029', 1, '2023-08-09 15:50:19', '2023-08-09 15:50:19', NULL);
INSERT INTO `answers` VALUES (116873, 10, 6, 20, '2598', 'Tidak', '012102910291029', 1, '2023-08-09 15:50:19', '2023-08-09 15:50:19', NULL);
INSERT INTO `answers` VALUES (116874, 11, 6, 22, '2598', 'Tidak', '012102910291029', 1, '2023-08-09 15:50:19', '2023-08-09 15:50:19', NULL);
INSERT INTO `answers` VALUES (116875, 12, 6, 24, '2598', 'Tidak Lengkap: imunisasi tidak sesuai usia', '012102910291029', 1, '2023-08-09 15:50:19', '2023-08-09 15:50:19', NULL);
INSERT INTO `answers` VALUES (116876, 13, 6, 0, '2598', 'Ya', '012102910291029', 1, '2023-08-09 15:50:19', '2023-08-09 15:50:19', NULL);
INSERT INTO `answers` VALUES (116877, 14, 6, NULL, '2598', 'DPT-HB Combo / DPT-HBHiB 2,DPT-HB Combo / DPT-HBHiB 3\r\n,DPT-HB Combo / DPT-HBHiB lanjutan,Oral Polio Vaccine (OPV) 1,Inactivated Poliovirus Vaccine (IPV) 3', '012102910291029', 1, '2023-08-09 15:50:19', '2023-08-09 15:50:19', NULL);
INSERT INTO `answers` VALUES (116878, 2, 8, NULL, '2599', '10', '01210291029', 1, '2023-08-09 15:52:01', '2023-08-09 15:52:01', NULL);
INSERT INTO `answers` VALUES (116879, 3, 8, NULL, '2599', '10', '01210291029', 1, '2023-08-09 15:52:01', '2023-08-09 15:52:01', NULL);
INSERT INTO `answers` VALUES (116880, 9, 8, NULL, '2599', 'tdk', '01210291029', 1, '2023-08-09 15:52:01', '2023-08-09 15:52:01', NULL);
INSERT INTO `answers` VALUES (116881, 1, 8, 2, '2599', '>= 2500 gram', '01210291029', 1, '2023-08-09 15:52:01', '2023-08-09 15:52:01', NULL);
INSERT INTO `answers` VALUES (116882, 4, 8, 4, '2599', 'Dokter umum', '01210291029', 1, '2023-08-09 15:52:01', '2023-08-09 15:52:01', NULL);
INSERT INTO `answers` VALUES (116883, 5, 8, 9, '2599', 'Lahir Premature', '01210291029', 1, '2023-08-09 15:52:01', '2023-08-09 15:52:01', NULL);
INSERT INTO `answers` VALUES (116884, 6, 8, 12, '2599', 'Tidak', '01210291029', 1, '2023-08-09 15:52:01', '2023-08-09 15:52:01', NULL);
INSERT INTO `answers` VALUES (116885, 7, 8, 14, '2599', 'Tidak', '01210291029', 1, '2023-08-09 15:52:01', '2023-08-09 15:52:01', NULL);
INSERT INTO `answers` VALUES (116886, 8, 8, 16, '2599', 'ASI + Susu Formula\r\n', '01210291029', 1, '2023-08-09 15:52:01', '2023-08-09 15:52:01', NULL);
INSERT INTO `answers` VALUES (116887, 10, 8, 20, '2599', 'Tidak', '01210291029', 1, '2023-08-09 15:52:01', '2023-08-09 15:52:01', NULL);
INSERT INTO `answers` VALUES (116888, 11, 8, 22, '2599', 'Tidak', '01210291029', 1, '2023-08-09 15:52:01', '2023-08-09 15:52:01', NULL);
INSERT INTO `answers` VALUES (116889, 12, 8, 24, '2599', 'Tidak Lengkap: imunisasi tidak sesuai usia', '01210291029', 1, '2023-08-09 15:52:01', '2023-08-09 15:52:01', NULL);
INSERT INTO `answers` VALUES (116890, 13, 8, 0, '2599', 'Ya', '01210291029', 1, '2023-08-09 15:52:01', '2023-08-09 15:52:01', NULL);
INSERT INTO `answers` VALUES (116891, 14, 8, NULL, '2599', 'DPT-HB Combo / DPT-HBHiB 1,DPT-HB Combo / DPT-HBHiB 2,Oral Polio Vaccine (OPV) 1', '01210291029', 1, '2023-08-09 15:52:01', '2023-08-09 15:52:01', NULL);

-- ----------------------------
-- Table structure for data_anggota_keluargas
-- ----------------------------
DROP TABLE IF EXISTS `data_anggota_keluargas`;
CREATE TABLE `data_anggota_keluargas`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `nomor_kk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` enum('L','P') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_pernikahan` enum('Belum Menikah','Menikah','Cerai Mati','Cerai Hidup') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_kelahiran` date NOT NULL,
  `umur` int NOT NULL,
  `status` enum('Baduta','Anak SD','Remaja Putri','Ibu atau Ibu Hamil','Lainnya') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_pendidikan` enum('Tidak Sekolah','Belum Tamat SD','Tamat SD','Tamat SMP','Tamat SMA','Tamat Perguruan Tinggi') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2607 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of data_anggota_keluargas
-- ----------------------------
INSERT INTO `data_anggota_keluargas` VALUES (2598, '012102910291029', '', 'testing', 'L', 'Belum Menikah', '2023-12-31', 0, 'Baduta', 'Tidak Sekolah', 'ada', NULL, NULL, NULL);
INSERT INTO `data_anggota_keluargas` VALUES (2599, '01210291029', '', 'sites', 'L', 'Belum Menikah', '2023-12-31', 0, 'Baduta', 'Tidak Sekolah', 'ada', NULL, NULL, NULL);
INSERT INTO `data_anggota_keluargas` VALUES (2600, '9999999999999999999', '', 'eritiwtiui', 'P', 'Belum Menikah', '2023-08-16', 0, 'Baduta', 'Tamat SMP', 'tre', NULL, NULL, NULL);
INSERT INTO `data_anggota_keluargas` VALUES (2601, '9999999999999999999', '', 'Remaja', 'P', 'Belum Menikah', '2023-08-25', 0, 'Remaja Putri', 'Tamat Perguruan Tinggi', 'ewrew', NULL, NULL, NULL);
INSERT INTO `data_anggota_keluargas` VALUES (2602, '9999999999999999999', '', 'Ibu', 'P', 'Menikah', '2023-08-17', 0, 'Ibu atau Ibu Hamil', 'Tamat Perguruan Tinggi', 'ewr', NULL, NULL, NULL);
INSERT INTO `data_anggota_keluargas` VALUES (2603, '9999999999999999999', '', 'AYAH', 'L', 'Menikah', '2023-08-24', 0, 'Lainnya', 'Tamat Perguruan Tinggi', 'TANI', NULL, NULL, NULL);
INSERT INTO `data_anggota_keluargas` VALUES (2604, '012102910291029', '0920390293092039', 'Test', 'L', 'Belum Menikah', '2024-03-27', 0, 'Remaja Putri', 'Tidak Sekolah', '-', NULL, '2024-03-27 06:17:37', NULL);
INSERT INTO `data_anggota_keluargas` VALUES (2605, '012102910291029', '', 'Tust', 'P', 'Belum Menikah', '2022-01-04', 2, 'Remaja Putri', 'Tamat SMP', '-', NULL, '2024-03-27 06:16:44', NULL);

-- ----------------------------
-- Table structure for data_keluargas
-- ----------------------------
DROP TABLE IF EXISTS `data_keluargas`;
CREATE TABLE `data_keluargas`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_users` bigint NULL DEFAULT NULL,
  `nomor_kk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `wilayah_kerja_puskesmas` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `provinsi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kabkot` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelurahan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `rw` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `rt` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `long` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `data_keluargas_nomor_kk_unique`(`nomor_kk` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 670 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of data_keluargas
-- ----------------------------
INSERT INTO `data_keluargas` VALUES (667, 6, '012102910291029', 'Puskesmas Bulu Doang', 'Sulawesi Selatan', 'Jeneponto', 'Arungkeke', 'Arungkeke', '1', '1', '1', '1', NULL, '2023-08-09 15:49:50', '2023-08-09 15:49:50');
INSERT INTO `data_keluargas` VALUES (668, 8, '01210291029', 'Puskesmas Barana', 'Sulawesi Selatan', 'Jeneponto', 'Arungkeke', 'Arungkeke', '1', '1', '2', '2', NULL, '2023-08-09 15:51:07', '2023-08-09 15:51:07');
INSERT INTO `data_keluargas` VALUES (669, 6, '9999999999999999999', 'Puskesmas Barana', 'Sulawesi Selatan', 'Jeneponto', 'Batang', 'Kalumpang Loe', '0000', '000', '-7.5652393', '110.8068285', NULL, '2023-08-16 07:17:54', '2023-08-16 07:17:54');

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `failed_jobs_uuid_unique`(`uuid` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 24 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1);
INSERT INTO `migrations` VALUES (4, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (5, '2019_12_14_000001_create_personal_access_tokens_table', 1);
INSERT INTO `migrations` VALUES (6, '2023_05_04_002802_create_sessions_table', 1);
INSERT INTO `migrations` VALUES (7, '2023_05_04_010244_add_field_to_users_table', 2);
INSERT INTO `migrations` VALUES (8, '2023_05_04_034020_create_data_keluarga_table', 3);
INSERT INTO `migrations` VALUES (9, '2023_05_04_035241_create_data_anggota_keluarga_table', 4);
INSERT INTO `migrations` VALUES (10, '2023_05_04_054033_change_data_keluarga_table_name', 5);
INSERT INTO `migrations` VALUES (11, '2023_05_04_054341_change_data_anggota_keluarga_table_name', 6);
INSERT INTO `migrations` VALUES (12, '2023_05_06_140608_add_wilayah_kerja_puskesmas_to_data_keluargas', 7);
INSERT INTO `migrations` VALUES (13, '2023_05_08_081023_remove_column_id_keluarga_and_add_column_nomor_kk_to_table_data_anggota_keluarga', 8);
INSERT INTO `migrations` VALUES (14, '2023_05_08_204733_create_questionnaires_table', 9);
INSERT INTO `migrations` VALUES (15, '2023_05_08_210344_create_answers_table', 10);
INSERT INTO `migrations` VALUES (16, '2023_05_08_211625_change_data_type_column_status_from_questionnaires_table', 11);
INSERT INTO `migrations` VALUES (17, '2023_05_11_000844_set_defaul_null_column_question_id_and_status_in_table_answers', 12);
INSERT INTO `migrations` VALUES (19, '2023_05_11_103414_drop_table_answers', 13);
INSERT INTO `migrations` VALUES (20, '2023_05_11_111907_create_table_answers', 13);
INSERT INTO `migrations` VALUES (21, '2023_05_11_113022_change_data_type_column_answer_point_in_answers_table', 14);
INSERT INTO `migrations` VALUES (22, '2023_05_12_011824_add_column_question_id_to_answers_table', 15);
INSERT INTO `migrations` VALUES (23, '2023_05_13_055445_set_column_nomor_kk_is_unique', 16);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email` ASC) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of password_resets
-- ----------------------------
INSERT INTO `password_resets` VALUES ('ssyaripatululyah@gmail.com', '$2y$10$iFe9WCIPu1ahxknH6fO7MuU4/0ysqRNu0o9uyh/XcTtfjA.YpaUeG', '2023-05-24 00:47:42');

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `personal_access_tokens_token_unique`(`token` ASC) USING BTREE,
  INDEX `personal_access_tokens_tokenable_type_tokenable_id_index`(`tokenable_type` ASC, `tokenable_id` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 30 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------
INSERT INTO `personal_access_tokens` VALUES (1, 'App\\Models\\User', 1, 'authToken', 'ab94bfb490129825ca77a663e2e30befc44934552e1293948f05823ac4f6dac4', '[\"*\"]', NULL, '2023-05-04 07:25:49', '2023-05-04 07:25:49');
INSERT INTO `personal_access_tokens` VALUES (2, 'App\\Models\\User', 1, 'authToken', '0b7cce5a5b7f42ca20250d11b4263a87dd4dacdd72e9a2bcd317589fad625135', '[\"*\"]', NULL, '2023-05-04 07:35:53', '2023-05-04 07:35:53');
INSERT INTO `personal_access_tokens` VALUES (3, 'App\\Models\\User', 1, 'authToken', 'f25601cc553338df9c89c613a900c5a7dadd827b5c389cf57b976d3623e9ae1a', '[\"*\"]', NULL, '2023-05-04 07:42:22', '2023-05-04 07:42:22');
INSERT INTO `personal_access_tokens` VALUES (5, 'App\\Models\\User', 1, 'authToken', '0d3c3809cefcc14c3e20034f0af8f2420f53849adb9f6191679e6fdf305fdd12', '[\"*\"]', NULL, '2023-05-04 15:17:54', '2023-05-04 15:17:54');
INSERT INTO `personal_access_tokens` VALUES (6, 'App\\Models\\User', 1, 'authToken', '63f6b979b6b62b97f85a3442f7a8c787691dac866b0d0f6789b5bc73d25870e4', '[\"*\"]', NULL, '2023-05-04 22:36:52', '2023-05-04 22:36:52');
INSERT INTO `personal_access_tokens` VALUES (7, 'App\\Models\\User', 1, 'authToken', 'ebeb4a638a2d5dbdd3685c453b00858818d84a69e22573e90523a35d0c44021d', '[\"*\"]', NULL, '2023-05-04 22:36:58', '2023-05-04 22:36:58');
INSERT INTO `personal_access_tokens` VALUES (8, 'App\\Models\\User', 1, 'authToken', '4437a723c0b908439eab4ca31b2c3aeaf7b25dca6485daadea22530fcb188a00', '[\"*\"]', NULL, '2023-05-04 22:36:59', '2023-05-04 22:36:59');
INSERT INTO `personal_access_tokens` VALUES (9, 'App\\Models\\User', 1, 'authToken', '6aed506c32b5378145879e88f59ffb986ee3acaad92929192fe1270441de87a2', '[\"*\"]', NULL, '2023-05-04 22:37:00', '2023-05-04 22:37:00');
INSERT INTO `personal_access_tokens` VALUES (10, 'App\\Models\\User', 1, 'authToken', 'ac4cfafd686a0a42c7d90d2a6086140113911cc713d65177aca4f8e4b669865a', '[\"*\"]', NULL, '2023-05-04 22:37:01', '2023-05-04 22:37:01');
INSERT INTO `personal_access_tokens` VALUES (11, 'App\\Models\\User', 1, 'authToken', 'e14d0eec8268bb54b62d5e729228c48052898706036264bb231dca7d2752011b', '[\"*\"]', NULL, '2023-05-04 22:37:02', '2023-05-04 22:37:02');
INSERT INTO `personal_access_tokens` VALUES (12, 'App\\Models\\User', 1, 'authToken', 'da5e6ee4ca456b1d81c54e73a2c264aa5da95eb48f4f2bbfe7c9e9f4cc79910a', '[\"*\"]', NULL, '2023-05-04 22:37:03', '2023-05-04 22:37:03');
INSERT INTO `personal_access_tokens` VALUES (13, 'App\\Models\\User', 1, 'authToken', '4e5b2c5d50a87a13947f843cf480b2716c6ff1bdb69ef21f19b8460ee901c762', '[\"*\"]', NULL, '2023-05-04 22:37:04', '2023-05-04 22:37:04');
INSERT INTO `personal_access_tokens` VALUES (14, 'App\\Models\\User', 1, 'authToken', '59c96f822b20304065306a8fd915e7946df5eb7f10106bfaa12b4cd142de44f9', '[\"*\"]', NULL, '2023-05-04 22:37:05', '2023-05-04 22:37:05');
INSERT INTO `personal_access_tokens` VALUES (15, 'App\\Models\\User', 1, 'authToken', 'd90adc7fe4bac439ffe3d7131349a10926e4723665216e65ff902eb0754da56e', '[\"*\"]', NULL, '2023-05-04 22:37:06', '2023-05-04 22:37:06');
INSERT INTO `personal_access_tokens` VALUES (16, 'App\\Models\\User', 1, 'authToken', 'b6449424a27aac01151fb2ac7371c11c89c2587039f881ca355bc590aca6d437', '[\"*\"]', NULL, '2023-05-04 22:37:06', '2023-05-04 22:37:06');
INSERT INTO `personal_access_tokens` VALUES (17, 'App\\Models\\User', 1, 'authToken', '61ba6d3e4caf5df87feb87c48540d128e759717ffcafb08e2f9bb5be9a78ffc1', '[\"*\"]', NULL, '2023-05-04 22:37:07', '2023-05-04 22:37:07');
INSERT INTO `personal_access_tokens` VALUES (18, 'App\\Models\\User', 1, 'authToken', '514ccd2d9dcc3ae6f1b2ec26846541f46e64ee4a5d351eda4d154d4affb90716', '[\"*\"]', NULL, '2023-05-04 22:37:08', '2023-05-04 22:37:08');
INSERT INTO `personal_access_tokens` VALUES (19, 'App\\Models\\User', 1, 'authToken', '5038f91f8944696ce02927aef1e6465e3008530e005860d8fa756c4c7573d827', '[\"*\"]', NULL, '2023-05-04 22:37:08', '2023-05-04 22:37:08');
INSERT INTO `personal_access_tokens` VALUES (20, 'App\\Models\\User', 1, 'authToken', '0547dcbb3ebdc06911a60094b437d9cc7516b7071182a20fb41f0c6d956c6f57', '[\"*\"]', NULL, '2023-05-04 22:37:09', '2023-05-04 22:37:09');
INSERT INTO `personal_access_tokens` VALUES (21, 'App\\Models\\User', 1, 'authToken', '981abc9492791e47b2eeec5c8543d1ab5297e657655c29a6642564d26ca76b8e', '[\"*\"]', NULL, '2023-05-04 22:37:10', '2023-05-04 22:37:10');
INSERT INTO `personal_access_tokens` VALUES (22, 'App\\Models\\User', 1, 'authToken', 'cf22488bee12a9e34bf4b9492c6a142bb26eebb740c43c9d9c8a8dc3733632e2', '[\"*\"]', NULL, '2023-05-04 22:37:11', '2023-05-04 22:37:11');
INSERT INTO `personal_access_tokens` VALUES (23, 'App\\Models\\User', 1, 'authToken', '6a3819275b608b81a0fc89e48627c37cc105fe985ae2394f24ab725272f41dca', '[\"*\"]', NULL, '2023-05-04 22:37:11', '2023-05-04 22:37:11');
INSERT INTO `personal_access_tokens` VALUES (24, 'App\\Models\\User', 1, 'authToken', 'eeb739cffd089b74b691fb5d03901d0ac57e75f1a0ea782903db0ccc92b006b1', '[\"*\"]', NULL, '2023-05-04 22:37:12', '2023-05-04 22:37:12');
INSERT INTO `personal_access_tokens` VALUES (25, 'App\\Models\\User', 1, 'authToken', '06d11ef1f0160b211c96f972b5125e20af852ea7c4a0f519de8eacc7058d3214', '[\"*\"]', NULL, '2023-05-04 23:39:38', '2023-05-04 23:39:38');
INSERT INTO `personal_access_tokens` VALUES (26, 'App\\Models\\User', 1, 'authToken', 'c52575356ed9706bdf15140426154c48c304461d9e12b85d5948da3f6db83fee', '[\"*\"]', '2023-05-06 17:26:01', '2023-05-06 17:00:55', '2023-05-06 17:26:01');
INSERT INTO `personal_access_tokens` VALUES (27, 'App\\Models\\User', 2, 'authToken', '0ad98a563085ed601ac3253da83e9522140b85be571c95e7117675e9dd9e6ab0', '[\"*\"]', NULL, '2023-05-06 17:28:21', '2023-05-06 17:28:21');
INSERT INTO `personal_access_tokens` VALUES (28, 'App\\Models\\User', 2, 'authToken', '5050b75aeb3f87ad9a5c12329553436d3d00317edd415e851ff49b23dd0e678c', '[\"*\"]', '2023-05-07 02:10:29', '2023-05-06 17:28:46', '2023-05-07 02:10:29');
INSERT INTO `personal_access_tokens` VALUES (29, 'App\\Models\\User', 2, 'authToken', '5059b4ea9cf250726d5378e1a57d8894590abaadd21d2669ac3d61d4d06ce157', '[\"*\"]', '2023-05-06 20:39:46', '2023-05-06 20:26:16', '2023-05-06 20:39:46');

-- ----------------------------
-- Table structure for questionnaire_items
-- ----------------------------
DROP TABLE IF EXISTS `questionnaire_items`;
CREATE TABLE `questionnaire_items`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `question_id` bigint NOT NULL,
  `question_item` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_item_point` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 407 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of questionnaire_items
-- ----------------------------
INSERT INTO `questionnaire_items` VALUES (1, 1, '< 2500 gram', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (2, 1, '>= 2500 gram', '1', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (3, 4, 'Dokter kandungan', '1', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (4, 4, 'Dokter umum', '1', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (5, 4, 'Bidan', '1', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (6, 4, 'Perawat', '1', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (7, 4, 'Dukun Beranak', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (8, 5, 'Lahir Normal', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (9, 5, 'Lahir Premature', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (10, 5, 'Lahir Caecar\r\n', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (11, 6, 'Ya\r\n', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (12, 6, 'Tidak', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (13, 7, 'Ya', '1', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (14, 7, 'Tidak', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (15, 8, 'ASI', '1', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (16, 8, 'ASI + Susu Formula\r\n', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (17, 8, 'ASI Formula', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (18, 8, 'Lainnya', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (19, 10, 'Ya', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (20, 10, 'Tidak', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (21, 11, 'Ya', '1', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (22, 11, 'Tidak', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (23, 12, 'Lengkap: imunisasi sesuai Usia', '1', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (24, 12, 'Tidak Lengkap: imunisasi tidak sesuai usia', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (25, 13, 'Ya, berdasarkan catatan', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (26, 13, 'Ya, berdasarkan pengakuan', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (27, 13, 'Tidak dilakukan', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (28, 13, 'Tidak tahu', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (29, 14, 'Hepatitis B 0', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (30, 14, 'BCG', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (31, 14, 'DPT-HB Combo / DPT-HBHiB 1', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (32, 14, 'DPT-HB Combo / DPT-HBHiB 2', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (33, 14, 'DPT-HB Combo / DPT-HBHiB 3\r\n', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (34, 14, 'DPT-HB Combo / DPT-HBHiB lanjutan', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (35, 14, 'Oral Polio Vaccine (OPV) 1', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (36, 14, 'Oral Polio Vaccine (OPV) 2', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (37, 14, 'Oral Polio Vaccine (OPV) 3', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (38, 14, 'Oral Polio Vaccine (OPV) 4', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (39, 14, 'Inactivated Poliovirus Vaccine (IPV) 1', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (40, 14, 'Inactivated Poliovirus Vaccine (IPV) 2', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (41, 14, 'Inactivated Poliovirus Vaccine (IPV) 3', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (42, 14, 'Campak-Rubela (MR/MMR)', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (43, 14, 'Campak-Rubela (MR/MMR) lanjutan', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (44, 15, 'Lupa/tidak tahu jadwal imunisasi', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (45, 15, 'Tidak tahu jadwal Posyandu', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (46, 15, 'Vaksin tidak tersedia', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (47, 15, 'Tidak diijinkan pihak keluarga', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (48, 15, 'Pelayanan Posyandu tutup', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (49, 15, 'Fasilitas kesehatan jauh', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (50, 15, 'Transportasi sulit/ mahal', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (51, 15, 'Takut anak panas/demam', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (52, 15, 'Kepercayaan/agama', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (53, 15, 'Belum ada pelayanan imunisasi sesuai jadwal di Buku KIA', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (54, 15, 'Takut tertular COVID-19', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (55, 16, 'Puskemas', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (56, 16, 'Posyandu', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (57, 16, 'Klinik/Praktek Dokter/Bidan/Perawat', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (58, 16, 'Rumah sakit', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (59, 16, 'Kunjungan petugas ke rumah', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (60, 16, 'Mandiri di rumah tangga', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (61, 16, 'PAUD/TK/sederajat', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (62, 16, 'Tidak Pernah ditimbang', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (63, 17, '< 6 bulan', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (64, 17, '>= 6 bulan', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (65, 17, 'Belum MPA-SI', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (66, 18, 'Dibuat sendiri', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (67, 18, 'Instan/dibeli', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (68, 18, 'Belum MPA-SI', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (69, 19, 'Ya\r\n', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (70, 19, 'Tidak', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (71, 19, 'Belum MPA-SI', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (72, 20, 'ASI saja', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (73, 20, 'Air putih', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (74, 20, 'Susu formula bayi/baduta', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (75, 20, 'Jus atau sari buah', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (76, 20, 'Minuman/cairan lainnya (seperti air gula, kental manis, teh, air tajin, susu kedelai, dll)', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (77, 20, 'Yogurt (Yakult, Vitacarm, dll tidak dimasukkan sebagai Yogurt)', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (78, 20, 'Makanan bayi bermerek, misalnya Sun, Milna, Cerelac dll', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (79, 20, 'Nasi, roti, mie, bubur, jagung, sagu atau makanan lain yang dibuat dari padi - padian seperti beras, gandum, sorgum, dll', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (80, 20, 'Labu kuning, wortel, atau ubi jalar yang berwarna kuning atau oranye didalamnya', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (81, 20, 'Kentang, ubi kayu/ketela pohon/singkong, talas, dan makanan lain dari akar - akaran atau akar umb', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (82, 20, 'Sayuran hijau (bayam, kangkung, katuk, daun singkong, daun labu dll.)', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (83, 20, 'Buah-buahan yang kaya vitamin A yang masak, seperti mangga, pepaya, 8 nangka, cempedak, kesemek, melon kuning', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (84, 20, 'Buah atau sayuran lainnya (seperti apel, alpukat, kapri, terong, oyong dll)', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (85, 20, 'Hati, ampela, ginjal, jantung, atau jeroan lainnya', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (86, 20, 'Daging: ayam, sapi, kambing, babi atau itik', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (87, 20, 'Telur', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (88, 20, 'Makanan dari kacang - kacangan (kacang kedelai, kacang merah, kacang tolo, kacang jogo, kacang hijau, kacang babi, kacang tanah, tahu, tempe, dll.)', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (89, 20, 'Ikan atau makan seafood', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (90, 20, 'Keju atau makanan lain yang terbuat dari susu', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (91, 20, 'Makanan padat, setengah padat, makana lumat lainnya termasuk kue-kue seperti kue pisang, cucur,pancong, permen', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (92, 20, 'Belum diberikan MP-ASI', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (93, 21, 'Ya', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (94, 21, 'Tidak', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (95, 22, 'Ya', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (96, 22, 'Tidak', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (97, 23, 'Ya', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (98, 23, 'Tidak', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (99, 24, 'Ya', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (100, 24, 'Tidak', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (101, 25, 'Ya', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (102, 25, 'Tidak', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (103, 26, 'Ya', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (104, 26, 'Tidak', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (105, 27, 'Ya', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (106, 27, 'Tidak', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (107, 28, 'Ya', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (108, 28, 'Tidak', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (109, 29, 'Ya', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (110, 29, 'Tidak', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (111, 30, 'Ya', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (112, 30, 'Tidak', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (113, 15, 'Anak sering/sedang sakit', '0', '2023-05-17 03:34:50', '2023-05-17 03:37:06', NULL);
INSERT INTO `questionnaire_items` VALUES (114, 31, 'Pernah ditimbang', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (115, 31, 'Tidak pernah ditimbang', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (116, 31, 'Tidak perlu ditimbang', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (117, 32, 'Sekolah', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (118, 32, 'Rumah/Mandiri', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (119, 32, 'Tidak perlu ditimbang', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (120, 33, 'Air putih', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (121, 33, 'Jus atau sari buah', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (122, 33, 'Susu formula', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (123, 33, 'Yogurt (Yakult, Vitacarm, dll tidak dimasukkan sebagai Yogurt)', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (124, 33, 'Nasi, roti, mie, bubur, jagung, sagu atau makanan lain yang dibuat dari padi-padian seperti beras, gandum, sorgum, dll', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (125, 33, 'Labu kuning, wortel, atau ubi jalar yang berwarna kuning atau oranye didalamnya', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (126, 33, 'Kentang, ubi kayu/ketela pohon/singkong, talas, dan makanan lain dari akarakaran atau akar umbi', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (127, 33, 'Sayuran hijau (bayam, kangkung, katuk, daun singkong, daun labu dll.)', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (128, 33, 'Buah-buahan yang kaya vitamin A yang masak, seperti mangga, pepaya, nangka, cempedak, kesemek, melon kuning', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (129, 33, 'Buah atau sayuran lainnya (seperti apel, alpukat, kapri, terong, oyong dll)', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (130, 33, 'Hati, ampela, ginjal, jantung, atau jeroan lainnya', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (131, 33, 'Daging: ayam, sapi, kambing atau itik', '1', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (132, 33, 'Telur', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (133, 33, 'Makanan dari kacangkacangan (kacang kedelai, kacang merah, kacang tolo, kacang jogo, kacang hijau, kacang babi, kacang tanah, tahu, tempe, dll.)', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (134, 33, 'Ikan atau makan seafood', '1', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (135, 33, 'Keju atau makanan lain yang terbuat dari susu', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (136, 33, 'Mie instan', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (137, 34, 'Sangat sering (setiap hari)', '1', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (138, 34, 'Jarang/Kadang-kadang', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (139, 34, 'Tidak Pernah', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (140, 35, 'Alergi protein', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (141, 35, 'Tidak suka rasa', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (142, 35, 'Lainnya', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (143, 36, 'Sangat sering (setiap hari)', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (144, 36, 'Tidak suka rasa', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (145, 36, 'Tidak Pernah', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (146, 38, 'Ya', '1', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (147, 38, 'Tidak', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (148, 39, 'Saat menstruasi (sebelum/Saat/sesudah menstruasi)', '1', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (149, 39, 'Jarang/Kadang-kadang', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (150, 39, 'Tidak pernah', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (151, 41, 'Petugas Kesehatan', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (152, 41, 'Beli Sendiri', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (153, 41, 'Keluarga (ibu, kakak, adik dan keluarga lainnya)', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (154, 42, 'Ya', '1', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (155, 42, 'Tidak', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (156, 44, 'Kurangnya kadar Hb dalam darah', '1', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (157, 44, 'Darah rendah', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (158, 44, 'Kurang darah', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (159, 44, 'Tidak tahu', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (160, 45, 'Kurangnya kadar Hb dalam darah', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (161, 45, 'Menstruasi', '1', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (162, 45, 'Kurangnya konsumsi makanan yang mengandung zat besi atau Fe', '1', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (163, 45, 'Perdarahan', '1', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (164, 45, 'Kurangnya konsumsi makanan yang mengandung protein', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (165, 45, 'Terlalu banyak makanan berlemak', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (166, 45, 'Tidak tahu', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (167, 46, 'Periksa darah untuk mengetahui kadar Hb', '1', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (168, 46, 'Melihat ciri-ciri fisik (kulit dan telapak tangan pucat)', '1', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (169, 46, 'Merasa sering pusing', '1', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (170, 46, 'Mata sering berkunang-kunang', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (171, 46, 'Mengecek apakah ada bintik-bintik merah di kulit', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (172, 46, 'Sering merasa mual', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (173, 46, 'Tidak tahu', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (174, 47, 'Daging', '1', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (175, 47, 'Ikan', '1', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (176, 47, 'Hati\r\n', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (177, 47, 'Ayam', '1', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (178, 47, 'Telur', '1', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (179, 47, 'Kentang', '1', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (180, 47, 'Kacang tanah\r\n', '1', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (181, 47, 'Daun singkong\r\n', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (182, 47, 'Bayam', '1', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (183, 47, 'Tomat', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (184, 47, 'Jeruk', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (185, 47, 'Wortel', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (186, 47, 'Tidak Tau\r\n', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (187, 48, 'Pusing', '1', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (188, 48, 'Mata berkunang-kunang', '1', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (189, 48, 'Kelopak mata dan kulit menjadi pucat', '1', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (190, 48, 'Lesu', '1', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (191, 48, 'Lemah', '1', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (192, 48, 'Letih', '1', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (193, 48, 'Lelah', '1', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (194, 48, 'Berat badan turun', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (195, 48, 'Bintik-bintik merah di kulit\r\n', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (196, 48, 'Rasa pahit di mulut\r\n', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (197, 48, 'Tidak Tahu\r\n', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (198, 49, 'Tidak Berpengaruh', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (199, 49, 'Menurun', '1', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (200, 49, 'Meningkat', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (201, 49, 'Tidak tahu\r\n', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (202, 50, 'Ya', '1', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (203, 50, 'Tidak', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (204, 50, 'Tidak Tahu', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (205, 51, 'Makan sayur dan buah yang banyak mengandung vitamin C', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (206, 51, 'Menjaga diri dan lingkungan agar bebas cacingan', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (207, 51, 'Mengkonsumsi ayam, hati dan telur', '1', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (208, 51, 'Minum Tablet Tambah Darah (TTD)', '1', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (209, 51, 'Berolah raga secara teratur', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (210, 51, 'Mengurangi makanan berlemak', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (211, 51, 'Tidak Tahu', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (212, 52, 'Ya', '1', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (213, 52, 'Tidak', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (214, 52, 'Tidak Tahu', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (215, 53, 'Mengobati cacingan, malaria dan penyakit TBC', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (216, 53, 'Meningkatkan Konsumsi Makanan yang mengandung zat besi', '1', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (217, 53, 'Menambah pemasukan zat besi dengan minum tablet besi', '1', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (218, 53, 'Olahraga secara teratur', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (219, 53, 'Istirahat yang cukup', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (220, 57, 'Ya\r\n', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (221, 57, 'Tidak', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (222, 58, 'Puskesmas', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (223, 58, 'Posyandu', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (224, 58, 'Klinik/Praktek Dokter/Bidan/Perawat\r\n', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (225, 58, 'Rumah sakit\r\n', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (226, 58, 'Bidan Desa', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (227, 58, 'Tidak memeriksakan\r\n', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (228, 59, '1 Kali', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (229, 59, '> 1kal', '1', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (230, 59, 'Tidak Pernah', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (231, 60, '1 Kali', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (232, 60, '> 1kal', '1', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (233, 60, 'Tidak Pernah', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (234, 61, '1 Kali', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (235, 61, '> 1kal', '1', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (236, 61, 'Tidak Pernah', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (237, 62, 'Rutin sesuai anjuran dokter/bidan/perawat', '1', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (238, 62, 'Kadang-kadang/Jarang\r\n', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (239, 62, 'Tidak Pernah\r\n', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (240, 63, 'Ya', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (241, 63, 'Tidak', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (242, 64, '0-3 bulan', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (243, 64, '4-6 bulan', '0', '2023-05-17 04:45:00', '2023-05-17 04:46:26', NULL);
INSERT INTO `questionnaire_items` VALUES (244, 64, '7 bulan-melahirkan', '0', '2023-05-17 04:56:05', '2023-05-17 04:56:09', NULL);
INSERT INTO `questionnaire_items` VALUES (245, 65, '0-3 bulan', '0', '2023-05-17 04:56:05', '2023-05-17 04:56:09', NULL);
INSERT INTO `questionnaire_items` VALUES (246, 65, '4-6 bulan', '0', '2023-05-17 04:56:05', '2023-05-17 04:56:09', NULL);
INSERT INTO `questionnaire_items` VALUES (247, 65, '7 bulan-melahirkan', '0', '2023-05-17 04:56:05', '2023-05-17 04:56:09', NULL);
INSERT INTO `questionnaire_items` VALUES (248, 66, '0-3 bulan', '0', '2023-05-17 04:56:05', '2023-05-17 04:56:09', NULL);
INSERT INTO `questionnaire_items` VALUES (249, 66, '4-6 bulan', '0', '2023-05-17 04:56:05', '2023-05-17 04:56:09', NULL);
INSERT INTO `questionnaire_items` VALUES (250, 66, '7 bulan-melahirkan', '0', '2023-05-17 04:56:05', '2023-05-17 04:56:09', NULL);
INSERT INTO `questionnaire_items` VALUES (251, 67, '0-3 bulan', '0', '2023-05-17 04:56:05', '2023-05-17 04:56:09', NULL);
INSERT INTO `questionnaire_items` VALUES (252, 67, '4-6 bulan', '0', '2023-05-17 04:56:05', '2023-05-17 04:56:09', NULL);
INSERT INTO `questionnaire_items` VALUES (253, 67, '7 bulan-melahirkan', '0', '2023-05-17 04:56:05', '2023-05-17 04:56:09', NULL);
INSERT INTO `questionnaire_items` VALUES (254, 68, '0-3 bulan', '0', '2023-05-17 04:56:05', '2023-05-17 04:56:09', NULL);
INSERT INTO `questionnaire_items` VALUES (255, 68, '4-6 bulan', '0', '2023-05-17 04:56:05', '2023-05-17 04:56:09', NULL);
INSERT INTO `questionnaire_items` VALUES (256, 68, '7 bulan-melahirkan', '0', '2023-05-17 04:56:05', '2023-05-17 04:56:09', NULL);
INSERT INTO `questionnaire_items` VALUES (257, 69, '0-3 bulan', '0', '2023-05-17 04:56:05', '2023-05-17 04:56:09', NULL);
INSERT INTO `questionnaire_items` VALUES (258, 69, '4-6 bulan', '0', '2023-05-17 04:56:05', '2023-05-17 04:56:09', NULL);
INSERT INTO `questionnaire_items` VALUES (259, 69, '7 bulan-melahirkan', '0', '2023-05-17 04:56:05', '2023-05-17 04:56:09', NULL);
INSERT INTO `questionnaire_items` VALUES (260, 70, '0-3 bulan', '0', '2023-05-17 04:56:05', '2023-05-17 04:56:09', NULL);
INSERT INTO `questionnaire_items` VALUES (261, 70, '4-6 bulan', '0', '2023-05-17 04:56:05', '2023-05-17 04:56:09', NULL);
INSERT INTO `questionnaire_items` VALUES (262, 70, '7 bulan-melahirkan', '0', '2023-05-17 04:56:05', '2023-05-17 04:56:09', NULL);
INSERT INTO `questionnaire_items` VALUES (263, 71, '0-3 bulan', '0', '2023-05-17 04:56:05', '2023-05-17 04:56:09', NULL);
INSERT INTO `questionnaire_items` VALUES (264, 71, '4-6 bulan', '0', '2023-05-17 04:56:05', '2023-05-17 04:56:09', NULL);
INSERT INTO `questionnaire_items` VALUES (265, 71, '7 bulan-melahirkan', '0', '2023-05-17 04:56:05', '2023-05-17 04:56:09', NULL);
INSERT INTO `questionnaire_items` VALUES (266, 72, '0-3 bulan', '0', '2023-05-17 04:56:05', '2023-05-17 04:56:09', NULL);
INSERT INTO `questionnaire_items` VALUES (267, 72, '4-6 bulan', '0', '2023-05-17 09:30:10', '2023-05-17 04:56:09', NULL);
INSERT INTO `questionnaire_items` VALUES (268, 72, '7 bulan-melahirkan', '0', '2023-05-17 04:56:05', '2023-05-17 04:56:09', NULL);
INSERT INTO `questionnaire_items` VALUES (269, 73, '0-3 bulan', '0', '2023-05-17 04:56:05', '2023-05-17 04:56:09', NULL);
INSERT INTO `questionnaire_items` VALUES (270, 73, '4-6 bulan', '0', '2023-05-17 04:56:05', '2023-05-17 04:56:09', NULL);
INSERT INTO `questionnaire_items` VALUES (271, 73, '7 bulan-melahirkan', '0', '2023-05-17 04:56:05', '2023-05-17 04:56:09', NULL);
INSERT INTO `questionnaire_items` VALUES (272, 74, '0-3 bulan', '0', '2023-05-17 04:56:05', '2023-05-17 04:56:09', NULL);
INSERT INTO `questionnaire_items` VALUES (273, 74, '4-6 bulan', '0', '2023-05-17 04:56:05', '2023-05-17 04:56:09', NULL);
INSERT INTO `questionnaire_items` VALUES (274, 74, '7 bulan-melahirkan', '0', '2023-05-17 04:56:05', '2023-05-17 04:56:09', NULL);
INSERT INTO `questionnaire_items` VALUES (275, 75, '0-3 bulan', '0', '2023-05-17 04:56:05', '2023-05-17 04:56:09', NULL);
INSERT INTO `questionnaire_items` VALUES (276, 75, '4-6 bulan', '0', '2023-05-17 04:56:05', '2023-05-17 04:56:09', NULL);
INSERT INTO `questionnaire_items` VALUES (277, 75, '7 bulan-melahirkan', '0', '2023-05-17 04:56:05', '2023-05-17 04:56:09', NULL);
INSERT INTO `questionnaire_items` VALUES (278, 76, '0-3 bulan', '0', '2023-05-17 04:56:05', '2023-05-17 04:56:09', NULL);
INSERT INTO `questionnaire_items` VALUES (279, 76, '4-6 bulan', '0', '2023-05-17 04:56:05', '2023-05-17 04:56:09', NULL);
INSERT INTO `questionnaire_items` VALUES (280, 76, '7 bulan-melahirkan', '0', '2023-05-17 04:56:05', '2023-05-17 04:56:09', NULL);
INSERT INTO `questionnaire_items` VALUES (281, 77, '0-3 bulan', '0', '2023-05-17 04:56:05', '2023-05-17 04:56:09', NULL);
INSERT INTO `questionnaire_items` VALUES (282, 77, '4-6 bulan', '0', '2023-05-17 04:56:05', '2023-05-17 04:56:09', NULL);
INSERT INTO `questionnaire_items` VALUES (283, 77, '7 bulan-melahirkan', '0', '2023-05-17 04:56:05', '2023-05-17 04:56:09', NULL);
INSERT INTO `questionnaire_items` VALUES (284, 80, '0-3 bulan', '0', '2023-05-17 04:56:05', '2023-05-17 04:56:09', NULL);
INSERT INTO `questionnaire_items` VALUES (285, 80, '4-6 bulan', '0', '2023-05-17 04:56:05', '2023-05-17 04:56:09', NULL);
INSERT INTO `questionnaire_items` VALUES (286, 80, '7 bulan-melahirkan', '0', '2023-05-17 04:56:05', '2023-05-17 04:56:09', NULL);
INSERT INTO `questionnaire_items` VALUES (287, 81, '0-3 bulan', '0', '2023-05-17 04:56:05', '2023-05-17 04:56:09', NULL);
INSERT INTO `questionnaire_items` VALUES (288, 81, '4-6 bulan', '0', '2023-05-17 04:56:05', '2023-05-17 04:56:09', NULL);
INSERT INTO `questionnaire_items` VALUES (289, 81, '7 bulan-melahirkan', '0', '2023-05-17 04:56:05', '2023-05-17 04:56:09', NULL);
INSERT INTO `questionnaire_items` VALUES (290, 82, 'Gangguan tumbuh kembang yang disebabkan keturunan', '0', '2023-05-17 04:56:05', '2023-05-17 04:56:09', NULL);
INSERT INTO `questionnaire_items` VALUES (291, 82, 'Gangguan tumbuh kembang anak yang tinggi badannya tidak sesua idengan\r\numur', '1', '2023-05-17 09:30:10', '2023-05-17 09:30:10', NULL);
INSERT INTO `questionnaire_items` VALUES (292, 82, 'Gangguan tumbuh kembang yang disebabkan anak terlalu banyak makan mie\r\ninstan', '0', '2023-05-17 09:30:10', '2023-05-17 09:30:10', NULL);
INSERT INTO `questionnaire_items` VALUES (293, 82, 'Gangguan tumbuh kembang yang disebabkan oleh aktivitas fisik anak\r', '0', '2023-05-17 09:30:10', '2023-05-17 09:30:10', NULL);
INSERT INTO `questionnaire_items` VALUES (294, 83, 'Kekurangan asupan karbohidrat: nasi, ubi-ubian, mie', '0', '2023-05-17 09:30:10', '2023-05-17 09:30:10', NULL);
INSERT INTO `questionnaire_items` VALUES (295, 83, 'Kekurangan asupan lemak: daging, kacang-kacangan, selai kacang', '0', '2023-05-17 09:30:10', '2023-05-17 09:30:10', NULL);
INSERT INTO `questionnaire_items` VALUES (296, 83, 'Kekurangan gizi dan penyakit infeksi', '1', '2023-05-17 09:30:10', '2023-05-17 09:30:10', NULL);
INSERT INTO `questionnaire_items` VALUES (297, 83, 'Kekurangan serat sayuran', '0', '2023-05-17 09:30:10', '2023-05-17 09:30:10', NULL);
INSERT INTO `questionnaire_items` VALUES (298, 84, 'Penyakit bawaan sejak lahir', '0', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (299, 84, 'Penyakit menular', '0', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (300, 84, 'Penyakit tidak menular', '0', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (301, 84, 'Gangguan tumbuh kembang', '1', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (302, 85, 'Pertumbuhan melambat', '1', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (303, 85, 'Pertumbuhan gigi cepat', '0', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (304, 85, 'Anak memiliki tingkat intelektual yang baik', '0', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (305, 85, 'Anak sudah tumbuh tinggi', '0', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (306, 86, 'Gangguan mental', '0', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (307, 86, 'Gangguan psikologis', '0', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (308, 86, 'Gangguan kecerdasan dan pertumbuhan fiisk', '1', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (309, 86, 'Gangguan memori untuk mengingat', '0', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (310, 87, 'Penurunan kekebalan tubuh dan prestasi belajar', '1', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (311, 87, 'Penurunan berat badan', '0', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (312, 87, 'Penurunan tinggi badan', '0', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (313, 87, 'Penurunan kekuatan fisik', '0', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (314, 88, '0-2 bulan', '0', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (315, 88, '0-6 bulan', '0', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (316, 88, '0-8 bulan', '0', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (317, 88, '0-24 bulan/60 bulan', '1', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (318, 89, 'Memberikan makanan tambahan (PMT) pada ibu hamil dan memberikan ASI eksklusif serta MP-ASI pada anak', '1', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (319, 89, 'Memberikan ASI dan susu formula', '0', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (320, 89, 'Memberikan makanan yang berprotein tinggi (daging, ayam, ikan, telur)', '0', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (321, 89, 'Memberikan suplemen makan pada anak', '0', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (322, 90, 'Lingkungan dan sumber air harus bersih', '1', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (323, 90, 'Lingkungan tempat tinggal dekat dengan jalan raya', '0', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (324, 90, 'Lingkungan tempat tinggal dekat dengan pasar', '0', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (325, 90, 'Lingkungan tempat tinggal dekat dengan puskesmas', '0', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (326, 91, 'Menyediakan dan memastikan pemberian susu formula untuk anak', '0', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (327, 91, 'Menyediakan dan memastikan terhadap air bersih dan sanitasi', '0', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (328, 91, 'Memberikan dan memastikan anak mendapatkan imunisasi', '0', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (329, 91, 'Memberikan dan memastikan anak mendapatkan makanan berprotein', '1', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (330, 92, 'Saat di ukur BB (Berat Badan) tidak sesuai usia', '0', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (331, 92, 'Saat di ukur BB/TB (Tinggi Badan) tidak sesuai usia', '0', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (332, 92, 'Saat tinggi badan anak lebih pendek dari teman seusianya', '0', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (333, 92, 'Pemeriksaan KPSP (Kuesioner Pre Skrining Perkembangan)', '1', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (334, 93, 'Makanan yang bergizi: nasi, lauk-pauk (berprotein), sayur-sayuran', '1', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (335, 93, 'Susu formula', '0', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (336, 93, 'Suplemen makan', '0', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (337, 93, 'Terapi bermain', '0', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (338, 94, '9 bulan', '0', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (339, 94, '12 bulan', '0', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (340, 94, '1000 hari (umur 0-2 tahun)', '1', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (341, 94, '60 bulan', '0', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (342, 95, 'Tidak dapat karena kekurangan gizi lama', '0', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (343, 95, 'Tidak dapat karena sudah menjadi keturunan', '0', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (344, 95, 'Dapat kembali normal, tanpa diberi makanan yang bergizi', '0', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (345, 95, 'Dapat kembali normal bila gizi diperbaiki', '1', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (346, 96, 'Stunting', '1', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (347, 96, 'Gizi buruk', '0', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (348, 96, 'Gizi kronis', '0', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (349, 96, 'Gizi lebih', '0', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (350, 97, '< 10 meter', '0', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (351, 97, '≥ 10 meter', '1', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (352, 98, 'Air isi Ulang', '1', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (353, 98, 'Mata air terlindung', '1', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (354, 98, 'Sumur bor atau sumur pompa', '1', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (355, 98, 'Air ledeng/PDAM', '1', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (356, 98, 'Mata air tidak terlindung', '0', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (357, 98, 'Air eceran (yang dijual melalui tanki, air sumur)', '1', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (358, 98, 'Hydrant umum', '1', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (359, 98, 'Sumur gali terlindung', '1', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (360, 98, 'Terminal air', '1', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (361, 98, 'Sumur gali tidak terlindung', '0', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (362, 98, 'Air Permukaan', '1', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (363, 98, 'Penampungan air hujan (PAH)', '1', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (364, 99, 'Ya, Millik sendiri, digunakan ART Sendiri', '1', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (365, 99, 'Ya, Millik sendiri, digunakan ART Sendiri dan Ruta lain', '0', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (366, 99, 'Ya, Milik sendiri tetapi tidak digunakan', '0', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (367, 99, 'Tidak punya', '0', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (368, 100, 'Leher angsa', '0', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (369, 100, 'Cemplung tanpa tutup', '0', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (370, 100, 'Plengsengan tanpa tutup', '0', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (371, 100, 'Cemplung dengan tutup', '0', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (372, 100, 'Plengsengan dengan tutup', '0', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (373, 100, 'Lainnya', '0', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (374, 101, 'IPAL/SPAL', '0', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (375, 101, 'Lubang Tanah', '0', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (376, 101, 'Kolam/Danau/Laut', '0', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (377, 101, 'Septik Tank', '0', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (378, 101, 'Got/Selokan', '0', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (379, 101, 'Sumur resapan', '0', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (380, 101, 'Sungai', '0', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (381, 101, 'Lainnya', '0', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (382, 102, 'IPAL/SPAL', '0', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (383, 102, 'Lubang Tanah', '0', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (384, 102, 'Kolam/Danau/Laut', '0', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (385, 102, 'Septik Tank', '0', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (386, 102, 'Got/Selokan', '0', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (387, 102, 'Sumur resapan', '0', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (388, 102, 'Sungai', '0', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (389, 102, 'Lainnya', '0', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (390, 103, 'Diangkut petugas', '1', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (391, 103, 'Dibuang sendiri ke TPS', '1', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (392, 103, 'Dibuat Kompos', '1', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (393, 103, 'Ditimbun dalam tanah', '1', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (394, 103, 'Dibakar', '0', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (395, 103, 'Dibuang ke sungai/parit/danau/laut', '0', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (396, 103, 'Lainnya', '0', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (397, 104, 'Kamar Tidur', '1', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (398, 104, 'Dapur/Tempatmasak', '1', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (399, 104, 'Ruang keluarga', '1', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (400, 104, 'Ruang Tamu', '1', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (401, 104, 'Ruang campuran', '0', '2023-05-17 10:15:38', '2023-05-17 10:15:44', NULL);
INSERT INTO `questionnaire_items` VALUES (402, 105, 'Mengobati cacingan, malaria dan penyakit TBC', '0', '2023-05-21 08:43:13', '2023-05-21 08:43:16', NULL);
INSERT INTO `questionnaire_items` VALUES (403, 105, 'Meningkatkan Konsumsi Makanan yang mengandung zat besi', '1', '2023-05-21 08:43:13', '2023-05-21 08:43:16', NULL);
INSERT INTO `questionnaire_items` VALUES (404, 105, 'Menambah pemasukan zat besi dengan minum tablet besi', '1', '2023-05-21 08:43:13', '2023-05-21 08:43:16', NULL);
INSERT INTO `questionnaire_items` VALUES (405, 105, 'Olahraga secara teratur', '0', '2023-05-21 08:43:13', '2023-05-21 08:43:16', NULL);
INSERT INTO `questionnaire_items` VALUES (406, 105, 'Istirahat yang cukup', '0', '2023-05-21 08:43:13', '2023-05-21 08:43:16', NULL);

-- ----------------------------
-- Table structure for questionnaires
-- ----------------------------
DROP TABLE IF EXISTS `questionnaires`;
CREATE TABLE `questionnaires`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `question` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_category` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_subcategory` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 106 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of questionnaires
-- ----------------------------
INSERT INTO `questionnaires` VALUES (1, 'Berat badan lahir', 'radio', 'Baduta', 'kuesioner', '2023-05-17 02:13:37', '2023-05-17 02:13:42', NULL);
INSERT INTO `questionnaires` VALUES (2, 'Panjang badan saat lahir (cm)', 'text', 'Baduta', 'kuesioner', '2023-05-17 02:13:37', '2023-05-17 02:13:42', NULL);
INSERT INTO `questionnaires` VALUES (3, 'Lingkaran kepala saat lahir (cm)', 'text', 'Baduta', 'kuesioner', '2023-05-17 02:13:37', '2023-05-17 02:13:42', NULL);
INSERT INTO `questionnaires` VALUES (4, 'Penolong persalinan', 'radio', 'Baduta', 'kuesioner', '2023-05-17 02:13:37', '2023-05-17 02:13:42', NULL);
INSERT INTO `questionnaires` VALUES (5, 'Jenis Persalinan', 'radio', 'Baduta', 'kuesioner', '2023-05-17 02:13:37', '2023-05-17 02:13:42', NULL);
INSERT INTO `questionnaires` VALUES (6, 'Apakah Bayi dilakukan Inisisasi menuyusui Dini', 'radio', 'Baduta', 'kuesioner', '2023-05-17 02:13:37', '2023-05-17 02:13:42', NULL);
INSERT INTO `questionnaires` VALUES (7, 'Pemberian kolostrum pada saat lahir (ASI yang pertama keluar biasanya encer bening dan atau berwarna kekuningan)', 'radio', 'Baduta', 'kuesioner', '2023-05-17 02:13:37', '2023-05-17 02:13:42', NULL);
INSERT INTO `questionnaires` VALUES (8, 'Pemberian ASI (Khusus untuk bayi)', 'radio', 'Baduta', 'kuesioner', '2023-05-17 02:13:37', '2023-05-17 02:13:42', NULL);
INSERT INTO `questionnaires` VALUES (9, 'Alasan tidak diberikan ASI', 'text', 'Baduta', 'kuesioner', '2023-05-17 02:13:37', '2023-05-17 02:13:42', NULL);
INSERT INTO `questionnaires` VALUES (10, 'Apakah sampai sekarang masih diberikan ASI', 'radio', 'Baduta', 'kuesioner', '2023-05-17 02:13:37', '2023-05-17 02:13:42', NULL);
INSERT INTO `questionnaires` VALUES (11, 'Rutin ke Posyandu', 'radio', 'Baduta', 'kuesioner', '2023-05-17 02:13:37', '2023-05-17 02:13:42', NULL);
INSERT INTO `questionnaires` VALUES (12, 'Status Imunisasi', 'radio', 'Baduta', 'kuesioner', '2023-05-17 02:13:37', '2023-05-17 02:13:42', NULL);
INSERT INTO `questionnaires` VALUES (13, 'Pengisian berdasarkan', 'radio', 'Baduta', 'kuesioner', '2023-05-17 02:13:37', '2023-05-17 02:13:42', NULL);
INSERT INTO `questionnaires` VALUES (14, 'Jenis Imunisasi', 'checkbox', 'Baduta', 'kuesioner', '2023-05-17 02:13:37', '2023-05-17 02:13:42', NULL);
INSERT INTO `questionnaires` VALUES (15, 'Alasan Imunisasi Tidak Lengkap', 'checkbox', 'Baduta', 'kuesioner', '2023-05-17 02:13:37', '2023-05-17 02:13:42', NULL);
INSERT INTO `questionnaires` VALUES (16, 'Penimbangan berat badan', 'radio', 'Baduta', 'kuesioner', '2023-05-17 02:13:37', '2023-05-17 02:13:42', NULL);
INSERT INTO `questionnaires` VALUES (17, 'Usia Anak diberikan Makanan Pendamping ASI (MP-ASI)', 'radio', 'Baduta', 'kuesioner', '2023-05-17 02:13:37', '2023-05-17 02:13:42', NULL);
INSERT INTO `questionnaires` VALUES (18, 'Jenis MP ASI yang diberikan', 'radio', 'Baduta', 'kuesioner', '2023-05-17 02:13:37', '2023-05-17 02:13:42', NULL);
INSERT INTO `questionnaires` VALUES (19, 'Anak tetap diberikan ASI selama mendapatkan MP-ASI', 'radio', 'Baduta', 'kuesioner', '2023-05-17 02:13:37', '2023-05-17 02:13:42', NULL);
INSERT INTO `questionnaires` VALUES (20, 'Dalam 24 jam terakhir (mulai dari bangun tidur kemarin pagi hingga pagi tadi), makanan apa saja yang diberikan', 'checkbox', 'Baduta', 'kuesioner', '2023-05-17 02:13:37', '2023-05-17 02:13:42', NULL);
INSERT INTO `questionnaires` VALUES (21, 'Dalam 1 bulan terakhir, apakah pernah di diagnosis ISPA oleh tenaga kesehatan?', 'radio', 'Baduta', 'kuesioner', '2023-05-17 02:13:37', '2023-05-17 02:13:42', NULL);
INSERT INTO `questionnaires` VALUES (22, 'Dalam 1 bulan terakhir, apakah pernah mengalami gejala ISPA seperti demam, batuk < 2 minggu, pilek, dan atau sakit tenggorokan?', 'radio', 'Baduta', 'kuesioner', '2023-05-17 02:13:37', '2023-05-17 02:13:42', NULL);
INSERT INTO `questionnaires` VALUES (23, 'Dalam 1 bulan terakhir, apakah pernah di diagnosis DIARE oleh tenaga kesehatan?', 'radio', 'Baduta', 'kuesioner', '2023-05-17 02:13:37', '2023-05-17 02:13:42', NULL);
INSERT INTO `questionnaires` VALUES (24, 'Dalam 1 bulan terakhir, apakah pernah mengalami gejala DIARE seperti BAB lebih cair dan lebih 3 kali sehari dan atau BAB cair tidak bercampur darah?', 'radio', 'Baduta', 'kuesioner', '2023-05-17 02:13:37', '2023-05-17 02:13:42', NULL);
INSERT INTO `questionnaires` VALUES (25, 'Dalam 12 bulan terakhir, apakah pernah di diagnosis radang paru', 'radio', 'Baduta', 'kuesioner', '2023-05-17 02:13:37', '2023-05-17 02:13:42', NULL);
INSERT INTO `questionnaires` VALUES (26, '(PNEUMONIA) dengan atau tanpa dilakukan foto dada (foto rontgen) oleh tenaga kesehatan?', 'radio', 'Baduta', 'kuesioner', '2023-05-17 02:13:37', '2023-05-17 02:13:42', NULL);
INSERT INTO `questionnaires` VALUES (27, 'Dalam 12 bulan terakhir, apakah pernah di diagnosa CAMPAK oleh tenaga kesehatan?', 'radio', 'Baduta', 'kuesioner', '2023-05-17 02:13:37', '2023-05-17 02:13:42', NULL);
INSERT INTO `questionnaires` VALUES (28, 'Dalam 12 bulan terakhir, apakah pernah mengalami gejala CAMPAK seperti demam , batuk atau pilek, dan timbul ruam merah di seluruh tubuh?', 'radio', 'Baduta', 'kuesioner', '2023-05-17 02:13:37', '2023-05-17 02:13:42', NULL);
INSERT INTO `questionnaires` VALUES (29, 'Dalam 12 bulan terakhir, apakah [NAMA] pernah di diagnosa KECACINGAN oleh tenaga kesehatan?', 'radio', 'Baduta', 'kuesioner', '2023-05-17 02:13:37', '2023-05-17 02:13:42', NULL);
INSERT INTO `questionnaires` VALUES (30, 'Dalam 12 bulan terakhir, apakah pernah mengalami gejala KECACINGAN seperti ditemukan cacing dalam tinja atau di anus/dubur dan atau anak sering menggaruk/ mengeluhkan rasa gatal pada area anus terutama di malam hari?', 'radio', 'Baduta', 'kuesioner', '2023-05-17 02:13:37', '2023-05-17 02:13:42', NULL);
INSERT INTO `questionnaires` VALUES (31, 'Berat badan Anak', 'radio', 'Anak SD', 'kuesioner', '2023-05-17 02:29:12', '2023-05-17 02:29:20', NULL);
INSERT INTO `questionnaires` VALUES (32, 'Tempat Penimbangan', 'radio', 'Anak SD', 'kuesioner', '2023-05-17 02:29:12', '2023-05-17 02:29:20', NULL);
INSERT INTO `questionnaires` VALUES (33, 'Dalam 24 jam terakhir (mulai dari bangun tidur kemarin pagi hingga pagi tadi), makanan apa saja yang diberikan', 'checkbox', 'Anak SD', 'kuesioner', '2023-05-17 02:29:12', '2023-05-17 02:29:20', NULL);
INSERT INTO `questionnaires` VALUES (34, 'Frekuensi makan ikan', 'radio', 'Anak SD', 'kuesioner', '2023-05-17 02:29:12', '2023-05-17 02:29:20', NULL);
INSERT INTO `questionnaires` VALUES (35, 'Alasan tidak makan ikan', 'radio', 'Anak SD', 'kuesioner', '2023-05-17 02:29:12', '2023-05-17 02:29:20', NULL);
INSERT INTO `questionnaires` VALUES (36, 'Konsumsi susu', 'radio', 'Anak SD', 'kuesioner', '2023-05-17 02:29:12', '2023-05-17 02:29:20', NULL);
INSERT INTO `questionnaires` VALUES (37, 'Usia pertama kali menstruasi/ Haid', 'text', 'Remaja Putri', 'kuesioner', '2023-05-17 02:33:51', '2023-05-17 02:34:10', NULL);
INSERT INTO `questionnaires` VALUES (38, 'Apakah Pernah Mengkonsumsi Tablet Fe', 'radio', 'Remaja Putri', 'kuesioner', '2023-05-17 02:33:51', '2023-05-17 02:34:10', NULL);
INSERT INTO `questionnaires` VALUES (39, 'Seberapa sering konsumsi tablet Fe', 'radio', 'Remaja Putri', 'kuesioner', '2023-05-17 02:33:51', '2023-05-17 02:34:10', NULL);
INSERT INTO `questionnaires` VALUES (40, 'Alasan tidak mengkonsumsi Tablet Fe', 'text', 'Remaja Putri', 'kuesioner', '2023-05-17 02:33:51', '2023-05-17 02:34:10', NULL);
INSERT INTO `questionnaires` VALUES (41, 'Sumber mendapatkan Tablet Fe', 'radio', 'Remaja Putri', 'kuesioner', '2023-05-17 02:33:51', '2023-05-17 02:34:10', NULL);
INSERT INTO `questionnaires` VALUES (42, 'Apakah pernah diukur Kadar HB', 'radio', 'Remaja Putri', 'kuesioner', '2023-05-17 02:33:51', '2023-05-17 02:34:10', NULL);
INSERT INTO `questionnaires` VALUES (43, 'Ukuran lingkar lengan atas', 'text', 'Remaja Putri', 'kuesioner', '2023-05-17 02:33:51', '2023-05-17 02:34:10', NULL);
INSERT INTO `questionnaires` VALUES (44, 'Apa itu anemia', 'radio', 'Remaja Putri', 'pengetahuan', '2023-05-17 02:33:51', '2023-05-17 02:34:10', NULL);
INSERT INTO `questionnaires` VALUES (45, 'Apa saja penyebab anemia ?', 'checkbox', 'Remaja Putri', 'pengetahuan', '2023-05-17 02:33:51', '2023-05-17 02:34:10', NULL);
INSERT INTO `questionnaires` VALUES (46, 'Bagaimana cara mengetahui anemia', 'checkbox', 'Remaja Putri', 'pengetahuan', '2023-05-17 02:33:51', '2023-05-17 02:34:10', NULL);
INSERT INTO `questionnaires` VALUES (47, 'Sumber zat besi yang berasal dari makanan', 'checkbox', 'Remaja Putri', 'pengetahuan', '2023-05-17 02:33:51', '2023-05-17 02:34:10', NULL);
INSERT INTO `questionnaires` VALUES (48, 'Gejala apa saja yang ditimbulkan oleh anemia', 'checkbox', 'Remaja Putri', 'pengetahuan', '2023-05-17 02:33:51', '2023-05-17 02:34:10', NULL);
INSERT INTO `questionnaires` VALUES (49, 'Dampak anemia terhadap prestasi belajar', 'radio', 'Remaja Putri', 'pengetahuan', '2023-05-17 02:33:51', '2023-05-17 02:34:10', NULL);
INSERT INTO `questionnaires` VALUES (50, 'Apakah anemia dapat dicegah', 'radio', 'Remaja Putri', 'pengetahuan', '2023-05-17 02:33:51', '2023-05-17 02:34:10', NULL);
INSERT INTO `questionnaires` VALUES (51, 'Bagaimana caranya untuk mencegah anemia', 'checkbox', 'Remaja Putri', 'pengetahuan', '2023-05-17 02:33:51', '2023-05-17 02:34:10', NULL);
INSERT INTO `questionnaires` VALUES (52, 'Apakah anemia dapat diobati', 'radio', 'Remaja Putri', 'pengetahuan', '2023-05-17 02:33:51', '2023-05-17 02:34:10', NULL);
INSERT INTO `questionnaires` VALUES (54, 'Usia Saat Menikah', 'text', 'Ibu atau Ibu Hamil', 'kuesioner', '2023-05-17 02:37:33', '2023-05-17 02:38:07', NULL);
INSERT INTO `questionnaires` VALUES (55, 'Usia Kehamilan saat ini (Khusus Ibu Hamil)', 'text', 'Ibu atau Ibu Hamil', 'kuesioner', '2023-05-17 02:37:33', '2023-05-17 02:38:07', NULL);
INSERT INTO `questionnaires` VALUES (56, 'Usia Kehamilan pertama kali memeriksakan kehamilan', 'text', 'Ibu atau Ibu Hamil', 'kuesioner', '2023-05-17 02:37:33', '2023-05-17 02:38:07', NULL);
INSERT INTO `questionnaires` VALUES (57, 'Selama Kehamilan Melakukan Pemeriksaan (Antenatal Care)', 'radio', 'Ibu atau Ibu Hamil', 'kuesioner', '2023-05-17 02:37:33', '2023-05-17 02:38:07', NULL);
INSERT INTO `questionnaires` VALUES (58, 'Tempat pemeriksaan Kehamilan', 'radio', 'Ibu atau Ibu Hamil', 'kuesioner', '2023-05-17 02:37:33', '2023-05-17 02:38:07', NULL);
INSERT INTO `questionnaires` VALUES (59, 'Tri Semester 1 (usia Kehamilan 1-3 Bulan/ 0-12 Minggu)', 'radio', 'Ibu atau Ibu Hamil', 'kuesioner', '2023-05-17 02:37:33', '2023-05-17 02:38:07', NULL);
INSERT INTO `questionnaires` VALUES (60, 'Tri Semester 2 (usia Kehamilan 4- 6 Bulan/13-24 Minggu)', 'radio', 'Ibu atau Ibu Hamil', 'kuesioner', '2023-05-17 02:37:33', '2023-05-17 02:38:07', NULL);
INSERT INTO `questionnaires` VALUES (61, 'Tri Semester 3 (usia Kehamilan 7-10 Bulan/25-40 Minggu)', 'radio', 'Ibu atau Ibu Hamil', 'kuesioner', '2023-05-17 02:37:33', '2023-05-17 02:38:07', NULL);
INSERT INTO `questionnaires` VALUES (62, 'Apakah Ibu Rutin Konsumsi tablet Fe', 'radio', 'Ibu atau Ibu Hamil', 'kuesioner', '2023-05-17 02:37:33', '2023-05-17 02:38:07', NULL);
INSERT INTO `questionnaires` VALUES (63, 'Apakah ibu pernah mengalami infeksi kecacingan', 'radio', 'Ibu atau Ibu Hamil', 'kuesioner', '2023-05-17 02:37:33', '2023-05-17 02:38:07', NULL);
INSERT INTO `questionnaires` VALUES (64, 'Pengukuran tinggi badan pertama kali', 'radio', 'Ibu atau Ibu Hamil', 'pemeriksaan_kehamilan', '2023-05-17 02:37:33', '2023-05-17 02:38:07', NULL);
INSERT INTO `questionnaires` VALUES (65, 'Penimbangan berat badan', 'radio', 'Ibu atau Ibu Hamil', 'pemeriksaan_kehamilan', '2023-05-17 02:37:33', '2023-05-17 02:38:07', NULL);
INSERT INTO `questionnaires` VALUES (66, 'Pengukuran tekanan darah', 'radio', 'Ibu atau Ibu Hamil', 'pemeriksaan_kehamilan', '2023-05-17 02:37:33', '2023-05-17 02:38:07', NULL);
INSERT INTO `questionnaires` VALUES (67, 'Pengukuran lingkar lengan atas pertama kali', 'radio', 'Ibu atau Ibu Hamil', 'pemeriksaan_kehamilan', '2023-05-17 02:37:33', '2023-05-17 02:38:07', NULL);
INSERT INTO `questionnaires` VALUES (68, 'Pemeriksaan tinggi fundus uter', 'radio', 'Ibu atau Ibu Hamil', 'pemeriksaan_kehamilan', '2023-05-17 02:37:33', '2023-05-17 02:38:07', NULL);
INSERT INTO `questionnaires` VALUES (69, 'Pemeriksaan letak janin', 'radio', 'Ibu atau Ibu Hamil', 'pemeriksaan_kehamilan', '2023-05-17 02:37:33', '2023-05-17 02:38:07', NULL);
INSERT INTO `questionnaires` VALUES (70, 'Perhitungan denyut jantung janin', 'radio', 'Ibu atau Ibu Hamil', 'pemeriksaan_kehamilan', '2023-05-17 02:37:33', '2023-05-17 02:38:07', NULL);
INSERT INTO `questionnaires` VALUES (71, 'Skrining Imunisasi Tetanus Difteri (Td)', 'radio', 'Ibu atau Ibu Hamil', 'pemeriksaan_kehamilan', '2023-05-17 02:37:33', '2023-05-17 02:38:07', NULL);
INSERT INTO `questionnaires` VALUES (72, 'Imunisasi Tetanus Difteri (Td)', 'radio', 'Ibu atau Ibu Hamil', 'pemeriksaan_kehamilan', '2023-05-17 02:37:33', '2023-05-17 02:38:07', NULL);
INSERT INTO `questionnaires` VALUES (73, 'Pemberian Tablet Fe (Tiap semester 30 tablet)', 'radio', 'Ibu atau Ibu Hamil', 'pemeriksaan_kehamilan', '2023-05-17 02:37:33', '2023-05-17 02:38:07', NULL);
INSERT INTO `questionnaires` VALUES (74, 'Tes Golongan Darah', 'radio', 'Ibu atau Ibu Hamil', 'pemeriksaan_kehamilan', '2023-05-17 02:37:33', '2023-05-17 02:38:07', NULL);
INSERT INTO `questionnaires` VALUES (75, 'Tes protein urine', 'radio', 'Ibu atau Ibu Hamil', 'pemeriksaan_kehamilan', '2023-05-17 02:37:33', '2023-05-17 02:38:07', NULL);
INSERT INTO `questionnaires` VALUES (76, 'Tes HIV', 'radio', 'Ibu atau Ibu Hamil', 'pemeriksaan_kehamilan', '2023-05-17 02:37:33', '2023-05-17 02:38:07', NULL);
INSERT INTO `questionnaires` VALUES (77, 'Tes Hb', 'radio', 'Ibu atau Ibu Hamil', 'pemeriksaan_kehamilan', '2023-05-17 02:37:33', '2023-05-17 02:38:07', NULL);
INSERT INTO `questionnaires` VALUES (78, 'Kadar Hb', 'textmultiple', 'Ibu atau Ibu Hamil', 'pemeriksaan_kehamilan', '2023-05-17 02:37:33', '2023-05-17 02:38:07', NULL);
INSERT INTO `questionnaires` VALUES (79, 'Usia Kehamilan Saat Pemeriksaan Hb', 'textmultiple', 'Ibu atau Ibu Hamil', 'pemeriksaan_kehamilan', '2023-05-17 02:37:33', '2023-05-17 02:38:07', NULL);
INSERT INTO `questionnaires` VALUES (80, 'Konseling', 'radio', 'Ibu atau Ibu Hamil', 'pemeriksaan_kehamilan', '2023-05-17 02:37:33', '2023-05-17 02:38:07', NULL);
INSERT INTO `questionnaires` VALUES (81, 'Tata laksana kasus (Tindakan)', 'radio', 'Ibu atau Ibu Hamil', 'pemeriksaan_kehamilan', '2023-05-17 02:37:33', '2023-05-17 02:38:07', NULL);
INSERT INTO `questionnaires` VALUES (82, 'Apa yang dimaksud dengan stunting ?', 'radio', 'Ibu atau Ibu Hamil', 'pengetahuan', '2023-05-17 02:37:33', '2023-05-17 02:38:07', NULL);
INSERT INTO `questionnaires` VALUES (83, 'Stunting anak disebabkan oleh', 'radio', 'Ibu atau Ibu Hamil', 'pengetahuan', '2023-05-17 02:37:33', '2023-05-17 02:38:07', NULL);
INSERT INTO `questionnaires` VALUES (84, 'Stunting pada anak merupakan', 'radio', 'Ibu atau Ibu Hamil', 'pengetahuan', '2023-05-17 02:37:33', '2023-05-17 02:38:07', NULL);
INSERT INTO `questionnaires` VALUES (85, 'Berikut salah satu ciri-ciri anak stunting', 'radio', 'Ibu atau Ibu Hamil', 'pengetahuan', '2023-05-17 02:37:33', '2023-05-17 02:38:07', NULL);
INSERT INTO `questionnaires` VALUES (86, 'Salah satu dampak jangka pendek dari stunting adalah', 'radio', 'Ibu atau Ibu Hamil', 'pengetahuan', '2023-05-17 02:37:33', '2023-05-17 02:38:07', NULL);
INSERT INTO `questionnaires` VALUES (87, 'Dampak jangka panjang stun%ng salah satunya yaitu', 'radio', 'Ibu atau Ibu Hamil', 'pengetahuan', '2023-05-17 02:37:33', '2023-05-17 02:38:07', NULL);
INSERT INTO `questionnaires` VALUES (88, 'Pada usia berapa stunting pada anak dapat terlihat jelas', 'radio', 'Ibu atau Ibu Hamil', 'pengetahuan', '2023-05-17 02:37:33', '2023-05-17 02:38:07', NULL);
INSERT INTO `questionnaires` VALUES (89, 'Menurut keluarga penanganan gizi spesifik stun%ng dapat dilakukan dengan', 'radio', 'Ibu atau Ibu Hamil', 'pengetahuan', '2023-05-17 02:37:33', '2023-05-17 02:38:07', NULL);
INSERT INTO `questionnaires` VALUES (90, 'Menurut keluarga penanganan gizi sensitif stunting dapat dilakukan salah satunya dengan', 'radio', 'Ibu atau Ibu Hamil', 'pengetahuan', '2023-05-17 02:37:33', '2023-05-17 02:38:07', NULL);
INSERT INTO `questionnaires` VALUES (91, 'Berikut ini adalah salah satu kegiatan yang dapat berkontribusi untukmenurunkan kejadian stunting', 'radio', 'Ibu atau Ibu Hamil', 'pengetahuan', '2023-05-17 02:37:33', '2023-05-17 02:38:07', NULL);
INSERT INTO `questionnaires` VALUES (92, 'Bagaimana cara keluarga untuk mengetahui jika anak mengalami stunting', 'radio', 'Ibu atau Ibu Hamil', 'pengetahuan', '2023-05-17 02:37:33', '2023-05-17 02:38:07', NULL);
INSERT INTO `questionnaires` VALUES (93, 'Supaya anak tidak mengalami stunting, maka sebaiknya orang tua memberikan', 'radio', 'Ibu atau Ibu Hamil', 'pengetahuan', '2023-05-17 02:37:33', '2023-05-17 02:38:07', NULL);
INSERT INTO `questionnaires` VALUES (94, 'Penatalaksanaan pencegahan stunting sebaiknya dilaksanakan selama', 'radio', 'Ibu atau Ibu Hamil', 'pengetahuan', '2023-05-17 02:37:33', '2023-05-17 02:38:07', NULL);
INSERT INTO `questionnaires` VALUES (95, 'Apakah anak stunting dapat kembali normal?', 'radio', 'Ibu atau Ibu Hamil', 'pengetahuan', '2023-05-17 02:37:33', '2023-05-17 02:38:07', NULL);
INSERT INTO `questionnaires` VALUES (96, 'Kekurangan gizi kronis pada 1000 hari pertama kehidupan anak dapat menyebabkan', 'radio', 'Ibu atau Ibu Hamil', 'pengetahuan', '2023-05-17 02:37:33', '2023-05-17 02:38:07', NULL);
INSERT INTO `questionnaires` VALUES (97, 'Jarak dari sumber air minum ke tempat pembuangan limbah/kotoran/sampah', 'radio', 'Lingkungan', 'kuesioner', '2023-05-17 02:55:29', '2023-05-17 02:55:44', NULL);
INSERT INTO `questionnaires` VALUES (98, 'Apakah sumber air utama yang digunakan rumah tangga untuk masak/mandi/cuci pakaian/dan lainnya ?', 'checkbox', 'Lingkungan', 'kuesioner', '2023-05-17 02:55:29', '2023-05-17 02:55:44', NULL);
INSERT INTO `questionnaires` VALUES (99, 'Apakah memiliki Jamban ?', 'radio', 'Lingkungan', 'kuesioner', '2023-05-17 02:55:29', '2023-05-17 02:55:44', NULL);
INSERT INTO `questionnaires` VALUES (100, 'Apakah jenis kloset (dudukan) yang biasanya digunakan oleh anggota rumah tangga ketika buang air besar (BAB) ?', 'radio', 'Lingkungan', 'kuesioner', '2023-05-17 02:55:29', '2023-05-17 02:55:44', NULL);
INSERT INTO `questionnaires` VALUES (101, 'Ke mana tinja tersebut dialirkan/ditampung?', 'radio', 'Lingkungan', 'kuesioner', '2023-05-17 02:55:29', '2023-05-17 02:55:44', NULL);
INSERT INTO `questionnaires` VALUES (102, 'Ke mana pembuangan Limbah rumah tangga (limbah dari dapur, kamar mandi, cucian, limbah bekas industri rumahtangga ?', 'radio', 'Lingkungan', 'kuesioner', '2023-05-17 02:55:29', '2023-05-17 02:55:44', NULL);
INSERT INTO `questionnaires` VALUES (103, 'Bagaimana cara pembuangan sampah UTAMA rumah tangga ?', 'checkbox', 'Lingkungan', 'kuesioner', '2023-05-17 02:55:29', '2023-05-17 02:55:44', NULL);
INSERT INTO `questionnaires` VALUES (104, 'Ruangan dalami Rumah', 'checkbox', 'Lingkungan', 'kuesioner', '2023-05-17 02:55:29', '2023-05-17 02:55:44', NULL);
INSERT INTO `questionnaires` VALUES (105, 'Bagaimanakah cara mengobati anemia ?', 'checkbox', 'Remaja Putri', 'pengetahuan', '2023-05-21 08:40:26', '2023-05-21 08:40:30', NULL);

-- ----------------------------
-- Table structure for sessions
-- ----------------------------
DROP TABLE IF EXISTS `sessions`;
CREATE TABLE `sessions`  (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED NULL DEFAULT NULL,
  `ip_address` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `user_agent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `payload` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `sessions_user_id_index`(`user_id` ASC) USING BTREE,
  INDEX `sessions_last_activity_index`(`last_activity` ASC) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of sessions
-- ----------------------------
INSERT INTO `sessions` VALUES ('kx7021X610A1ZwRyLXCe1AkWDe97WEQJxyLxh2AQ', 6, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:124.0) Gecko/20100101 Firefox/124.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiV2tEQkhhTUtlM1ljUWpIOHNJOXBNcTA1UFdNcVNIWkhkdTN0eGtpRCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTk6Imh0dHA6Ly8xMjcuMC4wLjE6ODA5MC9kYXRhX2FuZ2dvdGFfa2VsdWFyZ2EvMDEyMTAyOTEwMjkxMDI5Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6Njt9', 1711520515);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `roles` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT 'surveyor',
  `two_factor_secret` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `two_factor_recovery_codes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `current_team_id` bigint UNSIGNED NULL DEFAULT NULL,
  `profile_photo_path` varchar(2048) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 106 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (5, 'Agus', 'agus', 'agus@gmail.com', '085399383430', NULL, '$2y$10$qlMxsPKcdiH5Y1vPXWqAkO/qjh/sUHucyf372gqtonaU0CGQPROLC', 'surveyor', NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-15 20:32:12', '2023-05-15 20:32:12');
INSERT INTO `users` VALUES (6, 'Administrator', 'admin', 'admin@keluargacarade.my.id', '085340390552', NULL, '$2y$10$4GFohuUP5W2ivakT1.L8rOcDepuR5mlXKHZb9wANXKrRxFtL.WaGi', 'admin', NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-15 22:19:47', '2023-05-15 22:19:47');
INSERT INTO `users` VALUES (7, 'Ria', 'ria', 'kamariana.stik@gmail.com', '085247299340', NULL, '$2y$10$8RffS2AwnpmA4O3wLmcgOucqt2.7ySFvwxoJLvKr3lunKkG23j.EW', 'admin', NULL, NULL, NULL, 'SpKBBLxAplTeWonZIfeCADjwwPWhgJBtCRrOLpqIhZ3vb5uLo4RErjctbgHH', NULL, NULL, '2023-05-16 00:06:05', '2023-05-25 05:08:09');
INSERT INTO `users` VALUES (8, 'Annisa Ayu', 'annisaayu424', 'annisaayu424@gmail.com', '081354118452', NULL, '$2y$10$yIU3MiEFd3YqRsuC73iZ8uEt/tPHQWdOrvShK/eo9tmSa4RfJHGbu', 'admin', NULL, NULL, NULL, '7lx3LhVmqTI6YSAPPgC92e7C2gDvUeg36NG6csm0uOyTf9FnJksmSsI3QVAn', NULL, NULL, '2023-05-20 13:06:24', '2023-05-20 13:06:24');
INSERT INTO `users` VALUES (9, 'Evinovrianti', 'evinovrianti26', 'evinovrianti26@gmail.com', '081354570384', NULL, '$2y$10$x7ziI9vUA.rbWEkaMD0w2.pUqjhTAYJGX02p8HVP5Mc5tYH96tHVC', 'surveyor', NULL, NULL, NULL, 'o96RYtJDPo9S6jTq9k1F77AkkA4lwqlHppdObMDIAOpWc9p8mSpeQ7uwZbtT', NULL, NULL, '2023-05-20 13:08:07', '2023-05-20 13:08:07');
INSERT INTO `users` VALUES (10, 'Angraeni Herdianty', 'angraeniherdianty2018', 'angraeniherdianty2018@gmail.com', '085756050642', NULL, '$2y$10$E9yUAqm1c.XbrxHfpCVe9ulwnM4cT1Gfa81d53LjW70eFbmfjjSbu', 'surveyor', NULL, NULL, NULL, 'xi7SpGKs25LpuhljzeCNFus8eKmilYfKKCc4S8IsEqMsmea7a9nTg3P1mGfi', NULL, NULL, '2023-05-20 13:09:00', '2023-05-20 13:09:00');
INSERT INTO `users` VALUES (11, 'Sari', 'sarifaohoibor', 'sarifaohoibor@gmail.com', '082198773670', NULL, '$2y$10$e.sXrdd.70arx5tgmyzuUuo84P6dF9QhJe60kvLMCuaLSetfmr/EO', 'surveyor', NULL, NULL, NULL, 'qYF00AkkNQD4uBI9ECTAo9vinxpXP3BrGLxjl1SNXhL1XPau0PQGYjNDKC1w', NULL, NULL, '2023-05-20 13:09:40', '2023-05-20 13:09:40');
INSERT INTO `users` VALUES (12, 'Andi Risna', 'andirisna525', 'andirisna525@gmail.com', '082195309889', NULL, '$2y$10$oypCNQHE0ImDHkdcDc.akea4xobcXSFGUFOQnoxZHxg/6FhE95ASy', 'surveyor', NULL, NULL, NULL, 'nDn2wylAQ44kEu7cQA5R0vgfR5309zlt09vGsq5jRvq8fo1CMUSYnLd1HosR', NULL, NULL, '2023-05-20 13:11:19', '2023-05-20 13:11:19');
INSERT INTO `users` VALUES (13, 'Alfredo Andrian', 'alfredoandrian2', 'alfredoandrian2@gmail.com', '085254201289', NULL, '$2y$10$LqVPb9OalFrzNUwUO2WTxu4m9tWoryBZK13kwCeWi9XboYOI5Lex.', 'surveyor', NULL, NULL, NULL, 's0z633fIkaoDZG4t9Wr4liOTFR6Y6O1vd5FzkKuoJ0KA3DNrtJ7vQs2n4ddT', NULL, NULL, '2023-05-20 13:12:36', '2023-05-20 13:12:36');
INSERT INTO `users` VALUES (14, 'Natalia', 'nataliasapan', 'nataliasapan78@gmail.com', '085343884742', NULL, '$2y$10$g42Sgvpmj.7FXwCrrLJs4uQzp4MzjsW7AVe..SUPWmRUePQbe8u7W', 'surveyor', NULL, NULL, NULL, 'H4u2MFPiMh3KiVoWU6JvXenH1814YkBRgVJ6QonrWFD6EoYPumZeCAaV8LcS', NULL, NULL, '2023-05-20 16:29:56', '2023-05-20 16:29:56');
INSERT INTO `users` VALUES (15, 'Putri Ratsina', 'putryratsina', 'putryratsina@gmail.com', '081240693171', NULL, '$2y$10$LUcrtMV4Coil5t9FlxpDd.zSGX1G2hMFDwnX6PZJFXR.HSPYhRUBa', 'surveyor', NULL, NULL, NULL, 'G6FFyJrAszAprKsPx6FlJ5qMTOilZVdLITaSDJjXiCshQcxS7mFFpEnHrQCg', NULL, NULL, '2023-05-20 16:30:31', '2023-05-20 16:30:31');
INSERT INTO `users` VALUES (16, 'Wiwin Winarti', 'wiwinwinarti14127', 'wiwinwinarti14127@gmail.com', '081246376544', NULL, '$2y$10$9nf9q9KFj6DuSWKUjo3Uk.GVoUCyYObytY1McWxTtd0wARAkfW/U6', 'surveyor', NULL, NULL, NULL, '6xcZyC4Os67SRZ5TQf53nNY3CimlIaXDP3n4U0HOmpzo1fOH4F6sNSLAZTF2', NULL, NULL, '2023-05-20 17:34:41', '2023-05-20 17:34:41');
INSERT INTO `users` VALUES (17, 'Sumiati', 'sumiatitomo447', 'sumiatitomo447@gmail.com', '087741291292', NULL, '$2y$10$jsZNtH1BjGGCltt1kPG/Y.nF1hXIbK.m1II8UBhGLIiMRXWdbP9YK', 'surveyor', NULL, NULL, NULL, 'VI0irUQIlc26JpNYsEF46eeR8ogLWlJauhT5e1LBDRE0wkAx6qe1LlF42Gj0', NULL, NULL, '2023-05-20 17:36:01', '2023-05-20 17:36:01');
INSERT INTO `users` VALUES (18, 'Mlangiti', 'mlangitiboyong', 'mlangitiboyong@gmail.com', '082195306131', NULL, '$2y$10$0NY8SwnK.JjGSW8682PbDOxfIHaGapRVJzJwnIOaZEmtAMuEOid.W', 'surveyor', NULL, NULL, NULL, 'qZtHdj9EydynGpqRL5OS145cjYdMfkfG7iQYnpG9xEIpDWWVdF8xWs2n8laM', NULL, NULL, '2023-05-20 17:38:51', '2023-05-20 17:38:51');
INSERT INTO `users` VALUES (19, 'Dandi Sseptian', 'dandiseptian', 'dandiseptianl.dsl@gmail.com', '085233217391', NULL, '$2y$10$cYKlRux2TSvdqFCPxofkdOI9xc2c2dAtIQUEcTYEjZqcfv5kk3fVC', 'surveyor', NULL, NULL, NULL, '8mUAagD9xQoLiCJkYOzxL7jrNyffh7uw5DI6oFtYtaObyiBEAx4ihydNHkX4', NULL, NULL, '2023-05-20 17:39:55', '2023-05-20 17:39:55');
INSERT INTO `users` VALUES (20, 'Syaripatululyah', 'ssyaripatululyah', 'ssyaripatululyah@gmail.com', '082340228218', NULL, '$2y$10$.kgmtGCvvCuoYIXwgT1m8uruxQ72941WNi/dkZCokzSnu85QlVdZa', 'surveyor', NULL, NULL, NULL, 'NnbdOzcFZvyTqxljTfWCZEblyLEuJ5xczvipgGv6bn5bgJz3Upo6AQWYnPvt', NULL, NULL, '2023-05-20 17:41:06', '2023-05-20 17:41:06');
INSERT INTO `users` VALUES (21, 'Novitasari', 'novitarisal75', 'novitarisal75@gmail.com', '081999859239', NULL, '$2y$10$3uHmBQIl6/57Eg9nECd.6O9zzlqBSMFXMwUOgz3trlouHf4EtHBYu', 'surveyor', NULL, NULL, NULL, 'OxcoeRm4n9GbvjB96TZ5lmrEBvqoWCtKImfzCzxGTlgizcV6AP706XhaEFdN', NULL, NULL, '2023-05-20 18:33:50', '2023-05-20 18:33:50');
INSERT INTO `users` VALUES (22, 'Wenmaslee', 'wenmaslee', 'wenmaslee@gmail.com', '081240578863', NULL, '$2y$10$VSSLkRFaZLzyPREFZo7ws.fuoHppQlK/fp57rnsL6HCjWjOPLpija', 'surveyor', NULL, NULL, NULL, 'HxcoAFL74rF71Npm7m2QFnlmd4Az0CW26ZG0TdgufiaUrV1DDLYfXIGOZ3vF', NULL, NULL, '2023-05-20 18:35:05', '2023-05-20 18:35:05');
INSERT INTO `users` VALUES (23, 'Fiktor', 'fiktormasela', 'fiktormasela@gmail.com', '085656868665', NULL, '$2y$10$wQ/lR2F/9Q.xusD8sBfj0OurtH.hXpM9SRPVJf5inwJ0q8uwmCG1C', 'surveyor', NULL, NULL, NULL, 'VcMoIsVRyt3Ebjkrclv2ZkRqTHw4ztoMhyUoGmRi3Zamn099VmE1XVOqeUIF', NULL, NULL, '2023-05-20 18:35:58', '2023-05-20 18:35:58');
INSERT INTO `users` VALUES (24, 'Nurul Meidita', 'nurulmeidita016', 'nurulmeidita016@gmail.com', '085216033055', NULL, '$2y$10$kfE7r2BQgH.6CVB27phrpeV3BWxoFD/uQaT3Hmu1Iiox4JVxxOwZu', 'surveyor', NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-20 18:36:46', '2023-05-20 18:36:46');
INSERT INTO `users` VALUES (25, 'Putry Ilham', 'putryilham99', 'putryilham99@gmail.com', '0895612139944', NULL, '$2y$10$mLr8rG2F3TpJxkoKQuSMEOEfTPm.8xvADyxVNBQKH840iwgiMOcmu', 'surveyor', NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-20 18:37:19', '2023-05-20 18:37:19');
INSERT INTO `users` VALUES (26, 'Rahaya', 'rahayaanjesicha', 'rahayaanjesicha@gmail.com', '081240733374', NULL, '$2y$10$PeTWuaOp2WuK7s1TUO.7xO43sNlufwU.XXhbeN9oFOFi2agVpxF2.', 'surveyor', NULL, NULL, NULL, 'jPuogUIRmZu0W3MwIMrHP0rar4Kb6xCo99D2z9CJMgys42qNdIVLBK0letec', NULL, NULL, '2023-05-20 18:38:31', '2023-05-20 18:38:31');
INSERT INTO `users` VALUES (27, 'Wahyu Suciati', 'wahyusuciati2309', 'wahyusuciati2309@gmail.com', '082266460976', NULL, '$2y$10$ITeLNuewtSV004pzso41duTJ9hrN.1nUMQqqkrSuWl6pmFZjkQJ8i', 'surveyor', NULL, NULL, NULL, 'PhEUFnb5kl6waQDkW6asbz4V3fmF7Z9BKrniaOTozFDDz9ErQg2vE76Kr6QD', NULL, NULL, '2023-05-20 18:43:46', '2023-05-20 18:43:46');
INSERT INTO `users` VALUES (28, 'Nadjwa', 'nadjwaeka367', 'nadjwaeka367@gmail.com', '081342405957', NULL, '$2y$10$LfJlbjHINl3O0YYDY.j/wu4.4V7blwGUzYR7oXUfUw06rqVV2AkIa', 'surveyor', NULL, NULL, NULL, 'i4TxPasD3f9YAswtm5H1hLEoItVR48X20OAxmwxPWYjfJ07jV8pX8JKSkKGl', NULL, NULL, '2023-05-20 18:45:24', '2023-05-20 18:45:24');
INSERT INTO `users` VALUES (29, 'Febriani Theresia', 'febrianitheresia949', 'febrianitheresia949@gmail.com', '081238356108', NULL, '$2y$10$AY2g9SstDU2LiKoY7ln91ep3cYwZFAGBwmiRQNviii/1a1zaLcJVy', 'surveyor', NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-20 18:46:15', '2023-05-20 18:46:15');
INSERT INTO `users` VALUES (30, 'Sahitilaporu', 'sahitilaporu', 'sahitilaporu@gmail.com', '085254639453', NULL, '$2y$10$D.u1iypemZ5qAwvJqW/lquMLcvk5b1XffS8J7mNyeDcjduEb1K6W6', 'surveyor', NULL, NULL, NULL, 'SXn5dH9E5vxWOjHLYQTv0E15dOzuSydSZuh51pD1glfIM2BdYoiFUWNlN29r', NULL, NULL, '2023-05-20 18:47:18', '2023-05-20 18:47:18');
INSERT INTO `users` VALUES (31, 'Yanti Zulhija', 'yantizulhija', 'yantizulhija@gmail.com', '082345897908', NULL, '$2y$10$dOlg9aRO2ngaxWtCD6XQqO6DSZcvV9cu1.5n9ZF2g27dJMUIokQFa', 'surveyor', NULL, NULL, NULL, '27odl81JEzt9blhzBnJbFRYBQNbXXUTowDKsECrrePZhLCDrD4isI6aiSjqK', NULL, NULL, '2023-05-20 18:47:54', '2023-05-20 18:47:54');
INSERT INTO `users` VALUES (32, 'Marthen Luter', 'marthenluterhukubun', 'marthenluterhukubun@gmail.com', '082399528842', NULL, '$2y$10$AG7ZZfYKChfEKuQjPQbdLeaNK5x6XJslxlZtzOzg3YKtk09hzmrnm', 'surveyor', NULL, NULL, NULL, 'Sz7KzCNxQfoLq6dR0o0LVVqM8mjcc4gAfGI8Je7WoTA1nujmrCyd5Jx7XuhP', NULL, NULL, '2023-05-20 18:48:40', '2023-05-20 18:48:40');
INSERT INTO `users` VALUES (33, 'Indri Hafsari', 'indrihafsari893', 'indrihafsari893@gmail.com', '082193670809', NULL, '$2y$10$q25HJth1xMeD57qZecsDuuQ6bADKhd.PE4xNLYrSbkEEwi1Utxd.W', 'surveyor', NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-20 18:51:48', '2023-05-20 18:51:48');
INSERT INTO `users` VALUES (34, 'Orpaweyasu', 'orpaweyasu29', 'orpaweyasu29@gmail.com', '081343496614', NULL, '$2y$10$AcjnrAhOWePLegFKPkT7O.KuZWsNTHqsPQSDS.t.rhnX.MJRUZxcW', 'surveyor', NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-20 18:52:55', '2023-05-20 18:52:55');
INSERT INTO `users` VALUES (35, 'Gres', 'gresyekabinubu', 'gresyekabinubu@gmail.com', '082192458452', NULL, '$2y$10$5y900HgzQ6LzLLflR9F0su.vz1HB0Sl6/CXBT2xQhw7pS2gVLPks.', 'surveyor', NULL, NULL, NULL, 'iERsJFV9ofd6oimKGUvz1WkeGSdO8KabP2V4q3PQ8kl87MfaIYgIATfxYuWb', NULL, NULL, '2023-05-20 18:53:30', '2023-05-20 18:53:30');
INSERT INTO `users` VALUES (36, 'Novia Santi', 'noviasanti335', 'noviasanti335@gmail.com', '081242496296', NULL, '$2y$10$D5pgRLcFOw/K3J/IJhRIVuFxyKVTvV/8IST5PCQXKJRMjKjhnTU5K', 'surveyor', NULL, NULL, NULL, 'nc2Fl0KRGvrroKidgPduz3d7gw1srAxZv1EnAhDRpNAYTLE24cU5nqko5l87', NULL, NULL, '2023-05-20 18:54:10', '2023-05-20 18:54:10');
INSERT INTO `users` VALUES (37, 'Irnayanti', 'irnayanti1410', 'irnayanti1410@gmail.com', '082291749195', NULL, '$2y$10$ddL2eiWTRzaWkRKqbv/b/.EIZT7/a/NNZbyNGg/rpfe5JAGeE372i', 'surveyor', NULL, NULL, NULL, 'Kd5MYDvgI5hkwa1n7EKfPKHcJJSgzmSbk81wJ9zRHeHc3EgN5gyPxi9R4BPV', NULL, NULL, '2023-05-20 18:54:38', '2023-05-20 18:54:38');
INSERT INTO `users` VALUES (38, 'Abdi Kurniadi', 'abdikurniadi57', 'abdikurniadi57@gmail.com', '085342456093', NULL, '$2y$10$UeO2y32rjQ1RvRFnDqfULeAHPpRYfKI7lwrDker6GpJ.gK7ju9ckC', 'surveyor', NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-20 18:55:51', '2023-05-20 18:55:51');
INSERT INTO `users` VALUES (39, 'Basriluturmas', 'basriluturmas1002', 'basriluturmas1002@gmail.com', '085964204445', NULL, '$2y$10$/R4y2S9scMTXE3UdjaCSB.z2MEUzakGVT6JGrE0XWuiCSOj1a9wf2', 'surveyor', NULL, NULL, NULL, 'igztVLBkpLJiDLOYm5KYOu6EJNiGxBTtFMErE2OzcvizNNVQAYEsICShMSpw', NULL, NULL, '2023-05-20 18:57:08', '2023-05-20 18:57:08');
INSERT INTO `users` VALUES (40, 'Alfiana Damayanti', 'alfianadamayanti2001', 'alfianadamayanti2001@gmail.com', '082347553612', NULL, '$2y$10$NiTl49W4Dy8XuRK0jSjOR.K7KiRJ5JQoMFoDRGaje6tHTapMezKQe', 'surveyor', NULL, NULL, NULL, 'LVhMZr5NByTJoQz3vji5w74yDrDxuTDbIafizuEulYA7ivDShJXXna3EbBBL', NULL, NULL, '2023-05-20 19:01:57', '2023-05-20 19:01:57');
INSERT INTO `users` VALUES (41, 'Selfia Yuandini', 'selfiayuandini', 'selfiayuandini@gmail.com', '085803582639', NULL, '$2y$10$NFYzUfFU6r4.XDC/KQemzu0HN53J1VNNEv3rVoaznrKt4.HljQzve', 'surveyor', NULL, NULL, NULL, 'y4uvxfSUcyQJjdjpuUUMlTHexMZlg1OsVlbTIhHTG2aucCDMfCg9e3d4sDm9', NULL, NULL, '2023-05-20 19:02:37', '2023-05-20 19:02:37');
INSERT INTO `users` VALUES (42, 'Mulyani Syahid', 'mulyanisyahid00999', 'mulyanisyahid00999@gmail.com', '085239137238', NULL, '$2y$10$RECpDAizh23jukt6Mqi5x.oF/Ec38OqqwzgKLqRHEC67vqBXO8ily', 'surveyor', NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-20 19:03:16', '2023-05-20 19:03:16');
INSERT INTO `users` VALUES (43, 'Margaret Habairsady', 'margarethabairsady', 'margarethabairsady@gmail.com', '089654523857', NULL, '$2y$10$6NnwBGZ5IPPNxu6UpvvGae/2AmwZSnvHH1XusAfCm4mQ83xcdi3gS', 'surveyor', NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-20 19:07:59', '2023-05-20 19:07:59');
INSERT INTO `users` VALUES (44, 'Anekerombe', 'anekerombe232', 'anekerombe232@gmail.com', '082189843323', NULL, '$2y$10$kVJl4S5QPjWelUm0F7dSt.8ub93xwbqCT0abIqrYHoD4uTJ4Mvpvm', 'surveyor', NULL, NULL, NULL, 'dfBZzzfT2S8OnSg1IE7zSFv9aPYbtXm6OxUxV4reWzYco3G0lnH2pEQ4gGIq', NULL, NULL, '2023-05-20 19:08:35', '2023-05-20 19:08:35');
INSERT INTO `users` VALUES (45, 'Hafis', 'hafisss851', 'hafisss851@gmail.com', '081245840941', NULL, '$2y$10$.pxXLTL5cKu.SGN49tUy5.8gKtIdwX.lNdH7WWQJ8L.eote2r0EyW', 'surveyor', NULL, NULL, NULL, '9Q5Bu13rda7549lGjUSezwfIQM1Hx3ZIwZtCLu0eWBBL9L21vzisw1unsmpg', NULL, NULL, '2023-05-20 19:10:13', '2023-05-20 19:10:13');
INSERT INTO `users` VALUES (46, 'Dian Lestri', 'dianlestri', 'dianlestri637@gmail.com', '085341892601', NULL, '$2y$10$nPG/Ub3YtuG/kIRbuwADoeaDn7NivhsiuR8QKARVhZmAxmYaMMvLe', 'surveyor', NULL, NULL, NULL, 'D7RTsFwnf04kM3WhRa4gt91M8HzyO56uLjEtjviuapSXzx70ZwHzF0mq9OPv', NULL, NULL, '2023-05-20 19:11:11', '2023-05-20 19:11:11');
INSERT INTO `users` VALUES (47, 'Sitti Marwah Anwar', 'sittimarwahanwar', 'sittimarwahanwar@gmail.com', '082279405622', NULL, '$2y$10$vAyIZfDjsKpZCnxvOSP5..ufn5635QWllsn2YotbQD/JTZh5grbFC', 'surveyor', NULL, NULL, NULL, 'EaIhhMwpBn73pAC5TKoASmaKYTrzKvLHtaEPEPSUTrdxT06em0jhP2TqVGCx', NULL, NULL, '2023-05-20 19:11:49', '2023-05-20 19:11:49');
INSERT INTO `users` VALUES (48, 'Utami', 'utamikmyn', 'utamikmyn@gmail.com', '0895383134547', NULL, '$2y$10$jtoBLZzahpBL8aaup2eZyumbWWnMN6Z5LNdMry1uyhBGx5nnQ6o5O', 'surveyor', NULL, NULL, NULL, 'ffqSXPqeig7UJ6pfASBqZpxzqvkwydwzJWvrUlKadQ2WYVwDlxUg8NDs7y2M', NULL, NULL, '2023-05-20 19:12:42', '2023-05-20 19:12:42');
INSERT INTO `users` VALUES (49, 'Nadila', 'nadilaboleboly2', 'nadilaboleboly2@gmail.com', '081240912532', NULL, '$2y$10$fEjT6hdQ7i5m6NAz1f3/7OgeqSdaavYO5Il/9DUmJThJcCHsFjjIO', 'surveyor', NULL, NULL, NULL, 'OKi4bO5i5Eu3Hidh38p0T2jjR54peiLntFAfdW1bH6K5nUOdwJcHCX8hDsp9', NULL, NULL, '2023-05-20 19:13:55', '2023-05-20 19:13:55');
INSERT INTO `users` VALUES (50, 'Fitria Liani', 'fitrialiani25', 'fitrialiani25@gmail.com', '082347305053', NULL, '$2y$10$O0i6jrbr9/S1nNYIlQ2AsOKShwgQgNglM15juvca9V46A/bodgNCe', 'surveyor', NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-20 19:14:48', '2023-05-20 19:14:48');
INSERT INTO `users` VALUES (51, 'Faridah', 'faridahsosweet09', 'faridahsosweet09@gmail.com', '082193596039', NULL, '$2y$10$ZZEqeKCnpRESJZsHDw9nquMKxbQJli0Twc8eE0RHctm4RLqZUwpN2', 'surveyor', NULL, NULL, NULL, 'UHgKUOGlGEEIXPWMyFJJQIeH7zLnwDMbkwTi0N31qjIMQvYnrisSFPZBd8NQ', NULL, NULL, '2023-05-20 19:16:05', '2023-05-20 19:16:05');
INSERT INTO `users` VALUES (52, 'Andi Indah', 'andiindah655', 'andiindah655@gmail.com', '082196254827', NULL, '$2y$10$hP4c45mDlhhiiQEwEBx9TuWmdWV4kE2lOGeHgx/V..maXT2dzA9w2', 'surveyor', NULL, NULL, NULL, 'AchxEnTk1nUlGsec1HxErWzDNtmeUeLqFs54PJReegugLEOv6tOJqtgHvZs0', NULL, NULL, '2023-05-20 19:17:12', '2023-05-20 19:17:12');
INSERT INTO `users` VALUES (53, 'Gracia Aprillia', 'graciaaprilliahukubun', 'graciaaprilliahukubun@gmail.com', '082155368661', NULL, '$2y$10$MHeliwVzXbybyyfwVFOZVeM8xCRfnsRJQCEKsuM9Hr4vPXf46CAca', 'surveyor', NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-20 19:18:03', '2023-05-20 19:18:03');
INSERT INTO `users` VALUES (54, 'Maricepopla', 'maricepopla', 'maricepopla1803@gmail.com', '081343761224', NULL, '$2y$10$ulJEgOqFx6m4DEpei8E/7OiF/QkoDpM7RZUNYah7wgUquVrXqeow2', 'surveyor', NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-20 19:18:39', '2023-05-20 19:18:39');
INSERT INTO `users` VALUES (55, 'Viralina', 'viralinabas', 'viralinabas@gmail.com', '082293348324', NULL, '$2y$10$Kh2INi0Wj6e7lypf4q66oOtfIGYeEgPcFUuL/3mNF3.mDFZnwrVEG', 'surveyor', NULL, NULL, NULL, 'qxgHkfzC6ik8EHgip0yr65ePtywVltiQ6JrlGOlwao8mwxbui0Huyd1kKfts', NULL, NULL, '2023-05-20 19:20:05', '2023-05-20 19:20:05');
INSERT INTO `users` VALUES (56, 'Candra Gunawan', 'candragunawannn01', 'candragunawannn01@gmail.com', '081258899754', NULL, '$2y$10$Wjg0p.r.ZdDTz.Og.Jr/RubTZEMeUyEZC/XhiHhBb3nA7E9jZPD6e', 'surveyor', NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-20 19:20:42', '2023-05-20 19:20:42');
INSERT INTO `users` VALUES (57, 'Afini', 'afini03nugrah', 'afini03nugrah@gmail.com', '085299076064', NULL, '$2y$10$/NwVfoyZGtlCK3Vo7gexa.U/ID3.qo9nvClqHgKRl1CnEP4bBsqYu', 'surveyor', NULL, NULL, NULL, 'OjLCMTW9TtgxFzSKONXYl14dsaEKtl2HG2zfysEWipxcVkwDswrOiR30T5H9', NULL, NULL, '2023-05-20 19:22:06', '2023-05-20 19:22:06');
INSERT INTO `users` VALUES (58, 'Marjoknyartilu', 'marjoknyartilu2001', 'marjoknyartilu2001@gmail.com', '081355120395', NULL, '$2y$10$RqryZh6SUZM0QtQB71/GVen5sF6.892hQC/YR.5.1fzShu96oKLG6', 'surveyor', NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-20 19:22:43', '2023-05-20 19:22:43');
INSERT INTO `users` VALUES (59, 'Rikawati', 'riikawtii', 'riikawtii@gmail.com', '082192814658', NULL, '$2y$10$/VjiD65owdR5wVPbmJS7gecGQZYdb/zY0euR2iBV6jxsf9xvs/2mK', 'surveyor', NULL, NULL, NULL, '2RmkgdrurrrVkUjRycod3S3CRukgHdEhQf2sPvJHM30rmrGUDiHlVLBuRtwQ', NULL, NULL, '2023-05-20 19:23:27', '2023-05-20 19:23:27');
INSERT INTO `users` VALUES (60, 'Safana', 'safanafanaa', 'safanafanaa@gmail.com', '082199880560', NULL, '$2y$10$muH1V1eWuCuNQPjJcDuaie0JGqzAe2jbD4k7hl0OlJSrXBuNHyeTa', 'surveyor', NULL, NULL, NULL, 'WTZnllbUYTqnBq36uOgEoWbhESGPjpJDfl3wcy4JyvUZ3bnM3HdPk6N22jw3', NULL, NULL, '2023-05-20 19:24:00', '2023-05-20 19:24:00');
INSERT INTO `users` VALUES (61, 'Tenri Damayanti', 'tenridamayantitenri5674', 'tenridamayantitenri5674@gemail.com', '081356569698', NULL, '$2y$10$bDXDC/9qw0gU3CJmyIeoMO333f54Zgo0YIHonXwDE7567vXLzvChS', 'surveyor', NULL, NULL, NULL, 'p7Eq2yUuoZKiWRvvApDAxY2KeDnVkPwftclU60sw4CPvyH1ND2eHjiRf7k45', NULL, NULL, '2023-05-20 19:24:37', '2023-05-20 19:24:37');
INSERT INTO `users` VALUES (62, 'Sukmanisa', 'sukmanisa239', 'sukmanisa239@gmail.com', '081222467908', NULL, '$2y$10$MKvY/n0e8yvJxwhDYikaxeseVrDURrngXrcrrWhcnYpnCqBgD5wu2', 'surveyor', NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-20 19:25:36', '2023-05-20 19:25:36');
INSERT INTO `users` VALUES (63, 'Indah Sari', 'indahsariindah046', 'indahsariindah046@gmail.com', '082290180380', NULL, '$2y$10$CY7q/AR74MD3dT.HizbaeOOJRO2GI931aN7PVKUgS3PnmfsjKAOc2', 'surveyor', NULL, NULL, NULL, 'lKBb2n8YiYBszPWvhZgcebyi0eDRRvGwlswv2neEaHexNeWit2mBRT4Yu9CT', NULL, NULL, '2023-05-20 19:26:38', '2023-05-20 19:26:38');
INSERT INTO `users` VALUES (64, 'Jessica', 'jessicarumpak139', 'jessicarumpak139@gmail.com', '082394647116', NULL, '$2y$10$xMyQoParPEq0tE1hNZ8VM./xVeUVJlhjVikO.8dz6/RspP3ntmd6.', 'surveyor', NULL, NULL, NULL, 'dOSVF0WBfOwi6BBK8Dy6XLeUsRrVzNbcTEpQ1z6zGz0WdGCwbQXPBOmIeX39', NULL, NULL, '2023-05-20 19:27:15', '2023-05-20 19:27:15');
INSERT INTO `users` VALUES (65, 'Halifah', 'lifahalifah02', 'lifahalifah02@gmail.com', '081242847877', NULL, '$2y$10$lmgZp10bRa0bbWqLUjezq.AxJesVcwe5nMMvEIJDznnJj6vG/mTr.', 'surveyor', NULL, NULL, NULL, 'FlTALke71uMGvH1GXkvr8yeuooKSl6ykOHtgAbwmlK1qSQEvbb1B1w0aOZzr', NULL, NULL, '2023-05-20 19:28:00', '2023-05-20 19:28:00');
INSERT INTO `users` VALUES (66, 'Anggriani', 'anggrianijunati05', 'anggrianijunati05@gmail.com', '082339192382', NULL, '$2y$10$RJ4lzLehJC6nosdiFW9gH.k6slg2267tAkCsD9Zc3qz8Tnh3za846', 'surveyor', NULL, NULL, NULL, 'T4RwDXmqJ6LxLXZmPfGxqNiCMqp7ki4BmKeZIjGVj7NDIApV5LHj3vg4wAIo', NULL, NULL, '2023-05-20 19:28:54', '2023-05-20 19:28:54');
INSERT INTO `users` VALUES (67, 'nabillah', 'inunainunnabillah28', 'inunainunnabillah28@gmail.com', '08388023789', NULL, '$2y$10$tpPJk4tU.cEPYTjj5Oibi.HWtKTgS28jRaX7ZvINw7e1/xNFFFA3e', 'surveyor', NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-20 19:30:33', '2023-05-20 19:30:33');
INSERT INTO `users` VALUES (68, 'Ardi', 'ardi03803', 'ardi03803@gmail.com', '0887436728909', NULL, '$2y$10$68ruKznnk.pAtlfUph0iFOGTeY8okYoPV6kn/03OnXjECDBRQz/di', 'surveyor', NULL, NULL, NULL, 'LrwubDBQcGd7k53VrGkNyXbpKpHnuFQlehBj64b7mciGJVixfYOV1BmpSYTS', NULL, NULL, '2023-05-20 19:31:12', '2023-05-20 19:31:12');
INSERT INTO `users` VALUES (69, 'Irmayani', 'irmayaniii127', 'irmayaniii127@gmail.com', '085394122965', NULL, '$2y$10$sQFjxp/wCLdbW/5iWQzXJOFcDXFD1TfgLDbbqZr0UoE4oDpZm5oqu', 'surveyor', NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-20 19:33:16', '2023-05-20 19:33:16');
INSERT INTO `users` VALUES (71, 'Tio', 'tiotorfrisye', 'tiotorfrisye@gmail.com', '081343079538', NULL, '$2y$10$gy0PjRgmAp9/VKGoOqETFOeijfnrYS.v66z3sJQ3NQ1K.kdARcCru', 'surveyor', NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-20 19:34:55', '2023-05-20 19:34:55');
INSERT INTO `users` VALUES (72, 'Putri Aulia', 'putriaulialia022', 'putriaulialia022@gmail.com', '081349429767', NULL, '$2y$10$z1PHtqpSedwP5JDJnwMeZOD2ji5e43sX1NdTe0eQv7wQbmEeyuMca', 'surveyor', NULL, NULL, NULL, '1su4WymJpX7o4IrKi2ZNOGQdRdvFLhEOihdeOAHxAEI5s7gFVltiQRmBakjL', NULL, NULL, '2023-05-20 19:35:35', '2023-05-20 19:35:35');
INSERT INTO `users` VALUES (73, 'Trisno', 'trisnok74', 'trisnok74@gmail.com', '087776702850', NULL, '$2y$10$.h7AMBTH.qZrLyvn6XUXEOVwQkA.iAB9JFXeJULJxvgSmtU242IKC', 'surveyor', NULL, NULL, NULL, 'qdt29qZnEAVrrLCW2iOicLLk99oKpFYwwaJy4rWUqf0qEOgUx6XnnYVw2niL', NULL, NULL, '2023-05-20 19:36:20', '2023-05-20 19:36:20');
INSERT INTO `users` VALUES (74, 'Padilah Putri', 'padilahputri002', 'padilahputri002@gmail.com', '082346851543', NULL, '$2y$10$kiRCc1kfuSuyom8oGoa0NeMfNbXbQO2v6U2dDPcc3EZ./exjJw.TS', 'surveyor', NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-20 19:37:09', '2023-05-20 19:37:09');
INSERT INTO `users` VALUES (75, 'Airin Susanti', 'airinsusanti573', 'airinsusanti573@gmail.com', '082197083421', NULL, '$2y$10$dlTfuMVRsCtA/VhEVIRQfeLT47PXUnn0CW8T1gUmpWpam9erOQqRG', 'surveyor', NULL, NULL, NULL, 'kqHVY1imk8CK24gpoYV2Nuld8CpblndbNaTgehUcMsdkZ14ReEIOxgKSpI4O', NULL, NULL, '2023-05-20 19:40:43', '2023-05-20 19:40:43');
INSERT INTO `users` VALUES (76, 'Ratih', 'ratihtimika123', 'ratihtimika123@gmail.com', '081245624385', NULL, '$2y$10$nJK5.rpryHNg5L2u4tNure3UYzd9sqOpXpnv8heRyoZhqNjFn8MhW', 'surveyor', NULL, NULL, NULL, 'wb0I2gcdtYdgAwfydmk7B5PD591hgQEEbl5wBilfQlejXG03FvxiuOUtso1a', NULL, NULL, '2023-05-20 19:42:17', '2023-05-20 19:42:17');
INSERT INTO `users` VALUES (77, 'Putri Lestari', 'putrilestarilatar', 'putrilestarilatar@gmail.com', '081240084786', NULL, '$2y$10$KCoVbl7/7IRkwZf5IeOOlu6cPDDM1VWtk8s6tEVtyB9EA5cg6tyPq', 'surveyor', NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-20 19:43:32', '2023-05-20 19:43:32');
INSERT INTO `users` VALUES (78, 'Lady', 'lady.rauan00', 'lady.rauan00@gmail.com', '081390260334', NULL, '$2y$10$sCrsFqEUM/JqcBc5fem6lugh4JYPWjriCGNCsjVOJ/t8y1WhpwvdS', 'surveyor', NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-20 19:44:06', '2023-05-20 19:44:06');
INSERT INTO `users` VALUES (79, 'Syratul', 'aasyratulh', 'aasyratulh@gmail.com', '085145218578', NULL, '$2y$10$lSml8xPchJ8PWA1ywBnfsug67Hin.xn.oCUJPyLKnD7AaEhjNzr.a', 'surveyor', NULL, NULL, NULL, 'RpTJhRi8yDkG8cTZyIocQTOqYso2oo7L43ACn1OKU5U7MDSJ1y0n0uB0oF96', NULL, NULL, '2023-05-20 19:44:44', '2023-05-20 19:44:44');
INSERT INTO `users` VALUES (80, 'Herman', 'hermansamponu07', 'hermansamponu07@gmail.com', '081374788171', NULL, '$2y$10$xFF24.U.0g1CAAhQeAMwcuyjAVi6mEE6M39Xv9.HQP0SRKmx.tM6q', 'surveyor', NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-20 19:45:11', '2023-05-20 19:45:11');
INSERT INTO `users` VALUES (81, 'kknposkobangkala', 'kknposkobangkala', 'kknposkobangkala@gmail.com', '081244254743', NULL, '$2y$10$a6/S6mY7FyNJwXbGp7d4OOaMYJFDGaEpB2ebjtEAqoQN/6B1QXY9u', 'surveyor', NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-20 19:47:58', '2023-05-20 19:47:58');
INSERT INTO `users` VALUES (82, 'Anastasia', 'anastasiaubra44', 'anastasiaubra44@gmail.com', '081248130564', NULL, '$2y$10$mlPEmC2.Fcp0P7fUndZLdOIq9nhtPd7Ufc0emp6wWdb/4/PnAcpQC', 'surveyor', NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-20 19:48:36', '2023-05-20 19:48:36');
INSERT INTO `users` VALUES (83, 'Ananda', 'anandasp98', 'anandasp98@gmail.com', '085298468126', NULL, '$2y$10$A6Pvr2BwFz0xDTUTXW82/.PH8iWVAJuclX2Xe3LJ4zIa7IuVHPury', 'surveyor', NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-20 19:49:07', '2023-05-20 19:49:07');
INSERT INTO `users` VALUES (84, 'Yubelina', 'yubelinarumahlewang', 'yubelinarumahlewang@gmail.com', '081248606944', NULL, '$2y$10$PL4Mn8aD1in8xQJ10GmvpuNm2SugelreQsO2uj2dPzuH7.c4tjY1G', 'surveyor', NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-20 19:50:08', '2023-05-20 19:50:08');
INSERT INTO `users` VALUES (85, 'Fukar', 'fukarzakeusjhuniant', 'fukarzakeusjhuniant@gmail.com', '089575191272', NULL, '$2y$10$N3LReKp7gsMlh6iPjNlsr.ysMQyDBmWHknmcl9ATHVhpzuomlTGpy', 'surveyor', NULL, NULL, NULL, 'ArIjGUbXU43pvG5j4m69EzTN0lSwTJVBBm9fGE5WbtDO00JjbuFVPfNMTmWM', NULL, NULL, '2023-05-20 19:50:46', '2023-05-20 19:50:46');
INSERT INTO `users` VALUES (86, 'Arya', 'aryarmnd', 'aryarmnd@gmail.com', '085756357742', NULL, '$2y$10$6ERxarp.xtggDeb8Ir9zrO.DCRJn0ELZz9ecN95eNqapN0JO8Ajfy', 'surveyor', NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-20 19:52:05', '2023-05-20 19:52:05');
INSERT INTO `users` VALUES (87, 'Elni Putri', 'elniputri0810', 'elniputri0810@gmail.com', '082249224494', NULL, '$2y$10$KeBN1Ckl07GUBYU5yV2axu/BIJbVRnNfFcjx4G2y5WRlq/kAjFUvW', 'surveyor', NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-20 19:52:45', '2023-05-20 19:52:45');
INSERT INTO `users` VALUES (88, 'Umrah Nuramaliah', 'umrahnuramaliah', 'umrahnuramaliah@gmail.com', '082285716683', NULL, '$2y$10$MI7sbDBZRO1Xnz3x2nKjKOycRnLbaNOONI3YbQZ2R7rZ0csiwf5K.', 'surveyor', NULL, NULL, NULL, 'QqS3QRDM69xZK7tB42mjOTZUueaFalwg1Dt95WNNwU9sUVtwR3L6Nx7f0m86', NULL, NULL, '2023-05-20 19:53:25', '2023-05-20 19:53:25');
INSERT INTO `users` VALUES (89, 'Hariyanti Rahman', 'hariyantirahman998', 'hariyantirahman998@gmail.com', '082195077838', NULL, '$2y$10$97CGzmOKB6LUa7KuLxfq/uVd0GNubRHnodjBzZMEjS4.2dU.TaE1e', 'surveyor', NULL, NULL, NULL, 'w3K9IvcTrlc3VZE02QlnjkJh8cPMVg8qltCS0yrjf17AccxbSIOgnZQyN0gs', NULL, NULL, '2023-05-20 19:54:17', '2023-05-25 00:33:48');
INSERT INTO `users` VALUES (90, 'Andi Riska', 'andiriska0707', 'andiriska0707@gmail.com', '082344956510', NULL, '$2y$10$oIPnBLim0v45YKEAv5/X5e8yv99VFBdG0cChQ51/ALp2uvqaOKJ2W', 'surveyor', NULL, NULL, NULL, '4Ukym224BY1IxZcIfsHmPfpE0iZksCK1gk02DxV4fRxGfKVB2SPr9hy93PJu', NULL, NULL, '2023-05-20 19:54:47', '2023-05-20 19:54:47');
INSERT INTO `users` VALUES (91, 'Tika', 'ctika930', 'ctika930@gmail.com', '081240189121', NULL, '$2y$10$.j/4RJMc9BHeMILfPk/IC.K6PYxFLw3JOFB9BfkritZ97LNin//4q', 'surveyor', NULL, NULL, NULL, 'zNnrGteorLou8kpP9GZGiC11tw47AHEMWcFO4Ow0y629Rkpg95MFbOEvf0P2', NULL, NULL, '2023-05-20 19:55:14', '2023-05-20 19:55:14');
INSERT INTO `users` VALUES (92, 'Aminullah', 'aminullah.makasar', 'aminullah.makasar@gmail.com', '085299858052', NULL, '$2y$10$INYSEm7uYw2CE.SIOn/4zOOYA3igZ5jo7/2U2N.oFiOkl/LzX1nEG', 'surveyor', NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-20 19:56:18', '2023-05-20 19:56:18');
INSERT INTO `users` VALUES (93, 'Ali Hamzah', 'alihamzahpkm', 'alihamzahpkm@gmail.com', '081343633576', NULL, '$2y$10$LaFfUIBJ7Ll3987DD6zBMeA/UlL/c1thVcAf1yjQxW8ee.5hLt9Gq', 'surveyor', NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-20 19:56:52', '2023-05-20 19:56:52');
INSERT INTO `users` VALUES (94, 'Titin Hardiyanti Sahril', 'titinhardiyanti64', 'titinhardiyanti64@gmail.com', '088242567510', NULL, '$2y$10$ur.RNpL.E2Z3EM5xwa1hmO.c67f1qzdKL5JRqwONAC8NCwZ8uK3iC', 'surveyor', NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-20 19:57:24', '2023-05-20 19:57:24');
INSERT INTO `users` VALUES (95, 'Zulaeha', 'kalehamo', 'kalehamo@gmail.com', '08981553248', NULL, '$2y$10$fwcYHBK8qs7ImnlQmgsYzeHvTYrTQDE/qyXNg1nZYZzSW4/V0GsJO', 'surveyor', NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-20 19:58:04', '2023-05-20 19:58:04');
INSERT INTO `users` VALUES (96, 'Musdi Hastuthy', 'arumituthy', 'arumituthy@gmail.com', '081244860731', NULL, '$2y$10$MReYxYmbO132I6torMV2wOBs5VpvM9hNdXamVwi51wGU893NA3THS', 'surveyor', NULL, NULL, NULL, '8rPMnUTxh6669AkkYKnvKCKLzd05hqaqk1HGTbx2WW0auxf8vrcgfOQBIE0U', NULL, NULL, '2023-05-20 19:58:43', '2023-05-20 19:58:43');
INSERT INTO `users` VALUES (97, 'Ahmad Yusran', 'yusalyakirana', 'yusalyakirana@gmail.com', '085255337317', NULL, '$2y$10$dNQi2zAxrLsu.cvFV6Ft5O1/SsCvluuij.ErpuW08UySXmMEq6w/y', 'surveyor', NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-20 19:59:19', '2023-05-20 19:59:19');
INSERT INTO `users` VALUES (98, 'Arfanita Akmal', 'arfanitaakmal', 'arfanitaakmal@gmail.com', '082187476425', NULL, '$2y$10$fz/tuAgHVJThbONZld6zmeiDKEIRjUCM8LrKqRzgfY1FzBLGQE3Ey', 'surveyor', NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-20 19:59:52', '2023-05-20 19:59:52');
INSERT INTO `users` VALUES (99, 'Suciani Resky', 'sucianiresky', 'sucianiresky@gmail.com', '08114102858', NULL, '$2y$10$jFFZl1lCzcW.746rmL6fJefpsExixKxqtiilQYoWWnPyEATygOvV.', 'surveyor', NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-20 20:00:28', '2023-05-20 20:00:28');
INSERT INTO `users` VALUES (100, 'Marjani', 'balabalakang01', 'balabalakang01@gmail.com', '082191101033', NULL, '$2y$10$tPqYJFl1F3h9WlHHDxyWcOAGBGh0R2fLop9eEM3LyknNSm/7mht1S', 'surveyor', NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-20 20:01:03', '2023-05-20 20:01:03');
INSERT INTO `users` VALUES (101, 'Hasniah Rezki Utami', 'hasniahreski97@gmail.com', 'hasniahreski97@gmail.com', '085397798041', NULL, '$2y$10$Pxer1g3dRkGD2IHWG3sXdu.I3yEistVzx/V1HRyuA/bP2t1CnrzKS', 'surveyor', NULL, NULL, NULL, 'B4lnDrHc08P7c0bAR28ve6RHpyp1gxaTwbBtIhIoBUwGeiQ5HuvWSKMT9gIf', NULL, NULL, '2023-05-20 20:01:38', '2023-05-20 20:01:38');
INSERT INTO `users` VALUES (102, 'Septriyana', 'septriyanatri28', 'septriyanatri28@gmail.com', '081245882328', NULL, '$2y$10$je07MG8fAKKg6f6KhSZsx.0C5QRErF4xTAsStJeFgt34AWPRf9lMy', 'surveyor', NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-20 20:02:06', '2023-05-20 20:02:06');
INSERT INTO `users` VALUES (103, 'Fahri Umamit', 'fahriumamit65@gmail.com', 'fahriumamit65@gmail.com', '085256650623', NULL, '$2y$10$KAMQW2M8fEaFEHUwEmE.K.oaGRVmUWU18gfOsvnsOHjj4zIHeX8BC', 'surveyor', NULL, NULL, NULL, '15MSAFKrTHELG3dHK6Oeqhrqm5qUImi2WgRMLFmWybBOQ1iye5qD1sFHfFI4', NULL, NULL, '2023-05-20 20:02:37', '2023-05-20 20:02:37');
INSERT INTO `users` VALUES (104, 'Jean Christina', 'jeanchristinalesielajean', 'jeanchristinalesielajean@gmail.com', '081111111111', NULL, '$2y$10$sfiQ.6jLpK4eegVMKoRUOOYjEJXjoXjzmIY203rbU.PmBreQHUKIu', 'surveyor', NULL, NULL, NULL, '5yOsDXyK1QGXXdUwHMR3xQCOeIWw9btTlY84cDqp29oItocOCRGuHqfIRgQG', NULL, NULL, '2023-05-23 08:37:15', '2023-05-23 08:37:15');
INSERT INTO `users` VALUES (105, 'Devita', 'lilingdevita', 'lilingdevita@gmail.com', '082347837756', NULL, '$2y$10$MEpPDPHcI9LbRfRBNPRHzeDTOahU9/cQnkosrh26R/N1W07BnTmpe', 'surveyor', NULL, NULL, NULL, 'lCDmlznJzsVXgJ6Eyojc6HRH9VDoKwpn2DfoZGDIrlTXiF4CdhCBUsQMrJhG', NULL, NULL, '2023-05-26 15:02:30', '2023-05-26 15:02:30');

SET FOREIGN_KEY_CHECKS = 1;
