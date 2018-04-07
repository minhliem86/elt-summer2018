/*
Navicat MySQL Data Transfer

Source Server         : LIEMPHAN-C
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : elt_summer_2018

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-03-27 21:40:48
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for companies
-- ----------------------------
DROP TABLE IF EXISTS `companies`;
CREATE TABLE `companies` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `map` varchar(255) COLLATE utf8_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of companies
-- ----------------------------

-- ----------------------------
-- Table structure for events
-- ----------------------------
DROP TABLE IF EXISTS `events`;
CREATE TABLE `events` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `img_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `center_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of events
-- ----------------------------
INSERT INTO `events` VALUES ('1', 'ILA Nguyễn Đình Chiểu Kickoff', '2018-03-12 11:00:00', '2018-03-12 12:55:00', 'photos/shares/asd/JS.png', '<p>Cuối năm 1971, chị sinh b&eacute; &uacute;t Mỹ Linh. Như bao gia đ&igrave;nh n&ocirc;ng d&acirc;n ngh&egrave;o xứ n&agrave;y, hằng ng&agrave;y chị Tư bơi xuồng ra chợ mua rau, b&aacute;n c&aacute; rồi quay về bươn chải ra đồng l&agrave;m ruộng. Chị lu&ocirc;n vững l&ograve;ng tin v&agrave; lo toan việc nh&agrave;, b&iacute; mật tham gia c&aacute;ch mạng để chồng an t&acirc;m chiến đấu với kẻ th&ugrave;. Cứ mỗi lần nghe đạn ph&aacute;o dội xuống căn cứ Mỹ Trinh, th&igrave; ngay sau đ&oacute; người ta thấy chị Tư tất tả ch&egrave;o xuồng đi hỏi han tin tức v&igrave; chị lo cho chồng v&agrave; 3 đứa em ruột đang sống trong v&ugrave;ng căn cứ.</p>', '2018-03-09 03:05:11', '2018-03-09 04:50:32', '1');

-- ----------------------------
-- Table structure for facebooks
-- ----------------------------
DROP TABLE IF EXISTS `facebooks`;
CREATE TABLE `facebooks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `order` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of facebooks
-- ----------------------------

-- ----------------------------
-- Table structure for galleries
-- ----------------------------
DROP TABLE IF EXISTS `galleries`;
CREATE TABLE `galleries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of galleries
-- ----------------------------
INSERT INTO `galleries` VALUES ('4', 'Summer 2017', 'photos/shares/product/K.png', null, '1', '2018-03-27 09:19:03', '2018-03-27 09:19:03');

-- ----------------------------
-- Table structure for metables
-- ----------------------------
DROP TABLE IF EXISTS `metables`;
CREATE TABLE `metables` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `metable_id` int(11) NOT NULL,
  `metable_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_keyword` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8_unicode_ci,
  `meta_img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of metables
-- ----------------------------

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('2017_01_06_092457_create_table_promotions', '1');
INSERT INTO `migrations` VALUES ('2017_01_06_092858_create_table_testimonials', '1');
INSERT INTO `migrations` VALUES ('2017_01_12_094857_create_register_table', '1');
INSERT INTO `migrations` VALUES ('2017_02_25_004211_create_metable_table', '1');
INSERT INTO `migrations` VALUES ('2017_06_15_031022_create_photos_table', '1');
INSERT INTO `migrations` VALUES ('2017_07_19_135449_create_products_table', '1');
INSERT INTO `migrations` VALUES ('2017_07_19_140408_create_companies_table', '1');
INSERT INTO `migrations` VALUES ('2017_07_25_003715_laratrust_setup_tables', '1');
INSERT INTO `migrations` VALUES ('2018_03_02_044534_create_programs_table', '1');
INSERT INTO `migrations` VALUES ('2018_03_02_050321_create_facebooks_table', '1');
INSERT INTO `migrations` VALUES ('2018_03_05_035529_create_events_table', '1');
INSERT INTO `migrations` VALUES ('2018_03_09_025710_add_center_id_to_events_table', '2');
INSERT INTO `migrations` VALUES ('2018_03_14_095055_add_subtitle_column_to_program_table', '3');
INSERT INTO `migrations` VALUES ('2018_03_20_103103_create_galleries_table', '4');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for permissions
-- ----------------------------
DROP TABLE IF EXISTS `permissions`;
CREATE TABLE `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of permissions
-- ----------------------------
INSERT INTO `permissions` VALUES ('1', 'login', 'Login Dashboard', 'Login to DashBoard', '2018-03-08 09:54:12', '2018-03-08 09:54:12');

-- ----------------------------
-- Table structure for permission_role
-- ----------------------------
DROP TABLE IF EXISTS `permission_role`;
CREATE TABLE `permission_role` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_role_id_foreign` (`role_id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of permission_role
-- ----------------------------
INSERT INTO `permission_role` VALUES ('1', '1');

-- ----------------------------
-- Table structure for permission_user
-- ----------------------------
DROP TABLE IF EXISTS `permission_user`;
CREATE TABLE `permission_user` (
  `permission_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `user_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  KEY `permission_user_permission_id_foreign` (`permission_id`),
  CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of permission_user
-- ----------------------------
INSERT INTO `permission_user` VALUES ('1', '1', 'App\\Models\\User');

-- ----------------------------
-- Table structure for photos
-- ----------------------------
DROP TABLE IF EXISTS `photos`;
CREATE TABLE `photos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thumb_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `filename` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `order` int(11) DEFAULT '0',
  `type` int(11) DEFAULT NULL,
  `photoable_id` int(11) NOT NULL,
  `photoable_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of photos
-- ----------------------------

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `price` int(11) DEFAULT NULL,
  `avatar_img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hot` tinyint(1) NOT NULL DEFAULT '0',
  `show_number` varchar(255) COLLATE utf8_unicode_ci DEFAULT '0',
  `order` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of products
-- ----------------------------

-- ----------------------------
-- Table structure for programs
-- ----------------------------
DROP TABLE IF EXISTS `programs`;
CREATE TABLE `programs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `content` text COLLATE utf8_unicode_ci,
  `img_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `order` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `subtitle` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of programs
-- ----------------------------
INSERT INTO `programs` VALUES ('1', 'JUMPSTART', 'jumpstart', 'Xu hướng cho trẻ học ngoại ngữ đặc biệt là Tiếng Anh sớm đang phát triển tại Việt Nam bởi các bậc cha mẹ nhận thấy được tầm quan trọng của Tiếng Anh trong việc tư duy, học tập sau này của trẻ.', '<div class=\"container-fluid\">\r\n<div class=\"row\">\r\n<div class=\"col-md-5\">\r\n<div class=\"wrap-img each animate\" data-animate=\"slideInLeft\">\r\n<div class=\"wrap-inner-img\"><img class=\"img-responsive\" src=\"/elt-summer2018/laravel-filemanager/photos/shares/asd/JS.png\" alt=\"\" /></div>\r\n</div>\r\n</div>\r\n<div class=\"col-md-7\">\r\n<div class=\"wrap-content each animate\" data-animate=\"slideInRight\">\r\n<h4 class=\"title-program\">Xuất sắc tiếng Anh</h4>\r\n<p>ILA ti&ecirc;n phong trong việc ứng dụng m&ocirc; h&igrave;nh gi&aacute;o dục của c&aacute;c nước ph&aacute;t triển, tạo một &ldquo;s&acirc;n chơi để học&rdquo; hấp dẫn với c&aacute;c hoạt động th&uacute; vị trong m&ocirc;i trường tiếng Anh 100% gi&aacute;o vi&ecirc;n người bản xứ, gi&aacute;o tr&igrave;nh quốc tế tối ưu 6 kỹ năng v&agrave;ng:</p>\r\n<ul>\r\n<li>Khả năng s&aacute;ng tạo</li>\r\n<li>Khả năng tự ho&agrave;n thiện bản th&acirc;n</li>\r\n<li>Kỹ năng hợp t&aacute;c</li>\r\n<li>Kỹ năng giao tiếp</li>\r\n<li>Kiến thức c&ocirc;ng nghệ</li>\r\n<li>Tư duy phản biện</li>\r\n</ul>\r\n<p>Những dự &aacute;n th&uacute; vị trong qu&aacute; tr&igrave;nh học tập sẽ tạo điều kiện cho c&aacute;c b&eacute; ở độ tuổi thiếu nhi hợp t&aacute;c với nhau chặt chẽ, thể hiện sự s&aacute;ng tạo theo những c&aacute;ch kh&aacute;c nhau, c&ugrave;ng nhau l&agrave;m n&ecirc;n &ldquo; th&agrave;nh quả\" đ&aacute;ng tự h&agrave;o, gi&uacute;p c&aacute;c b&eacute; ph&aacute; bỏ r&agrave;o cản về ng&ocirc;n ngữ , tự do kh&aacute;m ph&aacute; thế giới, tự tin thể hiện bản th&acirc;n theo c&aacute;ch ri&ecirc;ng biệt nhất.</p>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"row\">\r\n<div class=\"col-md-5 col-md-push-7\">\r\n<div class=\"wrap-img each animate\" data-animate=\"slideInRight\">\r\n<div class=\"wrap-inner-img right-img\"><img class=\"img-responsive\" src=\"/elt-summer2018/laravel-filemanager/photos/shares/asd/JS.png\" alt=\"\" /></div>\r\n</div>\r\n</div>\r\n<div class=\"col-md-7 col-md-pull-5\">\r\n<div class=\"wrap-content each animate\" data-animate=\"slideInLeft\">\r\n<h4 class=\"title-program\">Vui chơi kh&aacute;m ph&aacute;</h4>\r\n<p>Trại h&egrave; ILA 2018 như cột mốc đầu ti&ecirc;n trong h&agrave;nh tr&igrave;nh khơi gợi đam m&ecirc; tiếng Anh , nơi c&aacute;c b&eacute; được tr&ograve; chuyện, vui chơi v&agrave; suy nghĩ bằng tiếng Anh cả ng&agrave;y với những những hoạt động ngoại kho&aacute; cực vui được thiết kế bởi đội ngũ gi&aacute;o vi&ecirc;n đầy t&acirc;m huyết của ILA li&ecirc;n kết với c&aacute;c đối t&aacute;c uy tin nhất : Học viện thể h&igrave;nh Cali Kids, học viện s&aacute;ng tạo c&ocirc;ng nghệ Teky, LEGO education, SSA Sports, Global Art.</p>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"row\">\r\n<div class=\"col-md-5\">\r\n<div class=\"wrap-img each animate\" data-animate=\"slideInLeft\">\r\n<div class=\"wrap-inner-img\"><img class=\"img-responsive\" src=\"/elt-summer2018/laravel-filemanager/photos/shares/asd/JS.png\" alt=\"\" /></div>\r\n</div>\r\n</div>\r\n<div class=\"col-md-7\">\r\n<div class=\"wrap-content each animate\" data-animate=\"slideInRight\">\r\n<h4 class=\"title-program\">San sẻ y&ecirc;u thương</h4>\r\n<p>Kh&ocirc;ng dừng lại ở một kh&oacute;a học tiếng Anh, trại h&egrave; ILA 2018 ứng dụng m&ocirc; h&igrave;nh gi&aacute;o dục đẳng cấp quốc tế, kết hợp ho&agrave;n hảo trong việc ph&aacute;t triển về mọi mặt. Đặc biệt, việc ứng dụng những điều được học để gi&uacute;p đỡ cho cộng đồng sẽ mang đến cho c&aacute;c em một &ldquo;m&ugrave;a h&egrave; lớn&rdquo; &yacute; nghĩa v&agrave; th&uacute; vị.</p>\r\n<p>R&egrave;n dũa tr&iacute; tuệ, thể chất v&agrave; l&ograve;ng nh&acirc;n &aacute;i kết hợp trong m&ocirc;i trường 100% tiếng Anh, gi&uacute;p c&aacute;c b&eacute; ph&aacute;t triển tối ưu ngay sau 2 th&aacute;ng ch&iacute;nh l&agrave; m&oacute;n qu&agrave; kh&ocirc;ng chỉ bổ &iacute;ch, &yacute; nghĩa m&agrave; c&ograve;n đầy t&iacute;nh nh&acirc;n văn m&agrave; ILA muốn mang đến cho c&aacute;c bạn nhỏ trong m&ugrave;a h&egrave; n&agrave;y.</p>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"row\">\r\n<div class=\"col-md-12\">\r\n<div class=\"wrap-after\">\r\n<p>Đ&atilde; đến l&uacute;c ch&agrave;o đ&oacute;n một thế hệ mới được chăm ch&uacute;t, y&ecirc;u thương, tr&acirc;n trọng v&agrave; c&oacute; cơ hội tốt nhất để toả s&aacute;ng tr&ecirc;n chặng đường kh&aacute;m ph&aacute; thế giới, kh&aacute;m ph&aacute; bản th&acirc;n đầy th&uacute; vị.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', 'photos/shares/product/K.png', '0', '1', '1', '2018-03-08 09:55:33', '2018-03-19 08:21:15', 'Dành cho học viên từ 4-7 tuổi');
INSERT INTO `programs` VALUES ('2', 'SUPER JUNIORS', 'super-juniors', 'Cân bằng giữa những mong muốn của cha mẹ và nhu cầu của bé. Trại hè ILA 2018 ứng dụng mô hình giáo dục đẳng cấp quốc tế, kết hợp hoàn hảo trong việc phát triển về mọi mặt. Đặc biệt, việc ứng dụng những điều được học để giúp đỡ cho cộng đồng sẽ mang đến cho các em một “mùa hè lớn” ý nghĩa và thú vị.', '<div class=\"container-fluid\">\r\n<div class=\"row\">\r\n<div class=\"col-md-12\">\r\n<div class=\"wrap-before\">\r\n<p>Đối với trẻ, h&egrave; vốn dĩ l&agrave; khoảng thời gian để c&aacute;c em được kh&aacute;m ph&aacute; thế giới, t&igrave;m kiếm những trải nghiệm l&yacute; th&uacute; kh&ocirc;ng c&oacute; ở trường lớp. L&agrave; m&ugrave;a h&egrave; m&agrave; c&aacute;c b&eacute; c&oacute; thể:</p>\r\n<ul>\r\n<li>Gặp gỡ bạn b&egrave;, trải nghiệm m&ocirc;i trường mới lạ</li>\r\n<li>Kết hợp những hoạt động thể thao, thể chất vui nhộn, h&agrave;o hứng</li>\r\n<li>Ph&aacute;t triển những năng khiếu m&agrave; m&igrave;nh y&ecirc;u th&iacute;ch</li>\r\n<li>Tham gia c&aacute;c hoạt động thiện nguyện, x&atilde; hội</li>\r\n</ul>\r\n<p>C&acirc;n bằng giữa những mong muốn của cha mẹ v&agrave; nhu cầu của b&eacute;. Trại h&egrave; ILA 2018 ứng dụng m&ocirc; h&igrave;nh gi&aacute;o dục đẳng cấp quốc tế, kết hợp ho&agrave;n hảo trong việc ph&aacute;t triển về mọi mặt. Đặc biệt, việc ứng dụng những điều được học để gi&uacute;p đỡ cho cộng đồng sẽ mang đến cho c&aacute;c em một &ldquo;m&ugrave;a h&egrave; lớn&rdquo; &yacute; nghĩa v&agrave; th&uacute; vị.</p>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"row\">\r\n<div class=\"col-md-5\">\r\n<div class=\"wrap-img each animate\" data-animate=\"slideInLeft\">\r\n<div class=\"wrap-inner-img\"><img class=\"img-responsive\" src=\"/elt-summer2018/laravel-filemanager/photos/shares/asd/JS.png\" alt=\"\" /></div>\r\n</div>\r\n</div>\r\n<div class=\"col-md-7\">\r\n<div class=\"wrap-content each animate\" data-animate=\"slideInRight\">\r\n<h4 class=\"title-program\">Xuất sắc tiếng Anh</h4>\r\n<p>ILA ti&ecirc;n phong trong việc ứng dụng m&ocirc; h&igrave;nh gi&aacute;o dục của c&aacute;c nước ph&aacute;t triển, tạo một &ldquo;s&acirc;n chơi để học&rdquo; hấp dẫn với c&aacute;c hoạt động th&uacute; vị trong m&ocirc;i trường tiếng Anh 100% gi&aacute;o vi&ecirc;n người bản xứ, gi&aacute;o tr&igrave;nh quốc tế tối ưu 6 kỹ năng v&agrave;ng, gi&uacute;p c&aacute;c em tự do trải nghiệm m&ugrave;a h&egrave; đầy m&agrave;u sắc m&agrave; vẫn ph&aacute;t triển bản th&acirc;n</p>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"row\">\r\n<div class=\"col-md-5 col-md-push-7\">\r\n<div class=\"wrap-img each animate\" data-animate=\"slideInRight\">\r\n<div class=\"wrap-inner-img right-img\"><img class=\"img-responsive\" src=\"/elt-summer2018/laravel-filemanager/photos/shares/asd/JS.png\" alt=\"\" /></div>\r\n</div>\r\n</div>\r\n<div class=\"col-md-7 col-md-pull-5\">\r\n<div class=\"wrap-content each animate\" data-animate=\"slideInLeft\">\r\n<h4 class=\"title-program\">Vui chơi kh&aacute;m ph&aacute;</h4>\r\n<p>Trại h&egrave; ILA 2018 như cột mốc đầu ti&ecirc;n trong h&agrave;nh tr&igrave;nh khơi gợi đam m&ecirc; tiếng Anh , nơi c&aacute;c b&eacute; được tr&ograve; chuyện, vui chơi v&agrave; suy nghĩ bằng tiếng Anh cả ng&agrave;y với những những hoạt động ngoại kho&aacute; cực vui được thiết kế bởi đội ngũ gi&aacute;o vi&ecirc;n đầy t&acirc;m huyết của ILA li&ecirc;n kết với c&aacute;c đối t&aacute;c uy tin nhất : Học viện thể h&igrave;nh Cali Kids, học viện s&aacute;ng tạo c&ocirc;ng nghệ Teky, LEGO education, SSA Sports, Global Art.</p>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"row\">\r\n<div class=\"col-md-5\">\r\n<div class=\"wrap-img each animate\" data-animate=\"slideInLeft\">\r\n<div class=\"wrap-inner-img\"><img class=\"img-responsive\" src=\"/elt-summer2018/laravel-filemanager/photos/shares/asd/JS.png\" alt=\"\" /></div>\r\n</div>\r\n</div>\r\n<div class=\"col-md-7\">\r\n<div class=\"wrap-content each animate\" data-animate=\"slideInRight\">\r\n<h4 class=\"title-program\">San sẻ y&ecirc;u thương</h4>\r\n<p>Kh&ocirc;ng dừng lại ở một kh&oacute;a học tiếng Anh, trại h&egrave; ILA 2018 ứng dụng m&ocirc; h&igrave;nh gi&aacute;o dục đẳng cấp quốc tế, kết hợp ho&agrave;n hảo trong việc ph&aacute;t triển về mọi mặt. Đặc biệt, việc ứng dụng những điều được học để gi&uacute;p đỡ cho cộng đồng sẽ mang đến cho c&aacute;c em một &ldquo;m&ugrave;a h&egrave; lớn&rdquo; &yacute; nghĩa v&agrave; th&uacute; vị.</p>\r\n<p>R&egrave;n dũa tr&iacute; tuệ, thể chất v&agrave; l&ograve;ng nh&acirc;n &aacute;i kết hợp trong m&ocirc;i trường 100% tiếng Anh, gi&uacute;p c&aacute;c b&eacute; ph&aacute;t triển tối ưu ngay sau 2 th&aacute;ng ch&iacute;nh l&agrave; m&oacute;n qu&agrave; kh&ocirc;ng chỉ bổ &iacute;ch, &yacute; nghĩa m&agrave; c&ograve;n đầy t&iacute;nh nh&acirc;n văn m&agrave; ILA muốn mang đến cho c&aacute;c bạn nhỏ trong m&ugrave;a h&egrave; n&agrave;y.</p>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"row\">\r\n<div class=\"col-md-12\">\r\n<div class=\"wrap-after\">\r\n<p>Đ&atilde; đến l&uacute;c ch&agrave;o đ&oacute;n một thế hệ mới được chăm ch&uacute;t, y&ecirc;u thương, tr&acirc;n trọng v&agrave; c&oacute; cơ hội tốt nhất để toả s&aacute;ng tr&ecirc;n chặng đường kh&aacute;m ph&aacute; thế giới, kh&aacute;m ph&aacute; bản th&acirc;n đầy th&uacute; vị.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', 'photos/shares/product/J.png', '0', '1', '2', '2018-03-09 11:27:27', '2018-03-19 08:21:03', 'Dành cho học viên từ 7-11 tuổi');
INSERT INTO `programs` VALUES ('3', 'SMART TEENS', 'smart-teens', '“Giáo dục toàn diện” cho con cái là xu thế đang được các bậc cha mẹ hiện đại quan tâm hàng đầu. Trong kỳ nghỉ hè tại ILA 2018, khi học sinh được cất đi gánh lo về việc thi cử chính là thời điểm tuyệt vời để cha mẹ mang đến cho con những trải nghiệm mới mẻ, giúp hoàn thiện những “mảng còn sót” trong chương trình giáo dục tại trường học.', '<div class=\"container-fluid\">\r\n<div class=\"row\">\r\n<div class=\"col-md-12\">\r\n<div class=\"wrap-before\">\r\n<p>&ldquo;Gi&aacute;o dục to&agrave;n diện&rdquo; cho con c&aacute;i l&agrave; xu thế đang được c&aacute;c bậc cha mẹ hiện đại quan t&acirc;m h&agrave;ng đầu. Trong kỳ nghỉ h&egrave; tại ILA 2018, khi học sinh được cất đi g&aacute;nh lo về việc thi cử ch&iacute;nh l&agrave; thời điểm tuyệt vời để cha mẹ mang đến cho con những trải nghiệm mới mẻ, gi&uacute;p ho&agrave;n thiện những &ldquo;mảng c&ograve;n s&oacute;t&rdquo; trong chương tr&igrave;nh gi&aacute;o dục tại trường học.</p>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"row\">\r\n<div class=\"col-md-5\">\r\n<div class=\"wrap-img each animate\" data-animate=\"slideInLeft\">\r\n<div class=\"wrap-inner-img\"><img class=\"img-responsive\" src=\"/elt-summer2018/laravel-filemanager/photos/shares/asd/JS.png\" alt=\"\" /></div>\r\n</div>\r\n</div>\r\n<div class=\"col-md-7\">\r\n<div class=\"wrap-content each animate\" data-animate=\"slideInRight\">\r\n<h4 class=\"title-program\">Xuất sắc tiếng Anh</h4>\r\n<p>ILA ti&ecirc;n phong trong việc ứng dụng m&ocirc; h&igrave;nh gi&aacute;o dục của c&aacute;c nước ph&aacute;t triển, tạo một &ldquo;s&acirc;n chơi để học&rdquo; hấp dẫn với c&aacute;c hoạt động th&uacute; vị trong m&ocirc;i trường tiếng Anh 100% gi&aacute;o vi&ecirc;n người bản xứ, gi&aacute;o tr&igrave;nh quốc tế tối ưu 6 kỹ năng v&agrave;ng, gi&uacute;p c&aacute;c em tự do trải nghiệm m&ugrave;a h&egrave; đầy m&agrave;u sắc m&agrave; vẫn ph&aacute;t triển bản th&acirc;n</p>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"row\">\r\n<div class=\"col-md-5 col-md-push-7\">\r\n<div class=\"wrap-img each animate\" data-animate=\"slideInRight\">\r\n<div class=\"wrap-inner-img right-img\"><img class=\"img-responsive\" src=\"/elt-summer2018/laravel-filemanager/photos/shares/asd/JS.png\" alt=\"\" /></div>\r\n</div>\r\n</div>\r\n<div class=\"col-md-7 col-md-pull-5\">\r\n<div class=\"wrap-content each animate\" data-animate=\"slideInLeft\">\r\n<h4 class=\"title-program\">Vui chơi kh&aacute;m ph&aacute;</h4>\r\n<p>Trại h&egrave; ILA 2018 như cột mốc đầu ti&ecirc;n trong h&agrave;nh tr&igrave;nh khơi gợi đam m&ecirc; tiếng Anh , nơi c&aacute;c b&eacute; được tr&ograve; chuyện, vui chơi v&agrave; suy nghĩ bằng tiếng Anh cả ng&agrave;y với những những hoạt động ngoại kho&aacute; cực vui được thiết kế bởi đội ngũ gi&aacute;o vi&ecirc;n đầy t&acirc;m huyết của ILA li&ecirc;n kết với c&aacute;c đối t&aacute;c uy tin nhất : Học viện thể h&igrave;nh Cali Kids, học viện s&aacute;ng tạo c&ocirc;ng nghệ Teky, LEGO education, SSA Sports, Global Art.</p>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"row\">\r\n<div class=\"col-md-5\">\r\n<div class=\"wrap-img each animate\" data-animate=\"slideInLeft\">\r\n<div class=\"wrap-inner-img\"><img class=\"img-responsive\" src=\"/elt-summer2018/laravel-filemanager/photos/shares/asd/JS.png\" alt=\"\" /></div>\r\n</div>\r\n</div>\r\n<div class=\"col-md-7\">\r\n<div class=\"wrap-content each animate\" data-animate=\"slideInRight\">\r\n<h4 class=\"title-program\">San sẻ y&ecirc;u thương</h4>\r\n<p>Kh&ocirc;ng dừng lại ở một kh&oacute;a học tiếng Anh, trại h&egrave; ILA 2018 ứng dụng m&ocirc; h&igrave;nh gi&aacute;o dục đẳng cấp quốc tế, kết hợp ho&agrave;n hảo trong việc ph&aacute;t triển về mọi mặt. Đặc biệt, việc ứng dụng những điều được học để gi&uacute;p đỡ cho cộng đồng sẽ mang đến cho c&aacute;c em một &ldquo;m&ugrave;a h&egrave; lớn&rdquo; &yacute; nghĩa v&agrave; th&uacute; vị.</p>\r\n<p>R&egrave;n dũa tr&iacute; tuệ, thể chất v&agrave; l&ograve;ng nh&acirc;n &aacute;i kết hợp trong m&ocirc;i trường 100% tiếng Anh, gi&uacute;p c&aacute;c b&eacute; ph&aacute;t triển tối ưu ngay sau 2 th&aacute;ng ch&iacute;nh l&agrave; m&oacute;n qu&agrave; kh&ocirc;ng chỉ bổ &iacute;ch, &yacute; nghĩa m&agrave; c&ograve;n đầy t&iacute;nh nh&acirc;n văn m&agrave; ILA muốn mang đến cho c&aacute;c bạn nhỏ trong m&ugrave;a h&egrave; n&agrave;y.</p>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"row\">\r\n<div class=\"col-md-12\">\r\n<div class=\"wrap-after\">\r\n<p>Đ&atilde; đến l&uacute;c ch&agrave;o đ&oacute;n một thế hệ mới được chăm ch&uacute;t, y&ecirc;u thương, tr&acirc;n trọng v&agrave; c&oacute; cơ hội tốt nhất để toả s&aacute;ng tr&ecirc;n chặng đường kh&aacute;m ph&aacute; thế giới, kh&aacute;m ph&aacute; bản th&acirc;n đầy th&uacute; vị.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', 'photos/shares/product/S.png', '0', '1', '3', '2018-03-09 11:31:12', '2018-03-19 08:21:27', 'Dành cho học viên từ 11-16 tuổi');

-- ----------------------------
-- Table structure for promotions
-- ----------------------------
DROP TABLE IF EXISTS `promotions`;
CREATE TABLE `promotions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `content` text COLLATE utf8_unicode_ci,
  `img_avatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img_icon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `order` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of promotions
-- ----------------------------

-- ----------------------------
-- Table structure for register
-- ----------------------------
DROP TABLE IF EXISTS `register`;
CREATE TABLE `register` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_city` int(11) DEFAULT NULL,
  `id_center` int(11) DEFAULT NULL,
  `id_program` int(11) DEFAULT NULL,
  `message` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of register
-- ----------------------------
INSERT INTO `register` VALUES ('1', 'tester', '0123456789', 'minhliemphp@gmail.com', '48', '9', '13', null, '2018-03-09 11:09:33', '2018-03-09 11:09:33');
INSERT INTO `register` VALUES ('2', 'tester BInh Duong', '0123456789', 'thitanguyen@ilavietnam.edu.vn', '48', '1', '13', null, '2018-03-09 11:11:56', '2018-03-09 11:11:56');
INSERT INTO `register` VALUES ('3', 'teste summer2018', '0123456789', 'tester@localhost.com', '1', '19', '15', null, '2018-03-09 11:19:46', '2018-03-09 11:19:46');
INSERT INTO `register` VALUES ('4', 'tester', '0123456789', 'tester@localhost.com', '50', '44', '13', null, '2018-03-21 07:48:35', '2018-03-21 07:48:35');
INSERT INTO `register` VALUES ('5', 'test', '0123456789', 'tester@localhost.com', '48', '4', '14', null, '2018-03-22 09:52:22', '2018-03-22 09:52:22');
INSERT INTO `register` VALUES ('6', 'hello', '0123456789', 'liemphan@ilavietnam.edu.vn', '49', '20', '15', null, '2018-03-22 09:54:40', '2018-03-22 09:54:40');

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES ('1', 'admin', 'Administrator', 'Dashboard Administration', '2018-03-08 09:54:12', '2018-03-08 09:54:12');

-- ----------------------------
-- Table structure for role_user
-- ----------------------------
DROP TABLE IF EXISTS `role_user`;
CREATE TABLE `role_user` (
  `role_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `user_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  KEY `role_user_role_id_foreign` (`role_id`),
  CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of role_user
-- ----------------------------
INSERT INTO `role_user` VALUES ('1', '1', 'App\\Models\\User');

-- ----------------------------
-- Table structure for testimonials
-- ----------------------------
DROP TABLE IF EXISTS `testimonials`;
CREATE TABLE `testimonials` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `img_avatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `order` int(11) NOT NULL,
  `focus` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of testimonials
-- ----------------------------
INSERT INTO `testimonials` VALUES ('1', 'Phụ huynh bé Bùi Mạnh Hoàng – Bậc Super Juniors', 'phu-huynh-be-bu-i-ma-nh-hoa-ng-ba-c-super-juniors', '', '<p>&ldquo;Năm vừa rồi, Ho&agrave;ng tham gia kh&oacute;a h&egrave; tại ILA v&agrave; khả năng giao tiếp tiếng Anh của b&eacute; tiến bộ r&otilde; chỉ sau một th&aacute;ng h&egrave;. V&agrave; điều nhắc nhớ cả nh&agrave; về m&ugrave;a h&egrave; &yacute; nghĩa đ&oacute; l&agrave; chiếc dĩa bằng gốm c&oacute; vẽ h&igrave;nh ngộ nghĩnh do ch&iacute;nh tay Ho&agrave;ng l&agrave;m ra v&agrave; mang về tặng mẹ... &rsquo;&rsquo;</p>', 'photos/shares/testimonial/testimonial01.jpg', '1', '1', '0', '2018-03-12 06:33:46', '2018-03-12 06:33:46');
INSERT INTO `testimonials` VALUES ('2', 'Phụ huynh bé Gia Hân (13 tuổi)', 'phu-huynh-be-gia-han-13-tuoi-', '', '<p>&ldquo;Ngo&agrave;i việc trang bị vốn tiếng Anh vững v&agrave;ng t&ocirc;i c&ograve;n rất quan t&acirc;m đến việc ph&aacute;t triển kỹ năng mềm cho con. Chương tr&igrave;nh h&egrave; năm nay ILA c&oacute; lớp Đầu bếp nh&iacute; cho b&eacute; t&igrave;m hiểu về ẩm thực v&agrave; được tự tay nấu ăn. Ngo&agrave;i ra lớp hướng dẫn Kỹ năng sinh tồn gi&uacute;p b&eacute; nhận biết v&agrave; ph&ograve;ng tr&aacute;nh nguy hiểm trong c&aacute;c t&igrave;nh huống thường gặp...&rdquo;</p>', 'photos/shares/testimonial/testimonial02.jpg', '1', '2', '0', '2018-03-12 06:36:22', '2018-03-12 06:36:22');
INSERT INTO `testimonials` VALUES ('3', 'Phụ huynh bé Thanh Khang (8 tuổi) và Thanh Khôi (4 tuổi)', 'phu-huynh-be-thanh-khang-8-tuoi-va-thanh-khoi-4-tuoi-', '', '<p>&ldquo;T&ocirc;i th&iacute;ch c&aacute;ch HỌC M&Agrave; CHƠI của c&aacute;c kh&oacute;a học h&egrave; tại ILA. Hai &ldquo;nh&oacute;c con&rdquo; nh&agrave; t&ocirc;i kh&aacute; nghịch ngợm v&agrave; năng động. Kh&oacute;a h&egrave; vừa rồi, ch&uacute;ng kh&ocirc;ng bỏ qua một hoạt động ngoại kh&oacute;a n&agrave;o v&agrave; th&iacute;ch nhất m&ocirc;n b&oacute;ng rổ với Saigon Heat... &rdquo;.</p>', 'photos/shares/testimonial/testimonial03.jpg', '1', '3', '0', '2018-03-12 06:36:45', '2018-03-12 06:36:45');
INSERT INTO `testimonials` VALUES ('4', 'Phụ huynh bé Ngọc Linh - 5 tuổi', 'phu-huynh-be-ngoc-linh-5-tuoi', '', '<p>\"B&eacute; đ&atilde; được tham gia kh&oacute;a học h&egrave; ILA năm 2015. M&ocirc;i trường th&acirc;n thiện, 100% gi&aacute;o vi&ecirc;n bản ngữ, phương ph&aacute;p giảng dạy kết hợp nhiều tr&ograve; chơi rất hấp dẫn, n&ecirc;n b&eacute; học tiếng Anh nhẹ nh&agrave;ng, kh&ocirc;ng cần g&ograve; &eacute;p... Điều khiến vợ chồng t&ocirc;i bất ngờ v&agrave; tự h&agrave;o l&agrave; kiến thức về kỹ năng b&agrave;n tiệc trong kh&oacute;a học được b&eacute; &aacute;p dụng khi cả nh&agrave; đi ăn tiệc.\"</p>', 'photos/shares/testimonial/testimonial04.jpg', '1', '4', '0', '2018-03-12 06:37:07', '2018-03-12 06:37:07');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_username_unique` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'Admin', 'admin@localhost.com', '', '$2y$10$QDBdv04/D8fkIZO/eODN.eWTK5S9gY0v2jdnpTW9dOIz1ldHAXR5q', 'v3uI5kz6MZEVGESa8zcSNhGRQYYNhdPjxdlX5xcovQi1kLgJyO2C9MkMVhEb', '2018-03-08 09:54:14', '2018-03-16 04:34:51');
