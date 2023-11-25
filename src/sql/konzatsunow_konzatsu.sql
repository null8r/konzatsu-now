-- phpMyAdmin SQL Dump
-- version 5.2.1-1.el7.remi
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 20XX 年 XX 月 XX 日 HH:MM
-- サーバのバージョン： 10.5.22-MariaDB-log
-- PHP のバージョン: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `konzatsunow_konzatsu`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `konzatsu`
--

CREATE TABLE `konzatsu` (
  `id` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `info` varchar(20) NOT NULL,
  `color` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `konzatsu`
--

INSERT INTO `konzatsu` (`id`, `status`, `info`, `color`) VALUES
(1, '😴準備中', 'まだ販売を開始していません。', '#808080'),
(2, '😄空いている', 'みんな買いに来て！！', '#00d000'),
(3, '😧ちょい混み', 'そこそこ並んでいます！！', '#fff000'),
(4, '😵げき混み', '提供に時間が掛かっています。', '#ff0088'),
(5, '😫完売', '買ってくれてありがとう！！', '#ff0000'),
(6, '🥺一時販売停止', '在庫がない、、、', '#8a2be2'),
(7, '🧋タピオカのみ', 'ミルクティー無くなりました、、、', '#deb887');

-- --------------------------------------------------------

--
-- テーブルの構造 `status_id`
--

CREATE TABLE `status_id` (
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- テーブルのデータのダンプ `status_id`
--

INSERT INTO `status_id` (`status`) VALUES
(5);

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `konzatsu`
--
ALTER TABLE `konzatsu`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `konzatsu`
--
ALTER TABLE `konzatsu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
