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

 Date: 04/05/2024 15:40:04
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for puskesmas
-- ----------------------------
DROP TABLE IF EXISTS `puskesmas`;
CREATE TABLE `puskesmas`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of puskesmas
-- ----------------------------
INSERT INTO `puskesmas` VALUES (1, 'Puskesmas Bulu Doang', NULL, NULL);
INSERT INTO `puskesmas` VALUES (2, 'Puskesmas Barana', NULL, NULL);
INSERT INTO `puskesmas` VALUES (3, 'Puskesmas Bangkala', NULL, NULL);
INSERT INTO `puskesmas` VALUES (4, 'Puskesmas Bontoramba', NULL, NULL);
INSERT INTO `puskesmas` VALUES (5, 'Puskesmas Bulusibatang', NULL, NULL);
INSERT INTO `puskesmas` VALUES (6, 'Puskesmas Tamalatea', NULL, NULL);
INSERT INTO `puskesmas` VALUES (7, 'Puskesmas Embo', NULL, NULL);
INSERT INTO `puskesmas` VALUES (8, 'Puskesmas Bululoe', NULL, NULL);
INSERT INTO `puskesmas` VALUES (9, 'Puskesmas Binamu Kota', NULL, NULL);
INSERT INTO `puskesmas` VALUES (10, 'Puskesmas Tolo', NULL, NULL);
INSERT INTO `puskesmas` VALUES (11, 'Puskesmas Arungkeke', NULL, NULL);
INSERT INTO `puskesmas` VALUES (12, 'Puskesmas Togo-Togo', NULL, NULL);
INSERT INTO `puskesmas` VALUES (13, 'Puskesmas Tarowang', NULL, NULL);
INSERT INTO `puskesmas` VALUES (14, 'Puskesmas Tino', NULL, NULL);

SET FOREIGN_KEY_CHECKS = 1;
