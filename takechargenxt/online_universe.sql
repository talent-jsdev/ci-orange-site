/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100408
 Source Host           : localhost:3306
 Source Schema         : online_universe

 Target Server Type    : MySQL
 Target Server Version : 100408
 File Encoding         : 65001

 Date: 04/11/2019 20:25:52
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `phonenum` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES (1, 'aaa', 'NXT Access point X1 Location ', '363 N Sam Houston Pkwy E Suite 1100, Houston, TX 77060', '281-397-3244 ');
INSERT INTO `admin` VALUES (2, 'bbb', 'NXT Access point X2 Location ', '2950 N Loop W Suite 500, Houston, TX 77092', '281-397-3244');
INSERT INTO `admin` VALUES (3, 'ccc', 'NXT Access point X3 Location ', '6575 W Loop S Suite 500, Bellaire, TX 77401', '281-397-3244');
INSERT INTO `admin` VALUES (4, 'ddd', 'NXT Access point X4 Location ', '10777 Westheimer Rd Suite 1100, Houston, TX 77042', '281-397-3244');

-- ----------------------------
-- Table structure for security
-- ----------------------------
DROP TABLE IF EXISTS `security`;
CREATE TABLE `security`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `query` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for user_register
-- ----------------------------
DROP TABLE IF EXISTS `user_register`;
CREATE TABLE `user_register`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admin` int(11) NULL DEFAULT NULL,
  `firstname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `lastname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `city` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `state` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `zip` int(11) NULL DEFAULT NULL,
  `id_number` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `birthday` date NULL DEFAULT NULL,
  `phonenumber` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `security_question1` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `answer1` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `security_question2` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `answer2` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `security_question3` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `answer3` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user_register
-- ----------------------------
INSERT INTO `user_register` VALUES (7, NULL, 'fgfg', 'asdf', 'fgfdgfdgsgsdfg', 'hhghg', 'sdf', 32323, '34345435', 'ddd@gmail.com', '2019-11-09', '2522155', 'hjhjhjhj', 'dddd', 'Make and model of your first car', 'jkhjkhk', 'Make and model of your first car', 'ljkgfhdfg', 'Your favorite writer', 'fghsdfgdsg');

SET FOREIGN_KEY_CHECKS = 1;
