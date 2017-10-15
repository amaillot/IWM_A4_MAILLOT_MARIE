-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:8889
-- Généré le :  Dim 15 Octobre 2017 à 16:39
-- Version du serveur :  5.5.42
-- Version de PHP :  7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `LaravelInit`
--

-- --------------------------------------------------------

--
-- Structure de la table `items`
--

CREATE TABLE `items` (
  `id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `Nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Prix` int(11) NOT NULL,
  `Image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Filtre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `items`
--

INSERT INTO `items` (`id`, `created_at`, `updated_at`, `Nom`, `Description`, `Prix`, `Image`, `Filtre`) VALUES
(1, '2017-10-12 12:20:46', '2017-10-12 12:20:46', 'Sushi', 'Sushi menthe + avocat ( 2 pièces )', 3, 'http://www.restaurant-sushikai.fr/media/wysiwyg/sushi8.jpg', 'Plat'),
(2, '2017-10-12 12:54:20', '2017-10-12 12:54:20', 'Riz rouge', 'Le riz rouge est une variété de riz complet qui possède beaucoup de propriétés nutritives. Il nous aide à faire baisser notre taux de cholestérol, les triglycérides, et à perdre du poids sans faire de grands sacrifices.', 8, 'https://amelioretasante.com/wp-content/uploads/2015/01/Riz-rouge-500x281.jpg', 'Entree'),
(3, '2017-10-13 08:11:49', '2017-10-13 08:11:49', 'Coca Cola', 'Coca ou Cola est une boisson gazeuse sucrée (soda) de type cola fabriquée par Coca-Cola Company. ', 3, 'https://www.thesun.co.uk/wp-content/uploads/2017/03/nintchdbpict000277254629.jpg?strip=all&w=676', 'Boisson'),
(4, '2017-10-15 12:30:53', '2017-10-15 12:30:53', 'Crème Brulée', 'La crème brûlée ou crème brulée ou crème caramélisée est un dessert composé de jaune d''œufs, de sucre, de crème, de vanille et de caramel.', 7, 'https://image.afcdn.com/recipe/20161201/4190_w420h344c1cx2705cy1803.jpg', 'Dessert'),
(5, '2017-10-15 12:33:01', '2017-10-15 12:33:01', 'Burger fait Maison', 'Salade, tomate, oignons caramélisés, steak haché, pleurotes persillées, crème aux champignons de paris, Saint-Nectaire', 14, 'https://media.timeout.com/images/103902673/image.jpg', 'Plat'),
(6, '2017-10-15 12:34:18', '2017-10-15 12:34:18', 'Tiramisu', 'Le tiramisu est une pâtisserie et un dessert traditionnel de la cuisine italienne.', 7, 'http://food.fnr.sndimg.com/content/dam/images/food/fullset/2011/2/4/2/RX-FNM_030111-Sugar-Fix-005_s4x3.jpg.rend.hgtvcom.616.462.suffix/1371597326801.jpeg', 'Dessert'),
(7, '2017-10-15 12:34:52', '2017-10-15 12:34:52', 'Aloko fait Maison', 'L''alloco ou aloco, parfois aloko, est un plat traditionnel ivoirien très populaire en Afrique de l''Ouest et d''Afrique centrale, à base de banane plantain.', 7, 'http://a395.idata.over-blog.com/2/35/69/88/Bananes-plantains/Bananes-plantains_1552.jpg', 'Entree'),
(8, '2017-10-15 12:36:22', '2017-10-15 12:36:22', 'Ice Tea - Citron Vert', 'Thé frais au citron vert', 3, 'https://i2.cdscdn.com/pdt2/8/0/7/1/700x700/lip3502110108807/rw/lipton-ice-tea-citron-citron-vert-33cl-pack-de-24.jpg', 'Boisson');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2014_10_12_000000_create_users_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 1),
(6, '2017_10_09_122300_create_tasks_table', 1),
(7, '2017_10_09_124344_update_tasks_table', 1),
(8, '2017_10_11_141209_create_items_table', 2),
(9, '2017_10_12_143414_add_Filtre_to_users', 3),
(10, '2017_10_15_143247_add_role_to_users', 4);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `done` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `tasks`
--

INSERT INTO `tasks` (`id`, `user_id`, `title`, `description`, `done`, `created_at`, `updated_at`) VALUES
(1, 1, 'Faire à manger TEST', 'Couscous Merguez + Poichiche TEST', 1, NULL, '2017-10-11 07:37:10'),
(2, NULL, 'Réviser code', 'Faire des séries', 0, NULL, NULL),
(3, NULL, 'test', 'test', 0, '2017-10-11 06:37:43', '2017-10-11 06:37:43'),
(4, NULL, 'test', 'test', 0, '2017-10-11 06:39:18', '2017-10-11 06:39:18'),
(5, NULL, 'test', 'test', 0, '2017-10-11 06:39:33', '2017-10-11 06:39:33'),
(6, NULL, 'test', 'test', 0, '2017-10-11 06:43:54', '2017-10-11 06:43:54');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'luc', 'lucmarie.lm@gmail.com', '237296', NULL, NULL, NULL, 0),
(2, 'test', 'test@gmail.com', '$2y$10$SAZVosOfN0Bke0TRupI.W.nq0IMPMl1q9b0f75oNJPuaBPyAzhRlG', 'OyiwnK2btb9zRhP8axiZ5xaNKe8B6IMhxWwjhEg6xIy3oWhMYPT1MIafW5Jg', '2017-10-11 08:21:44', '2017-10-11 08:21:44', 0),
(3, 'test new', 'testnew@gmail.com', '$2y$10$L9pFDPUSvwl6anG.lwNWM.RIe4AQetl.315GSk8w9/32r5Y7mo4FK', 'bnDjdHYP5TY5r9QgYeJjJ7w3kAbQGozrzmKdavUL9d2IQAk0cadOrglNLT8F', '2017-10-11 08:27:18', '2017-10-11 08:27:18', 0),
(4, 'Luc Marie', 'oxyden@hotmail.fr', '$2y$10$SfyW/JTi/927U57qE5CDPeiPQ3O7MR8f6KNdJ8555rO437ZK3pYsq', 'peKwrxh2Z0ZWH8F9BrjK1NbAcPY4gutjCHDoia2gXdI7riVDKsGA71pEjTEY', '2017-10-11 10:43:07', '2017-10-11 10:43:07', 1),
(5, 'Alexandre Tobia', 'alexandretobia@gmail.com', '$2y$10$Hlbfzmrf8FLVW8x32mjMp.I.fK2aFIfdz5on9bL2QZJSqnpzQJli6', '69xu0JL01KsttYI7S5ep8pYfIttxH3P9osWpNI90wPOn8Le9bMAY5Fx0hZaU', '2017-10-15 12:25:00', '2017-10-15 12:25:00', 1);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tasks_user_id_foreign` (`user_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `tasks_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
