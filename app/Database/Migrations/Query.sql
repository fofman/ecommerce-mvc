-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versione server:              10.4.32-MariaDB - mariadb.org binary distribution
-- S.O. server:                  Win64
-- HeidiSQL Versione:            12.5.0.6677
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dump della struttura del database ecommerce
CREATE DATABASE IF NOT EXISTS `ecommerce` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `ecommerce`;

-- Dump della struttura di tabella ecommerce.carrelli
CREATE TABLE IF NOT EXISTS `carrelli` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `quantitativo` int(10) unsigned NOT NULL,
  `id_prodotto` int(10) unsigned NOT NULL,
  `id_utente` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dump dei dati della tabella ecommerce.carrelli: ~1 rows (circa)
REPLACE INTO `carrelli` (`id`, `quantitativo`, `id_prodotto`, `id_utente`) VALUES
	(4, 1, 11, 2);

-- Dump della struttura di tabella ecommerce.categorie
CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titolo` varchar(255) NOT NULL,
  `descrizione` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dump dei dati della tabella ecommerce.categorie: ~9 rows (circa)
REPLACE INTO `categorie` (`id`, `titolo`, `descrizione`) VALUES
	(1, 'Mobili da cucina', 'Mobili per la cucina, come armadietti e cassetti'),
	(2, 'Mobili da soggiorno', 'Mobili per il soggiorno, come divani e tavoli'),
	(3, 'Mobili da camera', 'Mobili per la camera da letto, come letti e comodini'),
	(4, 'Mobili da cucina', 'Mobili per la cucina, come armadietti e cassetti'),
	(5, 'Mobili da soggiorno', 'Mobili per il soggiorno, come divani e tavoli'),
	(6, 'Mobili da camera', 'Mobili per la camera da letto, come letti e comodini'),
	(7, 'Mobili da cucina', 'Mobili per la cucina, come armadietti e cassetti'),
	(8, 'Mobili da soggiorno', 'Mobili per il soggiorno, come divani e tavoli'),
	(9, 'Mobili da camera', 'Mobili per la camera da letto, come letti e comodini');

-- Dump della struttura di tabella ecommerce.categorie_prodotti
CREATE TABLE IF NOT EXISTS `categorie_prodotti` (
  `id_prodotto` int(10) unsigned DEFAULT NULL,
  `id_categoria` int(10) unsigned DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dump dei dati della tabella ecommerce.categorie_prodotti: ~10 rows (circa)
REPLACE INTO `categorie_prodotti` (`id_prodotto`, `id_categoria`) VALUES
	(1, 1),
	(2, 1),
	(3, 2),
	(4, 3),
	(5, 2),
	(6, 2),
	(7, 3),
	(8, 3),
	(9, 2),
	(10, 3);

-- Dump della struttura di tabella ecommerce.dettagli_ordini
CREATE TABLE IF NOT EXISTS `dettagli_ordini` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_ordine` int(10) unsigned NOT NULL,
  `id_prodotto` int(10) unsigned NOT NULL,
  `prezzo` decimal(20,2) NOT NULL,
  `quantitativo` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dump dei dati della tabella ecommerce.dettagli_ordini: ~11 rows (circa)
REPLACE INTO `dettagli_ordini` (`id`, `id_ordine`, `id_prodotto`, `prezzo`, `quantitativo`) VALUES
	(9, 29, 12, 2.00, 1),
	(10, 30, 4, 699.99, 2),
	(11, 31, 12, 2.00, 1),
	(12, 32, 12, 2.00, 96),
	(13, 33, 12, 2.00, 202),
	(14, 33, 3, 799.99, 1),
	(15, 34, 12, 2.00, 500),
	(16, 35, 12, 2.00, 1),
	(17, 35, 11, 22.00, 1),
	(18, 36, 13, 999.99, 12),
	(20, 38, 11, 22.00, 1),
	(21, 39, 3, 799.99, 100000000),
	(22, 40, 13, 999.99, 4294967295);

-- Dump della struttura di tabella ecommerce.immagini
CREATE TABLE IF NOT EXISTS `immagini` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_prodotto` int(10) unsigned DEFAULT NULL,
  `nome_risorsa` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dump dei dati della tabella ecommerce.immagini: ~14 rows (circa)
REPLACE INTO `immagini` (`id`, `id_prodotto`, `nome_risorsa`) VALUES
	(1, 1, 'armadio_cucina.jpeg'),
	(2, 11, 'poggiapane.jpeg'),
	(3, 12, 'rosa.jpeg'),
	(4, 3, 'divano.jpeg'),
	(5, NULL, 'sedia_cucina.jpeg'),
	(6, 4, 'letto_matrimoniale.jpeg'),
	(7, 2, 'tavolo_cucina.jpeg'),
	(8, 7, 'scaffale_muro.jpeg'),
	(9, 6, 'sedia_ufficio.jpeg'),
	(10, 5, 'scrivania_ufficio.jpeg'),
	(11, 9, 'poltrona_reclinabile.jpeg'),
	(12, 10, 'cassettiera_camera.jpeg'),
	(13, 8, 'comodino_moderno.jpeg'),
	(14, 13, 'tostapane_barocco.jpeg');

-- Dump della struttura di tabella ecommerce.indirizzi
CREATE TABLE IF NOT EXISTS `indirizzi` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_utente` int(10) unsigned NOT NULL,
  `indirizzo` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dump dei dati della tabella ecommerce.indirizzi: ~0 rows (circa)

-- Dump della struttura di tabella ecommerce.ordini
CREATE TABLE IF NOT EXISTS `ordini` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_utente` int(10) unsigned NOT NULL,
  `costo_totale` decimal(20,2) NOT NULL DEFAULT 0.00,
  `data_ordine` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dump dei dati della tabella ecommerce.ordini: ~9 rows (circa)
REPLACE INTO `ordini` (`id`, `id_utente`, `costo_totale`, `data_ordine`) VALUES
	(29, 6, 2.00, '2024-02-27 17:12:58'),
	(30, 6, 1399.98, '2024-02-27 17:13:47'),
	(31, 1, 2.00, '2024-02-27 18:29:59'),
	(32, 13, 192.00, '2024-02-27 18:43:44'),
	(33, 13, 1203.99, '2024-02-27 18:46:04'),
	(34, 14, 1000.00, '2024-02-27 18:47:44'),
	(35, 13, 24.00, '2024-02-28 18:53:01'),
	(36, 15, 11999.88, '2024-02-28 19:08:19'),
	(38, 16, 22.00, '2024-02-29 17:37:53'),
	(39, 18, 79999000000.00, '2024-02-29 19:48:11'),
	(40, 18, 4294924345327.00, '2024-02-29 19:48:54');

-- Dump della struttura di tabella ecommerce.prodotti
CREATE TABLE IF NOT EXISTS `prodotti` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titolo` varchar(255) NOT NULL,
  `descrizione` text NOT NULL,
  `prezzo` decimal(10,2) NOT NULL,
  `data_aggiunta` datetime NOT NULL,
  `id_creatore` int(10) unsigned NOT NULL,
  `id_prodotto` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dump dei dati della tabella ecommerce.prodotti: ~10 rows (circa)
REPLACE INTO `prodotti` (`id`, `titolo`, `descrizione`, `prezzo`, `data_aggiunta`, `id_creatore`, `id_prodotto`) VALUES
	(1, 'Armadio da cucina', 'Armadio per riporre utensili da cucina', 499.99, '2024-02-15 17:00:38', 2, NULL),
	(2, 'Tavolo da pranzo', 'Tavolo in legno massiccio per la sala da pranzo', 299.99, '2024-02-15 17:00:38', 2, NULL),
	(3, 'Divano in pelle', 'Divano a tre posti in pelle nera', 799.99, '2024-02-15 17:00:38', 2, NULL),
	(4, 'Letto matrimoniale', 'Letto matrimoniale con testiera imbottita', 699.99, '2024-02-15 17:00:38', 2, NULL),
	(5, 'Scrivania per ufficio', 'Scrivania in legno per l\'ufficio', 199.99, '2024-02-15 17:00:38', 2, NULL),
	(6, 'Sedia da ufficio', 'Sedia girevole con schienale ergonomico per l\'ufficio', 129.99, '2024-02-15 17:00:38', 2, 5),
	(7, 'Scaffale a muro', 'Scaffale a muro in legno per libri e oggetti decorativi', 79.99, '2024-02-15 17:00:38', 2, NULL),
	(8, 'Comodino moderno', 'Comodino con cassetto e mensola', 49.99, '2024-02-15 17:00:38', 2, NULL),
	(9, 'Poltrona reclinabile', 'Poltrona imbottita reclinabile con poggiapiedi', 349.99, '2024-02-15 17:00:38', 2, NULL),
	(10, 'Cassettiera per camera', 'Cassettiera a tre cassetti in legno', 149.99, '2024-02-15 17:00:38', 2, NULL),
	(11, 'poggiapane', 'coso quadrato per metterci il pane', 22.00, '2024-02-16 18:54:33', 2, 1),
	(12, 'fiorellino', 'fiorellino da decoro', 2.00, '2024-02-17 20:34:33', 2, 1),
	(13, 'Tostapane Barocco', 'Tostapane alla moda', 999.99, '2024-02-28 19:59:00', 2, NULL);

-- Dump della struttura di tabella ecommerce.utenti
CREATE TABLE IF NOT EXISTS `utenti` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome_utente` varchar(40) NOT NULL,
  `pw_hash` varchar(255) NOT NULL,
  `privilegi` enum('visualizzatore','creatore') NOT NULL,
  `data_creazione` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nome_utente` (`nome_utente`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dump dei dati della tabella ecommerce.utenti: ~4 rows (circa)
REPLACE INTO `utenti` (`id`, `nome_utente`, `pw_hash`, `privilegi`, `data_creazione`) VALUES
	(6, 'Joshua', '$2y$10$YIeCSpQv.WZszDN/7MJUye9ACAYr8tswBM.4ceMLVWFnb0z3.1twi', 'visualizzatore', '2024-02-27 17:12:46'),
	(13, 'Daniel', '$2y$10$qzSpxIDT9zT701lu0CM8qeCQvaqaIVoO3VAf8G5ho/hqZ6MSLs.gK', 'visualizzatore', '2024-02-27 18:30:49'),
	(14, 'susi', '$2y$10$ZifylFs6Z21hVjW2a2bgeu8I6eBi8hTG/mXoZ2aQ7yfk6yAF4LOY2', 'visualizzatore', '2024-02-27 18:46:33'),
	(16, 'miomm', '$2y$10$1.YTpG3fOM1j2huZj64PZem9jkcWAXwFEyaZ5e74KbUe8jJL36use', 'visualizzatore', '2024-02-29 17:37:17'),
	(18, 'mamma di corbani', '$2y$10$/Ej/4PQKbNBmDxVaZfdjNuBXwBuSRRxwRjJMhp5AasX0lLwPy/eTW', 'visualizzatore', '2024-02-29 19:47:15');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
