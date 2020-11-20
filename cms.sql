/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : cms

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2020-11-20 12:09:09
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `cms_admin`
-- ----------------------------
DROP TABLE IF EXISTS `cms_admin`;
CREATE TABLE `cms_admin` (
  `a_id` int(11) NOT NULL AUTO_INCREMENT,
  `a_title` varchar(4) DEFAULT NULL,
  `a_name_with_initials` varchar(50) DEFAULT NULL,
  `a_calling_name` varchar(50) DEFAULT NULL,
  `a_nic_number` varchar(12) DEFAULT NULL,
  `a_contact_number_mobile` varchar(10) DEFAULT NULL,
  `a_contact_number_other` varchar(10) DEFAULT NULL,
  `a_email_address` varchar(50) DEFAULT NULL,
  `a_residence_address` varchar(255) DEFAULT NULL,
  `a_postal_address` varchar(255) DEFAULT NULL,
  `a_profile_picture` text,
  `a_user_name` varchar(50) DEFAULT NULL,
  `a_password` varchar(20) DEFAULT NULL,
  `a_created_date` timestamp NULL DEFAULT NULL,
  `a_last_edited_date` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `a_title_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`a_id`),
  KEY `a_title_id` (`a_title_id`),
  CONSTRAINT `a_title_id` FOREIGN KEY (`a_title_id`) REFERENCES `cms_title` (`t_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of cms_admin
-- ----------------------------

-- ----------------------------
-- Table structure for `cms_citizen_normal`
-- ----------------------------
DROP TABLE IF EXISTS `cms_citizen_normal`;
CREATE TABLE `cms_citizen_normal` (
  `cn_citizen_id` int(10) NOT NULL AUTO_INCREMENT,
  `cn_title` varchar(4) DEFAULT NULL COMMENT '0=Mr,1=Mrs,2=Ms,3=Rev',
  `cn_Name_with_initials` varchar(50) DEFAULT NULL,
  `cn_calling_name` varchar(50) DEFAULT NULL,
  `cn_address` varchar(255) DEFAULT NULL,
  `cn_nic` varchar(12) DEFAULT NULL,
  `cn_contact_number_mobile` varchar(10) DEFAULT NULL,
  `cn_contact_number_other` varchar(10) DEFAULT NULL,
  `cn_email_address` varchar(50) DEFAULT NULL,
  `cn_province` int(11) DEFAULT NULL,
  `cn_district` int(11) DEFAULT NULL,
  `cn_nearest_police_station` int(11) DEFAULT NULL,
  `cn_registered_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `cn_last_edited_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `cn_title_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`cn_citizen_id`),
  KEY `cn_title_id` (`cn_title_id`) USING BTREE,
  CONSTRAINT `cn_title_id` FOREIGN KEY (`cn_title_id`) REFERENCES `cms_title` (`t_id`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of cms_citizen_normal
-- ----------------------------
INSERT INTO `cms_citizen_normal` VALUES ('1', '0', 'KB Nadeeshani', 'Nadeeshani', '25/A, Galle rd, Matara', '198476601305', '0716668766', '0776668656', 'nadeeeshaniii@gmail.com', null, '17', '1', '2020-08-26 19:04:46', '2020-08-26 19:04:46', null);
INSERT INTO `cms_citizen_normal` VALUES ('2', '0', 'SR SIripala', 'SIripala', '25/1, Homagama', '198476601305', '0716668766', '0776668656', 'siiii@gmail.com', null, '5', '22', '2020-08-26 19:54:59', '2020-08-26 19:54:59', null);
INSERT INTO `cms_citizen_normal` VALUES ('3', '0', 'SS Kumara', 'Kumara', 'Hikkaduwa', '198476601305', '0716668766', '0776668656', 'kumara@gmail.com', null, null, null, '2020-08-26 21:52:26', '2020-08-26 21:52:26', null);
INSERT INTO `cms_citizen_normal` VALUES ('4', '0', 'CJ Nirmal', 'Nirmal', '146/5, Gandara', '198476605404', '071665775', '0776668656', 'nirmal@gmail.com', null, null, '26', '2020-08-27 08:24:36', '2020-08-27 08:24:36', null);
INSERT INTO `cms_citizen_normal` VALUES ('5', '1', 'CC Kusumalatha', 'Kusumalatha', '25c, galle rd, matara', '196407807850', '0716625141', '', '', null, null, '1', '2020-08-27 08:28:49', '2020-08-27 08:28:49', null);
INSERT INTO `cms_citizen_normal` VALUES ('6', '2', 'ADK Nisansala', 'Kasuni', 'Galle rd, matara', '199254578757', '0716625748', '', '', null, null, '1', '2020-08-27 08:30:01', '2020-08-27 08:30:01', null);
INSERT INTO `cms_citizen_normal` VALUES ('7', '0', 'KH Chamara', 'Harsha', 'hihghlevel rd, homagama', '198582725782', '0716678278', '', '', null, null, '22', '2020-08-27 08:34:04', '2020-08-27 08:34:04', null);
INSERT INTO `cms_citizen_normal` VALUES ('8', '1', 'JJ kasthuri', 'Jayani', 'hihghlevel rd, Pannipitiya', '198805424514', '0717581787', '', 'jaua4516ni@gmail.com', null, null, '22', '2020-08-27 08:35:04', '2020-08-27 08:35:04', null);
INSERT INTO `cms_citizen_normal` VALUES ('9', '0', 'C Gamage', 'Chamara', '2/5, Homagama', '198445178575', '0716676668', '0776668656', 'anushahap@gmail.com', null, null, '22', '2020-08-27 11:28:03', '2020-08-27 11:28:03', null);
INSERT INTO `cms_citizen_normal` VALUES ('10', '1', 'KN Liyanaarachchi', 'Nadeesha', '25/5, Gandara', '198807876765', '0716444879', '', 'anushahap@gmail.com', null, null, '1', '2020-08-27 11:39:36', '2020-08-27 11:39:36', null);
INSERT INTO `cms_citizen_normal` VALUES ('11', '2', 'RSK Kumari', 'Kumari', '25/5, Hikkaduwa', '199464864654', '0716789775', '', 'anushahap@gmail.com', null, null, '5', '2020-08-27 11:42:59', '2020-08-27 11:42:59', null);
INSERT INTO `cms_citizen_normal` VALUES ('12', '0', 'KR SIsira', 'Sisira', '658/3, Dondra', '197560919895', '0712584885', '', 'anushahap@gmail.com', null, null, '26', '2020-08-27 11:55:37', '2020-08-27 11:55:37', null);
INSERT INTO `cms_citizen_normal` VALUES ('13', '1', 'HKC Nimanthi', 'Nimanthi', 'Flower garden, Diyagama', '198551887787', '0716668555', '0776668656', 'anushahap@gmail.com', null, null, '22', '2020-08-27 12:14:41', '2020-08-27 12:14:41', null);
INSERT INTO `cms_citizen_normal` VALUES ('14', '1', 'LH Saumya', 'Hasini', '65/88, Maagammana', '199565998999', '0716658989', '0715989856', 'anushahap@gmail.com', null, null, '22', '2020-08-27 12:20:41', '2020-08-27 12:20:41', null);
INSERT INTO `cms_citizen_normal` VALUES ('15', '0', 'JH Gayan', 'Harsha', '1st lane, Diyagama', '198966562656', '0716899565', '0715926565', 'anushahap@gmail.com', null, null, '22', '2020-08-27 12:23:28', '2020-08-27 12:23:28', null);
INSERT INTO `cms_citizen_normal` VALUES ('16', '3', 'Dammadassi Thero', 'Dammadassi Thero', 'Temple rd, Homagama', '196587878788', '0711212122', '0715454545', 'anushahap@gmail.com', null, null, '22', '2020-08-27 12:36:35', '2020-08-27 12:36:35', null);
INSERT INTO `cms_citizen_normal` VALUES ('17', null, 'HAP ANusha', 'anusha', 'jtfgds', 'fsffs', 'fdsfs', 'fsdfsf', 'sdfds', '4', '6', '4', '2020-08-27 21:45:26', '2020-08-27 21:45:26', null);
INSERT INTO `cms_citizen_normal` VALUES ('18', null, 'HAP Iresha', 'Iresha', '25-5, Nugegoda', '198154514184', '0716668769', '0776668648', 'jauani@gmail.com', '5', '5', '21', '2020-08-28 02:03:44', '2020-08-28 02:03:44', null);
INSERT INTO `cms_citizen_normal` VALUES ('19', null, '', '', '', '', '', '', '', '0', '0', '0', '2020-08-28 02:21:57', '2020-08-28 02:21:57', null);
INSERT INTO `cms_citizen_normal` VALUES ('20', null, 'HH Perera', 'Harshana', '25/7, 1st lane, Gandara', '198476656456', '0716668978', '0776665346', 'anushahap@gmail.com', '4', '17', '1', '2020-08-28 02:24:22', '2020-08-28 02:24:22', null);
INSERT INTO `cms_citizen_normal` VALUES ('21', null, 'D Priyadarshani', 'Priyadarshani', 'Tangalle rd, Tangalle', '199559782787', '0716124545', '0776668656', 'anushahap@gmail.com', '4', '8', '9', '2020-08-28 03:47:32', '2020-08-28 03:47:32', null);
INSERT INTO `cms_citizen_normal` VALUES ('22', null, 'SD Kamal', 'Kamal', '25A, Diyagama, Homagama', '199215454545', '0716665987', '', 'anushahap@gmail.com', '5', '5', '22', '2020-08-28 03:54:25', '2020-08-28 03:54:25', null);
INSERT INTO `cms_citizen_normal` VALUES ('23', null, 'SSSunimal', 'Sameera', 'no. 12, Dikwella', '198476605445', '0716668754', '', 'anushahap@gmail.com', '4', '17', '2', '2020-08-28 06:21:05', '2020-08-28 06:21:05', null);
INSERT INTO `cms_citizen_normal` VALUES ('24', '0', 'KW Pathma', 'Pathma', '2nd lane, Gandara', '196589258855', '0716545645', '0776654646', 'anushahap@gmail.com', null, null, '26', '2020-08-28 06:26:11', '2020-08-28 06:26:11', null);
INSERT INTO `cms_citizen_normal` VALUES ('25', null, 'Inoka nimali', 'nimali', '2/B, Gandara', '198482738488', '0716128778', '0776658777', 'anushahap@gmail.com', '4', '17', '2', '2020-08-28 06:40:36', '2020-08-28 06:40:36', null);
INSERT INTO `cms_citizen_normal` VALUES ('26', null, 'nimla p', 'nimala', 'temple rpad ', '222222222222', '0716668766', '0776668656', 'anushahap@gmail.com', '4', '6', '6', '2020-08-28 06:46:59', '2020-08-28 06:46:59', null);
INSERT INTO `cms_citizen_normal` VALUES ('27', null, 'KK Indika', 'Indika', '15/B, Matara', '198485445454', '0716111111', '', 'anushahap@gmail.com', '4', '8', '10', '2020-08-28 06:52:10', '2020-08-28 06:52:10', null);
INSERT INTO `cms_citizen_normal` VALUES ('28', null, 'HAP NImesha', 'Nimesha', '12/4, Matara', '199198872789', '0711111111', '', 'anushahap@gmail.com', '4', '17', '1', '2020-08-28 07:07:54', '2020-08-28 07:07:54', null);
INSERT INTO `cms_citizen_normal` VALUES ('29', null, 'HAP nuwanthi', 'NUwanthi', '12/4, Matara', '199198872789', '0711111444', '', 'anushahap@gmail.com', '4', '17', '1', '2020-08-28 07:15:32', '2020-08-28 07:15:32', null);
INSERT INTO `cms_citizen_normal` VALUES ('30', null, 'AD NUwan', 'Buddhika', '12 a Galla road', '333333333333', '0716668767', '0776668656', 'dwidanage@gmail.com', '4', '6', '7', '2020-08-28 07:24:32', '2020-08-28 07:24:32', null);
INSERT INTO `cms_citizen_normal` VALUES ('31', null, 'AD NUwandddddddd', 'Buddhikaddddddddddd', '12 a Galla road', '333333333333', '0716668767', '0776668656', 'anushahap@gmail.com', '4', '6', '7', '2020-08-28 07:30:13', '2020-08-28 07:30:13', null);
INSERT INTO `cms_citizen_normal` VALUES ('32', '0', 'AB Aththanayaka', 'Aththanayaka', '12/1, Galle', '195445454545', '0716665457', '0745454554', 'anushahap@gmail.com', null, null, '5', '2020-08-28 08:26:15', '2020-08-28 08:26:15', null);
INSERT INTO `cms_citizen_normal` VALUES ('33', null, 'JJ Palitha', 'Palitha', '125/1A', '199242554545', '0716898797', '0777757555', 'anushahap@gmail.com', '4', '17', '1', '2020-08-28 09:30:45', '2020-08-28 09:30:45', null);
INSERT INTO `cms_citizen_normal` VALUES ('34', null, 'YJ Jayasooriya', 'Jayasooriya', '305A, Matara', '198456464644', '0716866700', '0774544454', 'anushahap@gmail.com', '4', '17', '1', '2020-08-28 09:37:50', '2020-08-28 09:37:50', null);
INSERT INTO `cms_citizen_normal` VALUES ('35', null, 'YJ Jayasooriyassssssssssssssssssssss', 'Jayasooriya', '305A, Matara', '198456464644', '0716866700', '0774544454', 'anushahap@gmail.com', '4', '17', '1', '2020-08-28 09:42:56', '2020-08-28 09:42:56', null);
INSERT INTO `cms_citizen_normal` VALUES ('36', null, 'A Ayomi', 'Ayomi', '305A, Gandara', '195717817575', '0716857241', '0774544454', 'anushahap@gmail.com', '4', '17', '1', '2020-08-28 09:46:47', '2020-08-28 09:46:47', null);
INSERT INTO `cms_citizen_normal` VALUES ('37', null, 'CK Chirath', 'Chirath', 'Godigamuwa, yayawatta', '198982645454', '0716517567', '0777878787', 'anushahap@gmail.com', '4', '8', '9', '2020-08-28 09:49:04', '2020-08-28 09:49:04', null);
INSERT INTO `cms_citizen_normal` VALUES ('38', null, 'KK Kalasilee', 'Kalasilee', '25 Gandara', '198474454545', '0716145444', '0776454454', 'anushahap@gmail.com', '4', '17', '1', '2020-08-28 10:11:15', '2020-08-28 10:11:15', null);
INSERT INTO `cms_citizen_normal` VALUES ('39', null, 'KK Kalasilee', 'Kalasilee', '25 Gandara', '198474454545', '0716145444', '0776454454', 'anushahap@gmail.com', '4', '17', '1', '2020-08-28 10:11:22', '2020-08-28 10:11:22', null);
INSERT INTO `cms_citizen_normal` VALUES ('40', null, 'KK Kalasilee', 'Kalasilee', '25 Gandara', '198474454545', '0716145444', '0776454454', 'anushahap@gmail.com', '4', '17', '1', '2020-08-28 10:11:28', '2020-08-28 10:11:28', null);
INSERT INTO `cms_citizen_normal` VALUES ('41', null, 'KK Kalasilee', 'Kalasilee', '25 Gandara', '198474454545', '0716145444', '0776454454', 'anushahap@gmail.com', '4', '17', '1', '2020-08-28 10:11:35', '2020-08-28 10:11:35', null);
INSERT INTO `cms_citizen_normal` VALUES ('42', null, 'KK Kalasilee', 'Kalasilee', '25 Gandara', '198474454545', '0716145444', '0776454454', 'anushahap@gmail.com', '4', '17', '1', '2020-08-28 10:11:41', '2020-08-28 10:11:41', null);
INSERT INTO `cms_citizen_normal` VALUES ('43', null, 'AB Kusuma', 'Kusuma', 'Gandara', '198475464646', '0716454245', '0776664545', 'anushahap@gmail.com', '4', '17', '1', '2020-08-28 10:16:32', '2020-08-28 10:16:32', null);
INSERT INTO `cms_citizen_normal` VALUES ('44', null, 'AS SAman', 'SAman', 'Gandara', '198544545454', '0716668764', '', 'anushahap@gmail.com', '4', '17', '1', '2020-08-28 10:20:17', '2020-08-28 10:20:17', null);
INSERT INTO `cms_citizen_normal` VALUES ('45', null, 'fsdfsdf', 'fdsf', 'sdfdsfsf', '198476601310', '0716123464', '0776668656', 'anushahap@gmail.com', '4', '8', '9', '2020-08-28 10:23:48', '2020-08-28 10:23:48', null);
INSERT INTO `cms_citizen_normal` VALUES ('46', null, 'R Ruwan', 'Ruwan', '25A Matara', '198011454545', '0716454545', '0776654445', 'anushahap@gmail.com', '4', '17', '1', '2020-08-28 10:32:49', '2020-08-28 10:32:49', null);
INSERT INTO `cms_citizen_normal` VALUES ('47', '0', 'AB Nimal', 'Nimal', 'Matara', '198476601454', '0716668545', '077666454', 'anushahap@gmail.com', null, null, '1', '2020-08-28 11:17:28', '2020-08-28 11:17:28', null);
INSERT INTO `cms_citizen_normal` VALUES ('48', '0', 'AB Nimal', 'Nimal', 'Matara', '198476601454', '0716668545', '0456456456', 'anushahap@gmail.com', null, null, '1', '2020-08-28 11:17:34', '2020-08-28 11:17:34', null);
INSERT INTO `cms_citizen_normal` VALUES ('49', null, 'HH Kasun', 'Kasun', 'sdfsf', '198476546454', '0716125545', '', 'anushahap@gmail.com', '4', '17', '1', '2020-08-28 11:22:59', '2020-08-28 11:22:59', null);
INSERT INTO `cms_citizen_normal` VALUES ('50', '1', 'GC Kumara', 'Kumara', '12C Diyagama', '198476601312', '0716123558', '0776654646', 'kumara@gmail.com', null, null, '22', '2020-10-07 16:36:46', '2020-10-07 16:36:46', null);
INSERT INTO `cms_citizen_normal` VALUES ('51', '1', 'SH Thyagi ', 'Thyagi ', 'Lane 5, Homagama', '198476625155', '0716326484', '0776652545', 'thyagi@gmail.com', null, null, '22', '2020-10-07 16:44:35', '2020-10-07 16:44:35', null);
INSERT INTO `cms_citizen_normal` VALUES ('52', '0', 'AD Rupasinhe', 'Rupasinhe', '12/1\nDikwella', '198476645445', '0716689787', '0776648454', 'Rupasinhe@gmail.com', null, null, '2', '2020-10-07 21:23:44', '2020-10-07 21:23:44', null);
INSERT INTO `cms_citizen_normal` VALUES ('53', '1', 'SS Gunathilake', 'Sumithra', '125/1\nBoralesgamuwa', '198275645646', '0716487847', '0778798728', 'Sumithra@gmail.com', null, null, '21', '2020-10-07 21:27:37', '2020-10-07 21:27:37', null);
INSERT INTO `cms_citizen_normal` VALUES ('54', '2', 'HH Gunathilake', 'Hasini', '2nd lane Dikwella', '198475464564', '0716665454', '0776657897', 'hasiniiiiiiiiiii@gmail.com', null, null, '2', '2020-10-08 08:52:14', '2020-10-08 08:52:14', null);
INSERT INTO `cms_citizen_normal` VALUES ('55', '2', 'TT Aruni', 'Aruni', '2nd lane Diyagama', '198475111111', '0716456467', '0774548678', 'anushahap@gmail.com', null, null, '22', '2020-10-08 08:54:13', '2020-10-08 08:54:13', null);
INSERT INTO `cms_citizen_normal` VALUES ('56', null, 'SK Rajapakshe', 'samurdika', 'walahanduwa, Matara', '198476621545', '0711515646', '0776154564', 'samurdika@gmail.com', '4', '17', '29', '2020-10-08 22:21:34', '2020-10-08 22:21:34', null);
INSERT INTO `cms_citizen_normal` VALUES ('57', null, 'ML nisamani', 'nishamani', 'crown crescent, Diyagama', '196548785656', '0715468789', '0715487897', 'nishamani@gmail.com', '5', '5', '22', '2020-10-08 22:26:54', '2020-10-08 22:26:54', null);
INSERT INTO `cms_citizen_normal` VALUES ('58', null, 'GT Renuka', 'renuka', 'Gandara', '198982819898', '0711456414', '0771241818', 'renuka@gmail.com', '4', '17', '26', '2020-10-08 22:28:20', '2020-10-08 22:28:20', null);
INSERT INTO `cms_citizen_normal` VALUES ('59', null, 'SA Lasith', 'Lasith', 'Gandara, Matara', '198414944949', '0716826786', '0778676876', 'anushahap@gmail.com', '4', '17', '1', '2020-10-08 22:52:57', '2020-10-08 22:52:57', null);
INSERT INTO `cms_citizen_normal` VALUES ('60', '0', 'CD Perera', 'Perera', '25A, Matara', '196551151818', '0715214414', '0716454445', 'siripala@gmail.com', null, null, '1', '2020-10-08 23:00:50', '2020-10-08 23:00:50', null);
INSERT INTO `cms_citizen_normal` VALUES ('61', null, 'JK Kuruppuarachchi', 'Kumara', 'Medagoda, Dikwella', '198475464564', '0716565565', '0716465456', 'madagodaaaaa@gmail.com', '4', '17', '2', '2020-10-08 23:59:08', '2020-10-08 23:59:08', null);
INSERT INTO `cms_citizen_normal` VALUES ('62', '0', 'GH Kamal', 'Kamal', '20B, Hikkaduwa', '198476216464', '0716657879', '0776789789', 'kamalllll@gmail.com', null, null, '5', '2020-10-09 05:37:29', '2020-10-09 05:37:29', null);
INSERT INTO `cms_citizen_normal` VALUES ('63', null, 'KL kUmari', 'Kumari', 'ghgh, Matara', '198474544452', '0716668755', '0776668687', 'anushahap@gmail.com', '4', '17', '1', '2020-10-09 14:43:16', '2020-10-09 14:43:16', null);
INSERT INTO `cms_citizen_normal` VALUES ('64', '1', 'KK Hasanthika', 'Hasanthika', '144/20, DIyagama', '198476605464', '0716668768', '', 'anushahap@gmail.com', null, null, '22', '2020-11-18 14:04:53', '2020-11-18 14:04:53', null);

-- ----------------------------
-- Table structure for `cms_complaint_anonymous`
-- ----------------------------
DROP TABLE IF EXISTS `cms_complaint_anonymous`;
CREATE TABLE `cms_complaint_anonymous` (
  `c_an_complaint_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'public, police officer',
  `c_an_district` int(11) DEFAULT NULL,
  `c_an_police_station` int(11) DEFAULT NULL,
  `c_an_toWhchPS` int(11) DEFAULT NULL,
  `c_an_location` text,
  `c_an_complaint_type` varchar(100) DEFAULT NULL,
  `c_an_complaint_inbrief` text,
  `c_an_attachment` text,
  `c_an_why_anonymous` text,
  `c_an_placement_date` date DEFAULT NULL,
  `c_an_placement_dateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `c_gn_complaint_user_type` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`c_an_complaint_id`),
  UNIQUE KEY `complaint_id` (`c_an_complaint_id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of cms_complaint_anonymous
-- ----------------------------
INSERT INTO `cms_complaint_anonymous` VALUES ('1', '0', '22', '22', 'Homagama Junction ', '15', 'test brief 03', '', 'for safety', '2020-08-26', '2020-08-26 19:59:49', 'Via online App');
INSERT INTO `cms_complaint_anonymous` VALUES ('2', '0', '17', '22', 'homagama junction', '15', 'test 04', '', 'no reason', '2020-08-26', '2020-08-26 20:01:48', 'Via online App');
INSERT INTO `cms_complaint_anonymous` VALUES ('3', '0', '1', '1', 'bus stand', '17', 'test 05', '', '', '2020-08-26', '2020-08-26 20:03:22', 'Via online App');
INSERT INTO `cms_complaint_anonymous` VALUES ('4', '0', '9', '9', 'Godigamuwa Junction', '1', 'test 06', '', 'no reason', '2020-08-26', '2020-08-26 20:37:06', 'Via online App');
INSERT INTO `cms_complaint_anonymous` VALUES ('5', '0', '5', '5', 'Hikkaduwa town', '1', 'breif 5454', '', 'for safety', '2020-08-27', '2020-08-27 08:37:01', 'Via online App');
INSERT INTO `cms_complaint_anonymous` VALUES ('6', '0', '1', '1', 'Bus stand', '1', 'brief 6195', '', 'no reason', '2020-08-27', '2020-08-27 08:37:57', 'Via online App');
INSERT INTO `cms_complaint_anonymous` VALUES ('7', '0', '22', '22', 'homagama junction', '1', 'brief 059158925', '', 'no reason', '2020-08-27', '2020-08-27 08:38:37', 'Via online App');
INSERT INTO `cms_complaint_anonymous` VALUES ('8', '0', '22', '22', 'Homagama junction', '5', 'homagama school 01', '', '', '2020-08-27', '2020-08-27 08:40:45', 'Via online App');
INSERT INTO `cms_complaint_anonymous` VALUES ('9', '0', '5', '5', 'Hikkaduwa junction', '16', 'Video provides a powerful way to help you prove your point. When you click Online Video, you can paste in the embed code for the video you want to add. You can also type a keyword to search online for the video that best fits your document.', '', 'no reason', '2020-08-28', '2020-08-28 01:55:46', 'Via online App');
INSERT INTO `cms_complaint_anonymous` VALUES ('10', '0', '9', '9', 'near Godigamuwa School', '15', ' You can also type a keyword to search online for the video that best fits your document.', '', '', '2020-08-28', '2020-08-28 01:59:19', 'Via online App');
INSERT INTO `cms_complaint_anonymous` VALUES ('11', '0', '22', '22', 'Video provides a powerful way to help you prove your point. When you click Online Video, you can paste in the embed ', '10', 'Video provides a powerful way to help you prove your point. When you click Online Video, you can paste in the embed Video provides a powerful way to help you prove your point. When you click Online Video, you can paste in the embed ', '', 'no reason', '2020-08-28', '2020-08-28 06:19:05', 'Via online App');
INSERT INTO `cms_complaint_anonymous` VALUES ('12', '0', '22', '22', 'Save time in Word with new buttons that show up ', '12', 'time in Word with new buttons that show up Save time in Word with new buttons that show up Save time in Word with new buttons that show up Save time in Word with new buttons that show up ', '', 'Word with new buttons that show up ', '2020-10-08', '2020-10-08 21:02:31', 'Via online App');
INSERT INTO `cms_complaint_anonymous` VALUES ('13', '0', '2', '2', 'Save time in Word with new buttons that show up where you need them. ', '3', 'To change the way a picture fits in your document, click it and a button for layout options appears next to it. When you work on a table, click where you want to add a row ', '', ' When you work on a table, click where you want to add a row ', '2020-10-08', '2020-10-08 22:10:56', 'Via online App');
INSERT INTO `cms_complaint_anonymous` VALUES ('14', '0', '29', '29', 'ppears next to it. When you work on a table, click where you want to add a row ', '7', 't options appears next to it. When you work on a table, click where you want to add a row ', '', 'click where you want to add a row ', '2020-10-08', '2020-10-08 22:15:35', 'Via online App');
INSERT INTO `cms_complaint_anonymous` VALUES ('15', '0', '29', '29', 'sadad', '14', ' SmartArt graphics change to match your new theme. When you apply styles, your headings change to match the new theme.', '', 'nd Smart', '2020-10-08', '2020-10-08 22:18:42', 'Via online App');
INSERT INTO `cms_complaint_anonymous` VALUES ('16', '0', '1', '1', 'click where you want to add a row or a column, and then click the plus sign.', '10', 'click it and a button for layout options appears next to it. When you work on a table, ', '', ' on a table, ', '2020-10-08', '2020-10-08 22:54:31', 'Via online App');
INSERT INTO `cms_complaint_anonymous` VALUES ('17', '0', '1', '1', 'Themes and styles also', '3', ' help keep your document coordinated. When you click Design and choose a new Theme, the pictures, charts, and SmartArt graphics change to match your new theme. When you apply styles, your headings change to match the new theme.', '', '', '2020-10-08', '2020-10-08 22:57:02', 'Via online App');
INSERT INTO `cms_complaint_anonymous` VALUES ('18', null, '26', '26', 'adadadad', '5', 'fits in your document, click it and a button for layout options appears next to it. When you work on a table, click where you want to add a row or a column, and then click the plus sign.', '', 'fsfafaf', '2020-10-08', '2020-10-08 23:52:37', 'Via online App');
INSERT INTO `cms_complaint_anonymous` VALUES ('19', null, '2', '2', ' When you work on a table, click where you want to add a row or a ', '13', 'fits in your document, click it and a button for layout options appears next to it.', '', 'sffaf', '2020-10-09', '2020-10-09 00:00:25', 'Via online App');
INSERT INTO `cms_complaint_anonymous` VALUES ('20', null, '1', '1', 'test ', '4', 'test details', '', '', '2020-10-09', '2020-10-09 12:21:58', 'Via online App');
INSERT INTO `cms_complaint_anonymous` VALUES ('21', '0', '2', '2', 'adasd', '14', 'asdsad', '', 'asdsa', '2020-10-09', '2020-10-09 12:23:41', 'Via online App');
INSERT INTO `cms_complaint_anonymous` VALUES ('22', '0', '1', '3', 'test', '1', 'test', '', '', '2020-10-09', '2020-10-09 12:41:54', 'Via online App');
INSERT INTO `cms_complaint_anonymous` VALUES ('23', '0', '9', '16', 'asdsad', '13', '', '', '', '2020-10-09', '2020-10-09 12:42:52', 'Via online App');
INSERT INTO `cms_complaint_anonymous` VALUES ('24', '0', '1', '20', 'te3st', '2', 'teser', '', 're', '2020-10-09', '2020-10-09 12:44:03', 'Via online App');
INSERT INTO `cms_complaint_anonymous` VALUES ('25', '0', '22', '22', 'jshjdahj', '9', 'saffaaf', '', 'sfaf', '2020-10-09', '2020-10-09 12:45:18', 'Via online App');
INSERT INTO `cms_complaint_anonymous` VALUES ('26', '0', '2', '5', 'sfasfaf', '14', 'sfdvfdf', '', 'dfsfsdf', '2020-10-09', '2020-10-09 12:46:25', 'Via online App');
INSERT INTO `cms_complaint_anonymous` VALUES ('27', '0', '3', '8', 'zsdad', '4', 'adad', '', 'asdad', '2020-10-09', '2020-10-09 12:48:26', 'Via online App');

-- ----------------------------
-- Table structure for `cms_complaint_general`
-- ----------------------------
DROP TABLE IF EXISTS `cms_complaint_general`;
CREATE TABLE `cms_complaint_general` (
  `c_gn_complaint_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_gn_complaint_user_type` varchar(100) DEFAULT NULL COMMENT '0=by police office, 1=by normal citizen',
  `c_gn_toWhichPS` int(11) DEFAULT NULL,
  `c_gn_ps_id` int(11) DEFAULT NULL,
  `c_gn_location` text,
  `c_gn_complaint_type` int(11) DEFAULT NULL,
  `c_gn_complaint_inbrief` text,
  `c_gn_attachment` text,
  `c_gn_notifiction_status` varchar(255) DEFAULT NULL COMMENT '0=no, 1=yes',
  `c_gn_status_of_complaint` int(11) DEFAULT '1' COMMENT '1= Not attempt yet,2=',
  `c_gn_complaint_reference_number` varchar(255) DEFAULT NULL,
  `c_gn_placement_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `c_gn_officer_no` int(11) DEFAULT NULL,
  `c_gn_citizen_id` int(11) DEFAULT NULL,
  `c_gn_defendant_id` int(11) DEFAULT NULL,
  `c_gn_professionals_id` int(11) DEFAULT NULL,
  `c_gn_third_party_id` int(11) DEFAULT NULL,
  `c_gn_status_of_complaint_id` int(11) DEFAULT NULL,
  `c_gn_c_loginUserID` int(11) DEFAULT NULL,
  `c_gn_c_date` date DEFAULT NULL,
  `c_gn_modified date` date DEFAULT NULL,
  `c_gn_modified by` int(11) DEFAULT NULL,
  `c_gn_Existance` int(11) DEFAULT '1' COMMENT '1=exist 0= deleted',
  PRIMARY KEY (`c_gn_complaint_id`),
  UNIQUE KEY `complaint_id` (`c_gn_complaint_id`),
  UNIQUE KEY `c_reference_number` (`c_gn_complaint_reference_number`),
  KEY `officer_no` (`c_gn_officer_no`) USING BTREE,
  KEY `normal_citizen_id` (`c_gn_citizen_id`) USING BTREE,
  KEY `defendant_id` (`c_gn_defendant_id`) USING BTREE,
  KEY `professionals_id` (`c_gn_professionals_id`) USING BTREE,
  KEY `third_party_id` (`c_gn_third_party_id`) USING BTREE,
  KEY `c_gn_status_of_complaint_id` (`c_gn_status_of_complaint_id`),
  KEY `c_gn_toWhichPS` (`c_gn_toWhichPS`),
  CONSTRAINT `c_gn_normal_citizen_id` FOREIGN KEY (`c_gn_citizen_id`) REFERENCES `cms_citizen_normal` (`cn_citizen_id`),
  CONSTRAINT `c_gn_toWhichPS` FOREIGN KEY (`c_gn_toWhichPS`) REFERENCES `cms_police_station` (`ps_police_station_id`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of cms_complaint_general
-- ----------------------------
INSERT INTO `cms_complaint_general` VALUES ('1', 'via police station', '1', null, 'MArket place', '17', 'test brief 01', '', 'on', '4', '4//20/08/2014093146', '2020-09-27 08:24:36', null, '4', null, null, null, '7', '2', '2020-09-27', null, null, '1');
INSERT INTO `cms_complaint_general` VALUES ('2', 'via police station', '1', null, 'Bodiya junction', '1', 'test brief 02', '', 'on', '5', '4//20/08/1797115325', '2020-09-27 08:28:49', null, '5', null, null, null, '12', '2', '2020-09-27', null, null, '1');
INSERT INTO `cms_complaint_general` VALUES ('3', 'via police station', '1', null, 'Bus stand', '14', 'test brief 03', '', 'on', '3', '4//20/08/1931910688', '2020-09-27 08:30:01', null, '6', null, null, null, '14', '2', '2020-09-27', null, null, '1');
INSERT INTO `cms_complaint_general` VALUES ('4', 'via police station', '22', null, 'Homagama junction', '15', 'brief 55', '', 'on', '2', '5//20/08/723325988', '2020-09-27 08:34:04', null, '7', null, null, null, '8', '19', '2020-09-27', null, null, '1');
INSERT INTO `cms_complaint_general` VALUES ('5', 'via police station', '22', null, 'Homagama junction', '1', 'brief 555626', '', 'on', '1', '5//20/08/1100500726', '2020-09-27 08:35:04', null, '8', null, null, null, null, '19', '2020-09-27', null, null, '1');
INSERT INTO `cms_complaint_general` VALUES ('6', 'via police station', '22', null, 'adawadas', '17', 'saadadad', '', 'on', '5', '5//20/08/972162731', '2020-09-27 11:28:03', null, '9', null, null, null, '9', '18', '2020-09-27', null, null, '1');
INSERT INTO `cms_complaint_general` VALUES ('7', 'via police station', '1', null, 'dsfsfsrw', '1', 'sgsgs', '', 'on', '1', '4//20/08/654120918', '2020-09-27 11:39:36', null, '10', null, null, null, null, '29', '2020-09-27', null, null, '1');
INSERT INTO `cms_complaint_general` VALUES ('8', 'via police station', '5', null, 'sdad', '1', 'dadawr', '', 'on', '1', '4//20/08/1272190457', '2020-09-27 11:43:00', null, '11', null, null, null, null, '30', '2020-09-27', null, null, '1');
INSERT INTO `cms_complaint_general` VALUES ('9', 'via police station', '26', null, 'asdadad', '5', 'asdadad', '', 'on', '1', '4//20/08/1281156344', '2020-09-27 11:55:37', null, '12', null, null, null, null, '29', '2020-09-27', null, null, '1');
INSERT INTO `cms_complaint_general` VALUES ('10', 'via police station', '22', null, 'You can also type a keyword to search online for the video that best fits your document.', '13', 'Video provides a powerful way to help you prove your point. When you click Online Video, you can paste in the embed code for the video you want to add. You can also type a keyword to search online for the video that best fits your document.', '', 'on', '1', '5//20/08/1977352122', '2020-09-27 12:14:41', null, '13', null, null, null, null, '18', '2020-09-27', null, null, '1');
INSERT INTO `cms_complaint_general` VALUES ('11', 'via police station', '22', null, 'Click Insert and then choose the elements you want from the different galleries.', '13', 'To make your document look professionally produced, Word provides header, footer, cover page, and text box designs that complement each other. For example, you can add a matching cover page, header, and sidebar. Click Insert and then choose the elements you want from the different galleries.', '', 'on', '1', '5//20/08/1803598693', '2020-09-27 12:20:41', null, '14', null, null, null, null, '18', '2020-09-27', null, null, '1');
INSERT INTO `cms_complaint_general` VALUES ('12', 'via police station', '22', null, 'When you apply styles, your headings change to match the new theme.', '1', 'Themes and styles also help keep your document coordinated. When you click Design and choose a new Theme, the pictures, charts, and SmartArt graphics change to match your new theme. When you apply styles, your headings change to match the new theme.', '', 'on', '1', '5//20/08/1610997287', '2020-09-27 12:23:28', null, '15', null, null, null, null, '18', '2020-09-27', null, null, '1');
INSERT INTO `cms_complaint_general` VALUES ('13', 'via police station', '22', null, 'your headings change to match the new theme.', '1', 'help keep your document coordinated. When you click Design and choose a new Theme', '', 'on', '1', '5//20/08/1032032578', '2020-09-27 12:36:35', null, '16', null, null, null, null, '18', '2020-09-27', null, null, '1');
INSERT INTO `cms_complaint_general` VALUES ('14', 'By Citizen', '2', null, '', '1', '', '', 'on', '1', '/6/20/08/2135154810', '2020-09-27 21:45:26', null, '17', null, null, null, null, '1', '2020-09-27', null, null, '1');
INSERT INTO `cms_complaint_general` VALUES ('15', 'By Citizen', '22', null, 'can also type a keyword to search online for the video that best fits your document.', '17', 'Video provides a powerful way to help you prove your point. When you click Online Video, you can paste in the embed code for the video you want to add. You can also type a keyword to search online for the video that best fits your document.', '', 'on', '1', '/5/20/08/477143857', '2020-09-28 02:03:44', null, '18', null, null, null, null, '1', '2020-09-28', null, null, '1');
INSERT INTO `cms_complaint_general` VALUES ('17', 'By Citizen', '1', null, 'Video provides a powerful way to help you prove your point. ', '2', 'Video provides a powerful way to help you prove your point. When you click Online Video, you can paste in the embed code for the video you want to add. You can also type a keyword to search online for the video that best fits your document.', '', 'on', '3', '/17/20/08/684040565', '2020-09-28 02:24:22', null, '20', null, null, null, '22', '1', '2020-09-28', null, null, '1');
INSERT INTO `cms_complaint_general` VALUES ('18', 'By Citizen', '9', null, 'To make your document look professionally produced, Word provides header, footer, cover page, and text box designs that complement each other. ', '17', 'To make your document look professionally produced, Word provides header, footer, cover page, and text box designs that complement each other. For example, you can add a matching cover page, header, and sidebar. Click Insert and then choose the elements you want from the different galleries.\nThemes and styles also help keep your document coordinated. When you click Design and choose a new Theme, the pictures, charts, and SmartArt graphics change to match your new theme. When you apply styles, your headings change to match the new theme.\n', '', 'on', '1', '/8/20/08/1569438872', '2020-09-28 03:47:32', null, '21', null, null, null, null, '1', '2020-09-28', null, null, '1');
INSERT INTO `cms_complaint_general` VALUES ('19', 'By Citizen', '22', null, 'Video provides a powerful way to help you prove your point. When you click Online Video, you can paste in the embed code for the video you want to add. You can also type a keyword to search online for the video that best fits your document.', '15', 'Video provides a powerful way to help you prove your point. When you click Online Video, you can paste in the embed code for the video you want to add. You can also type a keyword to search online for the video that best fits your document.', '', 'on', '1', '/5/20/08/1640653569', '2020-09-28 03:54:25', null, '22', null, null, null, null, '1', '2020-09-28', null, null, '1');
INSERT INTO `cms_complaint_general` VALUES ('20', 'By Citizen', '2', null, 'rove your point. When you click Online Video, you can paste in the embed ', '4', 'rove your point. When you click Online Video, you can paste in the embed rove your point. When you click Online Video, you can paste in the embed rove your point. When you click Online Video, you can paste in the embed ', '', 'on', '1', '/17/20/08/1776779949', '2020-09-28 06:21:05', null, '23', null, null, null, null, '1', '2020-09-28', null, null, '1');
INSERT INTO `cms_complaint_general` VALUES ('21', 'via police station', '26', null, 'document look professionally produced, Word provides header, footer, cover page, and text box designs that ', '17', 'document look professionally produced, Word provides header, footer, cover page, and text box designs that document look professionally produced, Word provides header, footer, cover page, and text box designs that document look professionally produced, Word provides header, footer, cover page, and text box designs that ', '', 'on', '1', '4//20/08/1879634062', '2020-09-28 06:26:11', null, '24', null, null, null, null, '1', '2020-09-28', null, null, '1');
INSERT INTO `cms_complaint_general` VALUES ('22', 'By Citizen', '2', null, 'Theme, the pictures, charts, and SmartArt graphics change to match your new theme. When you apply styles, your ', '13', 'Theme, the pictures, charts, and SmartArt graphics change to match your new theme. When you apply styles, your Theme, the pictures, charts, and SmartArt graphics change to match your new theme. When you apply styles, your ', '', 'on', '1', '/17/20/08/860347994', '2020-09-28 06:40:36', null, '25', null, null, null, null, '1', '2020-09-28', null, null, '1');
INSERT INTO `cms_complaint_general` VALUES ('23', 'By Citizen', '6', null, 'wwwwwwwwwwww', '4', 'Reading is easier, too, in the new Reading view. You can collapse parts of the document and focus on the text you want. If you need to stop reading before you reach the end, Word remembers where you left off - even on another device.', '', 'on', '1', '/6/20/08/770531537', '2020-09-28 06:46:59', null, '26', null, null, null, null, '1', '2020-09-28', null, null, '1');
INSERT INTO `cms_complaint_general` VALUES ('24', 'By Citizen', '10', null, 'Reading is easier, too, in the new Reading view. You can collapse parts of the document and focus on the text you want. If you need to stop reading before you reach the end, Word remembers where you left off - even on another device.', '15', 'Reading is easier, too, in the new Reading view. You can collapse parts of the document and focus on the text you want. If you need to stop reading before you reach the end, Word remembers where you left off - even on another device.', '', 'on', '4', '/8/20/08/1252079321', '2020-09-28 06:52:10', null, '27', null, null, null, '4', '1', '2020-09-28', null, null, '1');
INSERT INTO `cms_complaint_general` VALUES ('25', 'By Citizen', '1', null, 'that best fits your document.', '2', 'that best fits your document.that best fits your document.that best fits your document.that best fits your document.that best fits your document.', '', 'on', '3', '/17/20/08/680573727', '2020-09-28 07:07:54', null, '28', null, null, null, '18', '1', '2020-09-28', null, null, '1');
INSERT INTO `cms_complaint_general` VALUES ('26', 'By Citizen', '1', null, 'that best fits your document.', '1', 'that best fits your document.that best fits your document.that best fits your document.that best fits your document.that best fits your document.', '', 'on', '3', '/17/20/08/1105591798', '2020-09-28 07:15:32', null, '29', null, null, null, '16', '1', '2020-09-28', null, null, '1');
INSERT INTO `cms_complaint_general` VALUES ('27', 'By Citizen', '7', null, 'To make your document look professionally produced, Word provides header, footer, cover page, and text box designs that complement each other. For example, you can add a matching cover page, header, and sidebar. Click Insert and then choose the elements you want from the different galleries.', '12', 'To make your document look professionally produced, Word provides header, footer, cover page, and text box designs that complement each other. For example, you can add a matching cover page, header, and sidebar. Click Insert and then choose the elements you want from the different galleries.To make your document look professionally produced, Word provides header, footer, cover page, and text box designs that complement each other. For example, you can add a matching cover page, header, and sidebar. Click Insert and then choose the elements you want from the different galleries.', '', 'on', '1', '/6/20/08/127293027', '2020-09-28 07:24:32', null, '30', null, null, null, null, '1', '2020-09-28', null, null, '1');
INSERT INTO `cms_complaint_general` VALUES ('28', 'By Citizen', '7', null, 'To make your document look professionally produced, Word provides header, footer, cover page, and text box designs that complement each other. For example, you can add a matching cover page, header, and sidebar. Click Insert and then choose the elements you want from the different galleries.', '12', 'To make your document look professionally produced, Word provides header, footer, cover page, and text box designs that complement each other. For example, you can add a matching cover page, header, and sidebar. Click Insert and then choose the elements you want from the different galleries.To make your document look professionally produced, Word provides header, footer, cover page, and text box designs that complement each other. For example, you can add a matching cover page, header, and sidebar. Click Insert and then choose the elements you want from the different galleries.', '', 'on', '1', '/6/20/08/737145843', '2020-09-28 07:30:13', null, '31', null, null, null, null, '1', '2020-09-28', null, null, '1');
INSERT INTO `cms_complaint_general` VALUES ('29', 'via police station', '5', null, 'Video provides a powerful way to help you prove your point. When you click Online Video, you can paste in the embed ', '13', 'To make your document look professionally produced, Word provides header, footer, cover page, and text box designs that complement each other. For example, you can add a matching cover page, header, and sidebar. Click Insert and then choose the elements you want from the different galleries.\nThemes and styles also help keep your document coordinated. When you click Design and choose a new Theme, the pictures, charts, and SmartArt graphics change to match your new theme. When you apply styles, your headings change to match the new theme.\n', '', 'on', '1', '4//20/08/1349537054', '2020-09-28 08:26:15', null, '32', null, null, null, null, '2', '2020-09-28', null, null, '1');
INSERT INTO `cms_complaint_general` VALUES ('30', 'By Citizen', '1', null, 'Save time in Word with new buttons that show up where you need them. To change the way a picture fits in your docu', '15', 'Save time in Word with new buttons that show up where you need them. To change the way a picture fits in your document, click it and a button for layout options appears next to it. When you work on a table, click where youSave time in Word with new buttons that show up where you need them. To change the way a picture fits in your document, click it and a button for layout options appears next to it. When you work on a table, click where you', '', 'on', '1', '/17/20/08/2112825065', '2020-09-28 09:30:45', null, '33', null, null, null, null, '1', '2020-09-28', null, null, '1');
INSERT INTO `cms_complaint_general` VALUES ('31', 'By Citizen', '1', null, 'Save time in Word with ne', '15', 'Save time in Word with new buttons that show up where you need them. To change the way a picture fits in your document, click it and a button for layout options appears next to it. When you work on a table, clicrk on a table, click where you', '', 'on', '2', '4/17/20/08/1484294662', '2020-09-28 09:37:50', null, '34', null, null, null, '20', '1', '2020-09-28', null, null, '1');
INSERT INTO `cms_complaint_general` VALUES ('32', 'By Citizen', '1', null, 'Save time in Word with ne', '15', 'Save time in Word with new buttons that show up where you need them. To change the way a picture fits in your document, click it and a button for layout options appears next to it. When you work on a table, clicrk on a table, click where you', '', 'on', '3', '4/17/20/08/1735994414', '2020-09-28 09:42:56', null, '35', null, null, null, '21', '1', '2020-09-28', null, null, '1');
INSERT INTO `cms_complaint_general` VALUES ('33', 'By Citizen', '1', null, 'Save time in Word with ne', '15', 'cument, click it and a button for layout options appears next to it. When you work on a table, clicrk on a table, click where you', '', 'on', '1', '4/17/20/08/736657928', '2020-09-28 09:46:47', null, '36', null, null, null, null, '1', '2020-09-28', null, null, '1');
INSERT INTO `cms_complaint_general` VALUES ('34', 'By Citizen', '9', null, 'Reading is easier, too, in the new Reading view. You can collapse parts of the document and focus on the text yo', '1', 'Reading is easier, too, in the new Reading view. You can collapse parts of the document and focus on the text you want. If you need to stop reading before you reach the end, Word remembers where you left off - even on another device.', '', 'on', '1', '4/8/20/08/1253057613', '2020-09-28 09:49:04', null, '37', null, null, null, null, '1', '2020-09-28', null, null, '1');
INSERT INTO `cms_complaint_general` VALUES ('35', 'By Citizen', '1', null, 'is easier, too, in the new Reading view. You can collapse parts of the document and focus on the text you on another device.', '1', 'Reading is easier, too, in the new Reading view. You can collapse parts of the document and focus on the text you want. If you need to stop reading before you reach the end, Word remembers where you left off - even on another device.', '', 'on', '1', '4/17/20/08/1698161357', '2020-09-28 10:11:15', null, '38', null, null, null, null, '1', '2020-09-28', null, null, '1');
INSERT INTO `cms_complaint_general` VALUES ('36', 'By Citizen', '1', null, 'is easier, too, in the new Reading view. You can collapse parts of the document and focus on the text you on another device.', '5', 'Reading is easier, too, in the new Reading view. You can collapse parts of the document and focus on the text you want. If you need to stop reading before you reach the end, Word remembers where you left off - even on another device.', '', 'on', '1', '4/17/20/08/661541127', '2020-09-28 10:11:22', null, '39', null, null, null, null, '1', '2020-09-28', null, null, '1');
INSERT INTO `cms_complaint_general` VALUES ('37', 'By Citizen', '1', null, 'is easier, too, in the new Reading view. You can collapse parts of the document and focus on the text you on another device.', '5', 'Reading is easier, too, in the new Reading view. You can collapse parts of the document and focus on the text you want. If you need to stop reading before you reach the end, Word remembers where you left off - even on another device.', '', 'on', '1', '4/17/20/08/537810731', '2020-09-28 10:11:28', null, '40', null, null, null, null, '1', '2020-09-28', null, null, '1');
INSERT INTO `cms_complaint_general` VALUES ('38', 'By Citizen', '1', null, 'is easier, too, in the new Reading view. You can collapse parts of the document and focus on the text you on another device.', '1', 'Reading is easier, too, in the new Reading view. You can collapse parts of the document and focus on the text you want. If you need to stop reading before you reach the end, Word remembers where you left off - even on another device.', '', 'on', '1', '4/17/20/08/95116374', '2020-09-28 10:11:35', null, '41', null, null, null, null, '1', '2020-09-28', null, null, '1');
INSERT INTO `cms_complaint_general` VALUES ('39', 'By Citizen', '1', null, 'is easier, too, in the new Reading view. You can collapse parts of the document and focus on the text you on another device.', '1', 'Reading is easier, too, in the new Reading view. You can collapse parts of the document and focus on the text you want. If you need to stop reading before you reach the end, Word remembers where you left off - even on another device.', '', 'on', '1', '4/17/20/08/1671863997', '2020-09-28 10:11:41', null, '42', null, null, null, null, '1', '2020-09-28', null, null, '1');
INSERT INTO `cms_complaint_general` VALUES ('40', 'By Citizen', '26', null, 'KusumaReading is easier, too, in the new Reading view. You can collapse parts of the document and focus on the text you want. If you need to stop reading before you reach the end, Word remembers where you left off - even on another device.', '2', 'Reading is easier, too, in the new Reading view. You can collapse parts of the document and focus on the text you want. If you need to stop reading before you reach the end, Word remembers where you left off - even on another device.', '', 'on', '1', '/17/20/08/1257623213', '2020-09-28 10:16:32', null, '43', null, null, null, null, '1', '2020-09-28', null, null, '1');
INSERT INTO `cms_complaint_general` VALUES ('41', 'By Citizen', '1', null, 'saaaaaaaaaaaaa', '15', 'aaaaaaaaaaaaa', '', 'on', '1', '4/17/20/08/2009025419', '2020-09-28 10:20:17', null, '44', null, null, null, null, '1', '2020-09-28', null, null, '1');
INSERT INTO `cms_complaint_general` VALUES ('42', 'By Citizen', '19', null, 'asdadasdadad', '18', 'asdasddsa', '', 'on', '1', '4/8/20/08/1908663805', '2020-09-28 10:23:49', null, '45', null, null, null, null, '1', '2020-09-28', null, null, '1');
INSERT INTO `cms_complaint_general` VALUES ('43', 'By Citizen', '1', null, ' you need to stop reading before you reach the end, Word remembers where you left off - even on another device.', '17', 'Reading is easier, too, in the new Reading view. You can collapse parts of the document and focus on the text you want. If you need to stop reading before you reach the end, Word remembers where you left off - even on another device.', '', 'on', '1', '4/17/20/08/1427763770', '2020-09-28 10:32:49', null, '46', null, null, null, null, '1', '2020-09-28', null, null, '1');
INSERT INTO `cms_complaint_general` VALUES ('44', 'via police station', '1', null, 'ddfsfgs', '17', 'sdgsgsg', '', 'on', '1', '4//20/08/960971373', '2020-09-28 11:17:28', null, '47', null, null, null, null, '2', '2020-09-28', null, null, '1');
INSERT INTO `cms_complaint_general` VALUES ('45', 'via police station', '1', null, 'ddfsfgs', '17', 'sdgsgsg', '', 'on', '1', '4//20/08/96857314', '2020-09-28 11:17:35', null, '48', null, null, null, null, '2', '2020-09-28', null, null, '1');
INSERT INTO `cms_complaint_general` VALUES ('46', 'By Citizen', '1', null, 'cvhfgfy', '10', 'gygyjfjfjmfvjm', '', 'on', '1', '4/17/20/08/2132934409', '2020-09-28 11:22:59', null, '49', null, null, null, null, '1', '2020-09-28', null, null, '1');
INSERT INTO `cms_complaint_general` VALUES ('47', 'via police station', '22', null, 'dsfsfs', '10', 'sfsfsfsfsf s sdfsfsf', '', 'on', '1', '5//20/10/645518860', '2020-10-07 16:36:46', null, '50', null, null, null, null, '1', '2020-10-07', null, null, '1');
INSERT INTO `cms_complaint_general` VALUES ('48', 'via police station', '22', null, 'dsgsgsfgsgsgsgsgsgsg', '16', 'Word with new buttons that show up where you need them. To change the way a picture fits in your document, click it and a button for layout options appears next to it. When you work on a table, click where you want to add a row ', '', 'on', '1', '5//20/10/716407317', '2020-10-07 16:44:35', null, '51', null, null, null, null, '1', '2020-10-07', null, null, '1');
INSERT INTO `cms_complaint_general` VALUES ('49', 'via police station', '2', null, 'click it and a button for layout options appears next to it. When you work on a table, click where you want to add a row or a column, and then click the plus sign.', '8', 'a button for layout options appears next to it. When you work on a table, click where you want to add a row or a column, and then click the plus sign.click it and a button for layout options appears next to it. When you work on a table, click where you want to add a row or a column, and then click the plus sign.', '', 'on', '1', '4//20/10/1021834117', '2020-10-07 21:23:44', null, '52', null, null, null, null, '1', '2020-10-07', null, null, '1');
INSERT INTO `cms_complaint_general` VALUES ('50', 'via police station', '21', null, 'you want to add a row or a column, and then click the plus sign.', '8', 'layout options appears next to it. When you work on a table, click where you want to add a row or a column, and then click the plus sign.click it and a button for layout options appears next to it. When you work on a table, click where you want to add a row or a column, and then click the plus sign.', '', 'on', '1', '5//20/10/1012903610', '2020-10-07 21:27:37', null, '53', null, null, null, null, '1', '2020-10-07', null, null, '1');
INSERT INTO `cms_complaint_general` VALUES ('51', 'via police station', '2', null, 'saadsa dadaad dasdad', '9', 'document look professionally produced, Word provides header, footer, cover page, and text box designs that complement each other. For example, you can add a matching cover page, header, and sidebar. Click Insert and then choose ', '', 'on', '1', '4//20/10/1202556237', '2020-10-08 08:52:14', null, '54', null, null, null, null, '1', '2020-10-08', null, null, null);
INSERT INTO `cms_complaint_general` VALUES ('52', 'via police station', '22', null, 'header, and sidebar. Click Insert and then choose ', '9', 'look professionally produced, Word provides header, footer, cover page, and text box designs that complement each other. For example, you can add a matching cover page, header, and sidebar. Click Insert and then choose ', '', 'on', '1', '5//20/10/146833620', '2020-10-08 08:54:13', null, '55', null, null, null, null, '1', '2020-10-08', null, null, null);
INSERT INTO `cms_complaint_general` VALUES ('53', 'By Citizen', '29', null, 'adadad', '17', 'Save time in Word with new buttons that show up where you need them. To change the way a picture fits in your document, click it and a button for layout options appears next to it. When you work on a table, click where you want to add a row or a column, and then click the plus sign.', '', 'on', '1', '4/17/20/10/446913592', '2020-10-08 22:21:34', null, '56', null, null, null, null, '1', '2020-10-08', null, null, '1');
INSERT INTO `cms_complaint_general` VALUES ('54', 'By Citizen', '22', null, 'ord with new buttons', '17', ' that show up where you need them. To change the way a picture fits in your document, click it and a button for layout options appears next to it. When you work on a table, click where you want to add a row or a column, and then click the plus sign.', '', 'on', '1', '5/5/20/10/1486026506', '2020-10-08 22:26:54', null, '57', null, null, null, null, '1', '2020-10-08', null, null, '1');
INSERT INTO `cms_complaint_general` VALUES ('55', 'By Citizen', '26', null, 'click the plus sign.', '5', ' that show up where you need them. To change the way a picture fits in your document, click it and a button for layout options appears next to it. When you work on a table, click where you want to add a row or a column, and then ', '', 'on', '1', '4/17/20/10/1636622219', '2020-10-08 22:28:20', null, '58', null, null, null, null, '1', '2020-10-08', null, null, '1');
INSERT INTO `cms_complaint_general` VALUES ('56', 'By Citizen', '1', null, 'click it and a button for layout options appears next to it. When you work on a table, click where ', '1', 'click it and a button for layout options appears next to it. When you work on a table, click where you want to add a row or a column, and then click the plus sign.', '', 'on', '1', '4/17/20/10/1493869985', '2020-10-08 22:52:57', null, '59', null, null, null, null, '1', '2020-10-08', null, null, '1');
INSERT INTO `cms_complaint_general` VALUES ('57', 'via police station', '1', null, 'To make your document look professionally produced, Word provides s.', '14', 'header, footer, cover page, and text box designs that complement each other. For example, you can add a matching cover page, header, and sidebar. Click Insert and then choose the elements you want from the different gallerie', '', 'on', '1', '4//20/10/2122084885', '2020-10-08 23:00:50', null, '60', null, null, null, null, '4', '2020-10-08', null, null, '1');
INSERT INTO `cms_complaint_general` VALUES ('58', 'By Citizen', '2', null, 'column, and then click the plus sign.', '13', 'fits in your document, click it and a button for layout options appears next to it. When you work on a table, click where you want to add a row or a ', '', 'on', '1', '4/17/20/10/66431940', '2020-10-08 23:59:08', null, '61', null, null, null, null, '1', '2020-10-08', null, null, '1');
INSERT INTO `cms_complaint_general` VALUES ('59', 'via police station', '5', null, 'Video provides a powerful way to help you prove your point. When you click Online Video, you can paste in the embed ', '14', 'vides a powerful way to help you prove your point. When you click Online Video, you can paste in the embed ', '', 'on', '1', '4//20/10/549827930', '2020-10-09 05:37:29', null, '62', null, null, null, null, '16', '2020-10-09', null, null, '1');
INSERT INTO `cms_complaint_general` VALUES ('60', 'By Citizen', '1', null, 'xdgxvxzv', '7', 'zdfzvzvzdvxcvxcvcvxcvxc', '', 'on', '2', '4/17/20/10/1810173541', '2020-10-09 14:43:17', '1', '63', null, null, null, '24', '1', '2020-10-09', null, null, '1');
INSERT INTO `cms_complaint_general` VALUES ('61', 'via police station', '22', null, 'bvcbcvb', '18', 'cfgcg', '', 'on', '1', '5//20/11/1309530455', '2020-11-18 14:04:54', null, '64', null, null, null, null, '2', '2020-11-18', null, null, '1');

-- ----------------------------
-- Table structure for `cms_complaint_type`
-- ----------------------------
DROP TABLE IF EXISTS `cms_complaint_type`;
CREATE TABLE `cms_complaint_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `complaint_category` varchar(255) DEFAULT NULL,
  `complaint_category_status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of cms_complaint_type
-- ----------------------------
INSERT INTO `cms_complaint_type` VALUES ('1', 'Abuse of Women or Children', '1');
INSERT INTO `cms_complaint_type` VALUES ('2', 'Appreciation', '1');
INSERT INTO `cms_complaint_type` VALUES ('3', 'Archeological Issue', '1');
INSERT INTO `cms_complaint_type` VALUES ('4', 'Assault', '1');
INSERT INTO `cms_complaint_type` VALUES ('5', 'Bribery and Corruption', '1');
INSERT INTO `cms_complaint_type` VALUES ('6', 'Complaint against Police', '1');
INSERT INTO `cms_complaint_type` VALUES ('7', 'Criminal Offence', '1');
INSERT INTO `cms_complaint_type` VALUES ('8', 'Cybercrime', '1');
INSERT INTO `cms_complaint_type` VALUES ('9', 'Demonstration / Protest / Strike', '1');
INSERT INTO `cms_complaint_type` VALUES ('10', 'Environmental Issue', '1');
INSERT INTO `cms_complaint_type` VALUES ('11', 'Exchange Fault', '1');
INSERT INTO `cms_complaint_type` VALUES ('12', 'Foreign Employment Issue', '1');
INSERT INTO `cms_complaint_type` VALUES ('13', 'Frauds / Cheating', '1');
INSERT INTO `cms_complaint_type` VALUES ('14', 'House Breaking', '1');
INSERT INTO `cms_complaint_type` VALUES ('15', 'Illegal Mining', '1');
INSERT INTO `cms_complaint_type` VALUES ('16', 'Industrial / Labour Dispute', '1');
INSERT INTO `cms_complaint_type` VALUES ('17', 'Information', '1');
INSERT INTO `cms_complaint_type` VALUES ('18', 'Intellectual Property Dispute', '1');
INSERT INTO `cms_complaint_type` VALUES ('19', 'Miscellaneous', '1');
INSERT INTO `cms_complaint_type` VALUES ('20', 'Mischief / Sabotage', '1');
INSERT INTO `cms_complaint_type` VALUES ('21', 'Murder', '1');
INSERT INTO `cms_complaint_type` VALUES ('22', 'Narcotics / Dangerous Drugs', '1');
INSERT INTO `cms_complaint_type` VALUES ('23', 'National Security', '1');
INSERT INTO `cms_complaint_type` VALUES ('24', 'Natural Disaster', '1');
INSERT INTO `cms_complaint_type` VALUES ('25', 'Offence / Act against Public Health', '1');
INSERT INTO `cms_complaint_type` VALUES ('26', 'Offence against Public Property', '1');
INSERT INTO `cms_complaint_type` VALUES ('27', 'Organized Crime', '1');
INSERT INTO `cms_complaint_type` VALUES ('28', 'Personal Complaint', '1');
INSERT INTO `cms_complaint_type` VALUES ('29', 'Police Clearance', '1');
INSERT INTO `cms_complaint_type` VALUES ('30', 'Property Disputes', '1');
INSERT INTO `cms_complaint_type` VALUES ('31', 'Robbery', '1');
INSERT INTO `cms_complaint_type` VALUES ('32', 'Sexual Offences', '1');
INSERT INTO `cms_complaint_type` VALUES ('33', 'Terrorism Related', '1');
INSERT INTO `cms_complaint_type` VALUES ('34', 'Theft', '1');
INSERT INTO `cms_complaint_type` VALUES ('35', 'Threat &amp; Intimidation', '1');
INSERT INTO `cms_complaint_type` VALUES ('36', 'Tourist Harassment', '1');
INSERT INTO `cms_complaint_type` VALUES ('37', 'Traffic &amp; Road Safety', '1');
INSERT INTO `cms_complaint_type` VALUES ('38', 'Treasure Hunting', '1');
INSERT INTO `cms_complaint_type` VALUES ('39', 'Vice Related', '1');
INSERT INTO `cms_complaint_type` VALUES ('40', 'Violation of Immigration Laws', '1');
INSERT INTO `cms_complaint_type` VALUES ('41', 'Others', '1');

-- ----------------------------
-- Table structure for `cms_dependant`
-- ----------------------------
DROP TABLE IF EXISTS `cms_dependant`;
CREATE TABLE `cms_dependant` (
  `d_dependant_id` int(10) NOT NULL AUTO_INCREMENT,
  `d_title` varchar(4) DEFAULT NULL,
  `d_name_with_initials` varchar(50) DEFAULT NULL,
  `d_calling_name` varchar(50) DEFAULT NULL,
  `d_gender` varchar(6) DEFAULT NULL,
  `d_district` varchar(50) DEFAULT NULL,
  `d_nic_number` varchar(12) DEFAULT NULL,
  `d_contact_number_mobile` varchar(10) DEFAULT NULL,
  `d_contact_number_other` varchar(10) DEFAULT NULL,
  `d_email_address` varchar(50) DEFAULT NULL,
  `d_nearest_police_station` varchar(50) DEFAULT NULL,
  `d_registered_date` datetime DEFAULT NULL,
  `d_last_edited_date` datetime DEFAULT NULL,
  `d_title_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`d_dependant_id`),
  UNIQUE KEY `nic` (`d_nic_number`),
  KEY `d_title_id` (`d_title_id`),
  CONSTRAINT `d_title_id` FOREIGN KEY (`d_title_id`) REFERENCES `cms_title` (`t_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of cms_dependant
-- ----------------------------

-- ----------------------------
-- Table structure for `cms_district`
-- ----------------------------
DROP TABLE IF EXISTS `cms_district`;
CREATE TABLE `cms_district` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `district` varchar(255) DEFAULT NULL,
  `district_code` varchar(3) DEFAULT NULL,
  `d_province_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `d_province_id` (`d_province_id`),
  CONSTRAINT `d_province_id` FOREIGN KEY (`d_province_id`) REFERENCES `cms_province` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of cms_district
-- ----------------------------
INSERT INTO `cms_district` VALUES ('1', 'Ampara', 'AMP', '6');
INSERT INTO `cms_district` VALUES ('2', 'Anuradhapura', 'ANU', '2');
INSERT INTO `cms_district` VALUES ('3', 'Badulla', 'BDU', '9');
INSERT INTO `cms_district` VALUES ('4', 'Batticaloa', 'BAT', '6');
INSERT INTO `cms_district` VALUES ('5', 'Colombo', 'CMB', '5');
INSERT INTO `cms_district` VALUES ('6', 'Galle', 'GLE', '4');
INSERT INTO `cms_district` VALUES ('7', 'Gampaha', 'GMP', '5');
INSERT INTO `cms_district` VALUES ('8', 'Hambanthota', 'HMB', '4');
INSERT INTO `cms_district` VALUES ('9', 'Jaffna', 'JAF', '7');
INSERT INTO `cms_district` VALUES ('10', 'Kaluthara', 'KTR', '5');
INSERT INTO `cms_district` VALUES ('11', 'Kandy', 'KND', '1');
INSERT INTO `cms_district` VALUES ('12', 'Kegalle', 'KGL', '8');
INSERT INTO `cms_district` VALUES ('13', 'Kilinochchi', 'KIL', '7');
INSERT INTO `cms_district` VALUES ('14', 'Kurunegala', 'KUG', '3');
INSERT INTO `cms_district` VALUES ('15', 'Mannar', 'MAN', '7');
INSERT INTO `cms_district` VALUES ('16', 'Matale', 'MTL', '1');
INSERT INTO `cms_district` VALUES ('17', 'Matara', 'MTR', '4');
INSERT INTO `cms_district` VALUES ('18', 'Moneragala', 'MON', '9');
INSERT INTO `cms_district` VALUES ('19', 'Mullaitivu', 'MUL', '7');
INSERT INTO `cms_district` VALUES ('20', 'Nuwara Eliya', 'NUE', '1');
INSERT INTO `cms_district` VALUES ('21', 'Polonnaruwa', 'POL', '2');
INSERT INTO `cms_district` VALUES ('22', 'Puttalam', 'PUT', '3');
INSERT INTO `cms_district` VALUES ('23', 'Ratnapura', 'RTP', '8');
INSERT INTO `cms_district` VALUES ('24', 'Trincomalee', 'RTI', '6');
INSERT INTO `cms_district` VALUES ('25', 'Vavuniya', 'VUA', '7');

-- ----------------------------
-- Table structure for `cms_division`
-- ----------------------------
DROP TABLE IF EXISTS `cms_division`;
CREATE TABLE `cms_division` (
  `div_id` int(11) NOT NULL AUTO_INCREMENT,
  `div_division_name` varchar(255) DEFAULT NULL,
  `div_division_status` char(1) DEFAULT NULL,
  `div_disctrict_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`div_id`),
  KEY `div_disctrict_id` (`div_disctrict_id`),
  CONSTRAINT `div_disctrict_id` FOREIGN KEY (`div_disctrict_id`) REFERENCES `cms_district` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of cms_division
-- ----------------------------
INSERT INTO `cms_division` VALUES ('1', 'Kandy ', '1', '11');
INSERT INTO `cms_division` VALUES ('2', 'Gampola ', '1', '11');
INSERT INTO `cms_division` VALUES ('3', 'Matale ', '1', '16');
INSERT INTO `cms_division` VALUES ('4', 'Nuwaraeliya ', '1', '20');
INSERT INTO `cms_division` VALUES ('5', 'Hatton ', '1', '20');
INSERT INTO `cms_division` VALUES ('6', 'Theldeniya ', '1', '11');
INSERT INTO `cms_division` VALUES ('7', 'Anuradhapura ', '1', '2');
INSERT INTO `cms_division` VALUES ('8', 'Polonnaruwa ', '1', '21');
INSERT INTO `cms_division` VALUES ('9', 'Kurunagala ', '1', '14');
INSERT INTO `cms_division` VALUES ('10', 'Kuliyapitiya ', '1', '14');
INSERT INTO `cms_division` VALUES ('11', 'Nikaweratiya ', '1', '14');
INSERT INTO `cms_division` VALUES ('12', 'Puttalam ', '1', '22');
INSERT INTO `cms_division` VALUES ('13', 'Chilaw ', '1', '22');
INSERT INTO `cms_division` VALUES ('14', 'Matara ', '1', '17');
INSERT INTO `cms_division` VALUES ('15', 'Galle ', '1', '6');
INSERT INTO `cms_division` VALUES ('16', 'Elpitiya ', '1', '6');
INSERT INTO `cms_division` VALUES ('17', 'Tangalle ', '1', '8');
INSERT INTO `cms_division` VALUES ('18', 'Colombo central ', '1', '5');
INSERT INTO `cms_division` VALUES ('19', 'Colombo north ', '1', '5');
INSERT INTO `cms_division` VALUES ('20', 'Colombo south ', '1', '5');
INSERT INTO `cms_division` VALUES ('21', 'Kelaniya ', '1', '5');
INSERT INTO `cms_division` VALUES ('22', 'Gampaha ', '1', '7');
INSERT INTO `cms_division` VALUES ('23', 'Negombo ', '1', '7');
INSERT INTO `cms_division` VALUES ('24', 'Nugegoda ', '1', '5');
INSERT INTO `cms_division` VALUES ('25', 'Batticaloa ', '1', '4');
INSERT INTO `cms_division` VALUES ('26', 'Ampara ', '1', '1');
INSERT INTO `cms_division` VALUES ('27', 'Trincomalee ', '1', '24');
INSERT INTO `cms_division` VALUES ('28', 'Kantale ', '1', '24');
INSERT INTO `cms_division` VALUES ('29', 'Kankasanthurai ', '1', '9');
INSERT INTO `cms_division` VALUES ('30', 'Jaffna ', '1', '9');
INSERT INTO `cms_division` VALUES ('31', 'Vavuniya ', '1', '25');
INSERT INTO `cms_division` VALUES ('32', 'Kilinochchi ', '1', '13');
INSERT INTO `cms_division` VALUES ('33', 'Mannar ', '1', '15');
INSERT INTO `cms_division` VALUES ('34', 'Mulathivu ', '1', '19');
INSERT INTO `cms_division` VALUES ('35', 'Ratnapura ', '1', '23');
INSERT INTO `cms_division` VALUES ('36', 'Kagalle ', '1', '12');
INSERT INTO `cms_division` VALUES ('37', 'Embilipitiya', '1', '23');
INSERT INTO `cms_division` VALUES ('38', 'Badulla', '1', '3');
INSERT INTO `cms_division` VALUES ('39', 'Bandarawela', '1', '3');
INSERT INTO `cms_division` VALUES ('40', 'Monaragal', '1', '18');
INSERT INTO `cms_division` VALUES ('41', null, null, null);

-- ----------------------------
-- Table structure for `cms_involved_professional`
-- ----------------------------
DROP TABLE IF EXISTS `cms_involved_professional`;
CREATE TABLE `cms_involved_professional` (
  `ip_professionals_id` int(10) NOT NULL AUTO_INCREMENT,
  `ip_title` varchar(4) DEFAULT NULL,
  `ip_name_with_initials` varchar(50) DEFAULT NULL,
  `ip_calling_name` varchar(50) DEFAULT NULL,
  `ip_gender` varchar(6) DEFAULT NULL,
  `ip_nic_number` varchar(12) DEFAULT NULL,
  `ip_district` varchar(50) DEFAULT NULL,
  `ip_profession` varchar(255) DEFAULT NULL,
  `ip_office_address` varchar(255) DEFAULT NULL,
  `ip_contact_number_office` varchar(12) DEFAULT NULL,
  `ip_contact_number_mobile` varchar(10) DEFAULT NULL,
  `ip_contact_number_other` varchar(10) DEFAULT NULL,
  `ip_email_address` varchar(50) DEFAULT NULL,
  `ip__worked_police_station` varchar(50) DEFAULT '',
  `ip__registered_date` datetime DEFAULT NULL,
  `ip_last_edited_date` datetime DEFAULT NULL,
  `ip_title_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`ip_professionals_id`),
  UNIQUE KEY `nic` (`ip_nic_number`),
  KEY `ip_title_id` (`ip_title_id`),
  CONSTRAINT `ip_title_id` FOREIGN KEY (`ip_title_id`) REFERENCES `cms_title` (`t_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of cms_involved_professional
-- ----------------------------

-- ----------------------------
-- Table structure for `cms_involved_third_party`
-- ----------------------------
DROP TABLE IF EXISTS `cms_involved_third_party`;
CREATE TABLE `cms_involved_third_party` (
  `itp_third_party_id` int(10) NOT NULL AUTO_INCREMENT,
  `itp_title` varchar(4) DEFAULT NULL,
  `itp_name_with_initials` varchar(50) DEFAULT NULL,
  `itp_calling_name` varchar(50) DEFAULT NULL,
  `itp_gender` varchar(6) DEFAULT NULL,
  `itp_nic_number` varchar(12) DEFAULT NULL,
  `itp_district` varchar(50) DEFAULT NULL,
  `itp_profession` varchar(255) DEFAULT NULL,
  `itp_office_address` varchar(255) DEFAULT NULL,
  `itp_contact_number_office` varchar(12) DEFAULT NULL,
  `itp_contact_number_mobile` varchar(10) DEFAULT NULL,
  `itp_contact_number_other` varchar(10) DEFAULT NULL,
  `itp_email_address` varchar(50) DEFAULT NULL,
  `itp__last_edited_date` datetime DEFAULT NULL,
  `itp_edited_by` datetime DEFAULT NULL,
  `itp_title_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`itp_third_party_id`),
  UNIQUE KEY `nic` (`itp_nic_number`),
  KEY `itp_title_id` (`itp_title_id`),
  CONSTRAINT `itp_title_id` FOREIGN KEY (`itp_title_id`) REFERENCES `cms_title` (`t_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of cms_involved_third_party
-- ----------------------------

-- ----------------------------
-- Table structure for `cms_police_officer`
-- ----------------------------
DROP TABLE IF EXISTS `cms_police_officer`;
CREATE TABLE `cms_police_officer` (
  `po_id` int(11) NOT NULL AUTO_INCREMENT,
  `po_officer_number` varchar(255) DEFAULT NULL,
  `po_title` varchar(4) DEFAULT NULL COMMENT '0=mr, 1=mrs,2=ms',
  `po_name_with_initials` varchar(50) DEFAULT NULL,
  `po_calling_name` varchar(50) DEFAULT NULL,
  `po_rank_id` int(11) DEFAULT NULL,
  `po_province_id` int(11) DEFAULT NULL,
  `po_district_id` int(11) DEFAULT NULL,
  `po_division_id` int(11) DEFAULT NULL,
  `po_police_station_id` int(11) DEFAULT NULL,
  `po_nic_number` varchar(12) DEFAULT NULL,
  `po_contact_number_mobile` varchar(10) DEFAULT NULL,
  `po_contact_number_other` varchar(10) DEFAULT NULL,
  `po_email_address` varchar(50) DEFAULT NULL,
  `po_residence_address_no` varchar(255) DEFAULT NULL,
  `po_residence_address_street` varchar(255) DEFAULT NULL,
  `po_residence_address_town` varchar(255) DEFAULT NULL,
  `po_residence_address_district` varchar(255) DEFAULT NULL,
  `po_highest_qualification_achieved` varchar(255) DEFAULT NULL,
  `po_other_qualification__achieved` varchar(255) DEFAULT NULL,
  `po_profile_picture` text,
  `po_user_name` varchar(50) DEFAULT NULL,
  `po_password` varchar(20) DEFAULT NULL,
  `po_created_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `po_last_edited_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `po_title_id` int(10) DEFAULT NULL,
  `po_user_group_id` int(11) DEFAULT NULL,
  `po_user_id` int(11) DEFAULT NULL,
  `po_status` char(1) DEFAULT NULL,
  PRIMARY KEY (`po_id`),
  KEY `po_title_id` (`po_title_id`),
  KEY `po_police_station_id` (`po_police_station_id`),
  KEY `po_user_group_id` (`po_user_group_id`),
  KEY `po_rank_id` (`po_rank_id`),
  KEY `po_province_id` (`po_province_id`),
  KEY `po_division_id` (`po_division_id`),
  KEY `po_officer_number` (`po_officer_number`) USING BTREE,
  KEY `po_district_id` (`po_district_id`),
  CONSTRAINT `po_district_id` FOREIGN KEY (`po_district_id`) REFERENCES `cms_district` (`id`),
  CONSTRAINT `po_division_id` FOREIGN KEY (`po_division_id`) REFERENCES `cms_division` (`div_id`),
  CONSTRAINT `po_police_station_id` FOREIGN KEY (`po_police_station_id`) REFERENCES `cms_police_station` (`ps_police_station_id`),
  CONSTRAINT `po_province_id` FOREIGN KEY (`po_province_id`) REFERENCES `cms_province` (`id`),
  CONSTRAINT `po_rank_id` FOREIGN KEY (`po_rank_id`) REFERENCES `cms_rank` (`id`),
  CONSTRAINT `po_title_id` FOREIGN KEY (`po_title_id`) REFERENCES `cms_title` (`t_id`),
  CONSTRAINT `po_user_group_id` FOREIGN KEY (`po_user_group_id`) REFERENCES `cms_usergroup` (`user_group_id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of cms_police_officer
-- ----------------------------
INSERT INTO `cms_police_officer` VALUES ('1', '00000', '0', 'administrator', 'Administrator', null, null, null, null, null, '', '', '', '', '', '', '', '', '', '', '00000.jpg', 'administrator', '202cb962ac59075b964b', '2020-08-26 08:24:10', '2020-08-28 01:30:22', null, '4', null, '0');
INSERT INTO `cms_police_officer` VALUES ('2', '80000', '0', 'AP Perera', 'Perera', '8', '4', '17', '14', '1', '198476601305', '0716668761', '0773509887', 'anushahap@gmail.com', '165A', 'Rangei Mahawatta', 'Gandara', '17', 'BSc Degree', 'PGD', '80000.jpg', 'Perera80000', '67f676a4579ad08af7de', '2020-08-26 23:56:42', '2020-08-28 01:30:14', null, '1', null, '1');
INSERT INTO `cms_police_officer` VALUES ('3', '80120', '0', 'KK Samaranayaka', 'Kasun', '10', '4', '17', '14', '1', '198125336521', '0773509125', '0773509888', 'anushahap@gmail.com', 'No 1', 'ist lane', 'Gandara', '17', 'PGD', 'Diploma', '80120.jpg', 'Kasun80120', '1196f987cc72a598edb7', '2020-08-27 00:17:55', '2020-08-28 01:30:14', null, '2', null, '1');
INSERT INTO `cms_police_officer` VALUES ('4', '80122', '1', 'I Lakmini', 'Lakmini', '10', '4', '17', '14', '1', '198172536521', '0773509500', '0773509656', 'anushahap@gmail.com', 'No 25.', '2nd lane', 'Kapugama', '17', 'PGD', 'Diploma', '80122.jpg', 'Lakmini80122', 'a61b4178c4996ba9357a', '2020-08-27 00:29:57', '2020-08-28 01:30:14', null, '3', null, '1');
INSERT INTO `cms_police_officer` VALUES ('5', '80255', '0', '`N Kusumsiri', 'Nalin', '11', '4', '17', '14', '1', '198025666464', '0773509887', '', 'anushahap@gmail.com', '', '', 'Ahangama', '6', 'A/L', '', '80255.jpg', 'Nalin80255', '6031a23fb60287f5982f', '2020-08-27 06:31:42', '2020-08-28 01:30:14', null, '3', null, '1');
INSERT INTO `cms_police_officer` VALUES ('6', '80258', '1', '`AC Disanayake', 'Kalpani', '11', '4', '17', '14', '1', '198025662555', '0773509265', '0773502156', 'anushahap@gmail.com', '', '', 'Galle', '6', 'A/L', '', '80258.jpg', 'Kalpani80258', 'fc1e2f8197adbbfe5047', '2020-08-27 06:35:18', '2020-08-28 01:30:14', null, '3', null, '1');
INSERT INTO `cms_police_officer` VALUES ('7', '80300', '0', 'N peiris', 'Nimal', '9', '4', '17', '14', '1', '198325664848', '0713509265', '0723502156', 'anushahap@gmail.com', '', '', 'Weligama', '17', 'PGD', '', '80300.jpg', 'Nimal80300', 'd90cbf2eb4c9b2bc5610', '2020-08-27 06:37:16', '2020-08-28 01:30:14', null, '3', null, '1');
INSERT INTO `cms_police_officer` VALUES ('8', '80315', '2', 'DH Nilani', 'Nilani', '10', '4', '17', '14', '1', '199026484848', '0712154842', '', 'nilaaaniiii@gmail.com', '', '', 'matara', '17', 'A/L', '', '80315.jpg', 'Nilani80315', 'b0a3859e78b1aebed9ac', '2020-08-27 06:38:33', '2020-08-28 01:30:14', null, '3', null, '1');
INSERT INTO `cms_police_officer` VALUES ('9', '80500', '0', 'HAP Suranga', 'Patabendige', '8', '4', '17', '14', '1', '197703126544', '0725484878', '0772009887', 'suraaangaaa@gmail.com', 'Gamunu Rd', 'Samagi mw', 'Gandara', '17', 'BSc Degree', '', '80500.jpg', 'Patabendige80500', 'fe5c2b6980c721b54fba', '2020-08-27 06:39:45', '2020-08-28 01:30:14', null, '3', null, '1');
INSERT INTO `cms_police_officer` VALUES ('10', '80421', '0', 'S kariyawasam', 'kariyawasam', '8', '4', '17', '14', '2', '191654462659', '0725484878', '0772009887', 'suraaangaaa@gmail.com', '1st lane', 'Samagi mw', 'Dikwella', '17', 'BSc Degree', '', '80421.jpg', 'kariyawasam80421', '315358a6c699d5337649', '2020-08-27 06:44:01', '2020-08-28 01:30:14', null, '1', null, '1');
INSERT INTO `cms_police_officer` VALUES ('11', '80488', '0', 'S weerasinghe', 'weerasinghe', '8', '4', '17', '14', '2', '192548485215', '0723548421', '0732654985', 'anushahap@gmail.com', '1st lane/', 'Samagi mw', 'Gandara', '17', 'BSc Degree', '', '80488.jpg', 'weerasinghe80488', '570a7ffd4a947edcbbd5', '2020-08-27 06:48:00', '2020-08-28 01:30:14', null, '1', null, '1');
INSERT INTO `cms_police_officer` VALUES ('12', '80012', '1', 'DF Kamani', 'Kamani', '11', '4', '17', '14', '2', '199248787877', '0725785278', '0732654985', 'kamaniioioi@gmail.com', '25B', '2ns lane', 'Dikwella', '17', 'A/L', '', '80012.jpg', 'Kamani80012', 'e456efbc59718e06b844', '2020-08-27 06:50:31', '2020-08-28 01:30:14', null, '3', null, '1');
INSERT INTO `cms_police_officer` VALUES ('13', '80112', '0', 'A Perera', 'Amarasiri', '10', '4', '17', '14', '2', '199557878454', '0722648484', '0732654985', 'amarasiriririr@gmail.com', '255/1', '', 'Dikwella', '17', 'A/L', '', '80112.jpg', 'Amarasiri80112', '1b67a6c03cede6624f7e', '2020-08-27 06:51:43', '2020-08-28 01:30:15', null, '3', null, '1');
INSERT INTO `cms_police_officer` VALUES ('14', '80113', '1', 'GS Nadeshika', 'Nadeshika', '9', '4', '17', '14', '2', '198421454104', '0722648484', '0732654985', 'nadeeshika@gmail.com', '', '3rd lane', 'Gandara', '17', 'Diploma', '', '80113.jpg', 'Nadeshika80113', '4907187ead4a12bb90b6', '2020-08-27 06:53:29', '2020-08-28 01:30:15', null, '2', null, '1');
INSERT INTO `cms_police_officer` VALUES ('15', '80400', '0', 'HG Gunawardene', 'Gunawardene', '8', '4', '6', '15', '5', '198526876282', '0722648484', '0732654985', 'anushahap@gmail.com', '', '3rd lane', 'maagalla', '6', 'BSc Degree', '', '80400.jpg', 'Gunawardene80400', 'f4e3460d4684d833ca7f', '2020-08-27 06:55:37', '2020-08-28 01:30:15', null, '1', null, '1');
INSERT INTO `cms_police_officer` VALUES ('16', '81050', '1', 'J Lanka', 'Jayani', '8', '4', '6', '15', '5', '199014541418', '0752587177', '0725258575', 'anushahap@gmail.com', '', '45C', 'maagalla', '6', 'BSc Degree', '', '81050.jpg', 'Jayani81050', '4fafdddd927561044bf8', '2020-08-27 06:57:47', '2020-08-28 01:30:15', null, '3', null, '1');
INSERT INTO `cms_police_officer` VALUES ('17', '80900', '0', 'AB Jayasooriya', 'Amila', '8', '4', '6', '15', '5', '197855401602', '0720872781', '0720782758', 'anushahap@gmail.com', '15/25', 'galle rd', 'Galle', '6', 'BSc Degree', '', '80900.jpg', 'Amila80900', 'b37c56668fdeac0edb43', '2020-08-27 07:00:23', '2020-08-28 01:30:15', null, '1', null, '1');
INSERT INTO `cms_police_officer` VALUES ('18', '82002', '0', 'J Jayalal', 'Jayalal', '8', '5', '5', '24', '22', '196501659159', '0720872781', '0720782758', 'anushahap@gmail.com', '12C', 'high level rd', 'Homagama', '8', 'BSc Degree', '', '82002.jpg', 'Jayalal82002', '41fe63e4e85ef3033e1e', '2020-08-27 07:02:50', '2020-08-28 01:30:15', null, '1', null, '1');
INSERT INTO `cms_police_officer` VALUES ('19', '82005', '1', 'C Peiris', 'Chamari', '8', '5', '5', '24', '22', '198256565144', '0714184841', '0720784545', 'anushahap@gmail.com', '', 'Diyagama', 'Magammana', '5', 'BSc Degree', '', '82005.jpg', 'Chamari82005', 'b53bf793e29a863d0954', '2020-08-27 07:05:34', '2020-08-28 01:30:15', null, '2', null, '1');
INSERT INTO `cms_police_officer` VALUES ('20', '82203', '0', 'NN kumara', 'Nuwan', '12', '5', '5', '24', '22', '198255989852', '0722781578', '0717867852', 'anushahap@gmail.com', '', 'Crown crescent', 'Magammana, homagama', '5', 'A/L', '', '82203.jpg', 'Nuwan82203', '3e8c83be70ef0759082d', '2020-08-27 07:07:42', '2020-08-28 01:30:15', null, '3', null, '1');
INSERT INTO `cms_police_officer` VALUES ('21', '82203', '2', 'SV sooriyaarachchi', 'sooriyaarachchi', '8', '5', '5', '24', '22', '197513165484', '0716528787', '0724814848', 'anushahap@gmail.com', '12A', 'Gamunu Rd', 'DIyagama', '5', 'A/L', '', '82203.jpg', 'sooriyaarachchi82203', '165eef1b15cc42e76e51', '2020-08-27 07:10:06', '2020-08-28 01:30:15', null, '3', null, '1');
INSERT INTO `cms_police_officer` VALUES ('22', '82225', '0', 'HL Kalpana', 'Kalpana', '10', '5', '5', '24', '22', '198184501503', '0716584517', '0724817518', 'anushahap@gmail.com', '', 'highlevel rd', 'Homagama', '5', 'PGD', 'test data 1', '82225.jpg', 'Kalpana82225', '66a9551e568dbf0d0261', '2020-08-27 07:12:15', '2020-08-28 01:30:15', null, '3', null, '1');
INSERT INTO `cms_police_officer` VALUES ('23', '82400', '0', 'KB Amarasiri', 'Amarasiri', '12', '5', '5', '24', '22', '199051484651', '0716585575', '0724817275', 'amarasiriiidiid@gmail.com', '32B', 'highlevel rd', 'Homagama', '5', 'A/L', 'test data 2', '82400.jpg', 'Amarasiri82400', '9eec98cb856b8bd3bd24', '2020-08-27 07:14:37', '2020-08-28 01:30:15', null, '3', null, '1');
INSERT INTO `cms_police_officer` VALUES ('24', '82402', '1', 'AB perera', 'Bimali', '12', '5', '5', '24', '22', '199254244245', '0716585424', '0724854254', 'bimamamali@gmail.com', '25C', 'magammana', 'Homagama', '5', 'A/L', 'test data 2', '82402.jpg', 'Bimali82402', 'db7199c7ebd29253dc34', '2020-08-27 07:15:36', '2020-08-28 01:30:15', null, '3', null, '1');
INSERT INTO `cms_police_officer` VALUES ('25', '82500', '0', 'SS Rukmal', 'Ajith', '8', '5', '5', '24', '21', '199254244245', '0716585424', '0724854254', 'anushahap@gmail.com', '25/36', 'highlevel rd,', 'borelasgamuwa', '5', 'BSc Degree', 'test data 3', '82500.jpg', 'Ajith82500', 'e8313543054e0f20dc64', '2020-08-27 07:17:48', '2020-08-28 01:30:15', null, '1', null, '1');
INSERT INTO `cms_police_officer` VALUES ('26', '82500', '1', 'KS Sepali', 'Sajitha', '9', '5', '5', '24', '21', '198245245425', '0716572454', '0724845154', 'anushahap@gmail.com', '365A', 'Gamsabha junction', 'borelasgamuwa', '5', 'BSc Degree', 'test data 3', '82500.jpg', 'Sajitha82500', '1de3810e8b260c4507cd', '2020-08-27 07:19:22', '2020-08-28 01:30:15', null, '2', null, '1');
INSERT INTO `cms_police_officer` VALUES ('27', '82501', '0', 'J kusumsiri', 'kusumsiri', '12', '5', '5', '24', '21', '199045024552', '0716454545', '0724844545', 'anushahap@gmail.com', '365A', 'Gamsabha junction', 'borelasgamuwa', '5', 'BSc Degree', 'test data 3', '82501.jpg', 'kusumsiri82501', '5958724dffa34793d7cf', '2020-08-27 07:20:35', '2020-08-28 01:30:15', null, '2', null, '1');
INSERT INTO `cms_police_officer` VALUES ('28', '82530', '0', 'AJ Perera', 'Ajith', '12', '5', '5', '24', '21', '198041452545', '0716442524', '0724478784', 'anushahap@gmail.com', '', '2ns lane', 'Homagama', '5', 'A/L', 'test data 5', '82530.jpg', 'Ajith82530', '0f663f0e6eea6ea8adb0', '2020-08-27 07:25:41', '2020-08-28 01:30:15', null, '3', null, '1');
INSERT INTO `cms_police_officer` VALUES ('29', '80452', '0', 'A Perera', 'Arjun', '8', '4', '17', '14', '26', '198166894295', '0773509565', '', 'anushahap@gmail.com', '25/69', '', 'Kapugama', '17', 'BSc Degree', 'ewrwr', '80452.jpg', 'Arjun80452', '678b8ff84294579eec55', '2020-08-27 12:05:39', '2020-10-08 14:56:22', null, '1', null, '1');
INSERT INTO `cms_police_officer` VALUES ('30', '80555', '0', 'T Dananjaya', 'Tharindu', '12', '4', '6', '15', '5', '199282778927', '0773597887', '', 'anushahap@gmail.com', '25/69', '', 'maagalla', '6', 'BSc Degree', 'drgdt', '80555.jpg', 'Tharindu80555', '155465023ec847d1e9b7', '2020-08-27 12:10:36', '2020-10-08 14:56:26', null, '3', null, '1');
INSERT INTO `cms_police_officer` VALUES ('31', '82531', '0', 'CC Alwis', 'Alwis', '8', '4', '17', '14', '27', '197878787878', '0702315454', '0754555454', 'anushahap@gmail.com', '65', '', 'Thihagoda', '17', 'BSc Degree', 'PGD', '82531.jpg', 'Alwis82531', 'f2f67f683055de2cdccd', '2020-08-28 08:52:34', '2020-10-08 14:56:29', null, '1', null, '1');
INSERT INTO `cms_police_officer` VALUES ('32', '80001', '0', 'HH Sudath', 'Sudath', '8', '4', '17', '14', '1', '198165354245', '0773578787', '0773554555', 'anushahap@gmail.com', null, null, 'dgtr', '17', 'BSc Degree', 'dfzfsf', '80001.jpg', 'Sudath80001', '7c4fac3e7dde3f57c714', '2020-10-09 14:59:42', '2020-10-09 14:59:42', null, '1', null, '1');

-- ----------------------------
-- Table structure for `cms_police_station`
-- ----------------------------
DROP TABLE IF EXISTS `cms_police_station`;
CREATE TABLE `cms_police_station` (
  `ps_police_station_id` int(11) NOT NULL AUTO_INCREMENT,
  `ps_name` varchar(255) DEFAULT NULL,
  `ps_address` varchar(255) DEFAULT NULL,
  `ps_contact_number` varchar(10) DEFAULT NULL,
  `ps_contact_number_other` varchar(255) DEFAULT NULL,
  `ps_fax` varchar(255) DEFAULT NULL,
  `ps_email` varchar(100) DEFAULT NULL,
  `ps_remarks` text,
  `ps_province_id` int(11) DEFAULT NULL COMMENT '1=Central,2=North Central, 3=North West,4=Southern, 5=Western, 6=Estern,7=Northern, 8=Sabaragamuwa, 9=Uva ',
  `ps_district_id` int(11) DEFAULT NULL,
  `ps_division_id` int(11) DEFAULT NULL,
  `ps_oic` int(11) DEFAULT NULL,
  `ps_created_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `ps_created_by_off_id` int(11) DEFAULT NULL,
  `ps_edited_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ps_edited_by_off_id` int(11) DEFAULT NULL,
  `ps_existance` int(11) DEFAULT '1' COMMENT '1= exist  0= deleted',
  PRIMARY KEY (`ps_police_station_id`),
  KEY `ps_province_id_fk` (`ps_province_id`),
  KEY `ps_district_id_fk` (`ps_district_id`),
  KEY `ps_division_id_fk` (`ps_division_id`),
  CONSTRAINT `ps_district_id_fk` FOREIGN KEY (`ps_district_id`) REFERENCES `cms_district` (`id`),
  CONSTRAINT `ps_division_id_fk` FOREIGN KEY (`ps_division_id`) REFERENCES `cms_division` (`div_id`),
  CONSTRAINT `ps_province_id_fk` FOREIGN KEY (`ps_province_id`) REFERENCES `cms_province` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of cms_police_station
-- ----------------------------
INSERT INTO `cms_police_station` VALUES ('1', 'Matara', 'Galle Road, Matara', '041-222253', '071-8591436', '041-2222223', 'ps.matara@gmail.com', 'Remarks of Matara', '4', '17', '14', '2', '2020-08-25 07:55:11', null, '2020-10-09 15:03:05', '1', '1');
INSERT INTO `cms_police_station` VALUES ('2', 'Dikwella', 'Tangalle Road, Dikwella', '041-225527', '071-8591438', '041-2255222', 'ps.dikwella@gmail.com', 'Remarks of Dikwella PS', '4', '17', '14', '10', '2020-08-25 07:56:58', null, '2020-08-27 10:19:21', null, '1');
INSERT INTO `cms_police_station` VALUES ('3', 'Hakmana', 'Hakmana', '041-228622', '071-8591442', '041-2286222', 'ps.hakmana@gmail.com', 'Remarks of hakmana', '4', '17', '14', null, '2020-08-25 07:58:16', null, '2020-08-25 07:58:16', null, '1');
INSERT INTO `cms_police_station` VALUES ('4', 'Ratgama', 'Galle Rd, Galle', '091-226757', '071-8591456', '091-2267222', 'ps.rajgama@gmail.com', 'Remarks of Rajgama', '4', '6', '15', null, '2020-08-25 07:59:57', null, '2020-08-25 07:59:57', null, '1');
INSERT INTO `cms_police_station` VALUES ('5', 'Hikkaduwa', 'Samagi mawatha, Hikkaduwa', '091-227722', '071-8591457', '', 'ps.hikkaduwa@gmail.com', 'Remarks of Hikkaduwa', '4', '6', '15', '15', '2020-08-25 08:01:46', null, '2020-08-27 10:22:07', null, '1');
INSERT INTO `cms_police_station` VALUES ('6', 'Neluwa', 'ABC rd, Neluwa', '091-378300', '071-8591470', '', 'ps.neluwa@gmail.com', 'Remarks of Neluwa', '4', '6', '15', null, '2020-08-25 08:03:00', null, '2020-10-09 10:56:05', '1', '1');
INSERT INTO `cms_police_station` VALUES ('7', 'Elpitiya', 'asd rd, Elpitiya', '091-229122', '071-8591475', '091-2291222', 'ps.elpitiya@gmail.com', 'Remarks of elpitiya PS', '4', '6', '16', null, '2020-08-25 08:04:22', null, '2020-08-25 08:04:22', null, '1');
INSERT INTO `cms_police_station` VALUES ('8', 'Ahungalla', 'ad rd, Ahungalla.', '071-859148', '', '091-2264026', 'ps.ahungalla@gmail.com', 'Remarks of Ahungalla PS', '4', '6', '16', null, '2020-08-25 08:05:33', null, '2020-08-25 08:05:33', null, '1');
INSERT INTO `cms_police_station` VALUES ('9', 'Tangalle', 'Tangalle rd, Tangalle', '047-224022', '071-8591491', '047-2240222', 'ps.tangalle@gmail.com', 'Remarks of Tangalle PS', '4', '8', '17', null, '2020-08-25 08:06:48', null, '2020-08-25 08:06:48', null, '1');
INSERT INTO `cms_police_station` VALUES ('10', 'Middeniya', 'ada rd, Middeniya.', '071-859149', '', '047-2247222', 'ps.middeniya@gmail.com', 'Remarks of Middeniya PS', '4', '8', '17', null, '2020-08-25 08:15:43', null, '2020-08-25 08:15:43', null, '1');
INSERT INTO `cms_police_station` VALUES ('11', 'Weeravila', 'gfgf rd, Weeravila.', '047-223823', '071-8592109', '047-2238229', 'ps.weerawila@gmail.com', 'Remarks of weerawila PS', '4', '8', '17', null, '2020-08-25 08:20:38', null, '2020-08-25 08:20:38', null, '1');
INSERT INTO `cms_police_station` VALUES ('12', 'Kelaniya', 'sda, Kelaniya.', '011-291466', '071-8591593', '011-2911922', 'ps. Kelaniya@gmail.com', 'Remarks of Kelanita PS', '5', '5', '21', null, '2020-08-25 08:24:11', null, '2020-08-25 08:24:11', null, '1');
INSERT INTO `cms_police_station` VALUES ('13', 'Biyagama', 'gfg rd, Biyagama.', '011-248730', '071-8591600', '011-2487574', 'ps.biyagama@gmail.com', 'Remarks of BIyagama PS', '5', '5', '21', null, '2020-08-25 08:29:13', null, '2020-08-25 08:29:13', null, '1');
INSERT INTO `cms_police_station` VALUES ('14', 'Gampaha', 'saa rd, Gampaha.', '033-222222', '071-8591611', '033-2222224', 'ps.gampaha@gmail.com', 'Remarks of Gampaha PS', '5', '7', '22', null, '2020-08-25 08:31:30', null, '2020-08-25 08:31:30', null, '1');
INSERT INTO `cms_police_station` VALUES ('15', 'Pugoda', 'asd rd, Pugoda.', '011-240522', '071-8591616', '011-2405224', 'ps.pugoda@gmail.com', 'Remarks of pugoda PS', '5', '7', '22', null, '2020-08-25 08:32:28', null, '2020-08-25 08:32:28', null, '1');
INSERT INTO `cms_police_station` VALUES ('16', 'Meerigama', 'sds rd, Meerigama.', '033-227432', '071-8591625', '033-2273222', 'ps.meerigama@gmail.com', 'Remarks of meerigama PS', '5', '7', '22', null, '2020-08-25 08:34:03', null, '2020-08-25 08:34:03', null, '1');
INSERT INTO `cms_police_station` VALUES ('17', 'Negombo', 'asda rd, Negombo.', '031-222428', '071-8591630', '031-2222222', 'ps.negombo@gmail.com', 'Remarks of Negombo PS', '5', '7', '23', null, '2020-08-25 08:35:52', null, '2020-08-25 08:35:52', null, '1');
INSERT INTO `cms_police_station` VALUES ('19', 'Katana', 'Katana', '031-222774', '071-8591710', '031-2227735', 'ps.katana@gmail.com', 'Remarks of Katana PS.', '5', '7', '23', null, '2020-08-25 08:37:24', null, '2020-08-25 08:37:24', null, '1');
INSERT INTO `cms_police_station` VALUES ('20', 'Mirihana', 'dsas rd, Mirihana.', '011-285485', '071-8591644', '011-2828566', 'ps.mirihana@gmail.com', 'Remarks of Mirihana PS', '5', '5', '24', null, '2020-08-25 08:39:05', null, '2020-08-25 08:39:05', null, '1');
INSERT INTO `cms_police_station` VALUES ('21', 'Boralesgamuwa', 'adad rd, Boralesgamuwa.', '011-215077', '071-8591646', '011-2509461', 'ps.borelasgamuwa@gmail.com', 'Remarks of Borelasgamuwa PS', '5', '5', '24', '25', '2020-08-25 08:40:26', null, '2020-08-27 10:23:17', null, '1');
INSERT INTO `cms_police_station` VALUES ('22', 'Homagama', 'high level rs, Homagama.', '011-285521', '071-8591655', '011-2855222', 'ps.homagama@gmail.com', 'Remarks of homagama PS', '5', '5', '24', '18', '2020-08-25 08:41:30', null, '2020-08-27 10:23:10', null, '1');
INSERT INTO `cms_police_station` VALUES ('23', 'Ratnapura', 'ad rd, Ratnapura.', '045-222289', '071-8591385', '045-2222222', 'ps.rathnapura@gmail.com', 'Remarks of rathnapura PS', '8', '23', '35', null, '2020-08-25 08:43:06', null, '2020-08-25 08:43:06', null, '1');
INSERT INTO `cms_police_station` VALUES ('24', 'Rakwana', 'adsa rd, Rakwana.', '045-224623', '071-8591394', '045-2246222', 'ps.rakwana@gmail.com', 'Remarks of Rakwana', '8', '23', '35', null, '2020-08-25 08:44:04', null, '2020-08-25 08:44:04', null, '1');
INSERT INTO `cms_police_station` VALUES ('25', 'Kegalle', 'ada rd, Kegalle.', '035-222222', '071-8591413', '035-2222222', 'ps.kegalle@gmail.com', 'Remarks of Kegalle PS', '8', '12', '36', null, '2020-08-25 12:52:59', null, '2020-08-25 12:52:59', null, '1');
INSERT INTO `cms_police_station` VALUES ('26', 'Gandara', 'Tangalle rd, Gandara', '041-225915', '071-8591437', '041-2259222', 'gandara.ps@gmail.com', 'Remarks of Gandara PS', '4', '17', '14', '29', '2020-08-26 08:27:29', null, '2020-08-27 12:06:49', null, '1');
INSERT INTO `cms_police_station` VALUES ('27', 'Thihagoda', 'No.55, Thihagoda', '041-224527', '071-859143', '041-224522', 'ps.thihagoda@gmail.com', 'test remarks1122', '4', '17', '14', null, '2020-08-28 08:39:09', null, '2020-08-28 08:39:09', null, '1');
INSERT INTO `cms_police_station` VALUES ('28', 'Weligama', 'Galle roas, weligama', '041225022', '071859144', '041-225022', 'weligama@gmail.com', 'adadad awdawd', '4', '17', '14', null, '2020-10-08 14:42:36', null, '2020-10-08 14:53:57', null, '1');
INSERT INTO `cms_police_station` VALUES ('29', 'Kotawila', 'no.10, kotawila, Matara', '041223200', '071859213', '041-223745', 'Kotawila@gmail.com', 'fasfafaf a fa f', '4', '17', '14', '0', '2020-10-08 14:52:15', null, '2020-10-08 14:54:08', null, '1');

-- ----------------------------
-- Table structure for `cms_province`
-- ----------------------------
DROP TABLE IF EXISTS `cms_province`;
CREATE TABLE `cms_province` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `province` varchar(255) DEFAULT NULL,
  `province_code` varchar(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of cms_province
-- ----------------------------
INSERT INTO `cms_province` VALUES ('1', 'Central', 'CP');
INSERT INTO `cms_province` VALUES ('2', 'North Central', 'NC');
INSERT INTO `cms_province` VALUES ('3', 'North West', 'NW');
INSERT INTO `cms_province` VALUES ('4', 'Southern', 'SP');
INSERT INTO `cms_province` VALUES ('5', 'Western', 'WP');
INSERT INTO `cms_province` VALUES ('6', 'Estern', 'EP');
INSERT INTO `cms_province` VALUES ('7', 'Northern', 'NP');
INSERT INTO `cms_province` VALUES ('8', 'Sabaragamuwa', 'SG');
INSERT INTO `cms_province` VALUES ('9', 'Uva', 'UP');

-- ----------------------------
-- Table structure for `cms_rank`
-- ----------------------------
DROP TABLE IF EXISTS `cms_rank`;
CREATE TABLE `cms_rank` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rank` varchar(255) NOT NULL,
  `rank_code` varchar(5) NOT NULL,
  `rank_status` char(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of cms_rank
-- ----------------------------
INSERT INTO `cms_rank` VALUES ('1', 'Inspector General of Police', 'IGP', '0');
INSERT INTO `cms_rank` VALUES ('2', 'Senior Deputy Inspector General of Police', 'SDIG', '0');
INSERT INTO `cms_rank` VALUES ('3', 'Deputy Inspector General of Police', 'DIG', '0');
INSERT INTO `cms_rank` VALUES ('4', 'Senior Superintendent of Police', 'SSP', '0');
INSERT INTO `cms_rank` VALUES ('5', 'Superintendent of Police', 'SP', '0');
INSERT INTO `cms_rank` VALUES ('6', 'Assistant Superintendent of Police', 'ASP', '0');
INSERT INTO `cms_rank` VALUES ('7', 'Chief Inspector of police', 'CIP', '1');
INSERT INTO `cms_rank` VALUES ('8', 'Inspector of police', 'IP', '1');
INSERT INTO `cms_rank` VALUES ('9', 'Sub Inspector of police', 'SI', '1');
INSERT INTO `cms_rank` VALUES ('10', 'Police Sergeant Major', 'PSM', '1');
INSERT INTO `cms_rank` VALUES ('11', 'Police Sergeant Class 1', 'PS1', '1');
INSERT INTO `cms_rank` VALUES ('12', 'Police Sergeant Class 2', 'PS2', '1');
INSERT INTO `cms_rank` VALUES ('13', 'Police Constable Class 1', 'PC1', '1');
INSERT INTO `cms_rank` VALUES ('14', 'Police Constable Class 2', 'PC2', '1');
INSERT INTO `cms_rank` VALUES ('15', 'Police Constable Class 3', 'PC3', '1');
INSERT INTO `cms_rank` VALUES ('16', 'Police Constable Class 4', 'PC4', '1');
INSERT INTO `cms_rank` VALUES ('17', 'Administrator', 'ADM', '1');

-- ----------------------------
-- Table structure for `cms_status_category_of_complaint`
-- ----------------------------
DROP TABLE IF EXISTS `cms_status_category_of_complaint`;
CREATE TABLE `cms_status_category_of_complaint` (
  `sc_id` int(11) NOT NULL AUTO_INCREMENT,
  `sc_description` varchar(255) DEFAULT NULL,
  `sc_details` text,
  `sc_status` char(1) DEFAULT NULL,
  PRIMARY KEY (`sc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of cms_status_category_of_complaint
-- ----------------------------
INSERT INTO `cms_status_category_of_complaint` VALUES ('1', ' Not attempt yet', 'Default Status of the Complaint', '1');
INSERT INTO `cms_status_category_of_complaint` VALUES ('2', 'Just assign to a police officer', 'By OIC', '1');
INSERT INTO `cms_status_category_of_complaint` VALUES ('3', 'In progress', 'When inquirey is going on', '1');
INSERT INTO `cms_status_category_of_complaint` VALUES ('4', 'Case solved', 'Case is finalized', '1');
INSERT INTO `cms_status_category_of_complaint` VALUES ('5', 'Withdrawed', 'Withdrawed by the complainer', '1');
INSERT INTO `cms_status_category_of_complaint` VALUES ('6', 'Temporary hold', 'Investigation is temporary hold', '1');
INSERT INTO `cms_status_category_of_complaint` VALUES ('7', 'Stopped by police', 'Investigation is stopped by police', '1');

-- ----------------------------
-- Table structure for `cms_status_of_complaint`
-- ----------------------------
DROP TABLE IF EXISTS `cms_status_of_complaint`;
CREATE TABLE `cms_status_of_complaint` (
  `c_status_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_status_title` varchar(255) DEFAULT NULL,
  `c_action_description` text,
  `c_entered_date` timestamp NULL DEFAULT NULL,
  `c_enetered_by_whom` varchar(255) DEFAULT NULL,
  `c_edited_date` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `c_edited_by_whom` int(11) DEFAULT NULL,
  `c_status_category_id` int(11) DEFAULT NULL,
  `c_compnt_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`c_status_id`),
  KEY `c_status_category_id` (`c_status_category_id`) USING BTREE,
  CONSTRAINT `status_category_idFK` FOREIGN KEY (`c_status_category_id`) REFERENCES `cms_status_category_of_complaint` (`sc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of cms_status_of_complaint
-- ----------------------------
INSERT INTO `cms_status_of_complaint` VALUES ('1', null, '  meet officer Nihal tomorrow in matara police station   at 10.30am\r\n                                ', null, null, '2020-08-27 03:43:52', '1', '2', '1');
INSERT INTO `cms_status_of_complaint` VALUES ('2', null, ' withdrew by complainer\r\n                                ', null, null, '2020-10-07 10:32:48', '2', '5', '1');
INSERT INTO `cms_status_of_complaint` VALUES ('3', null, '               \r\n                                ', null, null, '2020-08-28 08:57:04', '2', '2', '24');
INSERT INTO `cms_status_of_complaint` VALUES ('4', null, '               \r\n                                ', null, null, '2020-08-28 08:57:37', '2', '3', '24');
INSERT INTO `cms_status_of_complaint` VALUES ('5', null, '               \r\n                                dsdsgsdtgsdgsg', null, null, '2020-08-28 11:20:39', '2', '2', '6');
INSERT INTO `cms_status_of_complaint` VALUES ('6', null, '               estsgazdgsgz\r\n                                ', null, null, '2020-08-28 11:21:12', '2', '3', '6');
INSERT INTO `cms_status_of_complaint` VALUES ('7', null, '               \r\n                                ', null, null, '2020-10-07 03:10:56', '1', '4', '1');
INSERT INTO `cms_status_of_complaint` VALUES ('8', null, '               \r\n                                ', null, null, '2020-10-07 07:31:40', '1', '2', '4');
INSERT INTO `cms_status_of_complaint` VALUES ('9', null, '               \r\n                                ', null, null, '2020-10-07 07:35:56', '1', '5', '6');
INSERT INTO `cms_status_of_complaint` VALUES ('10', null, '  sffasfasfaf             \r\n                                ', null, null, '2020-10-08 11:13:38', '2', '2', '2');
INSERT INTO `cms_status_of_complaint` VALUES ('11', null, '  sffasfasfaf             \r\n                                ', null, null, '2020-10-08 11:13:50', '2', '3', '2');
INSERT INTO `cms_status_of_complaint` VALUES ('12', null, '  sffasfasfaf             \r\n                                ', null, null, '2020-10-08 11:14:26', '2', '5', '2');
INSERT INTO `cms_status_of_complaint` VALUES ('13', null, 'dfsafaf\r\n                                ', null, null, '2020-10-08 11:15:39', '2', '2', '3');
INSERT INTO `cms_status_of_complaint` VALUES ('14', null, 'dfsafaf\r\n                                ', null, null, '2020-10-08 11:16:20', '2', '3', '3');
INSERT INTO `cms_status_of_complaint` VALUES ('15', null, 'dfsafaf\r\n                                ', null, null, '2020-10-08 11:16:43', '2', '6', '17');
INSERT INTO `cms_status_of_complaint` VALUES ('16', null, 'dfsafaf\r\n                                ', null, null, '2020-10-08 11:17:08', '2', '3', '26');
INSERT INTO `cms_status_of_complaint` VALUES ('17', null, 'dfsafaf\r\n                                ', null, null, '2020-10-08 11:17:16', '2', '2', '25');
INSERT INTO `cms_status_of_complaint` VALUES ('18', null, 'meet OIC on 12.10.2020 at 9AM\r\n                                ', null, null, '2020-10-08 11:18:26', '2', '3', '25');
INSERT INTO `cms_status_of_complaint` VALUES ('19', null, 'meet OIC on 10.10.2020 at 9AM\r\n                                ', null, null, '2020-10-08 11:19:02', '2', '2', '32');
INSERT INTO `cms_status_of_complaint` VALUES ('20', null, 'meet OIC on 10.10.2020 at 10AM\r\n                                ', null, null, '2020-10-08 11:19:42', '2', '2', '31');
INSERT INTO `cms_status_of_complaint` VALUES ('21', null, 'meet OIC on 10.10.2020 at 10AM\r\n                                ', null, null, '2020-10-08 11:19:53', '2', '3', '32');
INSERT INTO `cms_status_of_complaint` VALUES ('22', null, '         started investigation today      \r\n                                ', null, null, '2020-10-09 12:00:32', '1', '3', '17');
INSERT INTO `cms_status_of_complaint` VALUES ('23', null, '               \r\n                                come and meet Mr. mikjhj at Am', null, null, '2020-10-09 03:12:25', '32', '2', '60');
INSERT INTO `cms_status_of_complaint` VALUES ('24', null, '               \r\n                                come and meet Mr. mikjhj at Am', null, null, '2020-10-09 03:12:35', '32', '2', '60');

-- ----------------------------
-- Table structure for `cms_system_privilage_level`
-- ----------------------------
DROP TABLE IF EXISTS `cms_system_privilage_level`;
CREATE TABLE `cms_system_privilage_level` (
  `spl_id` varchar(11) NOT NULL,
  `spl_Name` varchar(255) DEFAULT NULL,
  `spl_description` text,
  PRIMARY KEY (`spl_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of cms_system_privilage_level
-- ----------------------------
INSERT INTO `cms_system_privilage_level` VALUES ('0', 'Admin', 'All functionalities are allowed');
INSERT INTO `cms_system_privilage_level` VALUES ('1', 'Manager', 'allowed changes of the system can be done');
INSERT INTO `cms_system_privilage_level` VALUES ('2', 'Normal User', 'general system usage is alloed');

-- ----------------------------
-- Table structure for `cms_title`
-- ----------------------------
DROP TABLE IF EXISTS `cms_title`;
CREATE TABLE `cms_title` (
  `t_id` int(10) NOT NULL AUTO_INCREMENT,
  `t_name` varchar(50) DEFAULT NULL,
  `t_status` int(11) DEFAULT '0',
  PRIMARY KEY (`t_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of cms_title
-- ----------------------------
INSERT INTO `cms_title` VALUES ('1', 'Rev.', '1');
INSERT INTO `cms_title` VALUES ('2', 'Mr.', '1');
INSERT INTO `cms_title` VALUES ('3', 'Mrs.', '1');
INSERT INTO `cms_title` VALUES ('4', 'Ms.', '1');
INSERT INTO `cms_title` VALUES ('5', 'Miss', '1');
INSERT INTO `cms_title` VALUES ('6', 'Dr.', '1');
INSERT INTO `cms_title` VALUES ('7', 'Prof.', '1');

-- ----------------------------
-- Table structure for `cms_user`
-- ----------------------------
DROP TABLE IF EXISTS `cms_user`;
CREATE TABLE `cms_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(75) DEFAULT NULL,
  `user_password` varchar(75) DEFAULT NULL,
  `user_group` int(11) DEFAULT NULL,
  `user_status` varchar(5) DEFAULT NULL,
  `user_employee` int(11) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  KEY `user_groupID_fk` (`user_group`),
  CONSTRAINT `user_groupID_fk` FOREIGN KEY (`user_group`) REFERENCES `cms_usergroup` (`user_group_id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of cms_user
-- ----------------------------
INSERT INTO `cms_user` VALUES ('1', 'administrator', '202cb962ac59075b964b07152d234b70', '4', '1', '1');
INSERT INTO `cms_user` VALUES ('2', 'Perera80000', '67f676a4579ad08af7de76c58dbe669e', '1', '1', '2');
INSERT INTO `cms_user` VALUES ('3', 'Kasun80120', '1196f987cc72a598edb7e53924ca5af7', '2', '1', '3');
INSERT INTO `cms_user` VALUES ('4', 'Lakmini80122', 'a61b4178c4996ba9357aeadf1e0b5c56', '3', '1', '4');
INSERT INTO `cms_user` VALUES ('5', 'Nalin80255', '6031a23fb60287f5982fb78b8ef5991f', '3', '1', '5');
INSERT INTO `cms_user` VALUES ('6', 'Kalpani80258', 'fc1e2f8197adbbfe504724dd6a3b83b6', '3', '1', '6');
INSERT INTO `cms_user` VALUES ('7', 'Nimal80300', 'd90cbf2eb4c9b2bc56102c1ff07dd07f', '3', '1', '7');
INSERT INTO `cms_user` VALUES ('8', 'Nilani80315', 'b0a3859e78b1aebed9ac7a05fe0645e7', '3', '1', '8');
INSERT INTO `cms_user` VALUES ('9', 'Patabendige80500', 'fe5c2b6980c721b54fbabbfa688acc80', '3', '1', '9');
INSERT INTO `cms_user` VALUES ('10', 'kariyawasam80421', '315358a6c699d53376499f6e245368d2', '1', '1', '10');
INSERT INTO `cms_user` VALUES ('11', 'weerasinghe80488', '570a7ffd4a947edcbbd50a4cfc2341f3', '1', '1', '11');
INSERT INTO `cms_user` VALUES ('12', 'Kamani80012', 'e456efbc59718e06b8442c24ffc54998', '3', '1', '12');
INSERT INTO `cms_user` VALUES ('13', 'Amarasiri80112', '1b67a6c03cede6624f7e940f8a1d4697', '3', '1', '13');
INSERT INTO `cms_user` VALUES ('14', 'Nadeshika80113', '4907187ead4a12bb90b68d37ed5860dc', '2', '1', '14');
INSERT INTO `cms_user` VALUES ('15', 'Gunawardene80400', 'f4e3460d4684d833ca7f5b1a8a16d871', '1', '1', '15');
INSERT INTO `cms_user` VALUES ('16', 'Jayani81050', '4fafdddd927561044bf8e6c8075f6da8', '3', '1', '16');
INSERT INTO `cms_user` VALUES ('17', 'Amila80900', 'b37c56668fdeac0edb439fb67ced23ac', '1', '1', '17');
INSERT INTO `cms_user` VALUES ('18', 'Jayalal82002', '41fe63e4e85ef3033e1e488bfbdeb888', '1', '1', '18');
INSERT INTO `cms_user` VALUES ('19', 'Chamari82005', 'b53bf793e29a863d0954b6cf5227f227', '2', '1', '19');
INSERT INTO `cms_user` VALUES ('20', 'Nuwan82203', '3e8c83be70ef0759082df5b84da1260d', '3', '1', '20');
INSERT INTO `cms_user` VALUES ('21', 'sooriyaarachchi82203', '165eef1b15cc42e76e51737d0b29635a', '3', '1', '21');
INSERT INTO `cms_user` VALUES ('22', 'Kalpana82225', '66a9551e568dbf0d02618df1734176dd', '3', '1', '22');
INSERT INTO `cms_user` VALUES ('23', 'Amarasiri82400', '9eec98cb856b8bd3bd2427379178fa77', '3', '1', '23');
INSERT INTO `cms_user` VALUES ('24', 'Bimali82402', 'db7199c7ebd29253dc341f7e3f909f99', '3', '1', '24');
INSERT INTO `cms_user` VALUES ('25', 'Ajith82500', 'e8313543054e0f20dc642c54ee9363d4', '1', '1', '25');
INSERT INTO `cms_user` VALUES ('26', 'Sajitha82500', '1de3810e8b260c4507cd9d026a67d12b', '2', '1', '26');
INSERT INTO `cms_user` VALUES ('27', 'kusumsiri82501', '5958724dffa34793d7cf62cebe5ee59b', '2', '1', '27');
INSERT INTO `cms_user` VALUES ('28', 'Ajith82530', '0f663f0e6eea6ea8adb0507f19271b6e', '3', '1', '28');
INSERT INTO `cms_user` VALUES ('29', 'Arjun80452', '678b8ff84294579eec55d4a84817b618', '1', '1', '29');
INSERT INTO `cms_user` VALUES ('30', 'Tharindu80555', '155465023ec847d1e9b74559f9be20cc', '3', '1', '30');
INSERT INTO `cms_user` VALUES ('31', 'Alwis82531', 'f2f67f683055de2cdccdf0ec1853e279', '1', '1', '31');
INSERT INTO `cms_user` VALUES ('32', 'Sudath80001', '7c4fac3e7dde3f57c7140d30f687511d', '1', '1', '32');

-- ----------------------------
-- Table structure for `cms_usergroup`
-- ----------------------------
DROP TABLE IF EXISTS `cms_usergroup`;
CREATE TABLE `cms_usergroup` (
  `user_group_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_group_name` varchar(255) DEFAULT NULL,
  `user_group_level` int(11) DEFAULT NULL,
  `user_group_status` int(11) DEFAULT NULL,
  PRIMARY KEY (`user_group_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of cms_usergroup
-- ----------------------------
INSERT INTO `cms_usergroup` VALUES ('1', 'Admin', '1', '1');
INSERT INTO `cms_usergroup` VALUES ('2', 'Manager', '2', '1');
INSERT INTO `cms_usergroup` VALUES ('3', 'Normal User', '3', '1');
INSERT INTO `cms_usergroup` VALUES ('4', 'Super Admin', '4', '1');
