/*
MySQL Backup
Source Server Version: 5.5.27
Source Database: wallcrown
Date: 5/2/2016 08:28:12
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
--  Table structure for `ci_sessions`
-- ----------------------------
DROP TABLE IF EXISTS `ci_sessions`;
CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` longtext NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `contents`
-- ----------------------------
DROP TABLE IF EXISTS `contents`;
CREATE TABLE `contents` (
  `id` int(11) NOT NULL,
  `code` varchar(150) DEFAULT NULL,
  `category` varchar(150) DEFAULT NULL,
  `content` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `images`
-- ----------------------------
DROP TABLE IF EXISTS `images`;
CREATE TABLE `images` (
  `img_id` int(11) NOT NULL AUTO_INCREMENT,
  `img_file_name` longtext,
  `img_path` longtext,
  `img_ref_id` int(11) DEFAULT NULL,
  `img_tbl` varchar(50) DEFAULT NULL,
  `img_blob` longblob,
  `datetime` datetime DEFAULT NULL,
  `disabled` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`img_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `logs`
-- ----------------------------
DROP TABLE IF EXISTS `logs`;
CREATE TABLE `logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `action` longtext,
  `reference` longtext,
  `datetime` datetime DEFAULT NULL,
  `type` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `trans_refs`
-- ----------------------------
DROP TABLE IF EXISTS `trans_refs`;
CREATE TABLE `trans_refs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_id` int(11) DEFAULT NULL,
  `trans_ref` varchar(55) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `inactive` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `trans_types`
-- ----------------------------
DROP TABLE IF EXISTS `trans_types`;
CREATE TABLE `trans_types` (
  `type_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `next_ref` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
--  Table structure for `uom`
-- ----------------------------
DROP TABLE IF EXISTS `uom`;
CREATE TABLE `uom` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(22) DEFAULT NULL,
  `name` varchar(55) DEFAULT NULL,
  `inactive` int(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `pin` varchar(55) DEFAULT NULL,
  `fname` varchar(55) DEFAULT NULL,
  `mname` varchar(55) DEFAULT NULL,
  `lname` varchar(55) DEFAULT NULL,
  `suffix` varchar(55) DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(11) DEFAULT NULL,
  `reg_date` datetime DEFAULT NULL,
  `inactive` int(11) DEFAULT '0',
  PRIMARY KEY (`id`,`username`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `user_roles`
-- ----------------------------
DROP TABLE IF EXISTS `user_roles`;
CREATE TABLE `user_roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role` varchar(50) NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  `access` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records 
-- ----------------------------
INSERT INTO `ci_sessions` VALUES ('3b92551da02ee1bea0772ddde4f55699','::1','Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.109 Safari/537.36','1455513913','a:2:{s:9:\"user_data\";s:0:\"\";s:4:\"user\";a:11:{s:2:\"id\";s:1:\"1\";s:8:\"username\";s:5:\"admin\";s:5:\"fname\";s:3:\"Rey\";s:5:\"lname\";s:6:\"Tejada\";s:5:\"mname\";s:0:\"\";s:6:\"suffix\";s:0:\"\";s:9:\"full_name\";s:12:\"Rey  Tejada \";s:7:\"role_id\";s:1:\"1\";s:4:\"role\";s:14:\"Administrator \";s:6:\"access\";s:3:\"all\";s:3:\"img\";s:45:\"http://localhost/template/uploads/users/1.png\";}}'), ('60acf92b3bd7153f0dd2ae3846d4e170','::1','Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.109 Safari/537.36','1455263464','a:2:{s:9:\"user_data\";s:0:\"\";s:4:\"user\";a:11:{s:2:\"id\";s:1:\"1\";s:8:\"username\";s:5:\"admin\";s:5:\"fname\";s:3:\"Rey\";s:5:\"lname\";s:6:\"Tejada\";s:5:\"mname\";s:0:\"\";s:6:\"suffix\";s:0:\"\";s:9:\"full_name\";s:12:\"Rey  Tejada \";s:7:\"role_id\";s:1:\"1\";s:4:\"role\";s:14:\"Administrator \";s:6:\"access\";s:3:\"all\";s:3:\"img\";s:45:\"http://localhost/template/uploads/users/1.png\";}}'), ('8b19b222facd486ae941d48e1c897d51','::1','Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.111 Safari/537.36','1453698838',''), ('a09f051d52da0424c6a4277c01b24db1','::1','Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.109 Safari/537.36','1455241641','a:2:{s:9:\"user_data\";s:0:\"\";s:4:\"user\";a:11:{s:2:\"id\";s:1:\"1\";s:8:\"username\";s:5:\"admin\";s:5:\"fname\";s:3:\"Rey\";s:5:\"lname\";s:6:\"Tejada\";s:5:\"mname\";s:0:\"\";s:6:\"suffix\";s:0:\"\";s:9:\"full_name\";s:12:\"Rey  Tejada \";s:7:\"role_id\";s:1:\"1\";s:4:\"role\";s:14:\"Administrator \";s:6:\"access\";s:3:\"all\";s:3:\"img\";s:45:\"http://localhost/template/uploads/users/1.png\";}}'), ('f18f05e78c9a033f42bbaccd699094ae','::1','Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.109 Safari/537.36','1455666942','a:2:{s:9:\"user_data\";s:0:\"\";s:4:\"user\";a:11:{s:2:\"id\";s:1:\"1\";s:8:\"username\";s:5:\"admin\";s:5:\"fname\";s:3:\"Rey\";s:5:\"lname\";s:6:\"Tejada\";s:5:\"mname\";s:0:\"\";s:6:\"suffix\";s:0:\"\";s:9:\"full_name\";s:12:\"Rey  Tejada \";s:7:\"role_id\";s:1:\"1\";s:4:\"role\";s:14:\"Administrator \";s:6:\"access\";s:3:\"all\";s:3:\"img\";s:41:\"http://localhost/Acct/uploads/users/1.png\";}}');
INSERT INTO `images` VALUES ('13','1.png','uploads/users/1.png','1','users',NULL,'2016-01-25 10:30:42','0'), ('14','3.png','uploads/users/3.png','3','users',NULL,'2016-01-25 10:32:15','0');
INSERT INTO `logs` VALUES ('1','1','Rey  Tejada  Logged In.',NULL,'2016-02-12 09:47:55','login'), ('2','1','Rey  Tejada  Logged In.',NULL,'2016-02-12 13:04:06','login'), ('3','1','Rey  Tejada  Logged Out.',NULL,'2016-02-12 15:27:54','logout'), ('4','1','Rey  Tejada  Logged In.',NULL,'2016-02-12 15:28:00','login'), ('5','1','Rey  Tejada  Logged Out.',NULL,'2016-02-12 15:51:04','logout'), ('6','1','Rey  Tejada  Logged In.',NULL,'2016-02-12 15:51:11','login'), ('7','1','Rey  Tejada  Logged In.',NULL,'2016-02-15 07:30:15','login'), ('8','1','Rey  Tejada  Logged Out.',NULL,'2016-02-15 09:19:33','logout'), ('9','1','Rey  Tejada  Logged In.',NULL,'2016-02-15 09:28:28','login'), ('10','1','Rey  Tejada  Logged Out.',NULL,'2016-02-15 09:28:37','logout'), ('11','1','Rey  Tejada  Logged In.',NULL,'2016-02-15 09:48:09','login'), ('12','1','Rey  Tejada  Logged Out.',NULL,'2016-02-15 09:48:14','logout'), ('13','1','Rey  Tejada  Logged In.',NULL,'2016-02-15 11:56:52','login'), ('14','1','Rey  Tejada  Logged Out.',NULL,'2016-02-15 12:10:24','logout'), ('15','1','Rey  Tejada  Logged In.',NULL,'2016-02-15 12:10:28','login'), ('16','1','Rey  Tejada  Logged Out.',NULL,'2016-02-15 12:12:32','logout'), ('17','1','Rey  Tejada  Logged In.',NULL,'2016-02-15 12:12:39','login'), ('18','1','Rey  Tejada  Logged Out.',NULL,'2016-02-15 13:11:03','logout'), ('19','1','Rey  Tejada  Logged In.',NULL,'2016-02-15 13:11:20','login'), ('20','1','Rey  Tejada  Logged Out.',NULL,'2016-02-15 13:19:42','logout'), ('21','3','Chris  Ilarde  Logged In.',NULL,'2016-02-15 13:19:47','login'), ('22','3','Chris  Ilarde  Logged Out.',NULL,'2016-02-15 13:25:11','logout'), ('23','1','Rey  Tejada  Logged In.',NULL,'2016-02-15 13:25:18','login'), ('24','1','Rey  Tejada  Logged In.',NULL,'2016-02-17 07:55:47','login');
INSERT INTO `trans_types` VALUES ('10','sales','00000001'), ('20','receivings','R000001'), ('30','adjustment','A000001'), ('11','sales void','V000001'), ('40','customer deposit','C000001');
INSERT INTO `uom` VALUES ('1','pc','pieces','0'), ('2','kg','kilograms','0'), ('3','lb','pounds','0'), ('6','L','litres','0');
INSERT INTO `users` VALUES ('1','admin','5f4dcc3b5aa765d61d8327deb882cf99','1234456','Rey','','Tejada','','1','rey.tejada01@gmail.com','male','2014-06-16 14:41:31','0'), ('3','chris','5f4dcc3b5aa765d61d8327deb882cf99','1234456','Chris','','Ilarde','','2','chris@mail.com','male','2016-01-25 10:31:14','0');
INSERT INTO `user_roles` VALUES ('1','Administrator ','System Administrator','all'), ('2','Manager','Manager','control,user'), ('3','Employee','Employee','control,user');
