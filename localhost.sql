-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2016 年 06 月 05 日 14:09
-- 服务器版本: 5.5.25
-- PHP 版本: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `a1017192808`
--
CREATE DATABASE `a1017192808` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `a1017192808`;

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` tinyint(2) NOT NULL AUTO_INCREMENT,
  `username` char(40) NOT NULL,
  `password` char(40) NOT NULL,
  `nickname` char(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `nickname`) VALUES
(1, '70d94828ad8ea394cec947a54366e0d4', '624775d43aab941574c240a85fdfd354', 'heacheuy@live.cn'),
(2, 'cec6450bd86868d9c0c3e21231d836c9', '624775d43aab941574c240a85fdfd354', 'heacheuy@163.com');

-- --------------------------------------------------------

--
-- 表的结构 `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` tinyint(2) NOT NULL AUTO_INCREMENT,
  `title` char(20) NOT NULL,
  `isshow` tinyint(1) DEFAULT '0',
  `corder` tinyint(2) DEFAULT NULL,
  `idname` char(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- 转存表中的数据 `category`
--

INSERT INTO `category` (`id`, `title`, `isshow`, `corder`, `idname`) VALUES
(1, '疯狂视频', 1, 1, 'fk-Video'),
(2, '疯狂新闻', 1, 2, 'fk-News'),
(3, '疯狂体育', 1, 3, 'fk-Sports'),
(4, '疯狂趣事', 1, 4, 'fk-Funs'),
(5, '疯狂科技', 1, 5, 'fk-Tech'),
(6, '疯狂娱乐', 1, 6, 'fk-Happy'),
(7, '林疯狂', 1, 7, 'fk-Linsanity'),
(8, '赛季经典', 1, 8, 'fk-Classic'),
(9, '关于疯狂', 1, 9, 'fk-About'),
(10, '友情链接', 0, 13, 'fk-Friendlink'),
(11, '尾部信息', 0, 14, 'fk-Footer'),
(12, '寻求合作', 0, 15, 'fk-Email');

-- --------------------------------------------------------

--
-- 表的结构 `games`
--

CREATE TABLE IF NOT EXISTS `games` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `dates` char(10) NOT NULL,
  `title` char(50) NOT NULL,
  `href` char(150) NOT NULL,
  `cateid` tinyint(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=86 ;

--
-- 转存表中的数据 `games`
--

INSERT INTO `games` (`id`, `dates`, `title`, `href`, `cateid`) VALUES
(8, '2012-02-05', 'NBA.2012.02.05.Nets.vs.Knicks', 'http://www.docin.com/p-997984066.html', 7),
(9, '2012-02-07', 'NBA.2012.02.07.Jazz.vs.Knicks', 'http://www.docin.com/p-997984067.html', 7),
(10, '2012-02-09', 'NBA.2012.02.09.Knicks.vs.Wizards', 'http://www.docin.com/p-998929308.html', 7),
(11, '2012-02-11', 'NBA.2012.02.11.Lakers.vs.Knicks', 'http://www.docin.com/p-998833550.html', 7),
(12, '2012-02-12', 'NBA.2012.02.12.Knicks.vs.Wolves', 'http://www.docin.com/p-997984070.html', 7),
(13, '2012-02-15', 'NBA.2012.02.15.Knicks.vs.Raptors', 'http://www.docin.com/p-997984071.html', 7),
(14, '2012-02-16', 'NBA.2012.02.16.Kings.vs.Knicks', 'http://www.docin.com/p-997984072.html', 7),
(15, '2012-02-18', 'NBA.2012.02.18.Hornets.vs.Knicks', 'http://www.docin.com/p-998929309.html', 7),
(16, '2012-02-20', 'NBA.2012.02.20.Mavericks.vs.Knicks', 'http://www.docin.com/p-998901638.html', 7),
(17, '2012-02-21', 'NBA.2012.02.21.Nets.vs.Knicks', 'http://www.docin.com/p-998836181.html', 7),
(18, '2012-02-23', 'NBA.2012.02.23.Hawks.vs.Knicks', 'http://www.docin.com/p-997990535.html', 7),
(19, '2012-02-24', 'NBA.2012.02.24.Knicks.vs.Heat', 'http://www.docin.com/p-998838883.html', 7),
(20, '2012-03-01', 'NBA.2012.03.01.Knicks.vs.Cavaliers', 'http://www.docin.com/p-997990537.html', 7),
(21, '2012-03-05', 'NBA.2012.03.05.Knicks.vs.Celtics', 'http://www.docin.com/p-997990538.html', 7),
(22, '2012-03-07', 'NBA.2012.03.07.Mavericks.vs.Knicks', 'http://www.docin.com/p-997990539.html', 7),
(23, '2012-03-08', 'NBA.2012.03.08.Spurs.vs.Knicks', 'http://www.docin.com/p-998929310.html', 7),
(24, '2012-03-10', 'NBA.2012.03.10.Bucks.vs.Knicks', 'http://www.docin.com/p-998838886.html', 7),
(25, '2012-03-12', 'NBA.2012.03.12.Knicks.vs.76ers', 'http://www.docin.com/p-997990542.html', 7),
(26, '2012-03-13', 'NBA.2012.03.13.Bulls.vs.Knicks', 'http://www.docin.com/p-997990543.html', 7),
(27, '2012-03-15', 'NBA.2012.03.15.Knicks.vs.Blazers', 'http://www.docin.com/p-998858222.html', 7),
(28, '2012-03-17', 'NBA.2012.03.17.Knicks.vs.Pacers', 'http://www.docin.com/p-998905038.html', 7),
(29, '2012-03-18', 'NBA.2012.03.18.Pacers.vs.Knicks', 'http://www.docin.com/p-997994376.html', 7),
(30, '2012-03-21', 'NBA.2012.03.21.Knicks.vs.Raptors', 'http://www.docin.com/p-998905039.html', 7),
(31, '2012-03-22', 'NBA.2012.03.22.76ers.vs.Knicks', 'http://www.docin.com/p-997994378.html', 7),
(32, '2012-03-24', 'NBA.2012.03.24.Raptors.vs.Knicks', 'http://www.docin.com/p-998916882.html', 7),
(33, '2012-03-25', 'NBA.2012.03.25.Knicks.vs.Pistons', 'http://www.docin.com/p-998906974.html', 7),
(34, '2012-11-24', 'NBA.2012.11.24.Knicks.vs.Rockets', 'http://www.docin.com/p-998930190.html', 8),
(35, '2012-12-11', 'NBA.2012.12.11.Rockets.vs.Spurs', 'http://www.docin.com/p-998942868.html', 8),
(36, '2012-12-18', 'NBA.2012.12.18.Rockets.vs.Knicks', 'http://www.docin.com/p-998942869.html', 8),
(37, '2013-11-14', 'NBA.2013.11.14.76ers.vs.Rockets', 'http://www.docin.com/p-997994385.html', 8),
(38, '2014-11-01', 'NBA.2014.11.01.Lakers.vs.Clippers', 'http://pan.baidu.com/s/1jG7mF0U', 8),
(39, '2014-11-05', 'NBA.2014.11.05.Lakers.vs.Suns', 'http://pan.baidu.com/s/1eQiYrQi', 8),
(40, '2014-11-10', 'NBA.2014.11.10.Lakers.vs.Hornets', 'http://pan.baidu.com/s/1qW4Y7Fm', 8),
(41, '2014-11-13', 'NBA.2014.11.13.Pelicans.vs.Lakers', 'http://pan.baidu.com/s/14Lpgy', 8),
(42, '2014-11-15', 'NBA.2014.11.15.Lakers.vs.Spurs', 'http://pan.baidu.com/s/1pJG5Z8B', 8),
(43, '2014-11-19', 'NBA.2014.11.19.Hawks.vs.Lakers', 'http://pan.baidu.com/s/1gdDy2jT', 8),
(44, '2014-11-24', 'NBA.2014.11.24.Lakers.vs.Nuggets', 'http://pan.baidu.com/s/11xzsi', 8),
(45, '2014-11-27', 'NBA.2014.11.27.Lakers.vs.Grizzlies', 'http://pan.baidu.com/s/1kT3gWi7', 8),
(46, '2014-11-29', 'NBA.2014.11.29.Lakers.vs.Timberwolves', 'http://pan.baidu.com/s/1jGvbyQU', 8),
(47, '2014-12-13', 'NBA.2014.12.13.Spurs.vs.Lakers', 'http://pan.baidu.com/s/1pJx9aMf', 8),
(48, '2014-12-15', 'NBA.2014.12.15.Timberwolves.vs.Lakers', 'http://pan.baidu.com/s/1gdjCstP', 8),
(49, '2014-12-24', 'NBA.2014.12.24.Lakers.vs.Warriors', 'http://pan.baidu.com/s/1o6mLGdc', 8),
(50, '2014-12-29', 'NBA.2014.12.29.Lakers.vs.Suns', 'http://pan.baidu.com/s/1hqCa9m8', 8),
(51, '2015-01-03', 'NBA.2015.01.03.Lakers.vs.Grizzlies', 'http://pan.baidu.com/s/1kTn8iDD', 8),
(52, '2015-01-10', 'NBA.2015.01.10.Lakers.vs.Magic', 'http://pan.baidu.com/s/1eQgrFsY', 8),
(53, '2015-01-17', 'NBA.2015.01.17.Jazz.vs.Lakers', 'http://pan.baidu.com/s/1ntA54Lz', 8),
(54, '2015-01-20', 'NBA.2015.01.20.Suns.vs.Lakers', 'http://pan.baidu.com/s/1eQnJpkQ', 8),
(55, '2015-01-26', 'NBA.2015.01.26.Lakers.vs.Rockets', 'http://pan.baidu.com/s/1o6Fnmdk', 8),
(56, '2015-01-28', 'NBA.2015.01.28.Lakers.vs.Wizards', 'http://pan.baidu.com/s/1jG1imhg', 8),
(57, '2015-02-14', 'NBA.2015.02.14.全明星新秀挑战赛', 'http://pan.baidu.com/s/1eQozH3G', 8),
(58, '2015-02-15', 'NBA.2015.02.15.全明星扣篮大赛', 'http://pan.baidu.com/s/10djhO', 8),
(59, '2015-02-16', 'NBA.2015.02.16.全明星正赛', 'http://pan.baidu.com/s/1mgHtL00', 8),
(60, '2015-02-21', 'NBA.2015.02.21.Lakers.vs.Nets', 'http://pan.baidu.com/s/1jGKfEKI', 8),
(61, '2015-02-23', 'NBA.2015.02.23.Lakers.vs.Celtics', 'http://pan.baidu.com/s/1gdCer2z', 8),
(62, '2015-02-26', 'NBA.2015.02.26.Jazz.vs.Lakers', 'http://pan.baidu.com/s/1gdrf50B', 8),
(63, '2015-02-28', 'NBA.2015.02.28.Lakers.vs.Bucks', 'http://pan.baidu.com/s/1qWNrsqK', 8),
(64, '2015-03-02', 'NBA.2015.03.02.Lakers.vs.Thunder', 'http://pan.baidu.com/s/1pJkJHHL', 8),
(65, '2015-10-29', 'NBA.2015.10.29.热火.vs.黄蜂', 'http://pan.baidu.com/s/1bn9IHBL', 8),
(66, '2015-10-31', 'NBA.2015.10.31.魔术.vs.雷霆', 'http://pan.baidu.com/s/1mghakMc', 8),
(67, '2015-10-31', 'NBA.2015.10.31.老鹰.vs.黄蜂', 'http://pan.baidu.com/s/1c07EQ9E', 8),
(68, '2015-11-02', 'NBA.2015.11.02.黄蜂.vs.老鹰', 'http://pan.baidu.com/s/1gdwJBcJ', 8),
(69, '2015-11-04', 'NBA.2015.11.04.黄蜂.vs.公牛', 'http://pan.baidu.com/s/1dDiAB8t', 8),
(70, '2015-10-28', 'NBA.2015.10.28.勇士.vs.醍醐', 'http://pan.baidu.com/s/1o6AcAPs', 8),
(71, '2015-10-31', 'NBA.2015.10.31.火箭.vs.勇士', 'http://pan.baidu.com/s/1ypR0i', 8),
(72, '2015-11-01', 'NBA.2015.11.01.醍醐.vs.勇士', 'http://pan.baidu.com/s/1c09bgh6', 8),
(73, '2015-11-03', 'NBA.2015.11.03.勇士.vs.灰熊', 'http://pan.baidu.com/s/1gdlUwqn', 8),
(74, '2015-11-05', 'NBA.2015.11.05.勇士.vs.快船', 'http://pan.baidu.com/s/1i3HEvid', 8),
(75, '2015-11-06', 'NBA.2015.11.06.小牛.vs.黄蜂', 'http://pan.baidu.com/s/1mgGS0dy', 8),
(76, '2015-11-07', 'NBA.2015.11.07.篮网.vs.湖人', 'http://pan.baidu.com/s/1bn4tF8z', 8),
(77, '2015-11-08', 'NBA.2015.11.08.马刺.vs.黄蜂', 'http://pan.baidu.com/s/1nts4qwh', 8),
(78, '2015-11-08', 'NBA.2015.11.08.国王.vs.勇士', 'http://pan.baidu.com/s/1gdlUMSb', 8),
(79, '2015-11-09', 'NBA.2015.11.09.开拓者.vs.活塞', 'http://pan.baidu.com/s/1ntxTPyD', 8),
(80, '2015-11-10', 'NBA.2015.11.10.勇士.vs.活塞', 'http://pan.baidu.com/s/1o6pKrgu', 8),
(81, '2015-11-11', 'NBA.2015.11.11.森林狼.vs.黄蜂', 'http://pan.baidu.com/s/1pJtMgDt', 8),
(82, '2015-11-12', 'NBA.2015.11.12.小牛.vs.快船', 'http://pan.baidu.com/s/1mgJABmK', 8),
(83, '2015-11-12', 'NBA.2015.11.12.开拓者.vs.马刺', 'http://pan.baidu.com/s/1lzmyy', 8),
(84, '2015-11-12', 'NBA.2015.11.12.灰熊.vs.勇士', 'http://pan.baidu.com/s/1qWP8emg', 8),
(85, '2015-11-12', 'NBA.2015.11.12.黄蜂.vs.尼克斯', 'http://pan.baidu.com/s/1qW272w8', 8);

-- --------------------------------------------------------

--
-- 表的结构 `imageads`
--

CREATE TABLE IF NOT EXISTS `imageads` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `title` char(20) DEFAULT NULL,
  `href` char(150) NOT NULL,
  `imagename` char(40) DEFAULT NULL,
  `imagepath` char(15) DEFAULT NULL,
  `tid` tinyint(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- 转存表中的数据 `imageads`
--

INSERT INTO `imageads` (`id`, `title`, `href`, `imagename`, `imagepath`, `tid`) VALUES
(1, '', 'http://www.linsanity.cc', '5624cc3e373c3.jpg', '1000X90/', 1),
(2, '', 'http://www.linsanity.cc', '5624cbd35583a.jpg', '1000X90/', 1),
(3, '', 'http://www.linsanity.cc', '5624cc30cb645.jpg', '1000X90/', 1),
(4, '', 'http://www.linsanity.cc', '5624cf913f8b5.jpg', '400X300/', 3),
(5, '', 'http://www.linsanity.cc', '5624cfa5b1126.jpg', '400X300/', 3),
(6, '', 'http://www.linsanity.cc', '5624cfb372249.jpg', '400X300/', 3),
(7, '', 'http://www.linsanity.cc', '5624d0102b4b7.jpg', '400X300/', 3),
(8, '', 'http://www.linsanity.cc', '5624d07593143.jpg', '400X300/', 3),
(9, '此广告位招租啦！', 'http://www.linsanity.cc', '5624d09f6f193.gif', '130X90/', 2),
(10, '此广告位招租啦！', 'http://www.linsanity.cc', '5624d0ad09db8.gif', '130X90/', 2),
(11, '此广告位招租啦！', 'http://www.linsanity.cc', '56360b2d1438f.gif', '130X90/', 2),
(12, '此广告位招租啦！', 'http://www.linsanity.cc', '563607dcf2301.gif', '130X90/', 2),
(13, '此广告位招租啦！', 'http://www.linsanity.cc', '563606cbd4688.gif', '130X90/', 2),
(14, '此广告位招租啦！', 'http://www.linsanity.cc', '5624d107a0435.jpg', '130X90/', 2),
(15, '此广告位招租啦！', 'http://www.linsanity.cc', '5624da15a9627.gif', '130X90/', 2),
(16, '此广告位招租啦！', 'http://www.linsanity.cc', '5635f991801f4.gif', '130X90/', 2),
(19, '此广告位招租啦！', 'http://www.linsanity.cc', '5624dc59c8e3c.gif', '130X90/', 2),
(20, '此广告位招租啦！', 'http://www.linsanity.cc', '563606422133f.gif', '130X90/', 2),
(21, '此广告位招租啦！', 'http://www.linsanity.cc', '563605b92f7d6.gif', '130X90/', 2),
(22, '此广告位招租啦！', 'http://www.linsanity.cc', '5636060664dc3.gif', '130X90/', 2),
(23, '此广告位招租啦！', 'http://www.linsanity.cc', '5624dd6c9f846.jpg', '130X90/', 2);

-- --------------------------------------------------------

--
-- 表的结构 `imagetype`
--

CREATE TABLE IF NOT EXISTS `imagetype` (
  `id` tinyint(2) NOT NULL AUTO_INCREMENT,
  `typename` char(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `imagetype`
--

INSERT INTO `imagetype` (`id`, `typename`) VALUES
(1, '1000X90'),
(2, '130X90'),
(3, '400X300');

-- --------------------------------------------------------

--
-- 表的结构 `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` char(20) NOT NULL,
  `content` text,
  `imagename` char(40) DEFAULT 'no.jpg',
  `imagepath` char(20) DEFAULT NULL,
  `clicktime` int(5) DEFAULT '0',
  `author` char(10) DEFAULT NULL,
  `pubtime` int(10) DEFAULT NULL,
  `isvideo` tinyint(1) DEFAULT '0',
  `href` char(150) NOT NULL,
  `cateid` tinyint(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=135 ;

--
-- 转存表中的数据 `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `imagename`, `imagepath`, `clicktime`, `author`, `pubtime`, `isvideo`, `href`, `cateid`) VALUES
(2, '----第一行----', '疯狂网 成都世嘉网络科技有限公司', 'no.jpg', '', 0, 'Jeffery', 1463978867, 0, 'http://www.linsanity.cc', 11),
(3, '----第二行----', 'Copyright ©1996-2015 SEEGA Corporation, All Rights Reserved', 'no.jpg', '', 0, 'Jeffery', 1445250086, 0, 'http://www.linsanity.cc', 11),
(4, '疯狂网', '', 'no.jpg', '', 0, '', 1445251854, 0, 'http://www.linsanity.cc/', 10),
(5, '新浪微博', '', 'no.jpg', '', 0, '', 1445250722, 0, 'http://weibo.com/', 10),
(6, '腾讯网', '', 'no.jpg', '', 0, '', 1445250741, 0, 'http://www.qq.com/', 10),
(7, '汽车之家', '', 'no.jpg', '', 0, '', 1445251923, 0, 'http://www.autohome.com.cn/', 10),
(8, '搜狐网', '', 'no.jpg', '', 0, '', 1445250790, 0, 'http://www.sohu.com/', 10),
(9, '网易', '', 'no.jpg', '', 0, '', 1445250808, 0, 'http://www.163.com/', 10),
(10, '凤凰网', '', 'no.jpg', '', 0, '', 1445250828, 0, 'http://www.ifeng.com/', 10),
(11, '中关村在线', '', 'no.jpg', '', 0, '', 1445251787, 0, 'http://www.zol.com.cn/', 10),
(12, '爱奇艺高清', '', 'no.jpg', '', 0, '', 1445250885, 0, 'http://www.iqiyi.com/', 10),
(13, '前程无忧', '', 'no.jpg', '', 0, '', 1445251667, 0, 'http://www.51job.com/', 10),
(14, '京东商城', '', 'no.jpg', '', 0, '', 1445250935, 0, 'http://www.jd.com/', 10),
(15, '亚马逊', '', 'no.jpg', '', 0, '', 1445250953, 0, 'http://www.amazon.cn/', 10),
(16, '新浪新闻', '', 'no.jpg', '', 0, '', 1445250998, 0, 'http://news.sina.com.cn/', 10),
(17, '新华网', '', 'no.jpg', '', 0, '', 1445251017, 0, 'http://www.xinhuanet.com/', 10),
(18, '中华军事网', '', 'no.jpg', '', 0, '', 1445251087, 0, 'http://www.china.com/', 10),
(19, '智联招聘', '', 'no.jpg', '', 0, '', 1445251705, 0, 'http://www.zhaopin.com/', 10),
(20, '搜狐新闻', '', 'no.jpg', '', 0, '', 1445251138, 0, 'http://news.sohu.com/', 10),
(21, '联合早报', '', 'no.jpg', '', 0, '', 1445251162, 0, 'http://www.zaobao.com/', 10),
(22, '人民网', '', 'no.jpg', '', 0, '', 1445251189, 0, 'http://www.people.com.cn/', 10),
(23, '百度贴吧', '', 'no.jpg', '', 0, '', 1445251207, 0, 'http://tieba.baidu.com/', 10),
(24, '天涯社区', '', 'no.jpg', '', 0, '', 1445251223, 0, 'http://www.tianya.cn/', 10),
(25, '穿越火线', '', 'no.jpg', '', 0, '', 1445251247, 0, 'http://cf.qq.com/', 10),
(26, '58同城', '', 'no.jpg', '', 0, '', 1445251291, 0, 'http://www.58.com/', 10),
(27, '赶集网', '', 'no.jpg', '', 0, '', 1445251309, 0, 'http://www.ganji.com/', 10),
(28, '携程网', '', 'no.jpg', '', 0, '', 1445251326, 0, 'http://www.ctrip.com/', 10),
(29, '去哪儿', '', 'no.jpg', '', 0, '', 1445251339, 0, 'http://www.qunar.com/', 10),
(30, '大众点评', '', 'no.jpg', '', 0, '', 1445251360, 0, 'http://www.dianping.com/', 10),
(31, '凤凰军事网', '', 'no.jpg', '', 0, '', 1445251395, 0, 'http://news.ifeng.com/mil/', 10),
(32, '环球网', '', 'no.jpg', '', 0, '', 1445251423, 0, 'http://www.huanqiu.com/', 10),
(33, '百度音乐', '', 'no.jpg', '', 0, '', 1445251452, 0, 'http://music.baidu.com/', 10),
(34, '纵横中文网', '', 'no.jpg', '', 0, '', 1445251478, 0, 'http://www.zongheng.com/', 10),
(35, '东方财富网', '', 'no.jpg', '', 0, '', 1445251498, 0, 'http://www.eastmoney.com/', 10),
(36, '世纪佳缘', '', 'no.jpg', '', 0, '', 1445251520, 0, 'http://www.jiayuan.com/', 10),
(37, '虎扑体育', '', 'no.jpg', '', 0, '', 1445251579, 0, 'http://www.hupu.com/', 10),
(38, '摇滚乐不应该成为小资产阶级的玩具', '', 'no.jpg', '', 0, 'Jeffery', 1445256675, 1, 'http://news.sina.com.cn/zhixing/video/2015-10-13/doc-ifxirmpy1569708.shtml', 1),
(39, '命中注定我们是性杂食动物吗？', '', 'no.jpg', '', 0, 'Jeffery', 1445256801, 1, 'http://video.sina.com.cn/p/news/live/gtx/v/2015-10-19/074065099391.html', 1),
(40, '《周六夜现场》恶搞民主党辩论 狂吐槽', '', 'no.jpg', '', 0, 'Jeffery', 1445256952, 1, 'http://video.sina.com.cn/p/news/live/gtx/v/2015-10-19/093565099473.html', 1),
(41, '智利客机起飞中解体 乘客拍下全过程', '', 'no.jpg', '', 0, 'Jeffery', 1445257053, 1, 'http://video.sina.com.cn/p/news/live/gtx/v/2015-10-19/140565099749.html', 1),
(42, '实拍极限运动狂人不带降落伞挑战高空降落', '', 'no.jpg', '', 0, 'Jeffery', 1445257798, 1, 'http://video.sina.com.cn/p/news/live/gtx/v/2015-10-19/132865099725.html', 1),
(43, '乌克兰26岁美女任海关关长 总统亲自任命', '', 'no.jpg', '', 0, 'Jeffery', 1445258585, 1, 'http://video.sina.com.cn/p/news/live/gtx/v/2015-10-19/183365099985.html', 1),
(44, '游客实拍数米外大白鲨吞食海豹 血海翻腾', '', 'no.jpg', '', 0, 'Jeffery', 1445258652, 1, 'http://video.sina.com.cn/p/news/live/gtx/v/2015-10-19/145265099771.html', 1),
(45, '实拍重庆一小区发生砍人事件 如黑道大片', '', 'no.jpg', '', 0, 'Jeffery', 1445258758, 1, 'http://video.sina.com.cn/p/news/live/zxc/v/2015-10-19/132565099721.html', 1),
(46, '墨西哥一河中冒出教堂 渔民称13年前见过', '', 'no.jpg', '', 0, 'Jeffery', 1445258974, 1, 'http://video.sina.com.cn/p/news/live/gtx/v/2015-10-19/164365099901.html', 1),
(47, '实拍大象用长牙狂戳虐死水牛 场面之火爆', '', 'no.jpg', '', 0, 'Jeffery', 1445259091, 1, 'http://video.sina.com.cn/p/news/gaoxiao/v/2015-10-17/130865098515.html', 1),
(48, '未婚夫临阵脱逃 妹子22万婚宴招待流浪汉', '', 'no.jpg', '', 0, 'Jeffery', 1445259184, 1, 'http://video.sina.com.cn/p/news/live/gtx/v/2015-10-19/140565099751.html', 1),
(49, '实拍无人机新玩法：穿上白衣蒙面扮鬼吓人', '', 'no.jpg', '', 0, 'Jeffery', 1445259390, 1, 'http://video.sina.com.cn/p/news/live/gtx/v/2015-10-19/163365099893.html', 1),
(50, '疯狂网今天正式上线啦！', '', 'no.jpg', '', 0, 'Jeffery', 1445259533, 0, 'http://www.linsanity.cc', 9),
(51, '实拍豹子突击捕杀鳄鱼：纵身跳入河中咬住', '', 'no.jpg', '', 0, 'Jeffery', 1445259711, 1, 'http://video.sina.com.cn/p/news/live/gtx/v/2015-10-18/183365099243.html', 1),
(52, '男子上海地铁吐痰遭批爆粗口 激众怒被打', '', 'no.jpg', '', 0, 'Jeffery', 1445259784, 1, 'http://video.sina.com.cn/p/news/live/zxc/v/2015-10-18/082665099013.html', 1),
(53, '泪目创意短片：穿越千年只为擦出爱的火花', '', 'no.jpg', '', 0, 'Jeffery', 1445259826, 1, 'http://video.sina.com.cn/p/news/live/gtx/v/2015-10-16/222865098319.html', 1),
(54, '赵本山将携志愿者公益演出 捐款1000万', '', 'no.jpg', '', 0, 'Jeffery', 1445259991, 1, 'http://ent.sina.com.cn/s/m/2015-10-19/doc-ifxivscc0171430.shtml', 6),
(55, '北影65年校庆 张艺谋赵薇黄渤等校友合影', '', 'no.jpg', '', 0, 'Jeffery', 1445260053, 1, 'http://ent.sina.com.cn/s/m/2015-10-19/doc-ifxivsch3702186.shtml', 6),
(56, '修杰楷谈与贾静雯恩爱之道：情人节天天过', '', 'no.jpg', '', 0, 'Jeffery', 1445260125, 1, 'http://ent.sina.com.cn/s/h/2015-10-19/doc-ifxivsch3685793.shtml', 6),
(57, '张艺兴郑秀晶首合作 《飞燕》谱青春恋曲', '', 'no.jpg', '', 0, 'Jeffery', 1445260192, 0, 'http://ent.sina.com.cn/m/c/2015-10-19/doc-ifxivscc0180234.shtml', 6),
(58, '金秀贤安昭熙被曝恋爱1年 公司火速否认', '', 'no.jpg', '', 0, 'Jeffery', 1445260229, 1, 'http://ent.sina.com.cn/s/j/2015-10-19/doc-ifxiwazu5599812.shtml', 6),
(59, '经纪人否认林志玲与旧爱复合：无中生有！', '', 'no.jpg', '', 0, 'Jeffery', 1445260267, 0, 'http://ent.sina.com.cn/s/h/2015-10-19/doc-ifxivsce6918785.shtml', 6),
(60, '佐佐木藏之介搭档横山裕主演电影《破门》', '', 'no.jpg', '', 0, 'Jeffery', 1445260398, 0, 'http://ent.sina.com.cn/m/f/2015-10-19/doc-ifxivscc0194432.shtml', 6),
(61, '《决战江桥》还原历史 李幼斌十年再亮剑', '', 'no.jpg', '', 0, 'Jeffery', 1445260444, 0, 'http://ent.sina.com.cn/v/m/2015-10-19/doc-ifxivsce6939224.shtml', 6),
(62, '《中国味道》美食大咖助力传承中国精神', '', 'no.jpg', '', 0, 'Jeffery', 1445260481, 0, 'http://ent.sina.com.cn/tv/zy/2015-10-19/doc-ifxivsch3713923.shtml', 6),
(63, '张晓龙曾上《康熙》感荣幸 抱小S反遭调侃', '', 'no.jpg', '', 0, 'Jeffery', 1445260532, 0, 'http://ent.sina.com.cn/s/m/2015-10-19/doc-ifxivsch3713606.shtml', 6),
(64, '《演说家》战队PK战打响 刘德华金句受捧', '', 'no.jpg', '', 0, 'Jeffery', 1445260580, 0, 'http://ent.sina.com.cn/tv/zy/2015-10-19/doc-ifxivsce6938536.shtml', 6),
(65, '《青春集结号》将收官 观众不舍呼唤续集', '', 'no.jpg', '', 0, 'Jeffery', 1445260618, 0, 'http://ent.sina.com.cn/v/m/2015-10-19/doc-ifxivsce6938189.shtml', 6),
(66, '张敏：怀旧时光里走出的绮梦美人(图)', '', 'no.jpg', '', 0, 'Jeffery', 1445260684, 0, 'http://ent.sina.com.cn/zl/discuss/blog/2015-10-19/17034032/334540891/13f0b05b20102w0yn.shtml', 6),
(67, '吴奇隆染发叶祖新调侃：说好到白头呢？', '', 'no.jpg', '', 0, 'Jeffery', 1445260710, 0, 'http://ent.sina.com.cn/s/m/2015-10-19/doc-ifxivsce6937251.shtml', 6),
(68, '顶级卖萌教练 波波维奇又开始调戏记者了', '', 'no.jpg', '', 0, 'Jeffery', 1445261890, 0, 'http://voice.hupu.com/nba/topic/pop-joke', 3),
(69, 'TMZ：奥多姆伤情好转 但治疗将持续数月', '', 'no.jpg', '', 0, 'Jeffery', 1445261937, 0, 'http://voice.hupu.com/nba/1963306.html', 3),
(70, 'CBA首届状元秀方君磊顺利完成注册', '', 'no.jpg', '', 0, 'Jeffery', 1445261977, 0, 'http://voice.hupu.com/cba/1963225.html', 3),
(71, '禅枪笔记 天生我跑必有用 机会散尽还复来', '', 'no.jpg', '', 0, 'Jeffery', 1445262119, 0, 'http://bbs.hupu.com/14392920.html', 4),
(72, '辽宁男篮内部人士：已重启与郭艾伦谈判', '', 'no.jpg', '', 0, 'Jeffery', 1445262201, 0, 'http://voice.hupu.com/cba/1963333.html', 3),
(73, '保罗回忆故意罚高分纪念祖父，下场后流泪', '', 'no.jpg', '', 0, 'Jeffery', 1445262357, 1, 'http://bbs.hupu.com/14400562.html', 3),
(74, '高大壮配小快灵 曼城黑风双煞扛起进攻大旗', '', 'no.jpg', '', 0, 'Jeffery', 1445262422, 1, 'http://bbs.hupu.com/14399089.html', 3),
(75, '山东女篮大多队员月薪仅3千 没赞助无外援', '', 'no.jpg', '', 0, 'Jeffery', 1445262540, 0, 'http://voice.hupu.com/cba/1963271.html', 3),
(76, '展望亚冠：恒大需谨慎，埃神表现可期待', '', 'no.jpg', '', 0, 'Jeffery', 1445262672, 0, 'http://bbs.hupu.com/14402335.html', 3),
(77, '聚焦：克洛普的摇滚革命方兴未艾', '', 'no.jpg', '', 0, 'Jeffery', 1445262700, 0, 'http://bbs.hupu.com/14395770.html', 3),
(78, '奥多姆或留永久性伤害 卡戴珊发誓全程陪护', '', 'no.jpg', '', 0, 'Jeffery', 1445262901, 1, 'http://sports.qq.com/a/20151019/050736.htm', 3),
(79, '“老干部”马龙：痛哭过才配赢冠军', '', 'no.jpg', '', 0, 'Jeffery', 1445263004, 1, 'http://sports.qq.com/a/20151019/009561.htm', 3),
(80, 'CBA吕晓明退役 生涯助攻抢断历史第2', '', 'no.jpg', '', 0, 'Jeffery', 1445263303, 0, 'http://sports.qq.com/a/20151019/010003.htm', 3),
(81, '贝肯鲍尔回应贿选丑闻 我没有给任何人送钱', '', 'no.jpg', '', 0, 'Jeffery', 1445263414, 1, 'http://sports.qq.com/a/20151019/006201.htm', 3),
(82, '蓝军不满锋无力 穆帅欲与温格争蝙蝠军箭头', '', 'no.jpg', '', 0, 'Jeffery', 1445263380, 0, 'http://sports.qq.com/a/20151019/002618.htm', 3),
(83, '习近平今日离京 将对英国进行国事访问', '', 'no.jpg', '', 0, 'Jeffery', 1445264373, 1, 'http://news.ifeng.com/a/20151019/45656917_0.shtml', 2),
(84, '发改委 社会发展司司长等3名官员同时被查', '', 'no.jpg', '', 0, 'Jeffery', 1445264429, 0, 'http://news.ifeng.com/a/20151019/45619197_0.shtml', 2),
(85, '山海关5A景区被摘牌 旅游局长失声痛哭', '', 'no.jpg', '', 0, 'Jeffery', 1445264500, 0, 'http://news.ifeng.com/a/20151019/45610290_0.shtml', 2),
(86, '朱称蔡当选会灭“中华民国” 蔡隔空回击', '', 'no.jpg', '', 0, 'Jeffery', 1445264586, 1, 'http://news.ifeng.com/a/20151019/45590486_0.shtml', 2),
(87, '外媒热议习近平访英：地毯最红 时代最金', '', 'no.jpg', '', 0, 'Jeffery', 1445264610, 0, 'http://news.ifeng.com/a/20151019/45659267_0.shtml', 2),
(88, '美军若用南海岛礁灯塔 等于承认中国主权', '', 'no.jpg', '', 0, 'Jeffery', 1445264678, 0, 'http://news.ifeng.com/a/20151019/45659986_0.shtml', 2),
(89, '东莞劫匪遇超淡定女人质：死就死呗(图)', '', 'no.jpg', '', 0, 'Jeffery', 1445264750, 0, 'http://news.ifeng.com/a/20151019/45678399_0.shtml', 2),
(90, '英媒：中国不再接受美海军在亚太主导地位', '', 'no.jpg', '', 0, 'Jeffery', 1445264847, 0, 'http://news.ifeng.com/a/20151019/45663349_0.shtml', 2),
(91, '胡润女富豪榜发布：“唐僧”夫人第二(图)', '', 'no.jpg', '', 0, 'Jeffery', 1445264796, 0, 'http://news.ifeng.com/a/20151019/45669378_0.shtml', 2),
(92, '媒体：哪个部委“外放”的省级官员最多？', '', 'no.jpg', '', 0, 'Jeffery', 1445265187, 0, 'http://news.ifeng.com/a/20151019/45683223_0.shtml', 2),
(93, '男子给车加油，发现“加油枪”竟是蛇头！', '', 'no.jpg', '', 0, 'Jeffery', 1445265160, 0, 'http://news.ifeng.com/a/20151019/45687858_0.shtml', 2),
(94, '安倍晋三：希望与朴槿惠开展广泛对话', '', 'no.jpg', '', 0, 'Jeffery', 1445264986, 0, 'http://news.ifeng.com/a/20151019/45684279_0.shtml', 2),
(95, '台媒：一些日本人如何看慰安妇问题？', '', 'no.jpg', '', 0, 'Jeffery', 1445265019, 0, 'http://news.ifeng.com/a/20151019/45674447_0.shtml', 2),
(96, '军事：俄国防空军如何吓退美国挑衅？', '', 'no.jpg', '', 0, 'Jeffery', 1445265129, 1, 'http://news.ifeng.com/a/20151016/45232021_0.shtml', 2),
(97, '宇宙终结的八个理论：宇宙周期循环', '', 'no.jpg', '', 0, '', 1445265346, 0, 'http://www.4908.cn/html/2015-10/32576.html', 4),
(98, '全球巨型动物大搜罗：湄公河巨鲶濒临灭绝', '', 'no.jpg', '', 0, '', 1445265377, 0, 'http://www.4908.cn/html/2015-10/32575.html', 4),
(99, '聪明的小鸡会数数 习惯从左到右排列数字', '', 'no.jpg', '', 0, '', 1445265416, 0, 'http://www.4908.cn/html/2015-10/32572.html', 4),
(100, '盘点十四种“可怕”动物：泰坦蟒超', '', 'no.jpg', '', 0, '', 1445265442, 0, 'http://www.4908.cn/html/2015-10/32570.html', 4),
(101, '为什么火星没能像地球一样孕育出生', '', 'no.jpg', '', 0, '', 1445265459, 0, 'http://www.4908.cn/html/2015-10/32569.html', 4),
(102, '在火星发现液态水之后，土卫二是否', '', 'no.jpg', '', 0, '', 1445265476, 0, 'http://www.4908.cn/html/2015-10/32568.html', 4),
(103, '救援人员发现这只小狗时，他们甚至', '', 'no.jpg', '', 0, '', 1445265497, 0, 'http://www.4908.cn/html/2015-10/32567.html', 4),
(104, '台湾新人请喝喜酒 20尊神像围坐两', '', 'no.jpg', '', 0, '', 1445265514, 0, 'http://www.4908.cn/html/2015-10/32566.html', 4),
(105, '南非动物园三方大战 河马帮鳄鱼杀', '', 'no.jpg', '', 0, '', 1445265534, 0, 'http://www.4908.cn/html/2015-10/32573.html', 4),
(106, '寻找世界最孤独鲸鱼 52赫兹孤独歌', '', 'no.jpg', '', 0, '', 1445265577, 0, 'http://www.4908.cn/html/2015-10/32574.html', 4),
(107, '为什么火星没能像地球一样孕育出生', '', 'no.jpg', '', 0, '', 1445265601, 0, 'http://www.4908.cn/html/2015-10/32569.html', 4),
(108, '13年前出现过 水中凭空冒出一座阴', '', 'no.jpg', '', 0, '', 1445265630, 0, 'http://www.4908.cn/html/2015-10/32500.html', 4),
(109, '火星有佛像？UFO爱好者：火星有智', '', 'no.jpg', '', 0, '', 1445265651, 0, 'http://www.4908.cn/html/2015-10/32444.html', 4),
(110, '胆小者慎入！世上真有“成精”动物', '', 'no.jpg', '', 0, '', 1445265702, 0, 'http://www.4908.cn/html/2015-10/32438.html', 4),
(111, '我国首个3D打印人工髋关节获批上市', '', 'no.jpg', '', 0, '', 1445265793, 0, 'http://www.wokeji.com/shouye/kjjh/201509/t20150925_1730315.shtml', 5),
(112, '海关：iPhone 6S入境缴10%税', '', 'no.jpg', '', 0, '', 1445265870, 0, 'http://www.wokeji.com/shouye/IT/201510/t20151010_1771120.shtml', 5),
(113, '内蒙古久泰拟切入现代煤化工业务', '', 'no.jpg', '', 0, '', 1445265892, 0, 'http://www.wokeji.com/shouye/nengyuan/201508/t20150825_1603494.shtml', 5),
(114, '《深化科技体制改革实施方案》公布', '', 'no.jpg', '', 0, '', 1445265921, 0, 'http://www.wokeji.com/special/2015/kjtzgg/', 5),
(115, '努比亚总经理：未来手机将会有颠覆性进步', '', 'no.jpg', '', 0, '', 1445265977, 0, 'http://www.wokeji.com/it/sj/201510/t20151015_1791304.shtml', 5),
(116, '国务院力推农村电商 5年投入1400亿', '', 'no.jpg', '', 0, '', 1445266012, 0, 'http://www.wokeji.com/it/ds/201510/t20151015_1788652.shtml', 5),
(117, '中国铁塔收购三大运营商 2314亿元资产', '', 'no.jpg', '', 0, '', 1445266030, 0, 'http://www.wokeji.com/it/tx/201510/t20151015_1788657.shtml', 5),
(118, '创维、乐视打口水仗：智能电视引生态之争', '', 'no.jpg', '', 0, '', 1445266083, 0, 'http://www.wokeji.com/it/znyj/201510/t20151015_1788648.shtml', 5),
(119, '滴滴快的合法化 对分享型经济影响几何？', '', 'no.jpg', '', 0, '', 1445266107, 0, 'http://www.wokeji.com/it/hlw/201510/t20151015_1791655.shtml', 5),
(120, '《琅琊榜》剖析：网络文学如何拍出正剧范', '', 'no.jpg', '', 0, '', 1445266166, 0, 'http://www.wokeji.com/it/szyl/201510/t20151015_1791665.shtml', 5),
(121, '原华大基因CEO王俊创业 碳元科技创始人', '', 'no.jpg', '', 0, '', 1445266239, 0, 'http://www.wokeji.com/it/cyh/201510/t20151015_1791333.shtml', 5),
(122, '李彦宏《开讲啦》：如何做好人生选择题', '', 'no.jpg', '', 0, '', 1445266317, 0, 'http://www.wokeji.com/it/dls/201510/t20151011_1773431.shtml', 5),
(123, '美团CEO王兴：合并就要白头偕老', '', 'no.jpg', '', 0, '', 1445266333, 0, 'http://www.wokeji.com/it/dls/201510/t20151010_1771234.shtml', 5),
(124, '马云：未来将致力于中小企业全球化', '', 'no.jpg', '', 0, '', 1445266356, 0, 'http://www.wokeji.com/it/dls/201509/t20150910_1663047.shtml', 5),
(125, '乐视超级自行车教你这么做智能硬件', '', 'no.jpg', '', 0, '', 1445266379, 0, 'http://www.wokeji.com/it/zmt/201508/t20150820_1585737.shtml', 5),
(126, '林疯狂26场比赛高清视频 尽在疯狂网！', '', 'no.jpg', '', 0, 'Jeffery', 1445266448, 0, 'http://www.linsanity.cc', 9),
(127, '中国新闻网', '', 'no.jpg', '', 0, '', 1445427105, 0, 'http://www.chinanews.com/', 10),
(128, '李克强：大学生是大众创业创新的生力军', '', 'no.jpg', '', 0, 'Jeffery', 1445427320, 1, 'http://www.chinanews.com/gn/2015/10-20/7579904.shtml', 2),
(129, '第三节28分！库里vs鹈鹕狂砍53分9助', '', 'no.jpg', '', 0, '', 1446350256, 1, 'http://v.qq.com/page/u/1/6/u0170a18q16.html#mod_player', 3),
(130, '大郅这一晃让加内特摔出场外脑袋缝了12针', '', 'no.jpg', '', 0, '', 1447849905, 1, 'http://v.qq.com/page/i/o/8/i01732a82o8.html#mod_player', 3),
(131, '96年奥运会胡卫东对阿根廷砍22分', '', 'no.jpg', '', 0, 'Jeffery', 1463977622, 1, 'http://www.56.com/u25/v_MTQxMDIzNDQ2.html#player', 1),
(132, '96年奥运会胡卫东对阿根廷砍22分', '', 'no.jpg', '', 0, 'Jeffery', 1463977700, 1, 'http://www.56.com/u25/v_MTQxMDIzNDQ2.html#player', 3),
(134, '寻求合作：', 'heacheuy@live.cn', 'no.jpg', '', 0, 'Jeffery', 1463982404, 0, 'http://www.linsanity.cc', 12);

-- --------------------------------------------------------

--
-- 表的结构 `textads`
--

CREATE TABLE IF NOT EXISTS `textads` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` char(20) NOT NULL,
  `href` char(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `textads`
--

INSERT INTO `textads` (`id`, `title`, `href`) VALUES
(1, '疯狂网正式上线啦', 'http://www.linsanity.cc'),
(2, '林疯狂高清全纪录', 'http://www.linsanity.cc');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
