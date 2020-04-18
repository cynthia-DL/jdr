{
	{
		etat: "Actif",
		nom : "De Barbe",
		prenom : "Oram",
		age : 27,
		niveau : 2,
		race : "Humain",
		classe : "Mage",
		genre : "Homme",
		pv : 7,
		pvMax : 7,
		armure : 0,
		statsData : [
		[
		{axis : "Force" , value : 0.4},
		{axis : "Agilité" , value : 0.4},
		{axis : "Social" , value : 0.45},
		{axis : "Perception" , value : 0.5},
		{axis : "Mental" , value : 0.65},
		{axis : "Inteligence" , value : 0.75},
		{axis : "Constitution" , value : 0.6}
		]
		],

		competences : [
		{
			titre: "Invocation",
			desc : "Invoque une armure enchantée"
		},

		{
			titre: "Sort de soin",
			desc : "Soigne ses aliées, peux s'évanouir pendant 3h"
		}

		],

		traits : [
		{
			titre: "",
			desc : "A une aptitide pour les sort de vent, a un malus de 5 pour les autres éléments"
		}
		],

		inventaire : {
		sac : [
		{
			label : "Dague",
			type : "ARME",
			degat : 4
		},

		{
			label : "Bourse",
			type : "CONSOMMABLE",
			contenu : 0,
			desc : "PUTAIN DE VOLEURS !!!"
		},

		{
			label : "Tempete",
			type : "MONTURE",
			animal : "cheval"
		},

		{
			label : "Fourche",
			type : "ARME",
			degat : 4
		},

		{
			label : "Plume d'oie",
			type : "UTILITAIRE",
			desc : "Pour écrire"
		}
		],

		selle : [
		{
			label : "Cuir de boeuf",
			type : "CONSOMMABLE",
		},
		
		{
			label : "Viande de boeuf",
			type : "CONSOMMABLE",
			qtte : 2
		}
		]
	},

	familier : [
	{
		nom : "Rififi",
		type : "Armure",
		pv : 1,
		pvMax : 1,
		armure : 3, 
		stats : {
			F : 70,
			A : 40,
			P : 50,
			C : 70
		},
		desc : "L'oubliée"
	}
	]

}, 
{
	etat: "Actif",
	nom : "De Wynter",
	prenom : "Noct",
	age : 21,
	niveau : 2,
	race : "Humain",
	classe : "Assassin",
	genre : "Homme",
	pv : 8,
	pvMax : 8,
	armure : 2,
	statsData : [
	[
	{axis : "Force" , value : 0.53},
	{axis : "Agilité" , value : 0.6},
	{axis : "Social" , value : 0.35},
	{axis : "Perception" , value : 0.55},
	{axis : "Mental" , value : 0.47},
	{axis : "Inteligence" , value : 0.60},
	{axis : "Constitution" , value : 0.70}
	]
	],
	competences : [
	{
		titre: "Oeil d'aigle",
		desc : "+5 en perception mais exprime mal sa vision"
	},

	{
		titre: "Frappe éclaire",
		desc : "+5 en force et +5 en agilité mais -10 en constitution"
	}

	],

	traits : [
	{
		titre: "",
		desc : "+5 en résistence aux attaques surprises"
	}
	],

	inventaire : {
	sac : [
	{
		label : "Katana",
		type : "ARME",
		degat : 6
	},
	{
		label : "Tunique",
		type : "DEFENSE",
		protection : 0,
		desc : "Noire et violette"
	},

	{
		label : "Bourse",
		type : "CONSOMMABLE",
		contenu : "10po"
	},

	{
		label : "Pétard",
		type : "ARME",
		qtte : 3
	},

	{
		label : "Couteau de lancer",
		type : "ARME",
		qtte : 4
	},

	{
		label : "Caillou",
		type : "UTILITAIRE",
		desc : "Le saint caillou"
	},

	{
		label : "Lightning",
		type : "MONTURE",
		animal : "cheval"
	},

	{
		label : "Fourche",
		type : "ARME",
		degat : 4
	}
	],

	selle : [			
	{
		label : "Tissus petit",
		type : "CONSOMMABLE"
	}
	]
}

},

{
	etat: "Actif",
	nom : "Lozach",
	prenom : "Gwendolynn",
	age : 21,
	niveau : 2,
	race : "Humain",
	classe : "Chevalier",
	genre : "Femme",
	pv : 5,
	pvMax : 5,
	armure : 3,
	statsData : [
	[
	{axis : "Force" , value : 0.65},
	{axis : "Agilité" , value : 0.30},
	{axis : "Social" , value : 0.55},
	{axis : "Perception" , value : 0.5},
	{axis : "Mental" , value : 0.5},
	{axis : "Inteligence" , value : 0.45},
	{axis : "Constitution" , value : 0.75}
	]
	],
	competences : [
	{
		titre: "Alcoolique",
		desc : "+5 en force et -5 en perception quand Gwen est bourée"
	},

	{
		titre: "Dernier rempard",
		desc : "Peux encaisser les attaques pour un allié en sacrifiant son tour dans un combat"
	}

	],

	traits : [
	{
		titre: "Intimidation",
		desc : "Impressionne les PNJ facillement imprétionnables"
	},

	{
		titre: "Armure Lourde",
		desc : "Pas tres discrete... (cling, cling, cling...)"
	}
	],

	inventaire : {
	sac : [
	{
		label : "Vodka",
		type : "CONSOMMABLE",
		qtte : "50%" 
	},
	{
		label : "Hache",
		type : "ARME",
		degat : 6
	},

	{
		label : "Bourse",
		type : "CONSOMMABLE",
		contenu : "17po"
	},

	{
		label : "Bouclier",
		type : "DEFENSE",
		protection : 4,
		desc : "Bouclier en bois rond, un peu endommagé"
	},

	{
		label : "Armure",
		type : "DEFENSE",
		protection : 3
	},

	{
		label : "Poignard",
		type : "ARME",
		degat : 4,
		desc : "Un petit poignard qu'elle garde pres d'elle quand elle dort"
	},

	{
		label : "Thé a la menthe",
		type : "CONSOMMABLE",
		qtte : "Asser pour deux tasses"
	},

	{
		label : "Pastille magique",
		type : "CONSOMMABLE",
		desc : "Donné par Angela. On ne sais pas encore ce que ca fait"
	},

	{
		label : "Fourche",
		type : "ARME",
		degat : 4,
		desc : "Bon état"
	},

	{
		label : "Charline",
		type : "MONTURE",
		animal : "cheval"
	}
	],

	selle : [
	{
		label : "Pain",
		type : "CONSOMMABLE",
		qtte : 0.5
	},

	{
		label : "Gourde d'eau",
		type : "CONSOMMABLE",
		qtte : "1L"
	},
	
	{
		label : "Fruits",
		type : "CONSOMMABLE",
		qtte : 6
	},

	{
		label : "Bois",
		type : "CONSOMMABLE",
		qtte : "Asser pour un feu"
	},
	]
},

familier : [
{
	nom : "Doudou",
	type : "Chien",
	pv : 1,
	pvMax : 1,
	armure : 0, 
	stats : {
		F : 15,
		A : 40,
		S : 80,
		P : 65,
		M : 20,
		I : 20,
		C : 35
	},
	desc : "L'oublié"
}
]

},

{
	etat: "Mort",
	nom : "",
	prenom : "",
	age : null,
	niveau : null,
	race : "",
	classe : "",
	genre : "",
	pv : 5,
	pvMax : 10,
	armure : null,
	statsData : [
	[
	{axis : "Force" , value : 0.65},
	{axis : "Agilité" , value : 0.30},
	{axis : "Social" , value : 0.55},
	{axis : "Perception" , value : 0.5},
	{axis : "Mental" , value : 0.5},
	{axis : "Inteligence" , value : 0.45},
	{axis : "Constitution" , value : 0.75}
	]
	],
	competences : [],
	traits : [],
	inventaire : {
}

},

{
	etat: "Reroll",
	nom : "Le Barbare",
	prenom : "Oram2",
	age : null,
	niveau : null,
	race : "",
	classe : "",
	genre : "",
	pv : 2,
	pvMax : 10,
	armure : null,
	statsData : [
	[
	{axis : "Force" , value : 0.65},
	{axis : "Agilité" , value : 0.30},
	{axis : "Social" , value : 0.55},
	{axis : "Perception" , value : 0.5},
	{axis : "Mental" , value : 0.5},
	{axis : "Inteligence" , value : 0.45},
	{axis : "Constitution" , value : 0.75}
	]
	],
	competences : [],
	traits : [],
	inventaire : {
}

},
]
}