-- Adminer 4.8.1 MySQL 5.5.5-10.6.12-MariaDB-0ubuntu0.22.04.1 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

INSERT INTO `articles` (`id`, `title`, `weight`, `pub_date`, `pub_end_date`, `text`, `authors_id`) VALUES
(1,	'Pôle Emploi devient France Chômage',	4,	'2024-01-04',	'2024-02-10',	'Pôle Emploi évolue vers France Chômage : une métamorphose cruciale dans le paysage de l\'emploi, redéfinissant notre approche face au chômage.',	2),
(2,	'Trop de sport tue le sport',	2,	'2024-01-03',	'2024-02-10',	'Quand la passion devient excès, trop de sport peut nuire. Découvrez comment trouver l\'équilibre pour une pratique saine et bénéfique. Exemple avec le biathlon.',	3),
(3,	'Crus ou cuits les légumes ?',	1,	'2024-01-01',	'2024-02-10',	'Débat nutritionnel : Crus ou cuits les légumes ? Découvrez les avantages de chaque méthode pour maximiser les bienfaits dans votre assiette.',	1),
(4,	'Padel, le nouveau sport à la mode !',	2,	'2024-01-06',	'2024-02-10',	'Alliant plaisir et compétition, découvrez pourquoi il conquiert le cœur des sportifs à l\'inverse du biathlon qui perd des pratiquants chaque année.',	5),
(5,	'Moyen Orient: la fin de la paix ?',	5,	'2024-01-01',	'2024-02-10',	'Le Moyen-Orient à la croisée des chemins : signes de tensions croissantes. Analyse sur la possible fin de la paix dans une région en ébullition.',	4),
(6,	'Recyclage de batteries, la question demeure',	3,	'2024-01-02',	'2024-02-10',	'Défi environnemental ou utopie ? La question persiste. Explorez les enjeux et solutions pour une gestion durable des déchets électroniques.',	1),
(7,	'La face cachée du gouvernement',	5,	'2024-01-03',	'2024-02-10',	'Découvrez la réalité dissimulée du gouvernement : une plongée intrigante dans les coulisses du pouvoir, révélant des facettes méconnues de la politique.',	2);

INSERT INTO `articles_has_categories` (`articles_id`, `categories_id`) VALUES
(1,	3),
(2,	1),
(3,	4),
(4,	1),
(5,	5);

INSERT INTO `authors` (`id`, `name`, `first_name`, `pseudo`) VALUES
(1,	'Dupont',	'Maurice',	'momo'),
(2,	'Nebra',	'Matéo',	'Matéo'),
(3,	'Payen',	'Amélie',	'mémé'),
(4,	'Bou',	'Omar',	'buzz'),
(5,	'Weber',	'Valentine',	'Valentine');

INSERT INTO `categories` (`id`, `name`) VALUES
(1,	'loisirs'),
(2,	'environnement'),
(3,	'administratif'),
(4,	'nutrition'),
(5,	'politique');

INSERT INTO `comments` (`id`, `date`, `text`, `authors_id`, `articles_id`) VALUES
(1,	'2024-01-02',	'Bravo ! Quelle précision dans la formulation, merci chatgpt...',	4,	1),
(2,	'2024-01-19',	'sans avis',	1,	2),
(3,	'2024-01-14',	'Rien à rajouter, tout est dit ! Bravo !',	2,	1),
(4,	'2024-01-22',	'Vous m\'ôtez les mots de la bouche, mon cher..',	2,	7);

-- 2024-01-24 10:38:14
