# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.26)
# Database: gamefinder
# Generation Time: 2020-07-29 08:58:08 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table game
# ------------------------------------------------------------

DROP TABLE IF EXISTS `game`;

CREATE TABLE `game` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `release` date DEFAULT NULL,
  `link` varchar(100) DEFAULT '',
  `idshop` varchar(100) DEFAULT '',
  `platform` varchar(100) DEFAULT '',
  `idpublisher` int(11) DEFAULT NULL,
  `imglink` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `game` WRITE;
/*!40000 ALTER TABLE `game` DISABLE KEYS */;

INSERT INTO `game` (`id`, `name`, `release`, `link`, `idshop`, `platform`, `idpublisher`, `imglink`)
VALUES
	(1,'Grand Theft Auto V','2013-08-17','','1, 2, 3, 6','Pc, Ps3, Ps4, Xbox',1,'https://www.rockstargames.com/V/img/global/order/GTAV-PC.jpg'),
	(2,'Need for Speed:Most Wanted','2005-11-11','','6','Pc, Ps2, Xbox 360',4,'https://vignette.wikia.nocookie.net/nfs/images/7/76/NFSMW_Boxart.jpg/revision/latest?cb=20180921230852&path-prefix=en'),
	(3,'Dead by Daylight','2016-06-14','','1','Pc, Ps4, Xbox One',6,'https://static-cdn.jtvnw.net/ttv-boxart/Dead%20by%20Daylight.jpg'),
	(4,'Dark Souls','2011-08-22','','1','Pc',2,'https://upload.wikimedia.org/wikipedia/en/8/8d/Dark_Souls_Cover_Art.jpg'),
	(5,'Call of Duty: WWII','2017-11-03','','1, 6','Pc, Ps4',5,'https://s2.gaming-cdn.com/images/products/2056/orig/call-of-duty-world-war-ii-cover.jpg'),
	(6,'Forza Horizon 4','2018-08-28','','7','Pc, Xbox One ',7,'https://store-images.s-microsoft.com/image/apps.36093.14339303838396367.725ab8dd-f8b7-4a29-a351-45ebd5d66edd.ba2a2523-7f32-4f92-a83d-26097b7b6ca1'),
	(7,'DayZ','2013-12-16','','1','Pc, Xbox One, Ps4',8,'https://media.playstation.com/is/image/SCEA/dayz-boxart-01-ps4-us-30may2019?$native_nt$'),
	(8,'Far Cry 4','2014-11-18','','1, 4','Pc',9,'https://www.8keys.de/wp-content/uploads/2019/06/fc4-600x850.jpg'),
	(9,'Far Cry 5','2018-03-27','','1, 4','Pc',9,'https://s2.gaming-cdn.com/images/products/2680/orig/far-cry-5-gold-edition-cover.jpg'),
	(10,'Red Dead Redemption 2','2018-10-26','','1, 3','Pc, Xbox One, Ps4',1,'https://cdn-products.eneba.com/resized-products/6M1qP76B-j6vdX0T4bFCHgJeX99MaKBpXFxbpif1MqY_390x400_1x-0.jpeg'),
	(11,'A Way Out','2018-03-23','','5','Pc, Xbox One, Ps4',4,'https://media.contentapi.ea.com/content/dam/eacom/a-way-out/common/a-way-out-origin-packart.jpg'),
	(12,'The Forest','2014-05-30','','1','Pc, Ps4',10,'https://skyy-arena.ru/novosibirsk/wp-content/uploads/sites/2/2019/11/The-Forest-VR.jpg'),
	(13,'Call of Cthulhu','2018-10-30','','1','Pc, Xbox One, Ps4, Nintendo Switch',11,'https://store-images.s-microsoft.com/image/apps.28597.68843572048501388.669471cb-d7a3-4829-8dd3-971e31f52503.a726cd37-4249-45da-857b-1b3faaa3e1f3'),
	(14,'Outlast','2013-09-04','','1','Pc, Xbox One, Ps4, Nintendo Switch',12,'https://redbarrelsgames.com/wp-content/uploads/2015/09/Outlast-Header-MOB.jpg'),
	(15,'Outlast 2','2017-04-24','','1','Pc, Xbox One, Ps4, Nintendo Switch',12,'https://store-images.s-microsoft.com/image/apps.53880.64478484299016632.acc161ee-ac6b-492b-bd5e-6aca1d3ce791.1ffcf012-8978-4b7b-b54f-81bcbfd1e130'),
	(16,'The Beast Inside','2019-10-17','','1','Pc',13,'https://static-cdn.jtvnw.net/ttv-boxart/The%20Beast%20Inside.jpg'),
	(17,'No Man\'s Sky','2016-08-09','','1','Pc, Xbox One, Ps4',14,'https://static-cdn.jtvnw.net/ttv-boxart/No%20Man%27s%20Sky.jpg'),
	(18,'Tom Clancy\'s Ghost Recon Wildlands','2017-03-07','','1, 4','Pc',9,'https://store-images.s-microsoft.com/image/apps.13792.71719118886062043.670855eb-a33f-4d36-8981-56ebd9a05985.1af48f1f-e3ab-47e6-9511-4e7e1c490962');

/*!40000 ALTER TABLE `game` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table publisher
# ------------------------------------------------------------

DROP TABLE IF EXISTS `publisher`;

CREATE TABLE `publisher` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `publisher` WRITE;
/*!40000 ALTER TABLE `publisher` DISABLE KEYS */;

INSERT INTO `publisher` (`id`, `name`)
VALUES
	(1,'Rockstar Games'),
	(2,'FromSoftware'),
	(3,'Nintendo'),
	(4,'Electronic Arts'),
	(5,'Raven Software'),
	(6,'Behaviour Interactive'),
	(7,'Playground Games'),
	(8,'Bohemia Interactive'),
	(9,'Ubisoft'),
	(10,'Endnight Games'),
	(11,'Cyanide'),
	(12,'Red Barrels'),
	(13,'Movie Games'),
	(14,'Hello Games');

/*!40000 ALTER TABLE `publisher` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table shops
# ------------------------------------------------------------

DROP TABLE IF EXISTS `shops`;

CREATE TABLE `shops` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `shops` WRITE;
/*!40000 ALTER TABLE `shops` DISABLE KEYS */;

INSERT INTO `shops` (`id`, `name`)
VALUES
	(1,'Steam'),
	(2,'Epic Games'),
	(3,'Rockstar Games Launcher'),
	(4,'Uplay'),
	(5,'Origin'),
	(6,'Laden'),
	(7,'Microsoft Store');

/*!40000 ALTER TABLE `shops` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
