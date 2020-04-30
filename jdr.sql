
-- --------------------------------------------------------

--
-- Structure de la table `jdrAptitude`
--

CREATE TABLE `jdrAptitude` (
  `idAptitude` int(11) NOT NULL,
  `estUneCompetence` tinyint(1) NOT NULL,
  `idPersonnage` int(11) NOT NULL,
  `nomAptitude` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descriptionAptitude` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `jdrAptitude`
--

INSERT INTO `jdrAptitude` (`idAptitude`, `estUneCompetence`, `idPersonnage`, `nomAptitude`, `descriptionAptitude`) VALUES
(1, 1, 1, 'Invocation', 'Invoque une armure enchantée (familier)Si réussite critique lors de l\'invocation ;   50 points à répartir sur les statistiques de l\'armure enchantée'),
(2, 1, 1, 'Sort de soin', 'Soigne ses aliées, peux s\'évanouir pendant 3 tours'),
(3, 0, 1, '', 'A une aptitide pour les sort de vent, a un malus de 5 pour les autres éléments'),
(8, 1, 7, 'Le corp et l\'esprit', 'Le serpent qui circule dans son corps transperce de temps en temps sa peau pour attaquer. Il a alors les stats décrites plus basses et attaque de lui-même. Par contre, ils partagent tous les deux les mêmes points de vie et par conséquents les mêmes dégâts. De plus, ça pique un peu quand il sort vue qu’il doit littéralement couper la peau pour passer'),
(9, 1, 7, 'Fossé', 'Elle peut faire des trous. Genre. Une magie pour ouvrir le sol. (Ça serait des trous qui vont du nid de poule aux pédiluves niveau taille si tu vois un peu) Et faire en sorte que les ennemis tombent dedans. De base elle utilise ça pour faire des pièges pour le gibier, mais je me dis qu’en combat ça peut être sympa.'),
(10, 0, 7, 'Art de la chasse', 'Est experte en piège et en traque d’animaux sauvages, s’en sort bien niveau survie en forêt'),
(11, 0, 7, 'Traqueur', 'Bonus en détection de piège vu qu’elle pose elle-même des pièges'),
(12, 0, 7, 'La fille encapuchonné', 'Elle n’enlève que très rarement sa cape, du coup elle fait un peu dealeuse de drogue, rip.'),
(13, 0, 7, 'Enfant des terres', ' Elle n’a connu que la forêt de Kasophe, du coup tout ce qui ne ressemble pas à une forêt lui fait un peu peur. En particulier, elle a le mal de mer et elle flippe complètement à l’idée de monter dans un bateau.'),
(14, 1, 2, 'Alcoolique', ' 5 en force et -5 en perception quand Gwen est bourrée. '),
(15, 1, 2, 'Dernier rampard', 'Peux encaisser les degats d\'un allié en sacrifiant son tout'),
(16, 0, 2, 'Intimidation', 'Impressionne les PNJ facillement impressionables grâce a ses muscles saillants et sa posture de chevalier. '),
(17, 0, 2, 'Armure lourde', 'Pas super discrete'),
(18, 1, 5, 'Oeil d\'aigle', ' 5 en perceptionexprime mal sa vision'),
(19, 1, 5, 'Frappe éclaire', ' 5 en force 5 agilité-10 constitution'),
(20, 0, 5, '', ' 5 en résistence aux attaques surprises'),
(23, 0, 5, '', 'A 5 point définitif en mental car il c\'est entraîné dur.');

-- --------------------------------------------------------

--
-- Structure de la table `jdrChapitre`
--

CREATE TABLE `jdrChapitre` (
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `contenu` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `jdrChapitre`
--

INSERT INTO `jdrChapitre` (`date`, `contenu`) VALUES
('2020-04-09 20:28:29', 'Noct, Oram et Gwen se retrouvent à aider les gardiens après avoir vaincu un Sheikan affaiblit. Nul ne sais ce qu\'il est devenu ni ou il est aller, la prudence est donc de mise. C\'est dans ce climat ou nos héros ont décidé de visiter une ville voisine pas très honête... Ou Oram c\'est fait détroussé. Nos heros essayent de recuperer les biens d\'Oram et leurs chevaux, retrouvé dans une ecurie de la dit ville après s\'etre fait magnipulé mentalement dans une église ((feat les fotes d\'aurtaugrafe))'),
('2020-04-09 20:29:38', 'suite à une discution avec le gérant de l écurie, il se trouve que ses fils lui ont amené des chevaux volés dans le but de les revendre. ainsi, nos héros décident de se rendre au ranch des dits fils pour, je cite, \"leur casser la gueule\"'),
('2020-04-13 16:02:48', 'Nos héros se sont rendus au ranch en passant par des chemin peu empruntés. Arrivés au ranch, ils se rendent compte que le lieu est uniquement occupé par des chevaux. Les propriétaires n’étaient pas encore là. Ils mettent en place un plan : Oram et Noct décident de rentrer par la porte de derrière pour laisser Gwen entrer par la porte principale. Ainsi, ils décident de se cacher dans la paille dans l’espoir de voir les propriétaire arriver. Plus tard, deux chevaux arrivent dont l’un est celui d’Oram, montés par les deux frères. Ils sont pris dans une discussion qui semble les préoccuper au sujet d’une transaction.Ils vont nourrir les chevaux et Gwen intervient à ce moment là. Elle sort discrètement de la paille et lance une discussion avec les deux frères. Cette discussion apprend à Gwen que les chevaux appartiennent à des propriétaires qui les ont confiés pendant un certain temps.Cette discussion est écourtée par une soudaine envie des frère de repousser au lendemain le travail d’enquête de Gwen. Ainsi elle est amenée à quitter le ranch alors que ses deux compagnons sont toujours cachés sous la paille.Le temps passe et la nuit est tombée : un son aigu déchire le silence et Gwen, qui était restée proche du ranch, voit une silhouette s’infiltrer par une des fenêtre du toit. Noct et Oram entendent une agitation, la protestation d’un des frères suivi de son exécution. La silhouette repart en hurlant ce même son et l’autre frère pleure.Gwen enfonce la porte et constate les dégâts, elle décide de consoler le survivant et Oram et Noct sortent de leur cachette.');

-- --------------------------------------------------------

--
-- Structure de la table `jdrClasse`
--

CREATE TABLE `jdrClasse` (
  `idClasse` int(11) NOT NULL,
  `nomClasse` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `jdrClasse`
--

INSERT INTO `jdrClasse` (`idClasse`, `nomClasse`) VALUES
(0, 'NULL'),
(1, 'CHEVALIER'),
(2, 'ASSASSIN'),
(3, 'MAGE'),
(4, 'VOLEUR'),
(5, 'ARTILLEUR'),
(6, 'BARBARE'),
(8, 'BARDE'),
(10, 'CHASSEUR');

-- --------------------------------------------------------

--
-- Structure de la table `jdrEtat`
--

CREATE TABLE `jdrEtat` (
  `idEtat` int(11) NOT NULL,
  `nomEtat` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `jdrEtat`
--

INSERT INTO `jdrEtat` (`idEtat`, `nomEtat`) VALUES
(0, 'NULL'),
(1, 'ACTIF'),
(2, 'REROLL'),
(3, 'MORT');

-- --------------------------------------------------------

--
-- Structure de la table `jdrFamilier`
--

CREATE TABLE `jdrFamilier` (
  `idFamilier` int(11) NOT NULL,
  `idPersonnage` int(11) NOT NULL,
  `nomFamilier` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pvFamilier` int(11) NOT NULL,
  `pvMaxFamilier` int(11) NOT NULL,
  `armureFamilier` int(11) NOT NULL,
  `idStatistique` int(11) NOT NULL,
  `descriptionFamilier` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `jdrFamilier`
--

INSERT INTO `jdrFamilier` (`idFamilier`, `idPersonnage`, `nomFamilier`, `pvFamilier`, `pvMaxFamilier`, `armureFamilier`, `idStatistique`, `descriptionFamilier`) VALUES
(1, 1, 'Rififi', 1, 1, 3, 2, 'L\'oubliée'),
(3, 2, 'Doudou', 1, 1, 0, 13, ''),
(4, 7, 'Erix', 1, 2, 0, 21, 'Un mamba bland d\'a peu près 1m25.');

-- --------------------------------------------------------

--
-- Structure de la table `jdrGenre`
--

CREATE TABLE `jdrGenre` (
  `idGenre` int(11) NOT NULL,
  `nomGenre` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `jdrGenre`
--

INSERT INTO `jdrGenre` (`idGenre`, `nomGenre`) VALUES
(0, 'NULL'),
(1, 'NEUTRE'),
(2, 'HOMME'),
(3, 'FEMME');

-- --------------------------------------------------------

--
-- Structure de la table `jdrInventaire`
--

CREATE TABLE `jdrInventaire` (
  `idObjet` int(11) NOT NULL,
  `idPersonnage` int(11) NOT NULL,
  `idTypeInventaire` int(11) NOT NULL,
  `nomObjet` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idTypeObjet` int(11) NOT NULL,
  `degatObjet` int(11) NOT NULL,
  `protectionObjet` int(11) NOT NULL,
  `contenuObjet` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantiteObjet` int(11) NOT NULL,
  `idAnimal` int(11) NOT NULL,
  `descriptionObjet` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `jdrInventaire`
--

INSERT INTO `jdrInventaire` (`idObjet`, `idPersonnage`, `idTypeInventaire`, `nomObjet`, `idTypeObjet`, `degatObjet`, `protectionObjet`, `contenuObjet`, `quantiteObjet`, `idAnimal`, `descriptionObjet`) VALUES
(1, 1, 1, 'Dague', 2, 4, 0, '', 1, 0, ''),
(2, 1, 1, 'Bourse', 1, 0, 0, '0po', 1, 0, 'PUTAIN DE VOLEUR!!!!!'),
(3, 1, 2, 'Viande de boeuf', 1, 0, 0, '', 2, 0, ''),
(5, 7, 1, 'Lance', 2, 4, 0, '', 1, 0, 'Ca PIQUE.'),
(6, 5, 1, 'Caillou', 5, 0, 0, '', 1, 0, 'Le saint caillou. Très pratique pour s\'entrainer. '),
(7, 1, 8, 'Tempete', 4, 0, 0, '', 1, 1, 'Il est blanc, comme son proprieraire'),
(8, 2, 1, 'Flasque de vodka', 1, 0, 0, '50%', 1, 0, 'Le plus précieux de ses biens'),
(9, 5, 8, 'Lightning', 4, 0, 0, '', 1, 1, 'Il est noir.'),
(10, 2, 8, 'Charline', 4, 0, 0, '', 1, 1, ''),
(11, 2, 1, 'Hache', 2, 6, 0, '', 1, 0, ''),
(12, 2, 1, 'Bouclier', 3, 0, 0, '', 1, 0, 'En bois, un peu endommagé'),
(13, 2, 1, 'Bourse', 1, 0, 0, '17po', 1, 0, ''),
(14, 2, 1, 'Poignard', 2, 4, 0, '', 1, 0, 'Penser a ne pas la toucher en la reveillant'),
(15, 2, 1, 'Thé a la menthe', 1, 0, 0, '', 2, 0, 'Donner par Angella'),
(16, 2, 1, 'Pastille magique', 0, 0, 0, '1', 1, 0, 'Donné par Angela. Dillué dans l\'eau, ca pourrais peut etre la transformer en alcool');

-- --------------------------------------------------------

--
-- Structure de la table `jdrPersonnage`
--

CREATE TABLE `jdrPersonnage` (
  `idPersonnage` int(11) NOT NULL,
  `idUtilisateur` int(11) NOT NULL,
  `idEtat` int(11) NOT NULL,
  `nom` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `niveau` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `idRace` int(11) NOT NULL,
  `idClasse` int(11) NOT NULL,
  `idGenre` int(11) NOT NULL,
  `pv` int(11) NOT NULL,
  `pvMax` int(11) NOT NULL,
  `armure` int(11) NOT NULL,
  `idStatistique` int(11) NOT NULL,
  `lore` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `jdrPersonnage`
--

INSERT INTO `jdrPersonnage` (`idPersonnage`, `idUtilisateur`, `idEtat`, `nom`, `prenom`, `niveau`, `age`, `idRace`, `idClasse`, `idGenre`, `pv`, `pvMax`, `armure`, `idStatistique`, `lore`) VALUES
(1, 1, 1, 'de Barbe', 'Oram', 2, 27, 1, 3, 2, 7, 7, 0, 1, ''),
(2, 2, 1, 'Lozach', 'Gwendolynn', 2, 21, 1, 1, 3, 5, 5, 3, 4, 'La meuf bourée'),
(5, 3, 1, 'De Wynter', 'Noct', 2, 21, 1, 2, 2, 8, 8, 2, 6, './lore_super_cool.out'),
(6, 2, 2, '', 'Thuhazelot', 1, 5678, 3, 6, 1, 5, 5, 2, 7, 'Basiquement, c\'est un cailloux'),
(7, 2, 2, 'Moall', 'Olvya', 1, 18, 1, 10, 3, 3, 3, 0, 8, 'La forêt de Kasophe est connue pour deux choses. Son gibier abondant et les légendes sur un dieu éponyme qui y aurais élu domicile. C’est surement pour cela que le petit village d’Helbro, à la lisière de cette forêt, a développé une culture où la chasse et les croyances sont étroitement liée. Entre lieu de culte et corne d’abondance, cette forêt est au cœur de la vie du petit village. Une partie des jeunes est envoyer en forêt pendant plusieurs jours pour cueillir des champignons, chasser et ramener viande et fourrures que les anciens revendaient aux villages voisins, le tout dans l’harmonie et le respect de la nature apportée par Kasophe. Pour cela, ce village est connu de ses voisins comme le berceau des meilleurs traqueurs de bête aux alentours.  Bien sûr, les jeunes trappeurs ne sont pas juste lâcher dans la nature. Les jeunes du village, à leur 15ème anniversaire, peuvent demander à un maitre trappeur de les prendre comme apprentis. Ils commencent alors une formation d’à peu près 3 ans dans cette forêt d’abondance au terme de laquelle ils passent une “épreuve”. Aller en forêt pendant 3 jours, ramener du gibier pour une dizaine de personnes, quelques giroles et autres racines comestibles. Rien de bien compliquer pour tout apprentis attentifs, un passage trivial pour Olvya Moall, fille d’Elerton Moall, le meilleurs maitre trappeur que le village n’a jamais porté. C’est une jeune fille surement trop confiante qui s’élança dans la forêt de Kasophe ce jour-là et a raison : en une demi-journée, elle avait déjà amassé plus que le nécessaire. Mais elle voulait faire plus, elle voulait faire mieux ; et c’est là que le destin la rattrapa. Elle décida de traquer un animal extraordinaire, pour montrer à tout le monde qui elle était et ce qu’elle valait. Après près d’une journée de recherche, elle trouva l’objet de sa convoitise. Dans les buissons se terrais un serpent aux écailles immaculées, la bête semblais presque divine tant elle était élégante. La proie idéale pour toute personne voulant se vanter d’avoir fait quelque chose d’extraordinaire. Sans y réfléchir, elle lança sa lance sur le reptile, qui n’eut pas le temps de réaliser la fin de sa vie. Et alors qu’elle allait pour récupérer le cadavre encore chaud de l’animal, un éclair transcenda les cimes pour s’abattre sur la jeune femme.  “Olvya Moall, fille de la forêt... Je t’ai donné nourriture, foyer et bénédiction toute ta vie, mais cela ne te suffit pas ? Tu te crois digne de frapper ainsi un animal divin, toi qui n’as que l\'envie de reconnaissance pour guider tes pas ? Eh bien, que tes prières soient exaucées. Erix fera partie de toi à présent. Tout le monde verra ce qu’il en coute de ne pas se satisfaire du nécessaire”  Une vive douleur dans l’avant-bras sortit la malheureuse de son inconscience, et c’est avec horreur qu’elle constata que le serpent qu’elle avait achevé plus tôt était en trains d’entrer dans sa peau. Le temps qu’elle se rende compte de ce qu’il c’était passer, le nouveau parasite avais déjà entièrement élu domicile sous sa peau. C’était le début d’une nouvelle vie, mais pas d’une vie plus simple ou plus dure. C\'était le début d’une vie d’isolement.  En effet, depuis cet “accident”, la jeune femme ne retourne plus aussi souvent au village. Bien sûr, elle est rentrée pour compléter son épreuve, mais elle n’est pas restée longtemps, peut-être par honte, surement par peur. Peur de qu’elle était devenu, peur de ce qu’elle pouvait devenir. A partir du lendemain, Olvya décida de vivre en ermite dans la forêt. Son apprentissage en tant que trappeur lui permettait de survivre en forêt, et a force, elle apprit aussi à cohabiter avec la bête divine qui répondait au nom d’Erix, aussi douloureuse soit cette cohabitation. Elle retourne de temps en temps sur Helbro pour déposer le surplus de viande qu’elle chasse chez elle, sinon, elle vi complétement coupée du monde, à la recherche d’un moyen de se faire pardonner, sans succès.   ((Bon, ça fait longtemps que je n’avais pas écrit un truc sérieusement, ce n’est pas super beau et je n’ai pas fait de descriptions trop graphiques pour t’éviter des cauchemars ... Aussi, dit-moi ou il faut que je change des trucs. Aussi, je n’ai pas d’idée précise de l’emplacement de son patelin, arrange la géographie comme tu veux pour que ça reste cohérent avec ton univers l’ami xD )) '),
(10, 1, 2, 'Caresc', 'Lornas', 1, 126, 2, 5, 2, 4, 4, 0, 11, './lore_qui_est_est_celui_d_un_elfe_archer.out');

-- --------------------------------------------------------

--
-- Structure de la table `jdrRace`
--

CREATE TABLE `jdrRace` (
  `idRace` int(11) NOT NULL,
  `nomRace` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `jdrRace`
--

INSERT INTO `jdrRace` (`idRace`, `nomRace`) VALUES
(0, 'NULL'),
(1, 'HUMAIN'),
(2, 'ELFE'),
(3, 'ELEMENTAIRE'),
(4, 'NAIN'),
(5, 'SANG-MELE'),
(8, 'RA\'ZAC');

-- --------------------------------------------------------

--
-- Structure de la table `jdrStatistique`
--

CREATE TABLE `jdrStatistique` (
  `idStatistique` int(11) NOT NULL,
  `F` int(11) NOT NULL,
  `A` int(11) NOT NULL,
  `S` int(11) NOT NULL,
  `P` int(11) NOT NULL,
  `M` int(11) NOT NULL,
  `I` int(11) NOT NULL,
  `C` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `jdrStatistique`
--

INSERT INTO `jdrStatistique` (`idStatistique`, `F`, `A`, `S`, `P`, `M`, `I`, `C`) VALUES
(1, 40, 40, 45, 50, 65, 75, 60),
(2, 70, 40, 0, 20, 0, 0, 70),
(4, 65, 30, 55, 50, 50, 45, 75),
(6, 53, 60, 35, 55, 47, 60, 70),
(7, 55, 25, 20, 65, 55, 75, 75),
(8, 45, 75, 30, 75, 50, 50, 45),
(11, 35, 75, 60, 60, 50, 55, 35),
(13, 15, 40, 80, 65, 20, 20, 35),
(14, 20, 20, 20, 20, 20, 20, 20),
(18, 20, 20, 20, 20, 20, 20, 20),
(19, 20, 20, 20, 20, 20, 20, 20),
(20, 20, 20, 20, 20, 20, 20, 20),
(21, 20, 20, 20, 20, 20, 20, 20),
(22, 0, 0, 0, 0, 0, 0, 0),
(23, 0, 0, 0, 0, 0, 0, 0),
(24, 0, 0, 0, 0, 0, 0, 0),
(25, 20, 20, 20, 20, 20, 20, 20),
(26, 50, 50, 50, 50, 50, 50, 70);

-- --------------------------------------------------------

--
-- Structure de la table `jdrTypeInventaire`
--

CREATE TABLE `jdrTypeInventaire` (
  `idTypeInventaire` int(11) NOT NULL,
  `nomTypeInventaire` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `jdrTypeInventaire`
--

INSERT INTO `jdrTypeInventaire` (`idTypeInventaire`, `nomTypeInventaire`) VALUES
(0, 'NULL'),
(1, 'SAC'),
(2, 'SELLE'),
(8, 'ALLIES');

-- --------------------------------------------------------

--
-- Structure de la table `jdrTypeObjet`
--

CREATE TABLE `jdrTypeObjet` (
  `idTypeObjet` int(11) NOT NULL,
  `nomTypeObjet` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `jdrTypeObjet`
--

INSERT INTO `jdrTypeObjet` (`idTypeObjet`, `nomTypeObjet`) VALUES
(0, 'NULL'),
(1, 'CONSOMMABLE'),
(2, 'ARME'),
(3, 'DEFENSE'),
(4, 'MONTURE'),
(5, 'UTILITAIRE'),
(6, 'AUTRE');

-- --------------------------------------------------------

--
-- Structure de la table `jdrUtilisateur`
--

CREATE TABLE `jdrUtilisateur` (
  `idUtilisateur` int(11) NOT NULL,
  `nomUtilisateur` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mdpUtilisateur` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estMJ` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `jdrUtilisateur`
--

INSERT INTO `jdrUtilisateur` (`idUtilisateur`, `nomUtilisateur`, `mdpUtilisateur`, `estMJ`) VALUES
(1, 'Romain', 'R1', 0),
(2, 'Cynthia', 'C1', 0),
(3, 'Alex', 'A1', 0),
(4, 'Adrien', 'MJ1', 1);

-- --------------------------------------------------------

--
-- Index pour la table `jdrAnimal`
--
ALTER TABLE `jdrAnimal`
  ADD PRIMARY KEY (`idAnimal`);

--
-- Index pour la table `jdrAptitude`
--
ALTER TABLE `jdrAptitude`
  ADD PRIMARY KEY (`idAptitude`),
  ADD KEY `idPersonnage` (`idPersonnage`);

--
-- Index pour la table `jdrChapitre`
--
ALTER TABLE `jdrChapitre`
  ADD PRIMARY KEY (`date`);

--
-- Index pour la table `jdrClasse`
--
ALTER TABLE `jdrClasse`
  ADD PRIMARY KEY (`idClasse`);

--
-- Index pour la table `jdrEtat`
--
ALTER TABLE `jdrEtat`
  ADD PRIMARY KEY (`idEtat`);

--
-- Index pour la table `jdrFamilier`
--
ALTER TABLE `jdrFamilier`
  ADD PRIMARY KEY (`idFamilier`),
  ADD KEY `idPersonnage` (`idPersonnage`),
  ADD KEY `idStatistiqueFamilier` (`idStatistique`);

--
-- Index pour la table `jdrGenre`
--
ALTER TABLE `jdrGenre`
  ADD PRIMARY KEY (`idGenre`);

--
-- Index pour la table `jdrInventaire`
--
ALTER TABLE `jdrInventaire`
  ADD PRIMARY KEY (`idObjet`),
  ADD KEY `idPersonnage` (`idPersonnage`),
  ADD KEY `idTypeInventaire` (`idTypeInventaire`),
  ADD KEY `idTypeObjet` (`idTypeObjet`),
  ADD KEY `idAnimal` (`idAnimal`);

--
-- Index pour la table `jdrPersonnage`
--
ALTER TABLE `jdrPersonnage`
  ADD PRIMARY KEY (`idPersonnage`),
  ADD KEY `idEtat` (`idEtat`),
  ADD KEY `idRace` (`idRace`),
  ADD KEY `idClasse` (`idClasse`),
  ADD KEY `idGenre` (`idGenre`),
  ADD KEY `jdrPersonnage_ibfk_5` (`idUtilisateur`);

--
-- Index pour la table `jdrRace`
--
ALTER TABLE `jdrRace`
  ADD PRIMARY KEY (`idRace`);

--
-- Index pour la table `jdrStatistique`
--
ALTER TABLE `jdrStatistique`
  ADD PRIMARY KEY (`idStatistique`);

--
-- Index pour la table `jdrTypeInventaire`
--
ALTER TABLE `jdrTypeInventaire`
  ADD PRIMARY KEY (`idTypeInventaire`);

--
-- Index pour la table `jdrTypeObjet`
--
ALTER TABLE `jdrTypeObjet`
  ADD PRIMARY KEY (`idTypeObjet`);

--
-- Index pour la table `jdrUtilisateur`
--
ALTER TABLE `jdrUtilisateur`
  ADD PRIMARY KEY (`idUtilisateur`);

--
-- AUTO_INCREMENT pour la table `jdrAnimal`
--
ALTER TABLE `jdrAnimal`
  MODIFY `idAnimal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `jdrAptitude`
--
ALTER TABLE `jdrAptitude`
  MODIFY `idAptitude` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `jdrClasse`
--
ALTER TABLE `jdrClasse`
  MODIFY `idClasse` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `jdrEtat`
--
ALTER TABLE `jdrEtat`
  MODIFY `idEtat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `jdrFamilier`
--
ALTER TABLE `jdrFamilier`
  MODIFY `idFamilier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `jdrGenre`
--
ALTER TABLE `jdrGenre`
  MODIFY `idGenre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `jdrInventaire`
--
ALTER TABLE `jdrInventaire`
  MODIFY `idObjet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `jdrPersonnage`
--
ALTER TABLE `jdrPersonnage`
  MODIFY `idPersonnage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `jdrRace`
--
ALTER TABLE `jdrRace`
  MODIFY `idRace` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `jdrStatistique`
--
ALTER TABLE `jdrStatistique`
  MODIFY `idStatistique` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `jdrTypeInventaire`
--
ALTER TABLE `jdrTypeInventaire`
  MODIFY `idTypeInventaire` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `jdrTypeObjet`
--
ALTER TABLE `jdrTypeObjet`
  MODIFY `idTypeObjet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `jdrUtilisateur`
--
ALTER TABLE `jdrUtilisateur`
  MODIFY `idUtilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `jdrAptitude`
--
ALTER TABLE `jdrAptitude`
  ADD CONSTRAINT `jdrAptitude_ibfk_1` FOREIGN KEY (`idPersonnage`) REFERENCES `jdrPersonnage` (`idPersonnage`);

--
-- Contraintes pour la table `jdrFamilier`
--
ALTER TABLE `jdrFamilier`
  ADD CONSTRAINT `jdrFamilier_ibfk_1` FOREIGN KEY (`idPersonnage`) REFERENCES `jdrPersonnage` (`idPersonnage`),
  ADD CONSTRAINT `jdrFamilier_ibfk_2` FOREIGN KEY (`idStatistique`) REFERENCES `jdrStatistique` (`idStatistique`);

--
-- Contraintes pour la table `jdrInventaire`
--
ALTER TABLE `jdrInventaire`
  ADD CONSTRAINT `jdrInventaire_ibfk_1` FOREIGN KEY (`idPersonnage`) REFERENCES `jdrPersonnage` (`idPersonnage`),
  ADD CONSTRAINT `jdrInventaire_ibfk_2` FOREIGN KEY (`idTypeInventaire`) REFERENCES `jdrTypeInventaire` (`idTypeInventaire`),
  ADD CONSTRAINT `jdrInventaire_ibfk_3` FOREIGN KEY (`idTypeObjet`) REFERENCES `jdrTypeObjet` (`idTypeObjet`),
  ADD CONSTRAINT `jdrInventaire_ibfk_4` FOREIGN KEY (`idAnimal`) REFERENCES `jdrAnimal` (`idAnimal`);

--
-- Contraintes pour la table `jdrPersonnage`
--
ALTER TABLE `jdrPersonnage`
  ADD CONSTRAINT `jdrPersonnage_ibfk_1` FOREIGN KEY (`idEtat`) REFERENCES `jdrEtat` (`idEtat`),
  ADD CONSTRAINT `jdrPersonnage_ibfk_2` FOREIGN KEY (`idRace`) REFERENCES `jdrRace` (`idRace`),
  ADD CONSTRAINT `jdrPersonnage_ibfk_3` FOREIGN KEY (`idClasse`) REFERENCES `jdrClasse` (`idClasse`),
  ADD CONSTRAINT `jdrPersonnage_ibfk_4` FOREIGN KEY (`idGenre`) REFERENCES `jdrGenre` (`idGenre`),
  ADD CONSTRAINT `jdrPersonnage_ibfk_5` FOREIGN KEY (`idUtilisateur`) REFERENCES `jdrUtilisateur` (`idUtilisateur`);
COMMIT;
