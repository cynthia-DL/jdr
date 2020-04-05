gwendolynn : {
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
	stats : {
		F : 65,
		A : 30,
		S : 55,
		P : 50,
		M : 50,
		I : 45,
		C : 75
	},
	competences : [
		{
			titre: "Alcoolique",
			desc : "+5 en force et -5 en perseption quand Gwen est bourée"
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
				contenu : 17
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
			},

			{
				label : "Fourche",
				type : "ARME",
				degat : 4
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

}