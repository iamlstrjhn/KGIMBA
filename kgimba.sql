/*
Navicat MySQL Data Transfer

Source Server         : LJMP
Source Server Version : 100125
Source Host           : localhost:3306
Source Database       : kgimba

Target Server Type    : MYSQL
Target Server Version : 100125
File Encoding         : 65001

Date: 2017-10-02 13:59:18
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tbl_assets
-- ----------------------------
DROP TABLE IF EXISTS `tbl_assets`;
CREATE TABLE `tbl_assets` (
  `ID` int(255) NOT NULL AUTO_INCREMENT,
  `Description` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Total` varchar(255) NOT NULL,
  `Encoder` int(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_assets
-- ----------------------------
INSERT INTO `tbl_assets` VALUES ('15', 'Loan Portfolio', '', '135.8 M', '0');

-- ----------------------------
-- Table structure for tbl_assets1
-- ----------------------------
DROP TABLE IF EXISTS `tbl_assets1`;
CREATE TABLE `tbl_assets1` (
  `ID` int(255) NOT NULL AUTO_INCREMENT,
  `Description1` varchar(255) NOT NULL,
  `Type1` varchar(255) NOT NULL,
  `Total1` varchar(255) NOT NULL,
  `Encoder1` int(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_assets1
-- ----------------------------
INSERT INTO `tbl_assets1` VALUES ('3', 'Non-Current Assets', '', '3,261,156', '0');
INSERT INTO `tbl_assets1` VALUES ('4', 'TOTAL ASSETS', '', '151,731,033', '0');
INSERT INTO `tbl_assets1` VALUES ('5', 'Fund Balance', '', '36, 299, 969', '0');
INSERT INTO `tbl_assets1` VALUES ('7', 'Curent Liabilities', '', '113,716,999', '0');
INSERT INTO `tbl_assets1` VALUES ('8', 'Current Assets', '', '148,459,877', '0');
INSERT INTO `tbl_assets1` VALUES ('9', 'Non-Current Liabilities', '', '3,174,065', '0');

-- ----------------------------
-- Table structure for tbl_corporate
-- ----------------------------
DROP TABLE IF EXISTS `tbl_corporate`;
CREATE TABLE `tbl_corporate` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Status` varchar(255) NOT NULL,
  `File` blob NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_corporate
-- ----------------------------
INSERT INTO `tbl_corporate` VALUES ('24', 'ARCHIVE', 0x41727469636C65732D6F662D496E636F72706F726174696F6E2D42792D4C6177732E706466);
INSERT INTO `tbl_corporate` VALUES ('25', 'ARCHIVE FILE', 0x4B47492D4D42412D436F72706F726174652D4D616E75616C2E706466);

-- ----------------------------
-- Table structure for tbl_corp_asean
-- ----------------------------
DROP TABLE IF EXISTS `tbl_corp_asean`;
CREATE TABLE `tbl_corp_asean` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Statuscorp` varchar(255) NOT NULL,
  `Filecorp` blob NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_corp_asean
-- ----------------------------
INSERT INTO `tbl_corp_asean` VALUES ('6', 'ARCHIVE', 0x4B47492D4D42415F424F545F415454454E44414E43455F323031352E706466);
INSERT INTO `tbl_corp_asean` VALUES ('7', 'ARCHIVE', 0x4B47492D4D42415F4D494E555445535F323031352E706466);
INSERT INTO `tbl_corp_asean` VALUES ('8', 'ARCHIVE FILE', 0x4D696E757465735F6F665F41474D5F323031342E706466);

-- ----------------------------
-- Table structure for tbl_downloadable_forms
-- ----------------------------
DROP TABLE IF EXISTS `tbl_downloadable_forms`;
CREATE TABLE `tbl_downloadable_forms` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Status` varchar(255) NOT NULL,
  `File` blob NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_downloadable_forms
-- ----------------------------
INSERT INTO `tbl_downloadable_forms` VALUES ('4', 'FILE', 0x4D656D626572736869705F4170706C69636174696F6E5F466F726D2E706466);
INSERT INTO `tbl_downloadable_forms` VALUES ('5', 'FILE', 0x4164646974696F6E616C5F4C6567616C5F446570656E64656E745F466F726D732E706466);
INSERT INTO `tbl_downloadable_forms` VALUES ('6', 'FILE', 0x4E6F746963655F6F665F6368616E67655F6F665F62656E656669636961726965735F666F726D732E706466);
INSERT INTO `tbl_downloadable_forms` VALUES ('7', 'FILE', 0x4170706C69636174696F6E5F666F726D5F7265746972656D656E745F666F726D2E706466);
INSERT INTO `tbl_downloadable_forms` VALUES ('8', 'FILE', 0x5265696E73746174656D656E745F6465636C61726174696F6E2E706466);
INSERT INTO `tbl_downloadable_forms` VALUES ('9', 'FILE', 0x4E6F746963655F6F665F686F73706974616C697A6174696F6E5F666F726D2E706466);
INSERT INTO `tbl_downloadable_forms` VALUES ('10', 'FILE', 0x4E6F746963655F6F665F64656174685F5450445F666F726D2E706466);
INSERT INTO `tbl_downloadable_forms` VALUES ('11', 'File', 0x50726F6F665F6F665F6964656E746974795F666F726D2E706466);
INSERT INTO `tbl_downloadable_forms` VALUES ('12', 'FILE', 0x4E6F746963655F6F665F5472616E736665725F746F5F6F746865725F6272616E63682E706466);

-- ----------------------------
-- Table structure for tbl_email
-- ----------------------------
DROP TABLE IF EXISTS `tbl_email`;
CREATE TABLE `tbl_email` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Subject` varchar(255) NOT NULL,
  `Message` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_email
-- ----------------------------

-- ----------------------------
-- Table structure for tbl_financial_statements
-- ----------------------------
DROP TABLE IF EXISTS `tbl_financial_statements`;
CREATE TABLE `tbl_financial_statements` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Statusfinancial` varchar(255) NOT NULL,
  `Filefinancial` blob NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_financial_statements
-- ----------------------------
INSERT INTO `tbl_financial_statements` VALUES ('3', 'FILE ARCHIVE', 0x4B47492D4D42415F415544495445445F46535F323031352E706466);

-- ----------------------------
-- Table structure for tbl_news
-- ----------------------------
DROP TABLE IF EXISTS `tbl_news`;
CREATE TABLE `tbl_news` (
  `ID` int(255) NOT NULL AUTO_INCREMENT,
  `Title` varchar(255) NOT NULL,
  `Content` text NOT NULL,
  `Author` int(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Date Created` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `slug` varchar(255) NOT NULL,
  `pictures` blob NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_news
-- ----------------------------
INSERT INTO `tbl_news` VALUES ('1', 'This is the Latest News of KGI Mutual Benefits Association', 'The KGI-MBA is now celebrating its 6th year of existence.', '0', '0', '', '2017-09-16 17:26:11.668684', 'This-is-the-Latest-News-of-KGI-Mutual-Benefits-Association', '');
INSERT INTO `tbl_news` VALUES ('2', 'Clark Heroes Run 2017', 'The Clark Heroes Run is happening today at Clark', '0', '0', '', '2017-08-27 04:47:58.169722', 'Clark-Heroes-Run-2017', '');
INSERT INTO `tbl_news` VALUES ('4', 'Guagua Half Marathon 2017', 'This is happening now at Guagua Pampanga', '0', '0', '', '2017-08-27 04:49:18.654420', 'Guagua-Half-Marathon-2017', '');
INSERT INTO `tbl_news` VALUES ('5', 'Devcon Summit 2017', 'The biggest developer\'s conference will happen at Philippine Trade Trading Center on October 28-29, 2017.', '0', '0', '', '2017-08-27 22:12:08.288668', 'Devcon-Summit-2017', '');
INSERT INTO `tbl_news` VALUES ('6', 'Sportsfest 2017', 'Will be held on September 21-23 2017', '0', '0', '', '2017-09-12 10:51:53.537854', 'Sportsfest-2017', '');

-- ----------------------------
-- Table structure for tbl_user
-- ----------------------------
DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE `tbl_user` (
  `ID` int(255) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(255) NOT NULL,
  `PassWord` varchar(255) NOT NULL,
  `Staff_ID` int(255) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_user
-- ----------------------------
INSERT INTO `tbl_user` VALUES ('1', 'admin', '76fd3b0f57e2e1e71669fc2906f8283a5ed5818e82ad573d5a5386a18c1db49c31636175f2b3c4ae79529d305e98294a1a51801c9f75f2c5cac4963ec27a28a5', '0', '2017-08-27 22:21:23');
