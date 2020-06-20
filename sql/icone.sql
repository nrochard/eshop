-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  sam. 20 juin 2020 à 18:51
-- Version du serveur :  5.7.26
-- Version de PHP :  7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `icone`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_at` date NOT NULL,
  `content` longtext NOT NULL,
  `summary` text NOT NULL,
  `is_published` tinyint(4) NOT NULL DEFAULT '1',
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `title`, `created_at`, `content`, `summary`, `is_published`, `image`) VALUES
(1, '7 conseils pour une gestion efficace', '2020-05-12', 'Commencez par vous poser les bonnes questions :\r\n\r\nQuelle population je souhaite ciblé ? Âge, sexe, localisation, centres d’intérêts…\r\nOù se trouve ma cible ? Sur quels réseaux sociaux ? Attention tous les réseaux sociaux ne se valent pas en fonction de votre objectif.\r\nQuel est mon objectif ? Acquérir de nouveaux clients / Prospects ? Me faire connaître de ma cible ou pourquoi pas des blogueurs ? Accroître ma notoriété ? Quel est le ROI que j’attends ?\r\nQue font mes concurrents ? Y a-t-il de bonnes pratiques à retenir ?\r\nQuel temps ai-je à consacrer à mon community management ? À la création de contenu ?\r\nEn fonction de ces différentes informations, vous allez poser les bases de votre stratégie et de votre charte éditoriale. En fonction du temps que vous avez à consacrer, fixez-vous un certain nombre de réseaux sociaux et un volume de publications.\r\n\r\nMieux vaut être sur un réseau social et le faire bien plutôt que d’être sur tous les réseaux sociaux et d’avoir une communication décousue. Pensez qualité avant quantité, surtout avec les algorithmes qui mettront en avant les contenus les plus engageants.\r\n\r\nPour gagner du temps et travailler efficacement sur le web social, vous allez créer un calendrier éditorial. De mon côté, je fais ça avec Excel, mais vous pouvez très bien utiliser l’outil que vous souhaitez.\r\n\r\nL’idée est de se poser quelques heures pour rédiger l’ensemble de vos publications sur les réseaux sociaux. En concentrant votre temps de rédaction, vous gagnez du temps par rapport à une rédaction au fil de l’eau.\r\n\r\nBien sûr, le calendrier sera une base de communication, vous pourrez ajouter des publications en plus en fonction de l’actualité.\r\n\r\nDans votre fichier, vous pourrez avoir un onglet par réseau social : Facebook, votre compte Twitter, Snapchat, réseaux sociaux professionnels comme votre profil LinkedIn et vos principaux réseaux sociaux.\r\n\r\nSi vous le souhaitez, pour mieux suivre vos actions, vous pourrez mettre pour chaque message son objectif : fidéliser, trouver des clients, générer de l’interactivité / engagement, travailler la marque employeur…\r\n\r\nLe fichier pourra éventuellement vous servir pour planifier vos éditos de blogging ou vos interventions auprès des blogueurs.', 'Mieux vaut être sur un réseau social et le faire bien plutôt que d’être sur tous les réseaux sociaux et d’avoir une communication décousue', 1, '1.jpg'),
(4, 'Créer et entretenir son réseau ', '2020-04-15', 'Un profil complet et des contacts professionnels pertinent\r\nAu niveau professionnel, développer son réseau de relation est indispensable dès le début de sa carrière. C’est même devenu un critère d’influence grâce aux réseaux sociaux. Ceci étant dit, il y a certains points à prendre en compte pour se créer un réseau professionnel utile et de qualité.\r\n\r\nPour créer une première liste de contacts efficace, privilégiez la qualité à la quantité. Il ne s’agit pas de faire la course au nombre mais plutôt de trier les contacts selon des critères spécifiques. Centres d’intérêt, domaines d’activités, parcours professionnel, cursus universitaire, notoriété… sont des critères de sélection qui vous permettront de savoir s’il est pertinent d’ajouter un contact à votre réseau. Ce conseil est notamment valable pour lorsque vous recevez des demandes de mise en relation. N’acceptez donc que les contacts qui sont en lien avec votre secteur professionnel ou géographique.\r\n\r\nFace au très grand nombre de profils disponibles, le principal défi est de faire la différence. La meilleure manière d’y arriver est en premier lieu de créer un profil complet pour chaque réseau social ou du moins les plus connus. Un profil intéressant attire, soyez donc complet sur votre parcours, vos compétences, vos projets. Certains réseaux, comme LinkedIn, permettent également d’indiquer vos publications, votre investissement dans des activités associatives… De quoi faire vous démarquer face à un recruteur potentiel. Et n’oubliez pas d’inclure une photo de qualité pour gagner en visibilité.\r\n\r\nOrganiser votre réseau relationnel\r\nUne fois le réseau en place, il s’agit de le classer et de créer des groupes et catégories définis. Toutes les professionnels de votre liste de contacts n’évoluent probablement pas dans le même secteur. De ce fait, il est utile de les regrouper selon la nature des liens, les professions, les échanges, etc.\r\n\r\nL’intérêt d’avoir un réseau est la possibilité à un moment donné de mobiliser tous les contacts. Le moment venu, pour que la sollicitation soit efficace, l’approche doit être adaptée en fonction des groupes. N’oubliez pas qu’un bon réseau relationnel s’étend par lui-même à travers les recommandations.\r\n\r\nInteragir régulièrement avec ses contacts professionnels\r\nUne fois le profil créé et les contacts ajoutés, l’erreur serait de ne pas entretenir votre réseau. Profitez de la plateforme pour échanger régulièrement avec vos contacts. Lorsqu’un de vos contacts change d’entreprise, n’oubliez pas de le féliciter de ce nouveau poste. De même, lorsqu’une annonce pour un poste est publiée par un de vos contacts, n’hésitez pas à la relayer.\r\n\r\nPrendre et de donner des nouvelles, commenter des publications, recommander des personnes, discuter des sujets du moments ; autant d’actions simples qui vous permettront de vous démarquer chez vos contacts. \r\n\r\nLes réseaux sociaux, tremplins vers des rencontres professionnelles\r\nS’il est indispensable d’être présent et actif sur les réseaux professionnels, cela ne suffit à devenir un acteur incontournable parmi vos contacts. Pour renforcer les relations établies sur les réseaux sociaux, participez aux différents évènements de votre domaine, parfois même organisés via les réseaux.\r\n\r\nSalons, conférences, débats, présentations... autant d’occasions de rencontrer les professionnels avec lesquels vous êtes amenés à échanger sur les réseaux. Ce genre de rendez-vous donne lieu parfois à des projets communs, le début d’une collaboration, des nouvelles opportunités, des échanges enrichissants…\r\n\r\n \r\n\r\nLa création d’un réseau professionnel demande donc dans un premier temps un investissement personnel à ne pas négliger. Toutefois, une fois votre profil créé et vos premiers contacts ajoutés, vous pouvez assurer une présence efficace en ne consacrant que quelques minutes par jour, voire par semaine. Gardez à l’esprit que ces plateformes sont une vitrine pour se faire connaitre des autres. C’est la raison pour laquelle il faut l’entretenir pour renvoyer l’image voulue aux contacts et multiplier vos opportunités.', 'Pour entretenir de bonnes relations avec son réseau, il est important de savoir dire merci à ceux qui vous aident pour leur montrer votre reconnaissance.', 1, '4.jpeg'),
(5, 'Top 20 des conseils pour se démarquer', '2020-05-08', 'Les réseaux sociaux se sont imposés en maître auprès des\r\nnouvelles générations.  Ils scrutent les tendances,\r\nles entreprises et les produits qui rencontrent leur faveur ou défaveur sur ces\r\nsites et applications. Une entreprise quelle qu’elle soit doit savoir\r\ncommuniquer avec les internautes. Or, la diversité des réseaux entraîne parfois\r\nune communication éparpillée qui ne donne pas les résultats escomptés. Ces\r\nconseils vous permettront de vous retrouver dans la gestion de Twitter,\r\nInstagram, Facebook ou encore Snapchat et vous donneront peut-être quelques\r\nidées qui porteront leurs fruits à court ou long terme.\r\n\r\n1. Créer un concours pour attirer l’attention\r\nLes utilisateurs des réseaux sociaux aiment les concours et\r\nvoudront tenter leur chance. Ils créeront de l’interactivité et feront remonter\r\nvotre publication de concours sur le fil d’actualité.\r\n\r\n2. Diffuser les publicités\r\nPour faire connaître votre entreprise, il ne faut pas hésiter à diffuser de la publicité au sein des\r\nposts pour promouvoir vos offres. Mais gardez la mesure car ce genre de\r\npublication ne doit pas être envahissante au risque d’agacer la communauté et\r\ndonc de la détourner de votre entreprise.\r\n\r\n3. Surfer sur les hashtags\r\nCes petits mots ou phrase devancés d’un # ne sont plus aussi\r\ntendance mais ils permettent de pouvoir remonter des posts grâce aux onglets\r\ntendances et aux algorithmes particulièrement présents sur le réseau social\r\nTwitter.\r\n\r\n\r\n4. Diversifier les approches\r\nPour ne pas ennuyer une communauté, se diversifier dans tous\r\nles types de post est un incontournable. Utiliser des photos, des vidéos, des\r\ngifs vous permettra d’attirer l’attention grâce à votre capacité à vous adapter\r\net à divertir en utilisant différents supports de communication et apporter à\r\nchaque approche une touche d’originalité.\r\n\r\n5.Analyser les chiffres\r\nPour connaître sa cible et les contenus qui fonctionnent, il\r\nfaut s’attarder sur les chiffres. Pour connaître l’intérêt porté à une\r\npublication, le nombre de likes, de retweets ou de personnes ayant vu la\r\npublication pourra vous donner des idées innovantes pour les prochains posts à\r\nmettre en place. \r\n\r\n6. Essayer d’analyser les algorithmes\r\nTous les réseaux sociaux possèdent des algorithmes faisant\r\nremonter les publications en fonction de certains critères. Pour améliorer au\r\nmieux sa visibilité, il faut tenter de les comprendre. Se renseigner ou tenter\r\nde les étudier pourra vous permettre de les utiliser à bon escient.\r\n\r\n7. Faire attention aux heures et à la fréquence des publications\r\nQue ce soit sur Twitter, Instagram ou Facebook, des heures\r\nd’audience existent. Il vaut mieux les respecter pour que les posts ne soient\r\npas perdus dans le fil d’actualité. Posséder une certaine régularité dans leur\r\nmise en ligne crée un rendez-vous attendu des internautes.\r\n\r\n8. Donner des promotions\r\nPour se démarquer de tous les contenus et des autres marques,\r\nil faut promouvoir ses produits. Proposer des promotions à votre communauté\r\nleur donnera envie de partager avec leurs communautés personnelles.\r\n\r\n9. Laisser les employés participer sur les réseaux sociaux\r\nPour donner plus d’authenticité et une vision globale de\r\nvotre entreprise, il s’agit de laisser les employés interagir eux-mêmes. Avec\r\ntout de même quelques consignes, les valeurs de l’entreprise seront mises en exergue.\r\n\r\n10. Inviter des personnes sur le compte\r\nLe principe d’inviter une personne, un influenceur ou une\r\nentreprise s’appelle le takeover. Il s’agit\r\nde se diversifier pour inviter d’autres communautés à rejoindre les réseaux\r\nsociaux de l’entreprise.\r\n\r\n11. Se servir de temps en temps des fonctions live\r\nLes fonctions live sont toujours un bon moyen d’interagir en\r\ndirect avec les internautes. Elles sont utilisées dans le cadre d’évènements ou\r\nd’annonces exceptionnelles mais\r\nelles s nécessitent une organisation sans faille pour\r\nne pas créer l’effet inverse à celui souhaité.\r\n\r\n12. Bien séparer les réseaux\r\nLes utilisateurs préfèrent généralement des posts diversifiés\r\nqui donnent des informations originales. Il ne s’agit pas de publier les mêmes posts sur tous les réseaux\r\nsociaux. Les internautes qui vous suivent sur tous les réseaux remarqueront\r\nvotre manque d’imagination et votre formalisme.\r\n\r\n13. Regarder les concurrents pour se différencier\r\nVotre présence sur un réseau\r\nsocial est le reflet de votre personnalité et  ne doit pas être une copie conforme d’un\r\nconcurrent. S’inspirer reste toujours bénéfique, mais il faut savoir se\r\ndémarquer. Les mêmes contenus paraîtront insipides à votre communauté et risque\r\ntout simplement de briser le lien.\r\n\r\n14. Faire intervenir les abonnés\r\nDans le cadre d’une publication, des propos recueillis par\r\ndes internautes vous valorisera auprès du reste de la communauté. Les\r\nutilisateurs se sentiront plus proches de l’entreprise et sauront que leur avis\r\nest pris en compte.\r\n\r\n15. Faire de l’humour\r\nSur les réseaux sociaux, l’humour reste prédominant. Les gif\r\net les mèmes ont la faveur des internautes, grâce à eux, réaliser des petits\r\nbuzz est très tendance car les internautes sont friands des notes d’humour qui\r\nles divertissent.\r\n\r\n16. Se limiter sur les pages à aimer\r\nSur les réseaux sociaux, le nombre d’abonnements doit\r\nrarement dépasser le nombre d’abonnés.\r\nLes internautes restent très observateurs de ce critère pour savoir si\r\nl’entreprise est réellement en vogue ou si elle utilise un logiciel pour s’abonner\r\nautomatiquement. On ne trompe pas les internautes, ils sont conscients de\r\ntoutes les astuces des services de communication.\r\n\r\n17. Communiquer\r\nSi vous faites des publications, il est nécessaire de\r\ncommuniquer avec votre communauté. Dans ce cadre, répondre aux commentaires et\r\naux interactions est le b.a.-ba de la communication sur les réseaux. Prenez le\r\ntemps de répondre mais étudiez les réponses qui sont souvent indicatrices\r\nd’actions que vous pourriez mettre en œuvre à l’avenir. Vous découvrirez et\r\nconnaîtrez ainsi mieux votre cible.\r\n\r\n18. Garder sa stratégie et développer la patience pour voir\r\nle résultat\r\nLes stratégies s’appliquent aussi sur les réseaux sociaux,\r\ncertaines sont pertinentes et d’autres non. Mais avant tout la patience pour\r\nvoir les retombées et l’impact est requise. Une stratégie n’est pas un coup de\r\nbaguette magique.\r\n\r\n19. Surfer sur les tendances\r\nSurfer sur les tendances se révèle porteur même si celles-ci n’ont\r\naucun lien avec votre activité. Un clin d’œil à votre communauté pour lui\r\nsignifier que vous partagez leurs idées ou préférences est toujours empli de\r\nsens car vous serez en sens inverse une référence ‘elle aussi, lui aussi’.\r\nAttention cependant à ne pas en abuser car vous seriez considéré comme\r\nopportuniste.\r\n\r\n20. Ne pas hésiter à faire des montages fun mais\r\nLa réputation des gifs et des mèmes n’est plus à faire car\r\nils séduisent un large public et deviennent quotidiens sur toutes les\r\nplateformes. Réaliser des montages empreints d’humour est une opération qui\r\npeut vous faire devenir une star mais aussi peut vous aussi vous conduire à être\r\nmis au pilori !\r\n\r\nAlors,\r\nsoyez créatif mais avec discernement !', 'Les réseaux sociaux se sont imposés  en maître auprès des nouvelles  générations. Une entreprise quelle  qu’elle soit doit savoir communiquer  avec les internautes.', 1, '5.jpg'),
(6, 'Pourquoi faire de la pub ? ', '2020-06-05', 'Avec la multiplication des plateformes sociales et du nombre d\'utilisateurs, il devient très difficile d\'obtenir de la visibilité de manière organique. Les divers algorithmes limitent la visibilité, ce qui oblige les marques à devoir payer pour être visibles auprès des consommateurs et pour l\'acquisition de nouveaux clients. Depuis début 2019, le portée estimée est autour de 2 % de la couverture naturelle sur les abonnées des pages de marque. Il devient donc indispensable pour les marques d\'envisager les publicités sur les réseaux sociaux pour gagner en visibilité par rapport aux concurrents et pour attirer de nouveaux prospects.\r\n\r\nAnnoncer sur Facebook\r\nciblage facebook\r\n\r\nSans doute la plate-forme de publicité en ligne la plus développée après AdWords, elle repose d’ailleurs sur le même procédé vous permettant de créer et gérer vous-même vos campagnes publicitaires en ligne. Elle est parfaitement adaptée aux petits budgets car la dépense journalière minimale est de 1 € seulement.\r\n\r\nCette plate-forme étant bien moins utilisée que sa concurrente AdWords, les prix sont plus bas puisque moins d’annonceurs sont présents. Il y a donc une véritable opportunité de ce côté là.\r\n\r\nDe plus, Facebook met à votre disposition de nombreuses options vous permettant de cibler les personnes qui verront vos annonces. De part le type de données dont dispose ce réseau social (âge, sexe, lieu, intérêt, situation amoureuse…), annoncer sur Facebook est vraiment efficace dans le cadre d’une communication B2C, probablement moins pertinent pour du B2B. Chez CCD Agency nous testons tout de même actuellement une campagne B2B pour en avoir le coeur net.\r\n\r\nFacebook permet également non seulement de faire la publicité pour un site Internet, mais également pour une Page Facebook (par exemple celle de votre entreprise). Cela permet donc de faire connaître votre espace communautaire et de recruter de nouveaux fans.\r\n\r\nAnnoncer sur LinkedIn\r\nLinkedIn, c’est le réseau social professionnel par excellence avec plus de 100 millions de membres dans le monde. C’est donc le réseau social idéal pour le B2B. Sa solution de publicité en ligne permet de cibler des profils d’utilisateurs selon leurs postes, qualifications ou métiers. Les possibilités de ciblage sont donc très intéressantes pour annoncer en direction d’une cible professionnelle précise. Il y a toutefois une limitation majeure pour nous francophones : les annonces ne peuvent être rédigées qu’en anglais.\r\n\r\nLe coût est également plus important que sur Facebook puisqu’une campagne débute au minimum à 10 $ par jour et à 2 $ le CPC (Coût Par Clic).\r\n\r\nViadeo, Twitter et les autres ?\r\nTwitter propose également un service de publicité en ligne. Il est toutefois nettement moins évolué et surtout inaccessible aux petites entreprises puisque le billet d’entré commence depuis peu à 15 000 $ (Il fallait débourser auparavant minimum 100 000 $ !).\r\n\r\nViadeo ne propose pas non plus de système comme Facebook ou LinkedIn mais de simples bannières publicitaires traditionnelles avec toutefois des options de ciblage. Les tarifs débutent autour de 30 € les 1000 affichages (pas de Coût Par Clic, ou CPC).\r\n\r\nD’autres réseaux sociaux moins répandus proposent également des solutions publicitaires. C’est le cas par exemple de MySpace avec MyAds qui propose une offre à 5$ par jour pour annoncer sur son site mais également sur ceux de son réseau de partenaires (AOL, Yahoo…). Mais cette offre, essentiellement Américaine, n’est pas vraiment adaptée au marché Français.\r\n\r\nIl ne faut pas non plus oublier les réseaux sociaux de géolocalisation comme Foursquare ou DisMoiOù qui peuvent apporter réellement de sérieuses opportunités aux entreprises locales ou aux boutiques physiques en proposant des annonces publicitaires sous forme de bons plans ou d’offres spéciales.', 'La publicité sur les réseaux sociaux  est aujourd’hui indispensable pour  bénéficier d’une plus grande notoriété  et pour toucher une large cible.', 1, '6.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `image`) VALUES
(2, 'Youtube', 'Découvrez nos packs vous permettant d\'acheter des likes, des abonnés, des commentaires et des vues.', '2.png'),
(3, 'Facebook', 'Découvrez nos packs vous permettant d\'acheter des likes, des abonnés ou des commentaires.', '3.png'),
(13, 'Instagram', 'Découvrez nos packs vous permettant d\'acheter des likes, des abonnés ou des commentaires.', '13.png'),
(14, 'Twitter', 'Découvrez nos packs vous permettant d\'acheter des likes, des followers, des retweets ou des commentaires.', '14.png');

-- --------------------------------------------------------

--
-- Structure de la table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `answer` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `faq`
--

INSERT INTO `faq` (`id`, `question`, `answer`) VALUES
(1, 'Dois-je donner mon mot de passe ?', 'Oui nous avons besoin d’avoir accès avec compte afin que notre technologie puisse opérer dessus.  Evidemment nous n’allons pas partager votre mot de passe et il sera en sécurité.'),
(6, 'Les résultats sont-ils garantis ?', 'Nous pouvons accroître n\'importe quel compte, donc sautez le pas et laissez nous vous rendre populaire en quelques instants.'),
(7, 'Comment souscrire à un abonnement ?', 'Nous proposons 3 types d\'abonnements pour Instagram. Il suffit d\'aller dans l\'onglet \"Abonnements\" et de sélectionner celui de votre choix. Vous ne pouvez pas cumuler deux abonnements en même temps. Vous pouvez le résilier aussi à tout moment.'),
(8, 'Combien de temps faut-il pour que ma commande arrive ?', 'Nous lançons notre intelligence artificielle dès validation du paiement. Les résultats seront visibles sous 24 heures.'),
(9, 'Si je mets fin à mon abonnement, ce que j\'ai acheté va-t-il disparaître ?', 'Bien-sûr que non, les abonnés que vous avez obtenus durant votre utilisation de Instaboom sont les votre. N’oubliez pas que les followers que vous avez gagnés vous suivent parce qu’ils vous ont personnellement choisis. Ils vous montrent un intérêt à votre profile et ce que vous avez à leur offrir. Il est sure qu’ils sont libres d’arrêter de vous suivre s’ils perdent l’intérêt à votre compte, il est donc libre à vous de maintenir leur intérêt en mettant à jour votre profile et étant suffisamment actif.'),
(10, 'Comment fonctionne la facturation des abonnements ?', 'En fonction du forfait auquel vous êtes abonné, vous serez automatiquement facturé selon le mode de paiement sélectionné à votre date hebdomadaire, mensuelle ou trimestrielle.  Vous pouvez annuler à tout moment et nous ne vous facturerons pas le prochain terme.  Vous recevrez une facture avec la TVA appropriée (déjà incluse dans le prix).');

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `billing_adress` varchar(255) NOT NULL,
  `billing_city` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `firstname`, `lastname`, `date`, `billing_adress`, `billing_city`, `price`) VALUES
(97, 4, 'Prénom', 'Nom', '2020-06-17 20:48:29', '14 rue Olympie', 'Lyon', 957),
(98, 4, 'Prénom', 'Nom', '2020-06-17 21:09:32', '14 rue Olympie', 'Lyon', 114),
(99, 10, 'Laura', 'Goavec', '2020-06-19 14:47:07', '173 rue des Fleurs', 'Paris', 141),
(100, 11, 'Émilie', 'Lopez', '2020-06-20 19:25:37', '35 rue des Champs', 'Brest', 87);

-- --------------------------------------------------------

--
-- Structure de la table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `name`, `price`, `quantity`) VALUES
(1, 97, 'Pack 5 000 likes', 29, 33),
(2, 98, 'Pack 5 000 likes', 29, 3),
(3, 98, 'Pack 100 commentaires', 9, 3),
(4, 99, 'Pack 100 abonnés', 9, 3),
(5, 99, 'Pack 100 likes', 9, 3),
(6, 99, 'Pack 1 000 commentaires', 29, 3),
(7, 100, 'Pack 1 000 commentaires', 29, 3);

-- --------------------------------------------------------

--
-- Structure de la table `plans`
--

CREATE TABLE `plans` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `feature1` varchar(255) NOT NULL,
  `feature2` varchar(255) NOT NULL,
  `feature3` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `plans`
--

INSERT INTO `plans` (`id`, `name`, `tag`, `price`, `feature1`, `feature2`, `feature3`, `duration`) VALUES
(1, 'Hebdomadaire', 'Le + rentable', 20, '500 à 1 000 abonnés', '100 à 300 likes par publication', '50 à 80 commentaires par publication', 'semaine'),
(3, 'Mensuel', 'Le + populaire', 50, '2 000 à 5 000 abonnés', '500 à 1 000 likes par publication', '100 à 300 commentaires par publication', 'mois'),
(4, 'Trimestriel', 'Le + efficace', 120, '10 000 à 20 000 abonnés', '1 000 à 2 000 likes par publication', '500 à 1 000 commentaires par publication', 'trimestre');

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `description` text NOT NULL,
  `quantity` int(11) NOT NULL,
  `is_activated` tinyint(4) NOT NULL DEFAULT '1',
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`, `quantity`, `is_activated`, `image`) VALUES
(17, 'Pack 100 abonnés', 9, 'Acheter des abonnés permet de booster votre profil.  En développant votre visibilité sur les réseaux sociaux, vous vous démarquerez de la concurrence et gagnerez en popularité et en réputation. Pour des résultats encore plus probants, vous pouvez également acheter des likes sur vos posts, des retweets et des commentaires sur notre site, ou bien souscrire à un pack ou un abonnement chez nous.', 1000000, 1, '17.png'),
(22, 'Pack 10 000 abonnés', 49, 'Acheter des abonnés permet de booster votre profil.  En développant votre visibilité sur les réseaux sociaux, vous vous démarquerez de la concurrence et gagnerez en popularité et en réputation. Pour des résultats encore plus probants, vous pouvez également acheter des likes sur vos posts, des retweets et des commentaires sur notre site, ou bien souscrire à un pack ou un abonnement chez nous.', 1000000, 1, '22.png'),
(23, 'Pack 1 000 abonnés', 29, 'Acheter des abonnés permet de booster votre profil.  En développant votre visibilité sur les réseaux sociaux, vous vous démarquerez de la concurrence et gagnerez en popularité et en réputation. Pour des résultats encore plus probants, vous pouvez également acheter des likes sur vos posts, des retweets et des commentaires sur notre site, ou bien souscrire à un pack ou un abonnement chez nous.', 10000000, 1, '23.png'),
(24, 'Pack 100 likes', 9, 'Acheter des likes permet de booster votre profil.  En développant votre visibilité sur les réseaux sociaux, vous vous démarquerez de la concurrence et gagnerez en popularité et en réputation. Pour des résultats encore plus probants, vous pouvez également acheter des abonnés sur vos posts, des retweets et des commentaires sur notre site, ou bien souscrire à un pack ou un abonnement chez nous.', 10000000, 1, '24.png'),
(25, 'Pack 1 000 likes', 29, 'Acheter des likes permet de booster votre profil.  En développant votre visibilité sur les réseaux sociaux, vous vous démarquerez de la concurrence et gagnerez en popularité et en réputation. Pour des résultats encore plus probants, vous pouvez également acheter des abonnés sur vos posts, des retweets et des commentaires sur notre site, ou bien souscrire à un pack ou un abonnement chez nous.', 10000000, 1, '25.png'),
(26, 'Pack 5 000 likes', 29, 'Acheter des likes permet de booster votre profil.  En développant votre visibilité sur les réseaux sociaux, vous vous démarquerez de la concurrence et gagnerez en popularité et en réputation. Pour des résultats encore plus probants, vous pouvez également acheter des abonnés sur vos posts, des retweets et des commentaires sur notre site, ou bien souscrire à un pack ou un abonnement chez nous.', 10000000, 1, '26.png'),
(27, 'Pack 100 vues', 9, 'Acheter des vues permet de booster votre profil.  En développant votre visibilité sur les réseaux sociaux, vous vous démarquerez de la concurrence et gagnerez en popularité et en réputation. Pour des résultats encore plus probants, vous pouvez également acheter des abonnés sur vos posts, des retweets et des commentaires sur notre site, ou bien souscrire à un pack ou un abonnement chez nous.', 1000000, 1, '27.png'),
(28, 'Pack 1 000 vues', 29, 'Acheter des vues permet de booster votre profil.  En développant votre visibilité sur les réseaux sociaux, vous vous démarquerez de la concurrence et gagnerez en popularité et en réputation. Pour des résultats encore plus probants, vous pouvez également acheter des abonnés sur vos posts, des retweets et des commentaires sur notre site, ou bien souscrire à un pack ou un abonnement chez nous.', 1000000, 1, '28.png'),
(30, 'Pack 10 000 vues', 49, 'Acheter des vues permet de booster votre profil.  En développant votre visibilité sur les réseaux sociaux, vous vous démarquerez de la concurrence et gagnerez en popularité et en réputation. Pour des résultats encore plus probants, vous pouvez également acheter des abonnés sur vos posts, des retweets et des commentaires sur notre site, ou bien souscrire à un pack ou un abonnement chez nous.', 1000000, 1, '30.png'),
(31, 'Pack 100 retweets', 9, 'Acheter des retweets permet de booster votre profil.  En développant votre visibilité sur les réseaux sociaux, vous vous démarquerez de la concurrence et gagnerez en popularité et en réputation. Pour des résultats encore plus probants, vous pouvez également acheter des abonnés, des likes et des commentaires sur notre site, ou bien souscrire à un pack ou un abonnement chez nous.', 1000000, 1, '31.png'),
(34, 'Pack 1 000 retweets', 29, 'Acheter des retweets permet de booster votre profil.  En développant votre visibilité sur les réseaux sociaux, vous vous démarquerez de la concurrence et gagnerez en popularité et en réputation. Pour des résultats encore plus probants, vous pouvez également acheter des abonnés, des likes et des commentaires sur notre site, ou bien souscrire à un pack ou un abonnement chez nous.', 1000000, 1, '34.png'),
(37, 'Pack 5 000 retweets', 49, 'Acheter des retweets permet de booster votre profil.  En développant votre visibilité sur les réseaux sociaux, vous vous démarquerez de la concurrence et gagnerez en popularité et en réputation. Pour des résultats encore plus probants, vous pouvez également acheter des abonnés, des likes et des commentaires sur notre site, ou bien souscrire à un pack ou un abonnement chez nous.', 1000000, 1, '37.png'),
(38, 'Pack 100 commentaires', 9, 'Acheter des commentaires permet de booster votre profil.  En développant votre visibilité sur les réseaux sociaux, vous vous démarquerez de la concurrence et gagnerez en popularité et en réputation. Pour des résultats encore plus probants, vous pouvez également acheter des abonnés, des likes, des vues, des retweets et des commentaires sur notre site, ou bien souscrire à un pack ou un abonnement chez nous.', 1000000, 1, '38.png'),
(39, 'Pack 1 000 commentaires', 29, 'Acheter des commentaires permet de booster votre profil.  En développant votre visibilité sur les réseaux sociaux, vous vous démarquerez de la concurrence et gagnerez en popularité et en réputation. Pour des résultats encore plus probants, vous pouvez également acheter des abonnés, des likes, des vues, des retweets et des commentaires sur notre site, ou bien souscrire à un pack ou un abonnement chez nous.', 1000000, 1, '39.png'),
(40, 'Pack 10 000 commentaires', 69, 'Acheter des commentaires permet de booster votre profil.  En développant votre visibilité sur les réseaux sociaux, vous vous démarquerez de la concurrence et gagnerez en popularité et en réputation. Pour des résultats encore plus probants, vous pouvez également acheter des abonnés, des likes, des vues, des retweets et des commentaires sur notre site, ou bien souscrire à un pack ou un abonnement chez nous.', 1000000, 1, '40.png');

-- --------------------------------------------------------

--
-- Structure de la table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `product_categories`
--

INSERT INTO `product_categories` (`id`, `product_id`, `category_id`) VALUES
(216, 17, 2),
(217, 17, 13),
(218, 17, 14),
(219, 22, 2),
(220, 22, 13),
(221, 22, 14),
(222, 23, 2),
(223, 23, 13),
(224, 23, 14),
(233, 24, 2),
(234, 24, 3),
(235, 24, 13),
(236, 24, 14),
(241, 25, 2),
(242, 25, 3),
(243, 25, 13),
(244, 25, 14),
(245, 26, 2),
(246, 26, 3),
(247, 26, 13),
(248, 26, 14),
(249, 27, 2),
(255, 40, 2),
(256, 40, 3),
(257, 40, 13),
(258, 40, 14),
(259, 39, 2),
(260, 39, 3),
(261, 39, 13),
(262, 39, 14),
(264, 38, 2),
(265, 38, 3),
(266, 38, 13),
(267, 38, 14),
(268, 28, 2),
(269, 30, 2),
(270, 34, 14),
(271, 31, 14),
(272, 37, 14);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` tinyint(11) NOT NULL DEFAULT '0',
  `city` varchar(255) NOT NULL,
  `adress` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `is_admin`, `city`, `adress`) VALUES
(4, 'Prénomn', 'Nom', 'admin@admin.com', 'd41d8cd98f00b204e9800998ecf8427e', 1, 'Lyon', '14 rue Olympique'),
(10, 'Laura', 'Goavec', 'admin@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 1, 'Paris', '173 rue des Fleurs'),
(11, 'Émilie', 'Lopez', 'admin@admin.admin', '21232f297a57a5a743894a0e4a801fc3', 1, 'Brest', '35 rue des Champs');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id` (`user_id`);

--
-- Index pour la table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_products_order_id` (`order_id`);

--
-- Index pour la table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_categories_product_id` (`product_id`),
  ADD KEY `product_categories_category_id` (`category_id`) USING BTREE;

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT pour la table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT pour la table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=273;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `user_link` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_link` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `product_categories`
--
ALTER TABLE `product_categories`
  ADD CONSTRAINT `product_categories_category_id` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_categories_product_id` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
