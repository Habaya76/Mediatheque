-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 29, 2022 at 09:59 AM
-- Server version: 5.7.24
-- PHP Version: 8.0.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hbmedialbdd`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `idArticles` int(11) NOT NULL,
  `titre` varchar(255) DEFAULT NULL,
  `auteur` varchar(255) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `idcategories` int(11) DEFAULT NULL,
  `idusers` int(11) DEFAULT NULL,
  `resume` text,
  `contenues` text NOT NULL,
  `status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`idArticles`, `titre`, `auteur`, `images`, `idcategories`, `idusers`, `resume`, `contenues`, `status`) VALUES
(1, 'homme-Chevreuil', 'chevreuil', 'images/homme.jpg', 1, 2, ' mment le petit empereur de Chine va vaincre, grâce à sa ruse, un dragon redoutable et sauver son pays Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi corporis possimus numquam quod eaque, expedita ullam inventore ut reprehenderit quas sapiente aliquid accusamus est eum. Facere rerum delectus molestias ea? Quam quae blanditiis assumenda eum consequuntur molestiae beatae illo, voluptates accusamus perferendis adipisci perspiciatis vero quasi enim ad accusantium tempore! Architecto neque adipisci accusamus tempora praesentium harum eaque quae dignissimos?Veritatis omnis neque repellat, corrupti eius, rerum accusantium minima fugit, odit quasi voluptate velit? Optio, laborum! Corrupti porro illo enim excepturi corporis nesciunt rerum libero tenetur, deleniti dolorum, ipsa sint.Accusantium deserunt praesentium tempore eveniet, a blanditiis quasi quaerat sed sequi temporibus voluptatibus consectetur commodi quod at nulla placeat labore, reprehenderit nihil. Explicabo sequi saepe voluptatem, neque molestiae ut iure.Earum sint ducimus recusandae obcaecati omnis, ipsum, qui vitae ex, tempora sed quod molestiae? Non beatae, quas quidem omnis voluptatibus nisi ex doloribus corrupti exercitationem hic? Cupiditate et in incidunt.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum reprehenderit cupiditate, repudiandae a aut nam aliquid iusto sed hic culpa eveniet quibusdam, animi accusantium, dolor itaque dolore tenetur recusandae corrupti!Sequi maxime iste, nulla aliquam provident ipsam, repellat libero sapiente, fugit labore delectus quia cumque aut. Dolorum sit, illo, expedita labore unde quas iure tempore ipsam, obcaecati voluptates rem nulla?Doloremque corporis quam amet officia, distinctio sit at eveniet cupiditate ut. Aspernatur officia soluta corrupti mollitia neque debitis nam porro incidunt! Magnam, rem illum. Reiciendis modi impedit cumque porro cupiditate?', 'habaya khalil', 'disponible'),
(4, 'L\'Arbre', 'arbre', 'images/arbre.jpg', 4, 2, 'Une belle leçon de vie portée par la grâce de Charlotte Gainsbourg et Morgana Davies. Adaptation du best-seller de Judy Pascoe l\'arbre du père Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi corporis possimus numquam quod eaque, expedita ullam inventore ut reprehenderit quas sapiente aliquid accusamus est eum. Facere rerum delectus molestias ea? Quam quae blanditiis assumenda eum consequuntur molestiae beatae illo, voluptates accusamus perferendis adipisci perspiciatis vero quasi enim ad accusantium tempore! Architecto neque adipisci accusamus tempora praesentium harum eaque quae dignissimos? Veritatis omnis neque repellat, corrupti eius, rerum accusantium minima fugit, odit quasi voluptate velit? Optio, laborum! Corrupti porro illo enim excepturi corporis nesciunt rerum libero tenetur, deleniti dolorum, ipsa sint. Accusantium deserunt praesentium tempore eveniet, a blanditiis quasi quaerat sed sequi temporibus voluptatibus consectetur commodi quod at nulla placeat labore, reprehenderit nihil. Explicabo sequi saepe voluptatem, neque molestiae ut iure. Earum sint ducimus recusandae obcaecati omnis, ipsum, qui vitae ex, tempora sed quod molestiae? Non beatae, quas quidem omnis voluptatibus nisi ex doloribus corrupti exercitationem hic? Cupiditate et in incidunt.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum reprehenderit cupiditate, repudiandae a aut nam aliquid iusto sed hic culpa eveniet quibusdam, animi accusantium, dolor itaque dolore tenetur recusandae corrupti! Sequi maxime iste, nulla aliquam provident ipsam, repellat libero sapiente, fugit labore delectus quia cumque aut. Dolorum sit, illo, expedita labore unde quas iure tempore ipsam, obcaecati voluptates rem nulla? Doloremque corporis quam amet officia, distinctio sit at eveniet cupiditate ut.  Aspernatur officia soluta corrupti mollitia neque debitis nam porro incidunt! Magnam, rem illum. Reiciendis modi impedit cumque porro cupiditate?', '', 'indisponible'),
(5, 'Reste la lumière', 'restelumiere', 'images/restelumiere.jpg', 1, 2, 'Guitariste et chanteuse grecque hors pair, Angélique Ionatos, forte de 40 ans de carrière et à l\'origine de près d\'une vingtaine d\'albums, revient avec un album qui s\'annonce comme l\'une de ses oeuvres les plus abouties Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum reprehenderit cupiditate, repudiandae a aut nam aliquid iusto sed hic culpa eveniet quibusdam, animi accusantium, dolor itaque dolore tenetur recusandae corrupti! Sequi maxime iste, nulla aliquam provident ipsam, repellat libero sapiente, fugit labore delectus quia cumque aut. Dolorum sit, illo, expedita labore unde quas iure tempore ipsam, obcaecati voluptates rem nulla? Doloremque corporis quam amet officia, distinctio sit at eveniet cupiditate ut.  Aspernatur officia soluta corrupti mollitia neque debitis nam porro incidunt! Magnam, rem illum. Reiciendis modi impedit cumque porro cupiditate?Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi corporis possimus numquam quod eaque, expedita ullam inventore ut reprehenderit quas sapiente aliquid accusamus est eum. Facere rerum delectus molestias ea? Quam quae blanditiis assumenda eum consequuntur molestiae beatae illo, voluptates accusamus perferendis adipisci perspiciatis vero quasi enim ad accusantium tempore! Architecto neque adipisci accusamus tempora praesentium harum eaque quae dignissimos? Veritatis omnis neque repellat, corrupti eius, rerum accusantium minima fugit, odit quasi voluptate velit? Optio, laborum! Corrupti porro illo enim excepturi corporis nesciunt rerum libero tenetur, deleniti dolorum, ipsa sint. Accusantium deserunt praesentium tempore eveniet, a blanditiis quasi quaerat sed sequi temporibus voluptatibus consectetur commodi quod at nulla placeat labore, reprehenderit nihil. Explicabo sequi saepe voluptatem, neque molestiae ut iure. Earum sint ducimus recusandae obcaecati omnis, ipsum, qui vitae ex, tempora sed quod molestiae? Non beatae, quas quidem omnis voluptatibus nisi ex doloribus corrupti exercitationem hic? Cupiditate et in incidunt.', '', 'disponible'),
(7, 'Mia et le Migou', 'Migou', 'images/miamigou.jpg', 2, 1, 'Mia est une fillette d\'à peine dix ans. Alertée par un pressentiment, elle décide de quitter son village natal quelque part en Amérique du Sud pour partir à la recherche de son père.\', \'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi corporis possimus numquam quod eaque, expedita ullam inventore ut reprehenderit quas sapiente aliquid accusamus est eum. Facere rerum delectus molestias ea? Quam quae blanditiis assumenda eum consequuntur molestiae beatae illo, voluptates accusamus perferendis adipisci perspiciatis vero quasi enim ad accusantium tempore! Architecto neque adipisci accusamus tempora praesentium harum eaque quae dignissimos? Veritatis omnis neque repellat, corrupti eius, rerum accusantium minima fugit, odit quasi voluptate velit? Optio, laborum! Corrupti porro illo enim excepturi corporis nesciunt rerum libero tenetur, deleniti dolorum, ipsa sint. Accusantium deserunt praesentium tempore eveniet, a blanditiis quasi quaerat sed sequi temporibus voluptatibus consectetur commodi quod at nulla placeat labore, reprehenderit nihil. Explicabo sequi saepe voluptatem, neque molestiae ut iure. Earum sint ducimus recusandae obcaecati omnis, ipsum, qui vitae ex, tempora sed quod molestiae? Non beatae, quas quidem omnis voluptatibus nisi ex doloribus corrupti exercitationem hic? Cupiditate et in incidunt. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi corporis possimus numquam quod eaque, expedita ullam inventore ut reprehenderit quas sapiente aliquid accusamus est eum. Facere rerum delectus molestias ea? Quam quae blanditiis assumenda eum consequuntur molestiae beatae illo, voluptates accusamus perferendis adipisci perspiciatis vero quasi enim ad accusantium tempore! Architecto neque adipisci accusamus tempora praesentium harum eaque quae dignissimos? Veritatis omnis neque repellat, corrupti eius, rerum accusantium minima fugit, odit quasi voluptate velit? Optio, laborum! Corrupti porro illo enim excepturi corporis nesciunt rerum libero tenetur, deleniti dolorum, ipsa sint. Accusantium deserunt praesentium tempore eveniet, a blanditiis quasi quaerat sed sequi temporibus voluptatibus consectetur commodi quod at nulla placeat labore, reprehenderit nihil. Explicabo sequi saepe voluptatem, neque molestiae ut iure. Earum sint ducimus recusandae obcaecati omnis, ipsum, qui vitae ex, tempora sed quod molestiae? Non beatae, quas quidem omnis voluptatibus nisi ex doloribus corrupti exercitationem hic? Cupiditate et in incidunt.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum reprehenderit cupiditate, repudiandae a aut nam aliquid iusto sed hic culpa eveniet quibusdam, animi accusantium, dolor itaque dolore tenetur recusandae corrupti! Sequi maxime iste, nulla aliquam provident ipsam, repellat libero sapiente, fugit labore delectus quia cumque aut. Dolorum sit, illo, expedita labore unde quas iure tempore ipsam, obcaecati voluptates rem nulla? Doloremque corporis quam amet officia, distinctio sit at eveniet cupiditate ut.  Aspernatur officia soluta corrupti mollitia neque debitis nam porro incidunt! Magnam, rem illum. Reiciendis modi impedit cumque porro cupiditate?', '', 'disponible'),
(9, 'Les hautes herbes', 'herbes', 'images/leshautesherbes.jpeg', 3, 1, 'Thriller à pas de loup\r\nÀ travers la comédie, le drame, ou un mélange des deux J’attends quelqu’un, Le temps de , le cinéma de Jérôme Bonnell s’attache avant tout aux personnages, en explorant délicatement les sentiments qu\'ils éprouvent À travers la comédie, le drame, ou un mélange des deux J’attends quelqu’un, Le temps de , le cinéma de Jérôme Bonnell s’attache avant tout aux personnages, en explorant délicatement les sentiments qu\'ils éprouventAvec Les hautes herbes, il s’attaque à un nouveau format, la minisérie, et à son premier thriller. Mais il joue avec les codes du genre en ancrant son histoire dans une campagne baignée par le soleil de l\'été et en la racontant sur le mode intimiste, à travers le point de vue d’un enfant, plongé par accident dans la vie en apparence tranquille d’une bourgade rurale. Observateur silencieux, Jules Antonin Chaussoy perçoit des tensions chez ces adultes prisonniers de leur colère, de leur jalousie et de leur frustration. Par le biais de ce regard d’enfant, le réalisateur ouvre ainsi les portes d’un conte initiatique où le thriller avance à pas de loup, entre drame passionnel et crise sociale. Portée par une mise en scène précise et un formidable casting − Emmanuelle Devos (Ève), habituée de l’univers du cinéaste, les présences attachantes de Louise Chevillotte et Jonathan Couzinié et des seconds rôles savoureux, de Lazare Gousseau en auteur de BD dépressif à India Hair en garde champêtre peu farouche −, cette minisérie explore avec intensité la faculté de l’enfance à ressentir le monde avant de le comprendre.', '', 'disponible'),
(10, 'Mia et le Migou', 'Migou', 'images/miamigou.jpg', 2, 1, 'Mia est une fillette d\'à peine dix ans. Alertée par un pressentiment, elle décide de quitter son village natal quelque part en Amérique du Sud pour partir à la recherche de son père.\', \'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi corporis possimus numquam quod eaque, expedita ullam inventore ut reprehenderit quas sapiente aliquid accusamus est eum. Facere rerum delectus molestias ea? Quam quae blanditiis assumenda eum consequuntur molestiae beatae illo, voluptates accusamus perferendis adipisci perspiciatis vero quasi enim ad accusantium tempore! Architecto neque adipisci accusamus tempora praesentium harum eaque quae dignissimos? Veritatis omnis neque repellat, corrupti eius, rerum accusantium minima fugit, odit quasi voluptate velit? Optio, laborum! Corrupti porro illo enim excepturi corporis nesciunt rerum libero tenetur, deleniti dolorum, ipsa sint. Accusantium deserunt praesentium tempore eveniet, a blanditiis quasi quaerat sed sequi temporibus voluptatibus consectetur commodi quod at nulla placeat labore, reprehenderit nihil. Explicabo sequi saepe voluptatem, neque molestiae ut iure. Earum sint ducimus recusandae obcaecati omnis, ipsum, qui vitae ex, tempora sed quod molestiae? Non beatae, quas quidem omnis voluptatibus nisi ex doloribus corrupti exercitationem hic? Cupiditate et in incidunt. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi corporis possimus numquam quod eaque, expedita ullam inventore ut reprehenderit quas sapiente aliquid accusamus est eum. Facere rerum delectus molestias ea? Quam quae blanditiis assumenda eum consequuntur molestiae beatae illo, voluptates accusamus perferendis adipisci perspiciatis vero quasi enim ad accusantium tempore! Architecto neque adipisci accusamus tempora praesentium harum eaque quae dignissimos? Veritatis omnis neque repellat, corrupti eius, rerum accusantium minima fugit, odit quasi voluptate velit? Optio, laborum! Corrupti porro illo enim excepturi corporis nesciunt rerum libero tenetur, deleniti dolorum, ipsa sint. Accusantium deserunt praesentium tempore eveniet, a blanditiis quasi quaerat sed sequi temporibus voluptatibus consectetur commodi quod at nulla placeat labore, reprehenderit nihil. Explicabo sequi saepe voluptatem, neque molestiae ut iure. Earum sint ducimus recusandae obcaecati omnis, ipsum, qui vitae ex, tempora sed quod molestiae? Non beatae, quas quidem omnis voluptatibus nisi ex doloribus corrupti exercitationem hic? Cupiditate et in incidunt.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum reprehenderit cupiditate, repudiandae a aut nam aliquid iusto sed hic culpa eveniet quibusdam, animi accusantium, dolor itaque dolore tenetur recusandae corrupti! Sequi maxime iste, nulla aliquam provident ipsam, repellat libero sapiente, fugit labore delectus quia cumque aut. Dolorum sit, illo, expedita labore unde quas iure tempore ipsam, obcaecati voluptates rem nulla? Doloremque corporis quam amet officia, distinctio sit at eveniet cupiditate ut.  Aspernatur officia soluta corrupti mollitia neque debitis nam porro incidunt! Magnam, rem illum. Reiciendis modi impedit cumque porro cupiditate?', '', 'disponible'),
(11, 'Salamandre', 'Salamandre', 'images/salamandre.jpeg', 3, 1, 'Des personnalités appartenant à l’élite politico-économique belge sont victimes d’une vengeance puisant ses racines dans la Seconde Guerre mondiale. En électron libre, un flic incorruptible mène l’enquête. Entre complot et trahisons, une série noire addictive. \r\n\r\nLes secrets les plus inavouables d’une poignée de puissants sont tombés dans de mauvaises mains. Si la presse les découvre, la Belgique basculera dans le chaos… Flic incorruptible, Paul Gerardi, interprété avec maestria par le comédien flamand Filip Peeters, mène l’enquête pour démasquer les auteurs de ce casse que les autorités s’obstinent à cacher. Dans les pas de l’inspecteur, cible de choix pour les criminels comme pour sa hiérarchie, noyautée par une organisation secrète, Salamandre plonge dans les méandres troubles de l’État, entre complot et trahisons, exécutions et rebondissements. Puisant ses racines dans un événement lié à la Seconde Guerre mondiale, dont des indices sont instillés au fil des épisodes, l’intrigue, nouée bien serrée par le scénariste Ward Hulselmans, entraîne le spectateur dans une addictive course contre la montre.', '', 'disponible'),
(12, 'Les hautes herbes', 'herbes', 'images/leshautesherbes.jpeg', 3, 1, 'Thriller à pas de loup\r\nÀ travers la comédie, le drame, ou un mélange des deux J’attends quelqu’un, Le temps de , le cinéma de Jérôme Bonnell s’attache avant tout aux personnages, en explorant délicatement les sentiments qu\'ils éprouvent À travers la comédie, le drame, ou un mélange des deux J’attends quelqu’un, Le temps de , le cinéma de Jérôme Bonnell s’attache avant tout aux personnages, en explorant délicatement les sentiments qu\'ils éprouventAvec Les hautes herbes, il s’attaque à un nouveau format, la minisérie, et à son premier thriller. Mais il joue avec les codes du genre en ancrant son histoire dans une campagne baignée par le soleil de l\'été et en la racontant sur le mode intimiste, à travers le point de vue d’un enfant, plongé par accident dans la vie en apparence tranquille d’une bourgade rurale. Observateur silencieux, Jules Antonin Chaussoy perçoit des tensions chez ces adultes prisonniers de leur colère, de leur jalousie et de leur frustration. Par le biais de ce regard d’enfant, le réalisateur ouvre ainsi les portes d’un conte initiatique où le thriller avance à pas de loup, entre drame passionnel et crise sociale. Portée par une mise en scène précise et un formidable casting − Emmanuelle Devos (Ève), habituée de l’univers du cinéaste, les présences attachantes de Louise Chevillotte et Jonathan Couzinié et des seconds rôles savoureux, de Lazare Gousseau en auteur de BD dépressif à India Hair en garde champêtre peu farouche −, cette minisérie explore avec intensité la faculté de l’enfance à ressentir le monde avant de le comprendre.', '', 'disponible'),
(26, 'cendrillon', 'cendri', 'images/livre4.jpg', 3, 1, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, soluta consectetur voluptatem rem eligendi non eaque voluptate. In incidunt, dolore, aliquam aspernatur ut nulla excepturi tempore ad quidem amet eveniet!\r\n    Officia illum molestias autem nostrum ipsum cupiditate maxime veritatis veniam natus corrupti molestiae qui commodi dignissimos eligendi neque quae temporibus, inventore expedita minus. Voluptatibus quis sint possimus sunt praesentium porro.\r\n    Debitis cum quibusdam quas necessitatibus et tempora mollitia quam unde laudantium eligendi. Culpa fugiat vel ea distinctio ullam officia debitis quaerat voluptatem magnam ipsum tempore, accusamus vero non assumenda iusto!', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, soluta consectetur voluptatem rem eligendi non eaque voluptate. In incidunt, dolore, aliquam aspernatur ut nulla excepturi tempore ad quidem amet eveniet!\r\n    Officia illum molestias autem nostrum ipsum cupiditate maxime veritatis veniam natus corrupti molestiae qui commodi dignissimos eligendi neque quae temporibus, inventore expedita minus. Voluptatibus quis sint possimus sunt praesentium porro.\r\n    Debitis cum quibusdam quas necessitatibus et tempora mollitia quam unde laudantium eligendi. Culpa fugiat vel ea distinctio ullam officia debitis quaerat voluptatem magnam ipsum tempore, accusamus vero non assumenda iusto!', 'disponible'),
(27, 'ecouter lire', 'michael', 'images/livre5.jpg', 3, 1, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, soluta consectetur voluptatem rem eligendi non eaque voluptate. In incidunt, dolore, aliquam aspernatur ut nulla excepturi tempore ad quidem amet eveniet!\r\n    Officia illum molestias autem nostrum ipsum cupiditate maxime veritatis veniam natus corrupti molestiae qui commodi dignissimos eligendi neque quae temporibus, inventore expedita minus. Voluptatibus quis sint possimus sunt praesentium porro.\r\n    Debitis cum quibusdam quas necessitatibus et tempora mollitia quam unde laudantium eligendi. Culpa fugiat vel ea distinctio ullam officia debitis quaerat voluptatem magnam ipsum tempore, accusamus vero non assumenda iusto!', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, soluta consectetur voluptatem rem eligendi non eaque voluptate. In incidunt, dolore, aliquam aspernatur ut nulla excepturi tempore ad quidem amet eveniet!\r\n    Officia illum molestias autem nostrum ipsum cupiditate maxime veritatis veniam natus corrupti molestiae qui commodi dignissimos eligendi neque quae temporibus, inventore expedita minus. Voluptatibus quis sint possimus sunt praesentium porro.\r\n    Debitis cum quibusdam quas necessitatibus et tempora mollitia quam unde laudantium eligendi. Culpa fugiat vel ea distinctio ullam officia debitis quaerat voluptatem magnam ipsum tempore, accusamus vero non assumenda iusto!', 'disponible'),
(29, 'emmanuel carrére', 'emmanuel', 'images/livre7.jpg', 3, 1, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, soluta consectetur voluptatem rem eligendi non eaque voluptate. In incidunt, dolore, aliquam aspernatur ut nulla excepturi tempore ad quidem amet eveniet!\r\n    Officia illum molestias autem nostrum ipsum cupiditate maxime veritatis veniam natus corrupti molestiae qui commodi dignissimos eligendi neque quae temporibus, inventore expedita minus. Voluptatibus quis sint possimus sunt praesentium porro.\r\n    Debitis cum quibusdam quas necessitatibus et tempora mollitia quam unde laudantium eligendi. Culpa fugiat vel ea distinctio ullam officia debitis quaerat voluptatem magnam ipsum tempore, accusamus vero non assumenda iusto!', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, soluta consectetur voluptatem rem eligendi non eaque voluptate. In incidunt, dolore, aliquam aspernatur ut nulla excepturi tempore ad quidem amet eveniet!\r\n    Officia illum molestias autem nostrum ipsum cupiditate maxime veritatis veniam natus corrupti molestiae qui commodi dignissimos eligendi neque quae temporibus, inventore expedita minus. Voluptatibus quis sint possimus sunt praesentium porro.\r\n    Debitis cum quibusdam quas necessitatibus et tempora mollitia quam unde laudantium eligendi. Culpa fugiat vel ea distinctio ullam officia debitis quaerat voluptatem magnam ipsum tempore, accusamus vero non assumenda iusto!', 'disponible'),
(30, 'leçons d\'un siecle', 'edgar', 'images/livre8.jpg', 3, 1, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, soluta consectetur voluptatem rem eligendi non eaque voluptate. In incidunt, dolore, aliquam aspernatur ut nulla excepturi tempore ad quidem amet eveniet!\r\n    Officia illum molestias autem nostrum ipsum cupiditate maxime veritatis veniam natus corrupti molestiae qui commodi dignissimos eligendi neque quae temporibus, inventore expedita minus. Voluptatibus quis sint possimus sunt praesentium porro.\r\n    Debitis cum quibusdam quas necessitatibus et tempora mollitia quam unde laudantium eligendi. Culpa fugiat vel ea distinctio ullam officia debitis quaerat voluptatem magnam ipsum tempore, accusamus vero non assumenda iusto!', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, soluta consectetur voluptatem rem eligendi non eaque voluptate. In incidunt, dolore, aliquam aspernatur ut nulla excepturi tempore ad quidem amet eveniet!\r\n    Officia illum molestias autem nostrum ipsum cupiditate maxime veritatis veniam natus corrupti molestiae qui commodi dignissimos eligendi neque quae temporibus, inventore expedita minus. Voluptatibus quis sint possimus sunt praesentium porro.\r\n    Debitis cum quibusdam quas necessitatibus et tempora mollitia quam unde laudantium eligendi. Culpa fugiat vel ea distinctio ullam officia debitis quaerat voluptatem magnam ipsum tempore, accusamus vero non assumenda iusto!', 'disponible'),
(31, 'ecoutez lire', 'ovide', 'images/livre9.jpeg', 3, 1, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, soluta consectetur voluptatem rem eligendi non eaque voluptate. In incidunt, dolore, aliquam aspernatur ut nulla excepturi tempore ad quidem amet eveniet!\r\n    Officia illum molestias autem nostrum ipsum cupiditate maxime veritatis veniam natus corrupti molestiae qui commodi dignissimos eligendi neque quae temporibus, inventore expedita minus. Voluptatibus quis sint possimus sunt praesentium porro.\r\n    Debitis cum quibusdam quas necessitatibus et tempora mollitia quam unde laudantium eligendi. Culpa fugiat vel ea distinctio ullam officia debitis quaerat voluptatem magnam ipsum tempore, accusamus vero non assumenda iusto!', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, soluta consectetur voluptatem rem eligendi non eaque voluptate. In incidunt, dolore, aliquam aspernatur ut nulla excepturi tempore ad quidem amet eveniet!\r\n    Officia illum molestias autem nostrum ipsum cupiditate maxime veritatis veniam natus corrupti molestiae qui commodi dignissimos eligendi neque quae temporibus, inventore expedita minus. Voluptatibus quis sint possimus sunt praesentium porro.\r\n    Debitis cum quibusdam quas necessitatibus et tempora mollitia quam unde laudantium eligendi. Culpa fugiat vel ea distinctio ullam officia debitis quaerat voluptatem magnam ipsum tempore, accusamus vero non assumenda iusto!', 'disponible'),
(32, 'vive la republique', 'marie aude', 'images/livre10.jpg', 3, 1, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, soluta consectetur voluptatem rem eligendi non eaque voluptate. In incidunt, dolore, aliquam aspernatur ut nulla excepturi tempore ad quidem amet eveniet!\r\n    Officia illum molestias autem nostrum ipsum cupiditate maxime veritatis veniam natus corrupti molestiae qui commodi dignissimos eligendi neque quae temporibus, inventore expedita minus. Voluptatibus quis sint possimus sunt praesentium porro.\r\n    Debitis cum quibusdam quas necessitatibus et tempora mollitia quam unde laudantium eligendi. Culpa fugiat vel ea distinctio ullam officia debitis quaerat voluptatem magnam ipsum tempore, accusamus vero non assumenda iusto!', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, soluta consectetur voluptatem rem eligendi non eaque voluptate. In incidunt, dolore, aliquam aspernatur ut nulla excepturi tempore ad quidem amet eveniet!\r\n    Officia illum molestias autem nostrum ipsum cupiditate maxime veritatis veniam natus corrupti molestiae qui commodi dignissimos eligendi neque quae temporibus, inventore expedita minus. Voluptatibus quis sint possimus sunt praesentium porro.\r\n    Debitis cum quibusdam quas necessitatibus et tempora mollitia quam unde laudantium eligendi. Culpa fugiat vel ea distinctio ullam officia debitis quaerat voluptatem magnam ipsum tempore, accusamus vero non assumenda iusto!', 'disponible'),
(33, 'limitation de vitesse', 'pratic auto', 'images/presse1.jpg', 4, 1, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, soluta consectetur voluptatem rem eligendi non eaque voluptate. In incidunt, dolore, aliquam aspernatur ut nulla excepturi tempore ad quidem amet eveniet!\r\n    Officia illum molestias autem nostrum ipsum cupiditate maxime veritatis veniam natus corrupti molestiae qui commodi dignissimos eligendi neque quae temporibus, inventore expedita minus. Voluptatibus quis sint possimus sunt praesentium porro.\r\n    Debitis cum quibusdam quas necessitatibus et tempora mollitia quam unde laudantium eligendi. Culpa fugiat vel ea distinctio ullam officia debitis quaerat voluptatem magnam ipsum tempore, accusamus vero non assumenda iusto!', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, soluta consectetur voluptatem rem eligendi non eaque voluptate. In incidunt, dolore, aliquam aspernatur ut nulla excepturi tempore ad quidem amet eveniet!\r\n    Officia illum molestias autem nostrum ipsum cupiditate maxime veritatis veniam natus corrupti molestiae qui commodi dignissimos eligendi neque quae temporibus, inventore expedita minus. Voluptatibus quis sint possimus sunt praesentium porro.\r\n    Debitis cum quibusdam quas necessitatibus et tempora mollitia quam unde laudantium eligendi. Culpa fugiat vel ea distinctio ullam officia debitis quaerat voluptatem magnam ipsum tempore, accusamus vero non assumenda iusto!', 'indisponible'),
(34, 'transport info', 'transport', 'images/presse2.jpg', 4, 1, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, soluta consectetur voluptatem rem eligendi non eaque voluptate. In incidunt, dolore, aliquam aspernatur ut nulla excepturi tempore ad quidem amet eveniet!\r\n    Officia illum molestias autem nostrum ipsum cupiditate maxime veritatis veniam natus corrupti molestiae qui commodi dignissimos eligendi neque quae temporibus, inventore expedita minus. Voluptatibus quis sint possimus sunt praesentium porro.\r\n    Debitis cum quibusdam quas necessitatibus et tempora mollitia quam unde laudantium eligendi. Culpa fugiat vel ea distinctio ullam officia debitis quaerat voluptatem magnam ipsum tempore, accusamus vero non assumenda iusto!', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, soluta consectetur voluptatem rem eligendi non eaque voluptate. In incidunt, dolore, aliquam aspernatur ut nulla excepturi tempore ad quidem amet eveniet!\r\n    Officia illum molestias autem nostrum ipsum cupiditate maxime veritatis veniam natus corrupti molestiae qui commodi dignissimos eligendi neque quae temporibus, inventore expedita minus. Voluptatibus quis sint possimus sunt praesentium porro.\r\n    Debitis cum quibusdam quas necessitatibus et tempora mollitia quam unde laudantium eligendi. Culpa fugiat vel ea distinctio ullam officia debitis quaerat voluptatem magnam ipsum tempore, accusamus vero non assumenda iusto!', 'disponible'),
(35, 'Maison traveau', 'maison', 'images/Detail9.jpg', 4, 1, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, soluta consectetur voluptatem rem eligendi non eaque voluptate. In incidunt, dolore, aliquam aspernatur ut nulla excepturi tempore ad quidem amet eveniet!\r\n    Officia illum molestias autem nostrum ipsum cupiditate maxime veritatis veniam natus corrupti molestiae qui commodi dignissimos eligendi neque quae temporibus, inventore expedita minus. Voluptatibus quis sint possimus sunt praesentium porro.\r\n    Debitis cum quibusdam quas necessitatibus et tempora mollitia quam unde laudantium eligendi. Culpa fugiat vel ea distinctio ullam officia debitis quaerat voluptatem magnam ipsum tempore, accusamus vero non assumenda iusto!', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, soluta consectetur voluptatem rem eligendi non eaque voluptate. In incidunt, dolore, aliquam aspernatur ut nulla excepturi tempore ad quidem amet eveniet!\r\n    Officia illum molestias autem nostrum ipsum cupiditate maxime veritatis veniam natus corrupti molestiae qui commodi dignissimos eligendi neque quae temporibus, inventore expedita minus. Voluptatibus quis sint possimus sunt praesentium porro.\r\n    Debitis cum quibusdam quas necessitatibus et tempora mollitia quam unde laudantium eligendi. Culpa fugiat vel ea distinctio ullam officia debitis quaerat voluptatem magnam ipsum tempore, accusamus vero non assumenda iusto!', 'disponible'),
(36, 'Capital santé', 'capital', 'images/Detail4.jpg', 4, 1, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, soluta consectetur voluptatem rem eligendi non eaque voluptate. In incidunt, dolore, aliquam aspernatur ut nulla excepturi tempore ad quidem amet eveniet!\r\n    Officia illum molestias autem nostrum ipsum cupiditate maxime veritatis veniam natus corrupti molestiae qui commodi dignissimos eligendi neque quae temporibus, inventore expedita minus. Voluptatibus quis sint possimus sunt praesentium porro.\r\n    Debitis cum quibusdam quas necessitatibus et tempora mollitia quam unde laudantium eligendi. Culpa fugiat vel ea distinctio ullam officia debitis quaerat voluptatem magnam ipsum tempore, accusamus vero non assumenda iusto!', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, soluta consectetur voluptatem rem eligendi non eaque voluptate. In incidunt, dolore, aliquam aspernatur ut nulla excepturi tempore ad quidem amet eveniet!\r\n    Officia illum molestias autem nostrum ipsum cupiditate maxime veritatis veniam natus corrupti molestiae qui commodi dignissimos eligendi neque quae temporibus, inventore expedita minus. Voluptatibus quis sint possimus sunt praesentium porro.\r\n    Debitis cum quibusdam quas necessitatibus et tempora mollitia quam unde laudantium eligendi. Culpa fugiat vel ea distinctio ullam officia debitis quaerat voluptatem magnam ipsum tempore, accusamus vero non assumenda iusto!', 'disponible'),
(37, 'cultures marines', 'marines', 'images/Detail5.jpg', 4, 1, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, soluta consectetur voluptatem rem eligendi non eaque voluptate. In incidunt, dolore, aliquam aspernatur ut nulla excepturi tempore ad quidem amet eveniet!\r\n    Officia illum molestias autem nostrum ipsum cupiditate maxime veritatis veniam natus corrupti molestiae qui commodi dignissimos eligendi neque quae temporibus, inventore expedita minus. Voluptatibus quis sint possimus sunt praesentium porro.\r\n    Debitis cum quibusdam quas necessitatibus et tempora mollitia quam unde laudantium eligendi. Culpa fugiat vel ea distinctio ullam officia debitis quaerat voluptatem magnam ipsum tempore, accusamus vero non assumenda iusto!', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, soluta consectetur voluptatem rem eligendi non eaque voluptate. In incidunt, dolore, aliquam aspernatur ut nulla excepturi tempore ad quidem amet eveniet!\r\n    Officia illum molestias autem nostrum ipsum cupiditate maxime veritatis veniam natus corrupti molestiae qui commodi dignissimos eligendi neque quae temporibus, inventore expedita minus. Voluptatibus quis sint possimus sunt praesentium porro.\r\n    Debitis cum quibusdam quas necessitatibus et tempora mollitia quam unde laudantium eligendi. Culpa fugiat vel ea distinctio ullam officia debitis quaerat voluptatem magnam ipsum tempore, accusamus vero non assumenda iusto!', 'disponible'),
(38, 'Save the planet', 'planete', 'images/Detail6.jpg', 4, 1, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, soluta consectetur voluptatem rem eligendi non eaque voluptate. In incidunt, dolore, aliquam aspernatur ut nulla excepturi tempore ad quidem amet eveniet!\r\n    Officia illum molestias autem nostrum ipsum cupiditate maxime veritatis veniam natus corrupti molestiae qui commodi dignissimos eligendi neque quae temporibus, inventore expedita minus. Voluptatibus quis sint possimus sunt praesentium porro.\r\n    Debitis cum quibusdam quas necessitatibus et tempora mollitia quam unde laudantium eligendi. Culpa fugiat vel ea distinctio ullam officia debitis quaerat voluptatem magnam ipsum tempore, accusamus vero non assumenda iusto!', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, soluta consectetur voluptatem rem eligendi non eaque voluptate. In incidunt, dolore, aliquam aspernatur ut nulla excepturi tempore ad quidem amet eveniet!\r\n    Officia illum molestias autem nostrum ipsum cupiditate maxime veritatis veniam natus corrupti molestiae qui commodi dignissimos eligendi neque quae temporibus, inventore expedita minus. Voluptatibus quis sint possimus sunt praesentium porro.\r\n    Debitis cum quibusdam quas necessitatibus et tempora mollitia quam unde laudantium eligendi. Culpa fugiat vel ea distinctio ullam officia debitis quaerat voluptatem magnam ipsum tempore, accusamus vero non assumenda iusto!', 'disponible');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `idcategories` int(11) NOT NULL,
  `categories` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`idcategories`, `categories`) VALUES
(1, 'cinemas'),
(2, 'musiques'),
(3, 'livres'),
(4, 'presses'),
(5, 'jeunesses');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `idcontact` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `messages` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`idcontact`, `email`, `messages`, `date`) VALUES
(1, 'habaya@gmail.com', 'bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb', '2022-04-27');

-- --------------------------------------------------------

--
-- Table structure for table `emprunt`
--

CREATE TABLE `emprunt` (
  `idEmprunt` int(11) NOT NULL,
  `dateEmprunt` date NOT NULL,
  `dateRetour` date DEFAULT NULL,
  `idusers` int(11) DEFAULT NULL,
  `idArticles` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `emprunt`
--

INSERT INTO `emprunt` (`idEmprunt`, `dateEmprunt`, `dateRetour`, `idusers`, `idArticles`) VALUES
(1, '2021-01-02', '2022-03-03', 1, 1),
(2, '2022-04-28', '2022-05-05', 1, 5),
(3, '2022-04-28', '2022-05-05', 1, 5),
(4, '2022-04-28', '2022-05-05', 1, 5),
(5, '2022-04-28', '2022-05-05', 1, 34),
(6, '2022-04-28', '2022-05-05', 1, 10),
(7, '2022-04-28', '2022-05-05', 1, 33),
(8, '2022-04-28', '2022-05-05', 1, 12),
(9, '2022-04-28', '2022-05-05', 1, 12),
(10, '2022-04-28', '2022-05-05', 1, 12),
(11, '2022-04-28', '2022-05-05', 1, 12),
(12, '2022-04-28', '2022-05-05', 1, 12),
(13, '2022-04-28', '2022-05-05', 1, 12),
(14, '2022-04-29', '2022-05-06', 30, 33),
(15, '2022-04-29', '2022-05-06', 30, 33),
(16, '2022-04-29', '2022-05-06', 30, 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idusers` int(11) NOT NULL,
  `nom` varchar(100) DEFAULT NULL,
  `prenom` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idusers`, `nom`, `prenom`, `email`, `password`, `role`) VALUES
(1, 'diallo', 'habaya', 'habaya@gmail.com', 'habaya', 'users'),
(2, 'diallo', 'hawa', 'hawa@gmail.com', '$2y$10$wVoEuq/0OPuVITDO1gkBnOpJBOGRxB54SRAgxBOdM2wTRFr9iR15W', 'admin'),
(14, 'ggg', 'ggg', 'ggg@g', '$2y$10$P6dcbb12xSeDUPARDc1uK.sEDBObxEOrHDrP.69IR5l5UyTsuX5Yu', 'user'),
(15, 'ggg', 'ggg', 'ggg@g', '$2y$10$IGTEVPu9PGvjRruFuDocFO.PD18F3ixBU8PvTyCoZnxtlYdRWUqlW', 'user'),
(16, 'ggg', 'ggg', 'ggg@g', '$2y$10$th/0QUZ3yFJA9a6EbT/V3uJeUiiOc.d9rqBeoUSzoiMoZbKOyfYVC', 'user'),
(17, 'ggg', 'ggg', 'ggg@g', '$2y$10$ElvDqj3HG1fQ0TdBph5L.Ovm4Ev8dqhMXV2pgZRuLatyeqSRlYYCO', 'user'),
(18, 'ggg', 'ggg', 'ggg@g', '$2y$10$NOoOph/tCnoYKlrd4.ZPVOoLL2/g8/GQSB4t.C3uLY8zKuchK0ktq', 'user'),
(19, 'ggg', 'ggg', 'ggg@g', '$2y$10$c/VpEIaQ5jAByNoXu/jIKuwL7it8F0sv2KBUY4MR54CgvEb2r5fdK', 'user'),
(20, 'ggg', 'ggg', 'ggg@g', '$2y$10$SRgC2TayDMCOGn9OjEPDSejVo9uaYjC.gC3igPn4UzBRdFiHI42LO', 'user'),
(21, 'ggg', 'ggg', 'ggg@g', '$2y$10$YcCJED5jilPjgZIqRneGWepOr/A2qYpZYok117N.cvfLh7l08g3c2', 'user'),
(22, 'ggg', 'ggg', 'ggg@g', '$2y$10$kfHKVgnynO8kUbr4/5zx6.aSp.IqJ9bh9PKUpUephDoor4jWAoL6O', 'user'),
(27, 'pppppppppppp', 'ppppppppppppppp', 'ppp@p', '$2y$10$g69eW.MHnOdvZe93ig7G6eWPq.FryJLY3LRSg1eZ5q9dSITI9K3Za', 'user'),
(28, 'aaa', 'aaa', 'aaa@a', '$2y$10$Q.MhPncB05W3jv/peX1GKOFgaIEWFlAvx.8ynoXoo.6RgHhW.DPWi', 'user'),
(29, 'a', 'a', 'a@gmail.com', '$2y$10$WExrodGwuMvrNbEtd1cTm.4n3Z56K5UgjHcTWHnxNEPBpii2zIWAu', 'user'),
(30, 'z', 'z', 'z@gmail.com', '$2y$10$pSsKsKvBIS8e5amDsCg5XOgV4CBk1SPUaJVpKIGWOITg1YmSfUOsC', 'user'),
(31, 'barry', 'habaya', 'barry@gmail.com', '$2y$10$dbeBhZn7XJ7Zqii7VQ2IcuHDf.Q3Dh6SCmKwEprMlZ/ObLqzKNpGu', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`idArticles`),
  ADD KEY `idcategories` (`idcategories`),
  ADD KEY `idusers` (`idusers`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`idcategories`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`idcontact`);

--
-- Indexes for table `emprunt`
--
ALTER TABLE `emprunt`
  ADD PRIMARY KEY (`idEmprunt`),
  ADD KEY `idusers` (`idusers`),
  ADD KEY `emprunt_ibfk_2` (`idArticles`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idusers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `idArticles` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `idcategories` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `idcontact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `emprunt`
--
ALTER TABLE `emprunt`
  MODIFY `idEmprunt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idusers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`idcategories`) REFERENCES `categories` (`idcategories`),
  ADD CONSTRAINT `articles_ibfk_2` FOREIGN KEY (`idusers`) REFERENCES `users` (`idusers`);

--
-- Constraints for table `emprunt`
--
ALTER TABLE `emprunt`
  ADD CONSTRAINT `emprunt_ibfk_1` FOREIGN KEY (`idusers`) REFERENCES `users` (`idusers`),
  ADD CONSTRAINT `emprunt_ibfk_2` FOREIGN KEY (`idArticles`) REFERENCES `articles` (`idArticles`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
