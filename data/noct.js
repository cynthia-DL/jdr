noct : {
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
	stats : {
		F : 53,
		A : 60,
		S : 35,
		P : 55,
		M : 47,
		I : 60,
		C : 70
	},
	competences : [
		{
			titre: "Oeil d'aigle",
			desc : "+5 en perseption mais exprime mal sa vision"
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

}