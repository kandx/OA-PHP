-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2014 年 12 月 03 日 17:16
-- 服务器版本: 5.6.12-log
-- PHP 版本: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `oa`
--
CREATE DATABASE IF NOT EXISTS `oa` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `oa`;

-- --------------------------------------------------------

--
-- 表的结构 `oa_department`
--

CREATE TABLE IF NOT EXISTS `oa_department` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` int(11) NOT NULL COMMENT '部门名称',
  `leader_id` int(11) NOT NULL COMMENT '部门负责人id',
  `create_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `leader_id` (`leader_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='处室表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `oa_duty`
--

CREATE TABLE IF NOT EXISTS `oa_duty` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='职务表格' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `oa_group`
--

CREATE TABLE IF NOT EXISTS `oa_group` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` char(100) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `rules` char(80) NOT NULL DEFAULT '',
  `description` varchar(30) NOT NULL COMMENT '备注',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `oa_group_access`
--

CREATE TABLE IF NOT EXISTS `oa_group_access` (
  `uid` mediumint(8) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  UNIQUE KEY `uid_group_id` (`uid`,`group_id`),
  KEY `uid` (`uid`),
  KEY `group_id` (`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `oa_level`
--

CREATE TABLE IF NOT EXISTS `oa_level` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='级别表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `oa_rule`
--

CREATE TABLE IF NOT EXISTS `oa_rule` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(80) NOT NULL DEFAULT '',
  `title` char(20) NOT NULL DEFAULT '',
  `type` tinyint(1) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `condition` char(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `oa_schedule`
--

CREATE TABLE IF NOT EXISTS `oa_schedule` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL COMMENT '日程名称',
  `begin_time` datetime NOT NULL,
  `end_time` datetime DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `create_time` datetime NOT NULL,
  `update_time` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='日程表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `oa_user`
--

CREATE TABLE IF NOT EXISTS `oa_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) NOT NULL,
  `password` char(32) NOT NULL,
  `first_name` varchar(5) NOT NULL COMMENT '姓',
  `last_name` varchar(10) NOT NULL COMMENT '名',
  `gender` char(1) NOT NULL COMMENT '性别',
  `birthday` date NOT NULL COMMENT '出生日期',
  `begin_work_date` date NOT NULL COMMENT '参加工作时间',
  `enter_date` date NOT NULL COMMENT '进入单位时间',
  `email` varchar(75) NOT NULL COMMENT '电子邮件（QQ邮箱）',
  `image_url` varchar(100) NOT NULL COMMENT '头像url',
  `is_login` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否登录',
  `is_active` tinyint(1) NOT NULL DEFAULT '1' COMMENT '是否活跃账户',
  `is_super` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否超级用户',
  `department_id` int(11) NOT NULL COMMENT '部门ID',
  `duty_id` int(11) NOT NULL COMMENT '职务ID',
  `level_id` int(11) NOT NULL COMMENT '级别ID',
  `create_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `department_id` (`department_id`),
  KEY `duty_id` (`duty_id`),
  KEY `level_id` (`level_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户表' AUTO_INCREMENT=1 ;

--
-- 限制导出的表
--

--
-- 限制表 `oa_department`
--
ALTER TABLE `oa_department`
  ADD CONSTRAINT `oa_department_ibfk_1` FOREIGN KEY (`leader_id`) REFERENCES `oa_user` (`id`);

--
-- 限制表 `oa_schedule`
--
ALTER TABLE `oa_schedule`
  ADD CONSTRAINT `oa_schedule_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `oa_user` (`id`);

--
-- 限制表 `oa_user`
--
ALTER TABLE `oa_user`
  ADD CONSTRAINT `oa_user_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `oa_department` (`id`),
  ADD CONSTRAINT `oa_user_ibfk_2` FOREIGN KEY (`duty_id`) REFERENCES `oa_duty` (`id`),
  ADD CONSTRAINT `oa_user_ibfk_3` FOREIGN KEY (`level_id`) REFERENCES `oa_level` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
