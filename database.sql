/*
MySQL Backup
Source Server Version: 5.5.25
Source Database: wallcrown
Date: 5/31/2016 09:27:53
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
--  Table structure for `anti_static_panel`
-- ----------------------------
DROP TABLE IF EXISTS `anti_static_panel`;
CREATE TABLE `anti_static_panel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `carpets`
-- ----------------------------
DROP TABLE IF EXISTS `carpets`;
CREATE TABLE `carpets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `hi_speed_door`
-- ----------------------------
DROP TABLE IF EXISTS `hi_speed_door`;
CREATE TABLE `hi_speed_door` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

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
--  Table structure for `item_categories`
-- ----------------------------
DROP TABLE IF EXISTS `item_categories`;
CREATE TABLE `item_categories` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(50) DEFAULT NULL,
  `cat_name` varchar(150) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `creaate_user` int(11) DEFAULT NULL,
  `inactive` tinyint(1) DEFAULT '0',
  `image` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `pcv_strips`
-- ----------------------------
DROP TABLE IF EXISTS `pcv_strips`;
CREATE TABLE `pcv_strips` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `swing_door`
-- ----------------------------
DROP TABLE IF EXISTS `swing_door`;
CREATE TABLE `swing_door` (
  `id` int(11) NOT NULL DEFAULT '0',
  `image` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

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
--  Table structure for `wallpaper`
-- ----------------------------
DROP TABLE IF EXISTS `wallpaper`;
CREATE TABLE `wallpaper` (
  `id` int(11) NOT NULL DEFAULT '0',
  `image` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `window_coverings`
-- ----------------------------
DROP TABLE IF EXISTS `window_coverings`;
CREATE TABLE `window_coverings` (
  `id` int(11) NOT NULL DEFAULT '0',
  `image` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records 
-- ----------------------------
INSERT INTO `anti_static_panel` VALUES ('2','7.jpg','v','v');
INSERT INTO `carpets` VALUES ('2','2.jpg','title','desription'), ('3','3.jpg','b','v');
INSERT INTO `ci_sessions` VALUES ('025b00093b4578d2c5d82956c27aa21f','::1','Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.94 Safari/537.36','1462493117','a:2:{s:9:\"user_data\";s:0:\"\";s:4:\"user\";a:11:{s:2:\"id\";s:1:\"1\";s:8:\"username\";s:5:\"admin\";s:5:\"fname\";s:3:\"Rey\";s:5:\"lname\";s:6:\"Tejada\";s:5:\"mname\";s:0:\"\";s:6:\"suffix\";s:0:\"\";s:9:\"full_name\";s:12:\"Rey  Tejada \";s:7:\"role_id\";s:1:\"1\";s:4:\"role\";s:14:\"Administrator \";s:6:\"access\";s:3:\"all\";s:3:\"img\";s:46:\"http://localhost/wallcr0wn/uploads/users/1.png\";}}'), ('293d17a3ec1339dd67e9b1acb10a18d5','::1','Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.112 Safari/537.36','1462151415','a:2:{s:9:\"user_data\";s:0:\"\";s:4:\"user\";a:11:{s:2:\"id\";s:1:\"1\";s:8:\"username\";s:5:\"admin\";s:5:\"fname\";s:3:\"Rey\";s:5:\"lname\";s:6:\"Tejada\";s:5:\"mname\";s:0:\"\";s:6:\"suffix\";s:0:\"\";s:9:\"full_name\";s:12:\"Rey  Tejada \";s:7:\"role_id\";s:1:\"1\";s:4:\"role\";s:14:\"Administrator \";s:6:\"access\";s:3:\"all\";s:3:\"img\";s:46:\"http://localhost/wallcr0wn/uploads/users/1.png\";}}'), ('2bb5e51c8e35f4ec3fdeed5bdd1c8c10','::1','Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR ','1464154840',''), ('3b92551da02ee1bea0772ddde4f55699','::1','Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.109 Safari/537.36','1455513913','a:2:{s:9:\"user_data\";s:0:\"\";s:4:\"user\";a:11:{s:2:\"id\";s:1:\"1\";s:8:\"username\";s:5:\"admin\";s:5:\"fname\";s:3:\"Rey\";s:5:\"lname\";s:6:\"Tejada\";s:5:\"mname\";s:0:\"\";s:6:\"suffix\";s:0:\"\";s:9:\"full_name\";s:12:\"Rey  Tejada \";s:7:\"role_id\";s:1:\"1\";s:4:\"role\";s:14:\"Administrator \";s:6:\"access\";s:3:\"all\";s:3:\"img\";s:45:\"http://localhost/template/uploads/users/1.png\";}}'), ('60acf92b3bd7153f0dd2ae3846d4e170','::1','Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.109 Safari/537.36','1455263464','a:2:{s:9:\"user_data\";s:0:\"\";s:4:\"user\";a:11:{s:2:\"id\";s:1:\"1\";s:8:\"username\";s:5:\"admin\";s:5:\"fname\";s:3:\"Rey\";s:5:\"lname\";s:6:\"Tejada\";s:5:\"mname\";s:0:\"\";s:6:\"suffix\";s:0:\"\";s:9:\"full_name\";s:12:\"Rey  Tejada \";s:7:\"role_id\";s:1:\"1\";s:4:\"role\";s:14:\"Administrator \";s:6:\"access\";s:3:\"all\";s:3:\"img\";s:45:\"http://localhost/template/uploads/users/1.png\";}}'), ('6d51242a32d348f0876afba637399238','::1','Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.36','1464566429',''), ('77e3e251d1fd22aa30ec566d3580e28c','::1','Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.94 Safari/537.36','1462317428','a:2:{s:9:\"user_data\";s:0:\"\";s:4:\"user\";a:11:{s:2:\"id\";s:1:\"1\";s:8:\"username\";s:5:\"admin\";s:5:\"fname\";s:3:\"Rey\";s:5:\"lname\";s:6:\"Tejada\";s:5:\"mname\";s:0:\"\";s:6:\"suffix\";s:0:\"\";s:9:\"full_name\";s:12:\"Rey  Tejada \";s:7:\"role_id\";s:1:\"1\";s:4:\"role\";s:14:\"Administrator \";s:6:\"access\";s:3:\"all\";s:3:\"img\";s:46:\"http://localhost/wallcr0wn/uploads/users/1.png\";}}'), ('8b19b222facd486ae941d48e1c897d51','::1','Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.111 Safari/537.36','1453698838',''), ('a09f051d52da0424c6a4277c01b24db1','::1','Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.109 Safari/537.36','1455241641','a:2:{s:9:\"user_data\";s:0:\"\";s:4:\"user\";a:11:{s:2:\"id\";s:1:\"1\";s:8:\"username\";s:5:\"admin\";s:5:\"fname\";s:3:\"Rey\";s:5:\"lname\";s:6:\"Tejada\";s:5:\"mname\";s:0:\"\";s:6:\"suffix\";s:0:\"\";s:9:\"full_name\";s:12:\"Rey  Tejada \";s:7:\"role_id\";s:1:\"1\";s:4:\"role\";s:14:\"Administrator \";s:6:\"access\";s:3:\"all\";s:3:\"img\";s:45:\"http://localhost/template/uploads/users/1.png\";}}'), ('a36aebebd35e0a286e59224c4363f86a','::1','Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.94 Safari/537.36','1462316826','a:2:{s:9:\"user_data\";s:0:\"\";s:4:\"user\";a:11:{s:2:\"id\";s:1:\"1\";s:8:\"username\";s:5:\"admin\";s:5:\"fname\";s:3:\"Rey\";s:5:\"lname\";s:6:\"Tejada\";s:5:\"mname\";s:0:\"\";s:6:\"suffix\";s:0:\"\";s:9:\"full_name\";s:12:\"Rey  Tejada \";s:7:\"role_id\";s:1:\"1\";s:4:\"role\";s:14:\"Administrator \";s:6:\"access\";s:3:\"all\";s:3:\"img\";s:46:\"http://localhost/wallcr0wn/uploads/users/1.png\";}}'), ('e709020710f0a33ddc3f15c319aa49fe','::1','Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.112 Safari/537.36','1462149651','a:2:{s:9:\"user_data\";s:0:\"\";s:4:\"user\";a:11:{s:2:\"id\";s:1:\"1\";s:8:\"username\";s:5:\"admin\";s:5:\"fname\";s:3:\"Rey\";s:5:\"lname\";s:6:\"Tejada\";s:5:\"mname\";s:0:\"\";s:6:\"suffix\";s:0:\"\";s:9:\"full_name\";s:12:\"Rey  Tejada \";s:7:\"role_id\";s:1:\"1\";s:4:\"role\";s:14:\"Administrator \";s:6:\"access\";s:3:\"all\";s:3:\"img\";s:46:\"http://localhost/wallcr0wn/uploads/users/1.png\";}}'), ('f18f05e78c9a033f42bbaccd699094ae','::1','Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.109 Safari/537.36','1455666942','a:2:{s:9:\"user_data\";s:0:\"\";s:4:\"user\";a:11:{s:2:\"id\";s:1:\"1\";s:8:\"username\";s:5:\"admin\";s:5:\"fname\";s:3:\"Rey\";s:5:\"lname\";s:6:\"Tejada\";s:5:\"mname\";s:0:\"\";s:6:\"suffix\";s:0:\"\";s:9:\"full_name\";s:12:\"Rey  Tejada \";s:7:\"role_id\";s:1:\"1\";s:4:\"role\";s:14:\"Administrator \";s:6:\"access\";s:3:\"all\";s:3:\"img\";s:41:\"http://localhost/Acct/uploads/users/1.png\";}}');
INSERT INTO `contents` VALUES ('1','body','About Us','Wallcrown Design Center offers a varied selection of global products to suit everyone\'s unique tastes . Once you have found what you want from our catalogue, we personally ensure that what we deliver into your homes and offices are only of the highest quality and specifically the brand and product that you have requested.	','banner-img4.jpg','about'), ('2','body','Gallery','Wallcrown Design Center offers a varied selection of global products to suit everyone\'s unique tastes . Once you have found what you want from our catalogue, we personally ensure that what we deliver into your homes and offices are only of the highest quality and specifically the brand and product that you have requested.','banner-img3.jpg','gallery'), ('3','body','Latest Update','Wallcrown Design Center offers a varied selection of global products to suit everyone\'s unique tastes . Once you have found what you want from our catalogue, we personally ensure that what we deliver into your homes and offices are only of the highest quality and specifically the brand and product that you have requested.	\r\n','banner-img2.jpg','#'), ('4','body','Milestones','0','banner-img4.jpg',NULL), ('5','body','Projects','0','banner-img3.jpg',NULL), ('6','body','E-catalogs',NULL,'1.jpg',NULL), ('7','body','Enquiries',NULL,'2.jpg',NULL), ('8','welcome','Welcome!','Wallcrown Design Center offers a varied selection of global products to suit everyone\'s unique tastes . Once you have found what you want from our catalogue, we personally ensure that what we deliver into your homes and offices are only of the highest quality and specifically the brand and product that you have requested.','0',NULL), ('9','about us','OUR HUMBLE BEGINNING','Wallcrown Design Center offers a varied selection of global products to suit everyone\'s unique tastes. Once you have found what you want from our catalogue, we personally ensure that what we deliver into your homes and offices are only of the highest quality and specifically the brand and product that you have requested.','gallery-img1.jpg',NULL), ('10','about us','','Wallcrown Design Center offers a varied selection of global products to suit everyone\'s unique tastes. Once you have found what you want from our catalogue, we personally ensure that what we deliver into your homes and offices are only of the highest quality and specifically the brand and product that you have requested.','0',NULL), ('11','about us','','With more than a decade and a half of professional experience in Wall Covering and PVC importation and distribution, being one of its pioneers, and also one of the major players in the business, Wallcrown Design Center can be trusted for all of your Wall Covering and PVC needs. We take pride in supplying you with only the highest quality products-both interior and industrial-through an exceedingly efficient order and delivery process that is coupled with excellent customer service provided by only the most knowledgeable and concerned associates. Due to our first-rate products and services, we have accumulated a nationwide range of clientele comprised of all the major food factories, restaurants, food chain, laboratories, cold storage companies, hotels, and establishments, both residential and commercial..','0',NULL), ('12','about us','OUR MISSION','To provide a wide variety of affordable interior and industrial products without compromising quality ','0',NULL), ('13','about us','','To provide continuous premium customer service and respond to all queries and suggestions ','',NULL), ('14','about us',NULL,'To generate profit, sustain continuous growth and provide financial reward to all the member of the the organization',NULL,NULL), ('15','about us','OUR STATUS QUO','At present, Wallcrown Design Center has evolved into a name that can be relied on by suppliers and clients alike. This is manifested in our being awarded sole distributorship of trustworthy international brands like Goodrich and Extruflex. Because we are passionate about providing our customers with only the excellence that they deserve, we have personall y made it our mission to guarantee the quality of our products and services.','0',NULL), ('16','about us','OUR FUTURE','At present, Wallcrown Design Center has evolved into a name that can be relied on by suppliers and clients alike. This is manifested in our being awarded sole distributorship of trustworthy international brands like Goodrich and Extruflex. Because we are passionate about providing our customers with only the excellence that they deserve, we have personall y made it our mission to guarantee the quality of our products and services.\r\n','a',NULL), ('17','contacts','Contacts','# 261 JP Rizal st. Brgy. San Roque (near 20th ave. & P. Tuazon st.) Quezon City, Philippines','',NULL), ('18','contacts','','+63 02 291-1272','',NULL), ('19','contacts',NULL,'+63 02 291-3730',NULL,NULL), ('20','contacts','','+63 02 292-4686 ','',NULL), ('21','contacts',NULL,'Mail:sales@wallcrownphilippines.com',NULL,NULL), ('22','testimonials','Testimonials','\"Write anything here about satisfied customer testimonial..\"',NULL,NULL), ('23','contacts','','Unit CS 242 MC Home Depot Fort Bonifacio \r\n32nd St. cor. Bonifacio Blvd., Global City, Taguig City\r\nPhilippines \r\n',NULL,NULL), ('24','contacts',NULL,'Tel Fax: \r\n+63 02 659-4576',NULL,NULL);
INSERT INTO `hi_speed_door` VALUES ('1','7.jpg','Title','Description3'), ('2','8.jpg','Title','Description'), ('3','9.jpg','Title','Description');
INSERT INTO `images` VALUES ('13','1.png','uploads/users/1.png','1','users',NULL,'2016-01-25 10:30:42','0'), ('14','3.png','uploads/users/3.png','3','users',NULL,'2016-01-25 10:32:15','0');
INSERT INTO `item_categories` VALUES ('1','category','INTERIOR','Experience a whole new world with our versatile wallcoverings. Designs vary from rustic, romantic, traditional, contemporary to geometric, etc. With wallpapers you can achieve the perfect effect, uniform in results to meet your needs','2016-05-13 09:32:26',NULL,'0','1.jpg','interior'), ('2','category','INDUSTRIAL','Experience a whole new world with our versatile wallcoverings. Designs vary from rustic, romantic, traditional, contemporary to geometric, etc. With w','2016-05-13 09:35:54',NULL,'0','2.jpg','industrial'), ('3','interior','Wallpaper','Experience a whole new world with our versatile wallcoverings. Designs vary from rustic, romantic, traditional, contemporary to geometric, etc. With wallpapers you can achieve the perfect effect, uniform in results to meet your needs.','2016-05-23 08:17:30',NULL,'0','11.jpg','wallpaper'), ('4','interior','Carpets','Swathe your floors with only the most luxurious floor covering that was ever invented. Carpets are durable, comfortable, and easy to maintain. Carpet also protects agains falls and accidents with its dry, non-slip, and heat-retentive surface.','2016-05-23 08:17:38',NULL,'0','12.jpg','carpets'), ('5','interior','Window Coverings','Our extensive selection of window coverings will surely enhance the theme of your sorroundings. We have horizontal blinds, woodlike blinds, roller shades and Roman shades that will surely provide you functionality, durability, convenience and style.','2016-05-23 08:17:41',NULL,'0','13.jpg','window_covering'), ('6','industrial','PCV Strips','EXTRUFLEX PVC Strip Doors consists of a series of flexible, transparent overlapping strips which are hung from sturdy aluminum mounting hardware. ','2016-05-23 08:17:43',NULL,'0','9.jpg','pcv_strips'), ('7','industrial','Swing Door','CLEARWAY PVC Swing Doors make your production floor more effecient. With there 2-way swing action, these doors enable the flow of production in your manufacturing or retailing floors run smoothly.','2016-05-23 08:17:46',NULL,'0','12.jpg','swing_door'), ('8','industrial','Hi-speed Door','MAVIFLEX door is a High speed door with condensed Maviflex\'s technologies. This compact and quiet door fits all your indoor environments. Furthermore, we can tailor-make your door, to maximize your budget, according to your specifications. Equipped with a','2016-05-23 08:17:49',NULL,'0','13.jpg','hi_speed_door'), ('9','industrial','Anti-static Panel','ACHILLES have developed innovative plating method, which is totally different from the conventional etching plating method and can be applied to the plastic surface. We are now working on the project aiming at its commercialization. Fully utilizing our 20','2016-05-23 08:17:52',NULL,'0','10.jpg','anti_static_panel');
INSERT INTO `logs` VALUES ('1','1','Rey  Tejada  Logged In.',NULL,'2016-02-12 09:47:55','login'), ('2','1','Rey  Tejada  Logged In.',NULL,'2016-02-12 13:04:06','login'), ('3','1','Rey  Tejada  Logged Out.',NULL,'2016-02-12 15:27:54','logout'), ('4','1','Rey  Tejada  Logged In.',NULL,'2016-02-12 15:28:00','login'), ('5','1','Rey  Tejada  Logged Out.',NULL,'2016-02-12 15:51:04','logout'), ('6','1','Rey  Tejada  Logged In.',NULL,'2016-02-12 15:51:11','login'), ('7','1','Rey  Tejada  Logged In.',NULL,'2016-02-15 07:30:15','login'), ('8','1','Rey  Tejada  Logged Out.',NULL,'2016-02-15 09:19:33','logout'), ('9','1','Rey  Tejada  Logged In.',NULL,'2016-02-15 09:28:28','login'), ('10','1','Rey  Tejada  Logged Out.',NULL,'2016-02-15 09:28:37','logout'), ('11','1','Rey  Tejada  Logged In.',NULL,'2016-02-15 09:48:09','login'), ('12','1','Rey  Tejada  Logged Out.',NULL,'2016-02-15 09:48:14','logout'), ('13','1','Rey  Tejada  Logged In.',NULL,'2016-02-15 11:56:52','login'), ('14','1','Rey  Tejada  Logged Out.',NULL,'2016-02-15 12:10:24','logout'), ('15','1','Rey  Tejada  Logged In.',NULL,'2016-02-15 12:10:28','login'), ('16','1','Rey  Tejada  Logged Out.',NULL,'2016-02-15 12:12:32','logout'), ('17','1','Rey  Tejada  Logged In.',NULL,'2016-02-15 12:12:39','login'), ('18','1','Rey  Tejada  Logged Out.',NULL,'2016-02-15 13:11:03','logout'), ('19','1','Rey  Tejada  Logged In.',NULL,'2016-02-15 13:11:20','login'), ('20','1','Rey  Tejada  Logged Out.',NULL,'2016-02-15 13:19:42','logout'), ('21','3','Chris  Ilarde  Logged In.',NULL,'2016-02-15 13:19:47','login'), ('22','3','Chris  Ilarde  Logged Out.',NULL,'2016-02-15 13:25:11','logout'), ('23','1','Rey  Tejada  Logged In.',NULL,'2016-02-15 13:25:18','login'), ('24','1','Rey  Tejada  Logged In.',NULL,'2016-02-17 07:55:47','login'), ('25','1','Rey  Tejada  Logged In.',NULL,'2016-05-02 08:43:10','login'), ('26','1','Rey  Tejada  Logged In.',NULL,'2016-05-02 09:15:37','login'), ('27','1','Rey  Tejada  Logged In.',NULL,'2016-05-04 07:07:08','login'), ('28','1','Rey  Tejada  Logged In.',NULL,'2016-05-04 07:17:09','login'), ('29','1','Rey  Tejada  Logged In.',NULL,'2016-05-05 08:07:49','login'), ('30','1','Rey  Tejada  Logged Out.',NULL,'2016-05-06 08:05:17','logout'), ('31','1','Rey  Tejada  Logged In.',NULL,'2016-05-06 08:05:32','login'), ('32','1','Rey  Tejada  Logged In.',NULL,'2016-05-16 07:54:14','login'), ('33','1','Rey  Tejada  Logged Out.',NULL,'2016-05-16 15:25:14','logout'), ('34','1','Rey  Tejada  Logged In.',NULL,'2016-05-18 09:30:40','login'), ('35','1','Rey  Tejada  Logged Out.',NULL,'2016-05-23 09:36:18','logout'), ('36','1','Rey  Tejada  Logged In.',NULL,'2016-05-23 09:36:22','login'), ('37','1','Rey  Tejada  Logged Out.',NULL,'2016-05-23 09:36:26','logout'), ('38','1','Rey  Tejada  Logged In.',NULL,'2016-05-23 09:36:29','login'), ('39','1','Rey  Tejada  Logged Out.',NULL,'2016-05-23 09:36:33','logout'), ('40','1','Rey  Tejada  Logged In.',NULL,'2016-05-30 07:34:50','login'), ('41','1','Rey  Tejada  Logged In.',NULL,'2016-05-30 07:36:33','login'), ('42','1','Rey  Tejada  Logged Out.',NULL,'2016-05-30 08:00:29','logout');
INSERT INTO `pcv_strips` VALUES ('2','4.jpg','title','description');
INSERT INTO `swing_door` VALUES ('2','9.jpg','Title','Description'), ('3','2.jpg','Title','Description'), ('4','7.jpg','Title','Description');
INSERT INTO `trans_types` VALUES ('10','sales','00000001'), ('20','receivings','R000001'), ('30','adjustment','A000001'), ('11','sales void','V000001'), ('40','customer deposit','C000001');
INSERT INTO `uom` VALUES ('1','pc','pieces','0'), ('2','kg','kilograms','0'), ('3','lb','pounds','0'), ('6','L','litres','0');
INSERT INTO `users` VALUES ('1','admin','5f4dcc3b5aa765d61d8327deb882cf99','1234456','Rey','','Tejada','','1','rey.tejada01@gmail.com','male','2014-06-16 14:41:31','0'), ('3','chris','5f4dcc3b5aa765d61d8327deb882cf99','1234456','Chris','','Ilarde','','2','chris@mail.com','male','2016-01-25 10:31:14','0'), ('4','Lyon','e64b78fc3bc91bcbc7dc232ba8ec59e0','123456789','Nicko','D','Quiamco','','1','admin','male','2016-05-04 07:54:04','0');
INSERT INTO `user_roles` VALUES ('1','Administrator ','System Administrator','all'), ('2','Manager','Manager','control,user,roles'), ('3','Employee','Employee','control,user');
INSERT INTO `wallpaper` VALUES ('3','3.jpg','industry','1774, from French industriel, from Medieval Latin industrialis, from Latin industria (see industry). Earlier the word had been used in English in a sense \"resulting from labor\" (1580s); the modern use is considered a reborrowing. Meaning \"suitable for industrial use\" is from 1904. As a style of dance music, attested from 1988. Industrial revolution was in use by 1840 to refer to recent developments and changes in England and elsewhere.'), ('4','4.jpg','Title','1774, from French industriel, from Medieval Latin industrialis, from Latin industria (see industry). Earlier the word had been used in English in a sense \"resulting from labor\" (1580s); the modern use is considered a reborrowing. Meaning \"suitable for industrial use\" is from 1904. As a style of dance music, attested from 1988. Industrial revolution was in use by 1840 to refer to recent developments and changes in England and elsewhere.'), ('5','5.jpg','Title','1774, from French industriel, from Medieval Latin industrialis, from Latin industria (see industry). Earlier the word had been used in English in a sense \"resulting from labor\" (1580s); the modern use is considered a reborrowing. Meaning \"suitable for industrial use\" is from 1904. As a style of dance music, attested from 1988. Industrial revolution was in use by 1840 to refer to recent developments and changes in England and elsewhere.'), ('6','6.jpg','Title','Description'), ('7','7.jpg','Title','Description'), ('8','8.jpg','Title','Description'), ('9','9.jpg','Title','Description'), ('10','10.jpg','Title','Description'), ('11','11.jpg','Title','Description');
INSERT INTO `window_coverings` VALUES ('2','2.jpg','title','description\r\n'), ('3','3.jpg','catnip','asdfa,owd,ao');
