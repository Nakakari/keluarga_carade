/*
 Navicat Premium Data Transfer

 Source Server         : Kedungneng
 Source Server Type    : MySQL
 Source Server Version : 100616 (10.6.16-MariaDB-cll-lve)
 Source Host           : 156.67.215.183:3306
 Source Schema         : u4515424_baru3

 Target Server Type    : MySQL
 Target Server Version : 100616 (10.6.16-MariaDB-cll-lve)
 File Encoding         : 65001

 Date: 27/04/2024 17:18:46
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for master_pekerjaans
-- ----------------------------
DROP TABLE IF EXISTS `master_pekerjaans`;
CREATE TABLE `master_pekerjaans`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `kode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 89 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of master_pekerjaans
-- ----------------------------
INSERT INTO `master_pekerjaans` VALUES (1, '1', 'Belum/ Tidak Bekerja', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (2, '2', 'Mengurus Rumah Tangga', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (3, '3', 'Pelajar/ Mahasiswa', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (4, '4', 'Pensiunan', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (5, '5', 'Pegawai Negeri Sipil', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (6, '6', 'Tentara Nasional Indonesia', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (7, '7', 'Kepolisisan RI', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (8, '8', 'Perdagangan', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (9, '9', 'Petani/ Pekebun', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (10, '10', 'Peternak', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (11, '11', 'Nelayan/ Perikanan', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (12, '12', 'Industri', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (13, '13', 'Konstruksi', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (14, '14', 'Transportasi', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (15, '15', 'Karyawan Swasta', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (16, '16', 'Karyawan BUMN', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (17, '17', 'Karyawan BUMD', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (18, '18', 'Karyawan Honorer', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (19, '19', 'Buruh Harian Lepas', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (20, '20', 'Buruh Tani/ Perkebunan', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (21, '21', 'Buruh Nelayan/ Perikanan', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (22, '22', 'Buruh Peternakan', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (23, '23', 'Pembantu Rumah Tangga', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (24, '24', 'Tukang Cukur', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (25, '25', 'Tukang Listrik', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (26, '26', 'Tukang Batu', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (27, '27', 'Tukang Kayu', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (28, '28', 'Tukang Sol Sepatu', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (29, '29', 'Tukang Las/ Pandai Besi', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (30, '30', 'Tukang Jahit', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (31, '31', 'Tukang Gigi', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (32, '32', 'Penata Rias', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (33, '33', 'Penata Busana', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (34, '34', 'Penata Rambut', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (35, '35', 'Mekanik', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (36, '36', 'Seniman', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (37, '37', 'Tabib', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (38, '38', 'Paraji', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (39, '39', 'Perancang Busana', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (40, '40', 'Penterjemah', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (41, '41', 'Imam Masjid', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (42, '42', 'Pendeta', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (43, '43', 'Pastor', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (44, '44', 'Wartawan', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (45, '45', 'Ustadz/ Mubaligh', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (46, '46', 'Juru Masak', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (47, '47', 'Promotor Acara', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (48, '48', 'Anggota DPR-RI', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (49, '49', 'Anggota DPD', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (50, '50', 'Anggota BPK', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (51, '51', 'Presiden', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (52, '52', 'Wakil Presiden', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (53, '53', 'Anggota Mahkamah Konstitusi', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (54, '54', 'Anggota Kabinet/ Kementerian', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (55, '55', 'Duta Besar', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (56, '56', 'Gubernur', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (57, '57', 'Wakil Gubernur', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (58, '58', 'Bupati', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (59, '59', 'Wakil Bupati', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (60, '60', 'Walikota', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (61, '61', 'Wakil Walikota', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (62, '62', 'Anggota DPRD Provinsi', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (63, '63', 'Anggota DPRD Kabupaten/ Kota', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (64, '64', 'Dosen', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (65, '65', 'Guru', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (66, '66', 'Pilot', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (67, '67', 'Pengacara', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (68, '68', 'Notaris', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (69, '69', 'Arsitek', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (70, '70', 'Akuntan', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (71, '71', 'Konsultan', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (72, '72', 'Dokter', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (73, '73', 'Bidan', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (74, '74', 'Perawat', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (75, '75', 'Apoteker', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (76, '76', 'Psikiater/ Psikolog', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (77, '77', 'Penyiar Televisi', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (78, '78', 'Penyiar Radio', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (79, '79', 'Pelaut', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (80, '80', 'Peneliti', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (81, '81', 'Sopir', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (82, '82', 'Pialang', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (83, '83', 'Paranormal', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (84, '84', 'Pedagang', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (85, '85', 'Perangkat Desa', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (86, '86', 'Kepala Desa', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (87, '87', 'Biarawati', NULL, NULL);
INSERT INTO `master_pekerjaans` VALUES (88, '88', 'Wiraswasta', NULL, NULL);

SET FOREIGN_KEY_CHECKS = 1;
