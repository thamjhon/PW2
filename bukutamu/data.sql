/*
 Navicat Premium Data Transfer
 Source Server         : lutfi
 Source Server Type    : MySQL
 Source Server Version : 50724
 Source Host           : localhost:3306
 Source Schema         : datatamu
 Target Server Type    : MySQL
 Target Server Version : 50724
 File Encoding         : 65001
 Date: 25/05/2021 13:13:02
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tamu
-- ----------------------------
DROP TABLE IF EXISTS `tamu`;
CREATE TABLE `tamu`  (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `address` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `city` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `msg` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tamu
-- ----------------------------
INSERT INTO `tamu` VALUES (1, 'nanda', 'nanda@gmail.com', 'temanggung', 'jawa tengah', 'lohe');
INSERT INTO `tamu` VALUES (2, 'risky', 'risky@gmail.com', 'bogor', 'jawabarat', 'holee');
INSERT INTO `tamu` VALUES (3, 'maulana', 'maulana@gmail.com', 'tangerang', 'banten', 'hokee');
INSERT INTO `tamu` VALUES (4, 'tham', 'tham@gmail.com', 'bandung', 'jawabarat', 'jiaaah');
INSERT INTO `tamu` VALUES (5, 'jhon', 'jhon@gmail.com', 'jakarta', 'DKI Jakarta', 'hiyahiyahiya');

SET FOREIGN_KEY_CHECKS = 1;