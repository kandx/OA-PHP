-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2014 年 12 月 04 日 17:34
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
  `name` varchar(10) NOT NULL COMMENT '部门名称',
  `short_name` varchar(10) NOT NULL,
  `leader_id` int(11) DEFAULT NULL COMMENT '部门负责人id',
  `create_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='处室表' AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `oa_department`
--

INSERT INTO `oa_department` (`id`, `name`, `short_name`, `leader_id`, `create_time`, `update_time`) VALUES
(1, '委领导', '委领导', 1, '2014-12-04 10:05:45', '2014-12-04 10:05:45'),
(2, '综合处', '综合处', 3, '2014-12-04 10:05:45', '2014-12-04 10:05:45'),
(3, '投资促进处', '投资处', 9, '2014-12-04 10:06:06', '2014-12-04 10:06:06'),
(4, '公共事务协调处', '协调处', 8, '2014-12-04 10:06:06', '2014-12-04 10:06:06'),
(5, '建设开发处', '建开处', 4, '2014-12-04 10:06:20', '2014-12-04 10:06:20'),
(6, '企业服务处', '企服处', 5, '2014-12-04 10:20:47', '2014-12-04 10:20:47');

-- --------------------------------------------------------

--
-- 表的结构 `oa_duty`
--

CREATE TABLE IF NOT EXISTS `oa_duty` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='职务表格' AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `oa_duty`
--

INSERT INTO `oa_duty` (`id`, `name`) VALUES
(1, '主任'),
(2, '常务副主任'),
(3, '副主任'),
(4, '处长'),
(5, '副处长');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='级别表' AUTO_INCREMENT=14 ;

--
-- 转存表中的数据 `oa_level`
--

INSERT INTO `oa_level` (`id`, `name`) VALUES
(1, '副局级'),
(2, '正处级'),
(3, '副处级'),
(4, '正科级'),
(5, '主任科员'),
(6, '副主任科员'),
(7, '科员'),
(8, '高级雇员'),
(9, '中级雇员'),
(10, '初级雇员'),
(11, '文员'),
(12, '挂职干部'),
(13, '实习生');

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
-- 表的结构 `oa_saying`
--

CREATE TABLE IF NOT EXISTS `oa_saying` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(255) NOT NULL COMMENT '内容',
  `writer` varchar(20) DEFAULT NULL COMMENT '作者',
  `create_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=45 ;

--
-- 转存表中的数据 `oa_saying`
--

INSERT INTO `oa_saying` (`id`, `content`, `writer`, `create_time`) VALUES
(1, '生活是一面镜子。你对它笑，它就对你笑；你对它哭，它也对你哭。', '拉伯雷', '2014-01-01 21:38:44'),
(2, '命运掌握在自己手中。要么你驾驭生命，要么生命驾驭你，你的心态决定你是坐骑还是骑手。', NULL, '2014-01-01 21:41:13'),
(3, '不要拿小人的错误来惩罚自己，不要在这些微不足道的事情上折磨浪费自己的宝贵时间。', NULL, '2014-01-01 21:41:13'),
(4, '学的到东西的事情是锻炼，学不到的是磨练。', NULL, '2014-01-01 21:42:07'),
(5, '过错是暂时的遗憾，而错过则是永远的遗憾！', NULL, '2014-01-01 21:42:07'),
(6, '还能冲动，表示你还对生活有激情，总是冲动，表示你还不懂生活。', NULL, '2014-01-01 21:42:50'),
(7, '人一生下就会哭，笑是后来才学会的。所以忧伤是一种低级的本能，而快乐是一种更高级的能力。', NULL, '2014-01-01 21:42:50'),
(8, '放弃该放弃的是无奈，放弃不该放弃的是无能，不放弃该放弃的是无知，不放弃不该放弃的是执著！', NULL, '2014-01-01 21:43:34'),
(9, '行动是治愈恐惧的良药，而犹豫、拖延将不断滋养恐惧。', NULL, '2014-01-01 21:43:34'),
(10, '你把周围的人看作魔鬼，你就生活在地狱；你把周围的人看作天使，你就生活在天堂。', NULL, '2014-01-01 21:44:07'),
(11, '与其说是别人让你痛苦，不如说自己的修养不够。', NULL, '2014-01-01 21:44:07'),
(12, '如果你不给自己烦恼，别人也永远不可能给你烦恼，烦恼都是自己内心制造的。', NULL, '2014-01-01 21:44:48'),
(13, '一杯清水因滴入一滴污水而变污浊，一杯污水却不会因一滴清水的存在而变清澈。', NULL, '2014-01-01 21:44:48'),
(14, '做一个决定，并不难，难的是付诸行动，并且坚持到底。', NULL, '2014-01-01 21:45:23'),
(15, '无论你觉得自己多么的了不起，也永远有人比你更强；无论你觉得自己多么的不幸，永远有人比你更加不幸。', NULL, '2014-01-01 21:46:24'),
(16, '我们总是对陌生人太客气，而对亲密的人太苛刻。', NULL, '2014-01-01 21:46:24'),
(17, '虽然我们无法改变人生，但可以改变人生观。虽然我们无法改变环境，但我们可以改变心境。', NULL, '2014-01-01 21:47:10'),
(18, '人生最大的错误是不断担心会犯错。', NULL, '2014-01-01 21:47:10'),
(19, '再长的路，一步步也能走完，再短的路，不迈开双脚也无法到达。', NULL, '2014-01-01 21:48:16'),
(20, '人生就像钟表，可以回到起点，却已不是昨天！', NULL, '2014-01-01 21:48:16'),
(21, '你不能左右天气，但可以改变心情。你不能改变容貌，但可以掌握自己。你不能预见明天，但可以珍惜今天。', NULL, '2014-01-01 21:49:01'),
(22, '你不要一直不满他人，你应该一直检讨自己才对。', NULL, '2014-01-01 21:49:01'),
(23, '人的缺点就像花园里的杂草，如果不及时清理，很快就会占领整座花园。', NULL, '2014-01-01 21:49:58'),
(24, '感谢伤害你的人，因为他磨练了你的心志；感谢欺骗你的人，因为他增进了你的智慧；感谢中伤你的人，因为他砥砺了你的人格；感谢鞭打你的人，因为他激发了你的斗志；感谢遗弃你的人，因为他教导了你该独立；感谢绊倒你的人，因为他强化了你的能力；感谢斥责你的人，因为他提醒了你的缺点。怀着一颗感恩的心，感激一切使你成长的人！', NULL, '2014-01-01 21:49:58'),
(25, '人之所以有一张嘴，而有两只耳朵，原因是听的要比说的多一倍。', NULL, '2014-01-01 21:57:59'),
(26, '泪水和汗水的化学成分相似，但前者只能为你换来同情，后者却可以为你赢的成功。', NULL, '2014-01-01 21:57:59'),
(27, '人生有几件绝对不能失去的东西：自制的力量，冷静的头脑，希望和信心。', NULL, '2014-01-01 21:59:50'),
(28, '自己要先看得起自己，别人才会看得起你。', NULL, '2014-01-01 21:59:50'),
(29, '一千个人就有一千种生存方式和生活道路，要想改变一些事情，首先得把自己给找回来。', NULL, '2014-01-01 22:02:02'),
(30, '假如我不能，我一定要；假如我一定要，我就一定能。', NULL, '2014-01-01 22:02:02'),
(31, '含泪播种的人一定能含笑收获。', NULL, '2014-01-01 22:08:29'),
(32, '肯低头的人，永远不会撞到矮门。', NULL, '2014-01-01 22:08:29'),
(33, '你今天发愁的很多事情可能都不去发生，所以不要为没有发生的事情发愁。', NULL, '2014-01-01 22:17:14'),
(34, '发光不是太阳的专利，玻璃也可以发光。我们也可以发出耀眼的光芒。', NULL, '2014-01-01 22:17:14'),
(35, '你今天发愁的很多事情可能都不去发生，所以不要为没有发生的事情发愁。', NULL, '2014-01-01 22:18:13'),
(36, '上帝从不抱怨人们的自私，人们却总埋怨上帝的不公平。', NULL, '2014-01-01 22:19:11'),
(37, '低头要有勇气，抬头要有底气。', NULL, '2014-01-01 22:19:11'),
(38, '背对太阳，阴影一片；迎着太阳，霞光万丈。', NULL, '2014-01-01 22:19:39'),
(39, '绊脚石乃是进身之阶。', NULL, '2014-01-01 22:19:39'),
(40, '想想自己的错，会忘却别人的过。', NULL, '2014-01-01 22:20:21'),
(41, '不宽恕众生，不原谅众生，是苦了你自己。', NULL, '2014-01-01 22:20:21'),
(42, '一无所有是一种财富，它让穷人产生改变命运的行动。', NULL, '2014-01-01 22:20:52'),
(43, '不管在什么时候开始，一旦开始了就不要结束；不管在什么时候结束，结束了就不要后悔。', NULL, '2014-01-01 22:20:52'),
(44, '得不到的，就不重要——姚科', NULL, '2014-01-16 15:17:32');

-- --------------------------------------------------------

--
-- 表的结构 `oa_schedule`
--

CREATE TABLE IF NOT EXISTS `oa_schedule` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL COMMENT '日程名称',
  `begin_time` datetime NOT NULL,
  `end_time` datetime DEFAULT NULL,
  `is_allday` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否全天事件',
  `user_id` int(11) NOT NULL,
  `create_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
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
  `last_login` datetime NOT NULL COMMENT '上次登录时间',
  `login_count` mediumint(9) NOT NULL DEFAULT '0' COMMENT '登录次数',
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='用户表' AUTO_INCREMENT=14 ;

--
-- 转存表中的数据 `oa_user`
--

INSERT INTO `oa_user` (`id`, `username`, `password`, `first_name`, `last_name`, `gender`, `birthday`, `begin_work_date`, `enter_date`, `email`, `image_url`, `last_login`, `login_count`, `is_login`, `is_active`, `is_super`, `department_id`, `duty_id`, `level_id`, `create_time`, `update_time`) VALUES
(1, 'qiuwq', '81dc9bdb52d04dc20036dbd8313ed055', '丘', '卫青', 'M', '1980-01-01', '1985-01-01', '2011-03-22', 'qiuwq@qq.com', '/public/headimage', '2014-12-04 00:00:00', 0, 0, 1, 0, 1, 1, 1, '2014-12-04 10:20:07', '2014-12-04 10:20:07'),
(2, 'zhanghb', '81dc9bdb52d04dc20036dbd8313ed055', '张', '海波', 'M', '1980-01-01', '1985-01-01', '2011-03-22', 'zhanghb@qq.com', '/public/headimage', '2014-12-04 00:00:00', 0, 0, 1, 0, 1, 2, 2, '2014-12-04 10:22:19', '2014-12-04 10:30:58'),
(3, 'zouxp', '81dc9bdb52d04dc20036dbd8313ed055', '邹', '学飘', 'M', '1980-01-01', '1985-01-01', '2011-03-22', 'zouxp@qq.com', '/public', '2014-12-04 00:00:00', 0, 0, 1, 0, 2, 4, 3, '2014-12-04 10:24:43', '2014-12-04 10:31:22'),
(4, 'chencx', '81dc9bdb52d04dc20036dbd8313ed055', '陈', '财新', 'M', '1980-01-01', '1985-01-01', '2011-03-22', 'chencx@qq.com', '/public', '2014-12-04 00:00:00', 0, 0, 1, 0, 5, 4, 3, '2014-12-04 10:28:20', '2014-12-04 10:28:20'),
(5, 'taoxm', '81dc9bdb52d04dc20036dbd8313ed055', '陶', '小民', 'M', '1980-01-01', '1985-01-01', '2011-03-22', 'taoxm@qq.com', '/public/', '2014-12-04 00:00:00', 0, 0, 1, 0, 6, 4, 3, '2014-12-04 10:32:51', '2014-12-04 10:33:22'),
(8, 'xiexx', '81dc9bdb52d04dc20036dbd8313ed055', '谢', '锡雄', 'M', '1980-01-01', '1985-01-01', '2011-03-22', 'xiexx@qq.com', '/public', '2014-12-04 00:00:00', 0, 0, 1, 0, 4, 4, 3, '2014-12-04 10:36:16', '2014-12-04 10:36:16'),
(9, 'quanxm', '81dc9bdb52d04dc20036dbd8313ed055', '全', '小敏', 'F', '1980-01-01', '1985-01-01', '2011-03-22', 'quanxm@qq.com', '/public', '2014-12-04 00:00:00', 0, 0, 1, 0, 3, 4, 3, '2014-12-04 10:37:21', '2014-12-04 10:37:21'),
(10, 'yeym', '81dc9bdb52d04dc20036dbd8313ed055', '叶', '育梅', 'F', '1980-01-01', '1985-01-01', '2011-03-22', 'yeym@qq.com', '/public', '2014-12-04 00:00:00', 0, 0, 1, 0, 2, 5, 4, '2014-12-04 10:41:22', '2014-12-04 10:41:22'),
(11, 'linss', '81dc9bdb52d04dc20036dbd8313ed055', '林', '穗生', 'M', '1980-01-01', '1985-01-01', '2011-03-22', 'linss@qq.com', 'public', '2014-12-04 00:00:00', 0, 0, 1, 0, 6, 5, 4, '2014-12-04 10:42:29', '2014-12-04 10:42:29'),
(12, 'zhangh', '81dc9bdb52d04dc20036dbd8313ed055', '张', '皓', 'M', '1980-01-01', '1985-01-01', '2011-03-22', 'zhangh@qq.com', 'public', '2014-12-04 00:00:00', 0, 0, 1, 0, 3, 5, 4, '2014-12-04 10:43:19', '2014-12-04 10:43:19'),
(13, 'zengk', 'c4ca4238a0b923820dcc509a6f75849b', '曾', '科', 'M', '1981-01-08', '2006-07-01', '2013-04-23', '38170508@qq.com', 'public', '2014-12-04 12:59:52', 7, 0, 1, 1, 5, 5, 4, '2014-12-04 10:44:27', '2014-12-04 10:52:21');

--
-- 限制导出的表
--

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
