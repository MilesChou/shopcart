SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

CREATE TABLE IF NOT EXISTS `order` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '序號',
  `datetime` datetime NOT NULL COMMENT '日期時間',
  `name` varchar(30) NOT NULL COMMENT '名稱',
  `email` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL COMMENT '電話',
  `address` varchar(100) NOT NULL COMMENT '住址',
  `data` text NOT NULL COMMENT '訂單資料',
  `total` int(11) NOT NULL DEFAULT '0',
  `sn` varchar(32) NOT NULL,
  `_checkout` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `sn` (`sn`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='訂單資料表';

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '序號',
  `category` int(11) NOT NULL COMMENT '分類',
  `title` varchar(30) NOT NULL COMMENT '標題',
  `content` text NOT NULL COMMENT '內容',
  `pic` varchar(50) DEFAULT NULL COMMENT '圖片',
  `cost` int(11) NOT NULL COMMENT '成本',
  `price` int(11) NOT NULL COMMENT '售價',
  `store` int(11) NOT NULL DEFAULT '0' COMMENT '庫存',
  `sale` int(11) NOT NULL DEFAULT '0' COMMENT '銷詹量',
  `click` int(11) NOT NULL DEFAULT '0' COMMENT '點擊次數',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='產品資料表';

CREATE TABLE IF NOT EXISTS `product_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '序號',
  `title` varchar(30) NOT NULL COMMENT '名稱',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='產品分類資料表' AUTO_INCREMENT=1 ;

INSERT INTO `product_category` (`id`, `title`) VALUES
(0, '未分類');
