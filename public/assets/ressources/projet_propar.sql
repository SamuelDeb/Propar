-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 25 juil. 2022 à 11:20
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet_propar`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20220725061305', '2022-07-25 06:13:09', 270);

-- --------------------------------------------------------

--
-- Structure de la table `messenger_messages`
--

CREATE TABLE `messenger_messages` (
  `id` bigint(20) NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `headers` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue_name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `available_at` datetime NOT NULL,
  `delivered_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `operation`
--

CREATE TABLE `operation` (
  `id` int(11) NOT NULL,
  `operation_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code_postal` int(11) NOT NULL,
  `ville` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `operation`
--

INSERT INTO `operation` (`id`, `operation_id`, `user_id`, `type`, `prix`, `description`, `is_active`, `image`, `nom`, `prenom`, `adresse`, `code_postal`, `ville`) VALUES
(1, NULL, 1, 'Grosse', '10000', 'Nettoyage des locaux de l\'afpa roubaix', 1, '62de3b7139a72.png', 'Afpa', 'roubaix', '20 Rue du Luxembourg', 59100, 'Roubaix'),
(2, NULL, 4, 'Moyenne', '2500', 'Nettoyage des parties communes de l\'immeuble', 1, '62de3b9625c57.jpg', 'dupont', 'blabla', '96 Rue Pelleport', 33800, 'Bordeaux'),
(3, NULL, 5, 'Petite manoeuvre', '1000', 'Nettoyage de la facade', 0, '62de3bbfc16c1.png', 'debaer', 'samuel', '47 Rue Marceau', 59200, 'Tourcoing'),
(4, NULL, 1, 'Grosse', '10000', 'test1', 0, '62de3bdc68bc1.png', 'debaer', 'samuel', '47 Rue Marceau', 59200, 'Tourcoing'),
(5, NULL, 4, 'Petite manoeuvre', '1000', 'test2', 0, '62de3c0312e24.png', 'Yigitoglu', 'Romy', '62 Rue Judaïque', 33000, 'Bordeaux'),
(8, NULL, 1, 'Grosse', '10000', 'test', 0, '62de450978209.png', 'debaer', 'samuel', '', 59200, 'Tourcoing'),
(9, NULL, 1, 'Petite manoeuvre', '1000', 'test2', 0, '62de45a9d8328.png', 'debaer', 'samuel', '78 Rue Lecourbe', 75015, 'Paris'),
(10, NULL, 4, 'Moyenne', '2500', 'ezzegzg', 1, '62de4607af32b.jpg', 'Afpa', 'roubaix', '20 Rue du Luxembourg', 59100, 'Roubaix'),
(11, NULL, 5, 'Grosse', '10000', 'ezgzehzegze', 1, '62de4630009d9.png', 'Yigitoglu', 'Romy', '62 Rue Judaïque', 33000, 'Bordeaux');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `identifiant` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` longtext COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '(DC2Type:json)',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nb_operation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `identifiant`, `roles`, `password`, `nom`, `prenom`, `email`, `nb_operation`) VALUES
(1, '160188', '[\"ROLE_EXPERT\"]', '$2y$13$q7ZtM4sqlN3WTOpMeGxfm.mntQPQiVxvshOv9IdGvFmN9FvNhEi0S', 'Debaer', 'Samuel', 'samuel.debaer@gmail.com', 1),
(4, '220491', '[\"ROLE_EXPERT\"]', '$2y$13$q7ZtM4sqlN3WTOpMeGxfm.mntQPQiVxvshOv9IdGvFmN9FvNhEi0S', 'Yigitoglu', 'Romy', 'romy.yigitoglu@hotmail.com', 1),
(5, '130891', '[\"ROLE_SENIOR\"]', '$2y$13$LgcBlfm8HCs7SB4nnWX4J.e2dD0x9jgu1Un5KOaZ20MMU83B9juza', 'Janello', 'Morgan', 'janello.morgan@gmail.com', 1),
(6, '130622', '[\"ROLE_APPRENTI\"]', '$2y$13$SqgOU.zz/yjjRxAmaOmJ4eIiXMp6t5QXMEq8jSG8iKOSVmKeUVn0a', 'Formateur', 'Moussa', 'formateur.moussa@afpa.fr', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_C7440455A76ED395` (`user_id`);

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  ADD KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  ADD KEY `IDX_75EA56E016BA31DB` (`delivered_at`);

--
-- Index pour la table `operation`
--
ALTER TABLE `operation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_1981A66D44AC3583` (`operation_id`),
  ADD KEY `IDX_1981A66DA76ED395` (`user_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649C90409EC` (`identifiant`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `operation`
--
ALTER TABLE `operation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `FK_C7440455A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `operation`
--
ALTER TABLE `operation`
  ADD CONSTRAINT `FK_1981A66D44AC3583` FOREIGN KEY (`operation_id`) REFERENCES `client` (`id`),
  ADD CONSTRAINT `FK_1981A66DA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
