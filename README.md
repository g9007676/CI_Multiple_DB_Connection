# CI_Multiple_DB_Connection
測試  CI Framework 多重 DB 連線作法

-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- 主機: localhost
-- 產生時間： 2015 年 09 月 15 日 18:09
-- 伺服器版本: 5.6.26
-- PHP 版本： 5.5.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- 資料庫： `multiple_db_A`
--
CREATE DATABASE IF NOT EXISTS `multiple_db_A` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `multiple_db_A`;

-- --------------------------------------------------------

--
-- 資料表結構 `mdt_member`
--

CREATE TABLE IF NOT EXISTS `mdt_member` (
        `mdtm_id` int(11) NOT NULL,
        `mdtm_name` varchar(255) NOT NULL,
        `mdtm_email` varchar(255) NOT NULL
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `mdt_member`
--
ALTER TABLE `mdt_member`
ADD PRIMARY KEY (`mdtm_id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `mdt_member`
--
ALTER TABLE `mdt_member`
MODIFY `mdtm_id` int(11) NOT NULL AUTO_INCREMENT;--
-- 資料庫： `multiple_db_B`
--
CREATE DATABASE IF NOT EXISTS `multiple_db_B` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `multiple_db_B`;

-- --------------------------------------------------------

--
-- 資料表結構 `mdt_member`
--

CREATE TABLE IF NOT EXISTS `mdt_member` (
        `mdtm_id` int(11) NOT NULL,
        `mdtm_name` varchar(255) NOT NULL,
        `mdtm_email` varchar(255) NOT NULL
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `mdt_member`
--
ALTER TABLE `mdt_member`
ADD PRIMARY KEY (`mdtm_id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `mdt_member`
--
ALTER TABLE `mdt_member`
MODIFY `mdtm_id` int(11) NOT NULL AUTO_INCREMENT;


## 測試 Controller

welcome/index

## Model

member.php

輸出結果:


GET A db data 
string(22) "db name :multiple_db_A"
array(1) {
    [0]=>
        array(3) {
            ["mdtm_id"]=>
            string(1) "1"
            ["mdtm_name"]=>
            string(11) "im dba name"
            ["mdtm_email"]=>
            string(12) "im dba email"
        }
}
================
GET b db data 
string(22) "db name :multiple_db_A"
array(1) {
    [0]=>
        array(3) {
            ["mdtm_id"]=>
            string(1) "1"
            ["mdtm_name"]=>
            string(11) "im dba name"
            ["mdtm_email"]=>
            string(12) "im dba email"
        }
}

================
GET ab db data 
array(2) {
    ["dba"]=>
        array(1) {
            [0]=>
                array(3) {
                    ["mdtm_id"]=>
                    string(1) "1"
                    ["mdtm_name"]=>
                    string(11) "im dba name"
                    ["mdtm_email"]=>
                    string(12) "im dba email"
                }
        }
    ["dbb"]=>
        array(1) {
            [0]=>
                array(3) {
                    ["mdtm_id"]=>
                    string(1) "1"
                    ["mdtm_name"]=>
                    string(11) "im dbb name"
                    ["mdtm_email"]=>
                    string(12) "im dbb email"
                }
        }
}
