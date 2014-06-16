/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50704
Source Host           : localhost:3306
Source Database       : happydonkey

Target Server Type    : MYSQL
Target Server Version : 50704
File Encoding         : 65001

Date: 2014-06-16 20:15:54
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for hd_comments
-- ----------------------------
DROP TABLE IF EXISTS `hd_comments`;
CREATE TABLE `hd_comments` (
  `comment_id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `comment` varchar(256) NOT NULL,
  `good` smallint(6) NOT NULL DEFAULT '0',
  `bad` smallint(6) NOT NULL DEFAULT '0',
  PRIMARY KEY (`comment_id`),
  KEY `user_comment` (`user_id`),
  CONSTRAINT `user_comment` FOREIGN KEY (`user_id`) REFERENCES `hd_users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for hd_favorites
-- ----------------------------
DROP TABLE IF EXISTS `hd_favorites`;
CREATE TABLE `hd_favorites` (
  `favorite_id` int(20) NOT NULL,
  `user_id` int(11) NOT NULL,
  `paint_id` int(20) NOT NULL,
  KEY `user_favorite` (`user_id`),
  KEY `paint_favorite` (`paint_id`),
  CONSTRAINT `paint_favorite` FOREIGN KEY (`paint_id`) REFERENCES `hd_paints` (`paint_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `user_favorite` FOREIGN KEY (`user_id`) REFERENCES `hd_users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for hd_marks
-- ----------------------------
DROP TABLE IF EXISTS `hd_marks`;
CREATE TABLE `hd_marks` (
  `mark_id` int(20) NOT NULL,
  `paint_id` int(11) NOT NULL,
  `good` smallint(6) NOT NULL DEFAULT '0',
  `bad` smallint(6) NOT NULL DEFAULT '0',
  `mark` float(6,0) NOT NULL,
  PRIMARY KEY (`mark_id`),
  KEY `mark_paint` (`paint_id`),
  CONSTRAINT `mark_paint` FOREIGN KEY (`paint_id`) REFERENCES `hd_paints` (`paint_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for hd_paints
-- ----------------------------
DROP TABLE IF EXISTS `hd_paints`;
CREATE TABLE `hd_paints` (
  `paint_id` int(11) NOT NULL AUTO_INCREMENT,
  `filename` varchar(60) NOT NULL,
  `filepath` varchar(255) NOT NULL,
  `date_added` datetime(6) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`paint_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for hd_users
-- ----------------------------
DROP TABLE IF EXISTS `hd_users`;
CREATE TABLE `hd_users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `salt` varchar(9) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date_added` datetime NOT NULL,
  `ip` varchar(40) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
