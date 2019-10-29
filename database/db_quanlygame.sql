/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100315
 Source Host           : localhost:3306
 Source Schema         : db_quanlygame

 Target Server Type    : MySQL
 Target Server Version : 100315
 File Encoding         : 65001

 Date: 29/10/2019 16:09:09
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for cauhinhapp
-- ----------------------------
DROP TABLE IF EXISTS `cauhinhapp`;
CREATE TABLE `cauhinhapp`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `co_hoi_sai` int(10) NULL DEFAULT NULL,
  `thoi_gian_tra_loi` int(10) NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for cauhinhdiemcauhoi
-- ----------------------------
DROP TABLE IF EXISTS `cauhinhdiemcauhoi`;
CREATE TABLE `cauhinhdiemcauhoi`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `thu_tu` int(10) NULL DEFAULT NULL,
  `diem` int(10) NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for cauhinhtrogiup
-- ----------------------------
DROP TABLE IF EXISTS `cauhinhtrogiup`;
CREATE TABLE `cauhinhtrogiup`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `loai_tro_giup` int(10) NULL DEFAULT NULL,
  `thu_tu` int(10) NULL DEFAULT NULL,
  `credit` int(255) NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for cauhoi
-- ----------------------------
DROP TABLE IF EXISTS `cauhoi`;
CREATE TABLE `cauhoi`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `noi_dung` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `linh_vuc_id` int(10) NULL DEFAULT NULL,
  `phuong_an_a` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `phuong_an_b` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `phuong_an_c` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `phuong_an_d` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `dap_an` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `xoa` smallint(1) NULL DEFAULT 1,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `linh_vuc_id`(`linh_vuc_id`) USING BTREE,
  CONSTRAINT `cauhoi_ibfk_1` FOREIGN KEY (`linh_vuc_id`) REFERENCES `linhvuc` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of cauhoi
-- ----------------------------
INSERT INTO `cauhoi` VALUES (1, '1 + 1 = ?', 1, '2', '3', '4', '5', '2', 2, '2019-10-21 03:58:49', '2019-10-29 08:33:42');
INSERT INTO `cauhoi` VALUES (2, 'Tắt đèn là do ai sáng tác', 2, 'An', 'Thư', 'Ngô tất tố', 'Tất cả đều sai', '3', 2, '2019-10-21 04:26:12', '2019-10-21 04:26:26');

-- ----------------------------
-- Table structure for chitietluotchoi
-- ----------------------------
DROP TABLE IF EXISTS `chitietluotchoi`;
CREATE TABLE `chitietluotchoi`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `luot_choi_id` int(10) NULL DEFAULT NULL,
  `cau_hoi_id` int(10) NULL DEFAULT NULL,
  `phuong_an` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `diem` int(10) NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `cau_hoi_id`(`cau_hoi_id`) USING BTREE,
  INDEX `luot_choi_id`(`luot_choi_id`) USING BTREE,
  CONSTRAINT `chitietluotchoi_ibfk_1` FOREIGN KEY (`cau_hoi_id`) REFERENCES `cauhoi` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `chitietluotchoi_ibfk_2` FOREIGN KEY (`luot_choi_id`) REFERENCES `luotchoi` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for goicredit
-- ----------------------------
DROP TABLE IF EXISTS `goicredit`;
CREATE TABLE `goicredit`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `ten_goi` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `credit` int(255) NULL DEFAULT NULL,
  `so_tien` int(255) NULL DEFAULT NULL,
  `xoa` smallint(1) NULL DEFAULT 1,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of goicredit
-- ----------------------------
INSERT INTO `goicredit` VALUES (1, 'Thêm thời gian', 32534, 100, 1, '2019-10-29 05:18:29', '2019-10-29 05:18:29');

-- ----------------------------
-- Table structure for linhvuc
-- ----------------------------
DROP TABLE IF EXISTS `linhvuc`;
CREATE TABLE `linhvuc`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `ten_linh_vuc` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `xoa` smallint(1) NULL DEFAULT 1,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of linhvuc
-- ----------------------------
INSERT INTO `linhvuc` VALUES (1, 'Toán học', 1, '2019-10-21 03:27:19', '2019-10-21 03:27:31');
INSERT INTO `linhvuc` VALUES (2, 'Văn học', 2, '2019-10-21 03:32:12', '2019-10-21 04:48:18');
INSERT INTO `linhvuc` VALUES (3, 'Địa lý', 2, '2019-10-21 03:32:34', '2019-10-29 08:33:56');

-- ----------------------------
-- Table structure for lishsumuacredit
-- ----------------------------
DROP TABLE IF EXISTS `lishsumuacredit`;
CREATE TABLE `lishsumuacredit`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nguoi_choi_id` int(10) NULL DEFAULT NULL,
  `goi_credit_id` int(10) NULL DEFAULT NULL,
  `credit` int(255) NULL DEFAULT NULL,
  `so_tien` int(255) NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `nguoi_choi_id`(`nguoi_choi_id`) USING BTREE,
  INDEX `goi_credit_id`(`goi_credit_id`) USING BTREE,
  CONSTRAINT `lishsumuacredit_ibfk_1` FOREIGN KEY (`nguoi_choi_id`) REFERENCES `nguoichoi` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `lishsumuacredit_ibfk_2` FOREIGN KEY (`goi_credit_id`) REFERENCES `goicredit` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for luotchoi
-- ----------------------------
DROP TABLE IF EXISTS `luotchoi`;
CREATE TABLE `luotchoi`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nguoi_choi_id` int(10) NULL DEFAULT NULL,
  `so_cau` int(10) NULL DEFAULT NULL,
  `diem` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `ngay_gio` datetime(0) NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `nguoi_choi_id`(`nguoi_choi_id`) USING BTREE,
  CONSTRAINT `luotchoi_ibfk_1` FOREIGN KEY (`nguoi_choi_id`) REFERENCES `nguoichoi` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 23 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (10, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (11, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (12, '2019_10_20_034451_linhvuc', 1);
INSERT INTO `migrations` VALUES (13, '2019_10_20_040823_cauhinhapp', 2);
INSERT INTO `migrations` VALUES (14, '2019_10_20_040904_cauhinhdiemcauhoi', 2);
INSERT INTO `migrations` VALUES (15, '2019_10_20_040942_cauhinhtrogiup', 3);
INSERT INTO `migrations` VALUES (16, '2019_10_20_040946_cauhoi', 3);
INSERT INTO `migrations` VALUES (17, '2019_10_20_041002_chitietluotchoi', 3);
INSERT INTO `migrations` VALUES (18, '2019_10_20_041023_goicredit', 3);
INSERT INTO `migrations` VALUES (19, '2019_10_20_041040_lishsumuacredit', 4);
INSERT INTO `migrations` VALUES (20, '2019_10_20_041058_luotchoi', 4);
INSERT INTO `migrations` VALUES (21, '2019_10_20_041112_nguoichoi', 4);
INSERT INTO `migrations` VALUES (22, '2019_10_20_041121_quantrivien', 4);

-- ----------------------------
-- Table structure for nguoichoi
-- ----------------------------
DROP TABLE IF EXISTS `nguoichoi`;
CREATE TABLE `nguoichoi`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `ten_dang_nhap` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `mat_khau` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `email` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `hinh_dai_dien` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `diem_cao_nhat` int(255) NULL DEFAULT NULL,
  `credit` int(255) NULL DEFAULT NULL,
  `xoa` smallint(1) NULL DEFAULT 1,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of nguoichoi
-- ----------------------------
INSERT INTO `nguoichoi` VALUES (1, 'Dao truong an', NULL, NULL, NULL, NULL, NULL, 2, '2019-10-20 10:08:05', '2019-10-20 13:42:45');
INSERT INTO `nguoichoi` VALUES (2, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2019-10-20 10:08:57', '2019-10-20 13:02:32');
INSERT INTO `nguoichoi` VALUES (3, 'Dao truong an', '12324324534546', 'reystay.rz@gmail.com', 'C:\\xampp\\tmp\\php6D77.tmp', 12, 32534, 2, '2019-10-20 10:11:14', '2019-10-21 09:51:58');
INSERT INTO `nguoichoi` VALUES (4, 'Dao truong an', '12345678', 'reystay.rz@gmail.com', 'C:\\xampp\\tmp\\php430A.tmp', 12, 32534, 1, '2019-10-20 13:17:25', '2019-10-20 13:42:29');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for quantrivien
-- ----------------------------
DROP TABLE IF EXISTS `quantrivien`;
CREATE TABLE `quantrivien`  (
  `id` int(10) NOT NULL,
  `ten_dang_nhap` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `mat_khau` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `ho_ten` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `xoa` smallint(1) NULL DEFAULT 1,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp(0) NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Đào Trường An', 'reystay.rz@gmail.com', NULL, '$2y$10$3hwmeHEVZPv2rgt50clqr.9msYFmHByydmOVlg.JAJk.rSuBI2hmW', 'yttfhRz1EbgTwbP03hXDq2ZIbpuZ75oySz8v8wM61mi3mSA9H93EuAGgOTBl', '2019-10-20 04:50:25', '2019-10-20 04:50:25');

SET FOREIGN_KEY_CHECKS = 1;
