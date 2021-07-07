-- --------------------------------------------------------
-- Hôte :                        localhost
-- Version du serveur:           5.7.24 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             9.5.0.5332
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Listage de la structure de la vue fastmoney. bilan_gains
-- Création d'une table temporaire pour palier aux erreurs de dépendances de VIEW
CREATE TABLE `bilan_gains` (
	`id_user` BIGINT(20) UNSIGNED NOT NULL,
	`solde` DOUBLE NULL,
	`id_depot` BIGINT(20) UNSIGNED NOT NULL,
	`pourcentage` DOUBLE NOT NULL,
	`montant_depot` DOUBLE NOT NULL,
	`statut` BIGINT(20) UNSIGNED NOT NULL,
	`dernier_paye` TIMESTAMP NULL,
	`montant_gain` DOUBLE NULL,
	`type` BIGINT(20) UNSIGNED NOT NULL,
	`date_gain` TIMESTAMP NULL,
	`pourcentage_atteint` DOUBLE NULL
) ENGINE=MyISAM;

-- Listage de la structure de la table fastmoney. depots
CREATE TABLE IF NOT EXISTS `depots` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_user` bigint(20) unsigned NOT NULL,
  `montant` double NOT NULL,
  `pourcentage` double NOT NULL,
  `statut` bigint(20) unsigned NOT NULL DEFAULT '0',
  `dernier_paye` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `depots_id_user_foreign` (`id_user`),
  CONSTRAINT `depots_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table fastmoney.depots : ~2 rows (environ)
/*!40000 ALTER TABLE `depots` DISABLE KEYS */;
/*!40000 ALTER TABLE `depots` ENABLE KEYS */;

-- Listage de la structure de la table fastmoney. failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table fastmoney.failed_jobs : ~0 rows (environ)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Listage de la structure de la table fastmoney. gains
CREATE TABLE IF NOT EXISTS `gains` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_user` bigint(20) unsigned NOT NULL,
  `montant` double NOT NULL,
  `id_depot` bigint(20) unsigned NOT NULL,
  `type` bigint(20) unsigned NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `gains_id_user_foreign` (`id_user`),
  KEY `gains_id_offre_foreign` (`id_depot`),
  CONSTRAINT `gains_id_offre_foreign` FOREIGN KEY (`id_depot`) REFERENCES `depots` (`id`) ON DELETE CASCADE,
  CONSTRAINT `gains_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table fastmoney.gains : ~0 rows (environ)
/*!40000 ALTER TABLE `gains` DISABLE KEYS */;
/*!40000 ALTER TABLE `gains` ENABLE KEYS */;

-- Listage de la structure de la table fastmoney. invoices
CREATE TABLE IF NOT EXISTS `invoices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(256) NOT NULL,
  `address` text NOT NULL,
  `price` double NOT NULL,
  `status` int(11) NOT NULL,
  `offre` int(11) NOT NULL,
  `ip` varchar(256) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Listage des données de la table fastmoney.invoices : ~0 rows (environ)
/*!40000 ALTER TABLE `invoices` DISABLE KEYS */;
/*!40000 ALTER TABLE `invoices` ENABLE KEYS */;

-- Listage de la structure de la table fastmoney. migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table fastmoney.migrations : ~12 rows (environ)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(25, '2014_10_12_000000_create_users_table', 1),
	(26, '2014_10_12_100000_create_password_resets_table', 1),
	(27, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
	(28, '2019_08_19_000000_create_failed_jobs_table', 1),
	(29, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(30, '2021_04_05_072811_create_sessions_table', 1),
	(31, '2021_04_15_141941_create_parrainages_table', 1),
	(32, '2021_04_15_143843_create_offres_table', 1),
	(33, '2021_04_15_143909_create_depots_table', 1),
	(34, '2021_04_15_143937_create_gains_table', 1),
	(35, '2021_04_15_144236_create_retraits_table', 1),
	(36, '2021_04_15_145000_create_parametres_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Listage de la structure de la table fastmoney. offres
CREATE TABLE IF NOT EXISTS `offres` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `montant` double NOT NULL,
  `pourcentage` double NOT NULL,
  `statut` bigint(20) unsigned NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table fastmoney.offres : ~6 rows (environ)
/*!40000 ALTER TABLE `offres` DISABLE KEYS */;
INSERT INTO `offres` (`id`, `montant`, `pourcentage`, `statut`, `created_at`, `updated_at`) VALUES
	(1, 30, 2.5, 1, NULL, NULL),
	(2, 50, 2.5, 1, NULL, NULL),
	(3, 100, 2.5, 1, NULL, NULL),
	(4, 500, 3, 1, NULL, NULL),
	(5, 1000, 3, 1, NULL, NULL),
	(6, 2000, 3.5, 1, NULL, NULL);
/*!40000 ALTER TABLE `offres` ENABLE KEYS */;

-- Listage de la structure de la table fastmoney. orders
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `invoice` varchar(256) NOT NULL,
  `ip` varchar(256) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Listage des données de la table fastmoney.orders : ~0 rows (environ)
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;

-- Listage de la structure de la table fastmoney. parametres
CREATE TABLE IF NOT EXISTS `parametres` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `double_value` double DEFAULT NULL,
  `int_value` int(11) DEFAULT NULL,
  `string_value` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `parametres_code_unique` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table fastmoney.parametres : ~0 rows (environ)
/*!40000 ALTER TABLE `parametres` DISABLE KEYS */;
INSERT INTO `parametres` (`id`, `code`, `designation`, `double_value`, `int_value`, `string_value`, `created_at`, `updated_at`) VALUES
	(1, 'gain_parrain', 'Cote de parrainage', 3, NULL, NULL, '2021-04-24 00:53:19', '2021-04-24 00:53:21'),
	(2, 'limite_gain', 'Pourcentage Limite Gain', 300, NULL, NULL, '2021-04-24 22:35:28', '2021-04-24 22:35:31');
/*!40000 ALTER TABLE `parametres` ENABLE KEYS */;

-- Listage de la structure de la table fastmoney. parrainages
CREATE TABLE IF NOT EXISTS `parrainages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_user_parrain` bigint(20) unsigned NOT NULL,
  `id_user_filleul` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `parrainages_id_user_parrain_foreign` (`id_user_parrain`),
  KEY `parrainages_id_user_filleul_foreign` (`id_user_filleul`),
  CONSTRAINT `parrainages_id_user_filleul_foreign` FOREIGN KEY (`id_user_filleul`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `parrainages_id_user_parrain_foreign` FOREIGN KEY (`id_user_parrain`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table fastmoney.parrainages : ~1 rows (environ)
/*!40000 ALTER TABLE `parrainages` DISABLE KEYS */;
/*!40000 ALTER TABLE `parrainages` ENABLE KEYS */;

-- Listage de la structure de la table fastmoney. password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table fastmoney.password_resets : ~1 rows (environ)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
	('admin@gmail.com', '$2y$10$RhCHLPFUxnFRTmjYI5m0ueTjS.EwWqyuGAL0Gwxpie3rcqPlcftY.', '2021-04-17 18:24:53');
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Listage de la structure de la table fastmoney. payments
CREATE TABLE IF NOT EXISTS `payments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `txid` text NOT NULL,
  `addr` varchar(256) NOT NULL,
  `value` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Listage des données de la table fastmoney.payments : ~0 rows (environ)
/*!40000 ALTER TABLE `payments` DISABLE KEYS */;
/*!40000 ALTER TABLE `payments` ENABLE KEYS */;

-- Listage de la structure de la table fastmoney. personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table fastmoney.personal_access_tokens : ~0 rows (environ)
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Listage de la structure de la table fastmoney. products
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `description` longtext NOT NULL,
  `price` float(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Listage des données de la table fastmoney.products : ~0 rows (environ)
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

-- Listage de la structure de la table fastmoney. retraits
CREATE TABLE IF NOT EXISTS `retraits` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_user` bigint(20) unsigned NOT NULL,
  `montant` double NOT NULL,
  `txs_id` text COLLATE utf8mb4_unicode_ci,
  `txs` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `retraits_id_user_foreign` (`id_user`),
  CONSTRAINT `retraits_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table fastmoney.retraits : ~0 rows (environ)
/*!40000 ALTER TABLE `retraits` DISABLE KEYS */;
/*!40000 ALTER TABLE `retraits` ENABLE KEYS */;

-- Listage de la structure de la table fastmoney. sessions
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table fastmoney.sessions : ~2 rows (environ)
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
	('UwlBxbBSzPGSdyUm23l3Px0Xgx1EqNdsAZ6BAZyb', 16, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36 Edg/90.0.818.62', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiUHJBTTc0RzhicVY4Tlo3dFVPcHUzVEpoQzRPTHJHaXhXN2ZLN01xTSI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozMjoiaHR0cDovL2xvY2FsaG9zdDo4MDAwL2NoZWNrL3Rvb3QiO31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyOToiaHR0cDovL2xvY2FsaG9zdDo4MDAwL3JldHJhaXQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxNjtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJHlGTHdPa1N2bC80ZDdwVS5DL0hnck9aMlE2YU9Rd2l5cTdHd3N3RTFXelk0cG9rVkhWUkVTIjtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCR5Rkx3T2tTdmwvNGQ3cFUuQy9IZ3JPWjJRNmFPUXdpeXE3R3dzd0UxV3pZNHBva1ZIVlJFUyI7fQ==', 1621316871),
	('zdxW0n95XKb8MSJjivR497AGNsiBBK3kJCWoGtPC', 16, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36 Edg/90.0.818.62', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoidDZ1V2IzblRLSG40bVhOQ0NYQzRRNWJlWHBUMWlSNGpCaDlhdWlCNyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9vZmZyZSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE2O3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkeUZMd09rU3ZsLzRkN3BVLkMvSGdyT1oyUTZhT1F3aXlxN0d3c3dFMVd6WTRwb2tWSFZSRVMiO30=', 1621308404);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;

-- Listage de la structure de la table fastmoney. users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) unsigned DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `solde` double DEFAULT NULL,
  `links` text COLLATE utf8mb4_unicode_ci,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referent` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pays` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `portefeuille` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `statut` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table fastmoney.users : ~0 rows (environ)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`, `solde`, `links`, `username`, `referent`, `pays`, `tel`, `portefeuille`, `statut`) VALUES
	(16, 'Admin System', 'admin@gmail.com', NULL, '$2y$10$yFLwOkSvl/4d7pU.C/HgrOZ2Q6aOQwiyq7GwswE1WzY4pokVHVRES', NULL, NULL, NULL, NULL, NULL, '2021-04-24 21:34:27', '2021-05-17 05:21:00', 0, 'http://127.0.0.1:8000/parrain/crypto', 'crypto', NULL, 'BJ', '0546464213', 'D9pgas5tFpJqKiqdaTe12qTVUs1RfJ4kFN', '1');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Listage de la structure de déclencheur fastmoney. depots_after_insert
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER `depots_after_insert` AFTER INSERT ON `depots` FOR EACH ROW BEGIN
	IF (SELECT PARRAINAGES.id_user_parrain FROM PARRAINAGES where PARRAINAGES.id_user_filleul = NEW.id_user) > 0 THEN
	INSERT INTO GAINS(type,id_user,id_depot, montant) VALUES(0,(SELECT PARRAINAGES.id_user_parrain FROM PARRAINAGES where PARRAINAGES.id_user_filleul = NEW.id_user),NEW.id,(NEW.montant*(SELECT PARAMETRES.double_value FROM PARAMETRES WHERE PARAMETRES.code = "gain_parrain")/100));

   END IF;
   
		
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Listage de la structure de déclencheur fastmoney. gains_after_insert
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER `gains_after_insert` AFTER INSERT ON `gains` FOR EACH ROW BEGIN
	UPDATE USERS SET USERS.SOLDE = USERS.SOLDE + NEW.montant  WHERE USERS.ID = NEW.id_user;
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Listage de la structure de déclencheur fastmoney. retraits_after_insert
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER `retraits_after_insert` AFTER INSERT ON `retraits` FOR EACH ROW BEGIN
	UPDATE USERS SET USERS.SOLDE = USERS.SOLDE - NEW.montant  WHERE USERS.ID = NEW.id_user;
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Listage de la structure de la vue fastmoney. bilan_gains
-- Suppression de la table temporaire et création finale de la structure d'une vue
DROP TABLE IF EXISTS `bilan_gains`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `bilan_gains` AS SELECT 
	USERS.id AS id_user,USERS.solde,
	DEPOTS.id AS id_depot, DEPOTS.pourcentage, DEPOTS.montant AS montant_depot, DEPOTS.statut ,DEPOTS.dernier_paye,
	SUM(GAINS.montant) AS montant_gain, GAINS.type, GAINS.created_at AS date_gain, (100*SUM(GAINS.montant)/DEPOTS.montant) AS pourcentage_atteint
FROM DEPOTS, GAINS, USERS

WHERE DEPOTS.id = GAINS.id_depot
AND DEPOTS.id_user = USERS.id 
AND  GAINS.type = 1

GROUP BY USERS.id, USERS.solde,
			DEPOTS.id, DEPOTS.pourcentage, DEPOTS.montant,DEPOTS.statut,DEPOTS.statut,DEPOTS.dernier_paye,
         GAINS.type ;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
