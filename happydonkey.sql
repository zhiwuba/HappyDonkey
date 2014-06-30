/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50704
Source Host           : localhost:3306
Source Database       : happydonkey

Target Server Type    : MYSQL
Target Server Version : 50704
File Encoding         : 65001

Date: 2014-06-30 21:10:02
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for hd_comments
-- ----------------------------
DROP TABLE IF EXISTS `hd_comments`;
CREATE TABLE `hd_comments` (
  `comment_id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `paint_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `content` varchar(256) NOT NULL,
  `good` smallint(6) NOT NULL DEFAULT '0',
  `bad` smallint(6) NOT NULL DEFAULT '0',
  `date_added` datetime NOT NULL,
  PRIMARY KEY (`comment_id`),
  KEY `user_comment` (`user_id`),
  KEY `paint_comment` (`paint_id`),
  CONSTRAINT `paint_comment` FOREIGN KEY (`paint_id`) REFERENCES `hd_paints` (`paint_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `user_comment` FOREIGN KEY (`user_id`) REFERENCES `hd_users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4703 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for hd_favorites
-- ----------------------------
DROP TABLE IF EXISTS `hd_favorites`;
CREATE TABLE `hd_favorites` (
  `favorite_id` int(20) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `paint_id` int(20) NOT NULL,
  `date_added` datetime NOT NULL,
  PRIMARY KEY (`favorite_id`),
  KEY `user_favorite` (`user_id`),
  KEY `paint_favorite` (`paint_id`),
  CONSTRAINT `paint_favorite` FOREIGN KEY (`paint_id`) REFERENCES `hd_paints` (`paint_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `user_favorite` FOREIGN KEY (`user_id`) REFERENCES `hd_users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=199 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for hd_paints
-- ----------------------------
DROP TABLE IF EXISTS `hd_paints`;
CREATE TABLE `hd_paints` (
  `paint_id` int(11) NOT NULL AUTO_INCREMENT,
  `file_path` varchar(255) NOT NULL,
  `thumb_path` varchar(255) NOT NULL,
  `date_added` datetime(6) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `header` varchar(100) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `good` int(7) NOT NULL DEFAULT '0',
  `bad` int(7) NOT NULL,
  `mark` float(8,0) NOT NULL DEFAULT '0',
  `author` varchar(100) DEFAULT NULL,
  `source_url` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`paint_id`)
) ENGINE=InnoDB AUTO_INCREMENT=100 DEFAULT CHARSET=utf8;

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
  `avatar_thumb_path` varchar(255) DEFAULT NULL,
  `avatar_large_path` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
