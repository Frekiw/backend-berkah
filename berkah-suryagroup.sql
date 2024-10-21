-- Adminer 4.8.1 MySQL 8.0.30 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE `contacts` (
  `id_contact` bigint unsigned NOT NULL AUTO_INCREMENT,
  `whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gmail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gmaps` text COLLATE utf8mb4_unicode_ci,
  `qr_code` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_contact`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `contacts` (`id_contact`, `whatsapp`, `facebook`, `instagram`, `twitter`, `gmail`, `gmaps`, `qr_code`, `created_at`, `updated_at`) VALUES
(1,	'0877 2321 3212 das 13',	'JKJKJFacebook dsadas',	'JKJKInstagramdas',	'KBKMMNMTwitter X nkn',	'MNMMjknnknkkGmail',	'JOOJO\r\nknkkn\r\ngmaps',	'assets/QrCode/vmYXgXEUoyC7Tr7froKUc73hh3IVP74ofgn6BMrw.png',	'2024-10-12 09:23:24',	'2024-10-15 20:31:09');

DROP TABLE IF EXISTS `electrics`;
CREATE TABLE `electrics` (
  `id_electric` bigint unsigned NOT NULL AUTO_INCREMENT,
  `text1` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `text2` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_electric`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `electrics` (`id_electric`, `text1`, `text2`, `created_at`, `updated_at`) VALUES
(1,	'orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',	'orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',	'2024-10-11 02:16:19',	'2024-10-15 20:40:41');

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `homepages`;
CREATE TABLE `homepages` (
  `id_homepage` bigint unsigned NOT NULL AUTO_INCREMENT,
  `text1` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `text2` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `text3` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `text4` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `text5` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `text6` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_homepage`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `homepages` (`id_homepage`, `text1`, `text2`, `text3`, `text4`, `text5`, `text6`, `created_at`, `updated_at`) VALUES
(1,	'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',	'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',	'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',	'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',	'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',	'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',	'2024-10-12 09:40:30',	'2024-10-15 20:42:20');

DROP TABLE IF EXISTS `konsultasis`;
CREATE TABLE `konsultasis` (
  `id_konsultasi` int unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `no_telp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `isi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_konsultasi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


DROP TABLE IF EXISTS `maintenances`;
CREATE TABLE `maintenances` (
  `id_maintenance` bigint unsigned NOT NULL AUTO_INCREMENT,
  `text1` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `text2` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_maintenance`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `maintenances` (`id_maintenance`, `text1`, `text2`, `created_at`, `updated_at`) VALUES
(1,	'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',	'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',	'2024-10-11 02:13:44',	'2024-10-15 20:43:25');

DROP TABLE IF EXISTS `mechanics`;
CREATE TABLE `mechanics` (
  `id_mechanic` bigint unsigned NOT NULL AUTO_INCREMENT,
  `text1` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `text2` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `text3` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_mechanic`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `mechanics` (`id_mechanic`, `text1`, `text2`, `text3`, `created_at`, `updated_at`) VALUES
(1,	'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',	'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',	'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',	'2024-10-11 01:06:53',	'2024-10-15 20:44:17');

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1,	'2014_10_12_000000_create_users_table',	1),
(2,	'2014_10_12_100000_create_password_reset_tokens_table',	1),
(3,	'2014_10_12_200000_add_two_factor_columns_to_users_table',	1),
(4,	'2019_08_19_000000_create_failed_jobs_table',	1),
(5,	'2019_12_14_000001_create_personal_access_tokens_table',	1),
(6,	'2020_05_21_100000_create_teams_table',	1),
(7,	'2020_05_21_200000_create_team_user_table',	1),
(8,	'2020_05_21_300000_create_team_invitations_table',	1),
(9,	'2024_10_09_095630_create_sessions_table',	1),
(10,	'2024_10_10_135843_create_homepages_table',	1),
(11,	'2024_10_10_135850_create_spaces_table',	1),
(12,	'2024_10_10_135923_create_maintenances_table',	2),
(13,	'2024_10_10_135914_create_profiles_table',	3),
(14,	'2024_10_10_135928_create_electrics_table',	3),
(15,	'2024_10_10_135936_create_residentals_table',	3),
(16,	'2024_10_10_135953_create_mechanics_table',	3),
(17,	'2024_10_10_140001_create_contacts_table',	3),
(18,	'2024_10_10_140027_create_modal__spaces_table',	3),
(19,	'2024_10_10_140040_create_modal_profiles_table',	3),
(20,	'2024_10_10_140055_create_modal_maintenances_table',	4),
(21,	'2024_10_10_140107_create_modal_electrics_table',	4),
(22,	'2024_10_10_140119_create_modal_residentals_table',	4),
(23,	'2024_10_10_140134_create_modal_mechanics_table',	4),
(24,	'2024_10_10_141043_create_modal_articles_table',	4);

DROP TABLE IF EXISTS `modal__spaces`;
CREATE TABLE `modal__spaces` (
  `id_modalspace` bigint unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picture` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_modalspace`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `modal_articles`;
CREATE TABLE `modal_articles` (
  `id_modalarticle` bigint unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `isi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `picture` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_modalarticle`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `modal_articles` (`id_modalarticle`, `judul`, `isi`, `picture`, `created_at`, `updated_at`) VALUES
(2,	'Hanoi, Vietnam',	'Lorem Ipsum is simply dummy text of the printing and typesetting industry',	'assets/ModalArticle/28HP1E0ds6Wppb6UStS4L4flAF1uaPz5K8w5NRzw.jpg',	'2024-10-16 01:08:53',	'2024-10-16 01:08:53'),
(3,	'Tokyo, Japan',	'Lorem Ipsum is simply dummy text of the printing and typesetting industry',	'assets/ModalArticle/jKAgMw9v9Uzdhk0wqn8MH05LLVszWcmsQbHMnzGZ.jpg',	'2024-10-16 01:10:03',	'2024-10-16 01:44:20'),
(4,	'Shanghai, China',	'Cina, sebagai salah satu negara dengan perekonomian terbesar di dunia.',	'assets/ModalArticle/K0RqVcWnrWZR2ACBHV8Jj3DaVLE5MHisLHwSb7nW.png',	'2024-10-16 01:11:30',	'2024-10-16 01:11:30'),
(5,	'California, America',	'Terletak di pesisir barat AS, California menjadi pusat industri teknologi dunia dengan Silicon Valley sebagai rumah bagi raksasa teknologi',	'assets/ModalArticle/9YS0Pz3s3B49m0TjldD7t5j3UEHLSJ2ZiQQOMDrR.png',	'2024-10-16 01:22:26',	'2024-10-16 01:22:26');

DROP TABLE IF EXISTS `modal_electrics`;
CREATE TABLE `modal_electrics` (
  `id_modalelectric` bigint unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picture` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_modalelectric`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `modal_electrics` (`id_modalelectric`, `judul`, `isi`, `picture`, `created_at`, `updated_at`) VALUES
(2,	'Electric 1',	'Listrik adalah salah satu penemuan paling revolusioner yang telah mengubah dunia, menggerakkan setiap aspek kehidupan modern. Dari pencahayaan hingga teknologi, listrik menjadi sumber energi utama yang mendukung inovasi dan kenyamanan.',	'assets/Modalelectric/jyDzQaWY8oQrn4b2CIbIxpdYcemvXg3YHSpNjBAg.png',	'2024-10-16 02:05:22',	'2024-10-16 02:05:22'),
(3,	'Electric 2',	'Listrik adalah salah satu penemuan paling revolusioner yang telah mengubah dunia, menggerakkan setiap aspek kehidupan modern. Dari pencahayaan hingga teknologi, listrik menjadi sumber energi utama yang mendukung inovasi dan kenyamanan.',	'assets/Modalelectric/CF7pdLCE1hlW4XjYlMKpFxlzEu7uzzqxYlnCtQKN.jpg',	'2024-10-16 02:08:59',	'2024-10-16 02:08:59'),
(4,	'Electric 3',	'Listrik adalah salah satu penemuan paling revolusioner yang telah mengubah dunia, menggerakkan setiap aspek kehidupan modern. Dari pencahayaan hingga teknologi, listrik menjadi sumber energi utama yang mendukung inovasi dan kenyamanan.',	'assets/Modalelectric/wupEMQ4rzTkklKhVYR7m85s6RJGOqNucgJQDBeQH.jpg',	'2024-10-16 02:10:30',	'2024-10-16 02:10:30'),
(5,	'Electric 4',	'Listrik adalah salah satu penemuan paling revolusioner yang telah mengubah dunia, menggerakkan setiap aspek kehidupan modern. Dari pencahayaan hingga teknologi, listrik menjadi sumber energi utama yang mendukung inovasi dan kenyamanan.',	'assets/Modalelectric/ntzxZrR1bPnoRaZm4DC1XxD72ZBoJPCrOZmP8048.jpg',	'2024-10-16 02:38:54',	'2024-10-16 02:38:54');

DROP TABLE IF EXISTS `modal_maintenances`;
CREATE TABLE `modal_maintenances` (
  `id_modalmaintenance` bigint unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picture` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_modalmaintenance`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `modal_mechanics`;
CREATE TABLE `modal_mechanics` (
  `id_modalmechanic` bigint unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picture` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_modalmechanic`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `modal_portofolios`;
CREATE TABLE `modal_portofolios` (
  `id_modalportofolio` int unsigned NOT NULL AUTO_INCREMENT,
  `judul` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `isi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `picture` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_modalportofolio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `modal_portofolios` (`id_modalportofolio`, `judul`, `isi`, `picture`, `created_at`, `updated_at`) VALUES
(1,	'Portofolio 1',	'Listrik adalah salah satu penemuan paling revolusioner yang telah mengubah dunia, menggerakkan setiap aspek kehidupan modern. Dari pencahayaan hingga teknologi, listrik menjadi sumber energi utama yang mendukung inovasi dan kenyamanan.',	'assets/ModalPortofolio/z51elpXh5nHuFuchJgU7aErEkeJvgf9apbPFr2l0.jpg',	'2024-10-16 23:04:07',	'2024-10-16 23:04:07'),
(2,	'Portofolio 2',	'Mengutamakan keselamatan dan efisiensi energi dalam setiap pekerjaan, serta memastikan semua sistem mematuhi standar keamanan dan regulasi yang berlaku. Ahli dalam mendiagnosis dan memperbaiki gangguan listrik secara cepat dan akurat',	'assets/ModalPortofolio/0ZMF0HoBCm5HSLcXOMYZEQohV4YWRAManFg1hloQ.jpg',	'2024-10-17 06:15:35',	'2024-10-16 23:15:35'),
(3,	'Portofolio 3',	'Berpengalaman dalam perencanaan dan pengelolaan proyek perumahan yang mencakup pembangunan hunian yang efisien dan ramah lingkungan.',	'assets/ModalPortofolio/cMVIUZLZclswaEoUhXrBkg5VaPrCWHLOZCk9szoV.png',	'2024-10-16 23:12:02',	'2024-10-16 23:12:02'),
(4,	'Portofolio 4',	'Mengutamakan desain yang fungsional dengan perhatian khusus pada kenyamanan dan keamanan penghuni.',	'assets/ModalPortofolio/XDloLUgLR6cTcOljNgVkaFD05iH1Nwv1mGRHIPch.png',	'2024-10-16 23:12:39',	'2024-10-16 23:12:39'),
(5,	'Portofolio 5',	'Menggunakan material berkualitas tinggi dan memastikan setiap proyek selesai sesuai dengan standar industri serta tepat waktu',	'assets/ModalPortofolio/xUDboAMVwEM7CKWEntjbczXmwx76LYcJPWqZNuOg.png',	'2024-10-16 23:13:32',	'2024-10-16 23:13:32'),
(6,	'Portofolio 6',	'Memiliki keahlian dalam perawatan, perbaikan, dan instalasi sistem mekanik yang kompleks. Berpengalaman dalam menangani berbagai jenis mesin industri dan otomotif,',	'assets/ModalPortofolio/47ZssExhypOl64uxop7y1YHxMvtposqCisaECJqs.png',	'2024-10-16 23:14:07',	'2024-10-16 23:14:07'),
(7,	'Portofolio 7',	'dengan fokus pada pemecahan masalah teknis yang efisien dan tepat. Terampil dalam membaca diagram teknis, melakukan uji coba, serta memastikan sistem beroperasi dengan optimal',	'assets/ModalPortofolio/NssUxIByoTRQfmGi7HIULLu6rbPUbwl0VqvUC8VP.png',	'2024-10-16 23:14:40',	'2024-10-16 23:14:40'),
(8,	'Portofolio 8',	'Profesional di bidang kelistrikan dengan pengalaman dalam instalasi, perawatan, dan perbaikan sistem kelistrikan untuk proyek komersial, perumahan, dan industri.',	'assets/ModalPortofolio/ySk3agzyZzoP8wfgpz6UUBFdoZFBuvcbYzpXaJr8.jpg',	'2024-10-16 23:15:14',	'2024-10-16 23:15:14');

DROP TABLE IF EXISTS `modal_profiles`;
CREATE TABLE `modal_profiles` (
  `id_modalprofile` bigint unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picture` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_modalprofile`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `modal_residentals`;
CREATE TABLE `modal_residentals` (
  `id_modalresidental` bigint unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picture` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_modalresidental`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `profiles`;
CREATE TABLE `profiles` (
  `id_profile` bigint unsigned NOT NULL AUTO_INCREMENT,
  `text1` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `text2` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_profile`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `profiles` (`id_profile`, `text1`, `text2`, `created_at`, `updated_at`) VALUES
(1,	'Lorem Ipsum is simply dummy profile of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',	'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',	'2024-10-12 10:25:58',	'2024-10-16 22:22:57');

DROP TABLE IF EXISTS `residentals`;
CREATE TABLE `residentals` (
  `id_residental` bigint unsigned NOT NULL AUTO_INCREMENT,
  `text1` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `text2` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_residental`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `residentals` (`id_residental`, `text1`, `text2`, `created_at`, `updated_at`) VALUES
(1,	'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',	'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',	'2024-10-11 00:30:02',	'2024-10-15 20:46:56');

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('sOIAV87NPyesWfbwWKVD3urf2A5bA7PpIoxldWOq',	NULL,	'127.0.0.1',	'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36',	'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVlBCUnBzd21OTllzS2pTTGpyYjZXRjB1c040R1FSN0lQU3VtMUhnNiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly9iZXJrYWgtc3VyeWFncm91cC50ZXN0L2NzcyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',	1729483555);

DROP TABLE IF EXISTS `spaces`;
CREATE TABLE `spaces` (
  `id_space` bigint unsigned NOT NULL AUTO_INCREMENT,
  `text1` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `text2` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_space`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `spaces` (`id_space`, `text1`, `text2`, `created_at`, `updated_at`) VALUES
(1,	'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',	'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',	'2024-10-11 00:42:55',	'2024-10-15 20:47:27');

DROP TABLE IF EXISTS `team_invitations`;
CREATE TABLE `team_invitations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `team_id` bigint unsigned NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `team_invitations_team_id_email_unique` (`team_id`,`email`),
  CONSTRAINT `team_invitations_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `team_user`;
CREATE TABLE `team_user` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `team_id` bigint unsigned NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `team_user_team_id_user_id_unique` (`team_id`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `teams`;
CREATE TABLE `teams` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_team` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `teams_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `teams` (`id`, `user_id`, `name`, `personal_team`, `created_at`, `updated_at`) VALUES
(1,	1,	'Super\'s Team',	1,	'2024-10-10 07:47:29',	'2024-10-10 07:47:29');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint unsigned DEFAULT NULL,
  `roles` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT 'SUPER ADMIN',
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `roles`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1,	'Super Admin',	'berkahsuryagroup@gmail.com',	NULL,	'$2y$12$xEgCX2we.1BRvqAdU0Lv/e4hgbxOMUDVXUIqFhckQqCfEuhwDUkCC',	NULL,	NULL,	NULL,	NULL,	1,	'SUPER ADMIN',	NULL,	'2024-10-10 07:47:29',	'2024-10-10 07:47:34');

-- 2024-10-21 04:09:29
