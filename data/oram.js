oram : {
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
	stats : {
		F : 40,
		A : 40,
		S : 45,
		P : 50,
		M : 65,
		I : 75,
		C : 60
	},
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
				contenu : "0po",
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
				P : 20,
				C : 70
			},
			desc : "L'oubliée"
		}
	]

}