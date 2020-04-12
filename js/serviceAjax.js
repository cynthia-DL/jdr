function makeServiceAjax(){
	var service = {
      addChapitre:addChapitre,
      addObjet:addObjet,
      addPersonnage:addPersonnage,
      getAllAnimal:getAllAnimal,
      getAllClasse:getAllClasse,
      getAllEtat:getAllEtat,
      getAllGenre:getAllGenre,
      getAllRace:getAllRace,
      getAllTypeInventaire:getAllTypeInventaire,
      getAllTypeObjet:getAllTypeObjet,
      getAllVignette:getAllVignette,
      getPersonnage:getPersonnage,
      getStoryLine:getStoryLine
    };

    function addChapitre(contenu){
        var url = "./php/post.php?case=chapitre&contenu="+contenu;
        return new Promise(function(resolve,reject){
            http = new XMLHttpRequest();
            http.open("GET",url);
            http.send();
            http.onload=function(){
                if (http.status == 200){
                    resolve(this.response);
                } else reject("Erreur addChapitre 1 : "+http.serverResponse);
            };
            http.onerror = function(){
                reject("Erreur addChapitre 2 : "+http.serverResponse);
            };
        });
    }

    function addObjet(idPersonnage, nom, typeInventaire, degats, protection, contenu, typeObjet, quantite, typeAnimal, description) {
        var url = "./php/post.php?case=objet&idPersonnage="+idPersonnage+"&nom="+nom+"&typeInventaire="+typeInventaire+
        "&degats="+degats+"&protection="+protection+"&contenu="+contenu+"&typeObjet="+typeObjet+"&quantite="+quantite+
        "&typeAnimal="+typeAnimal+"&description="+description;
        return new Promise(function(resolve,reject){
            http = new XMLHttpRequest();
            http.open("GET",url);
            http.send();
            http.onload=function(){
                if (http.status == 200){
                    resolve(this.response);
                } else reject("Erreur addObjet 1 : "+http.serverResponse);
            };
            http.onerror = function(){
                reject("Erreur addObjet 2 : "+http.serverResponse);
            };
        });
    }

    function addPersonnage(nom, prenom, pv, race, genre, age, niveau, classe, lore, force, agilite, 
        social, perception, mental, intelligence, constitution) {
        var url = "./php/post.php?case=personnage&nom="+nom+"&prenom="+prenom+"&pv="+pv+"&race="+race+"&genre="+genre+
                "&age="+age+"&niveau="+niveau+"&classe="+classe+"&lore="+lore+"&force="+force+"&agilite="+agilite+ 
                "&social="+social+"&perception="+perception+"&mental="+mental+"&intelligence="+intelligence+"&constitution="+constitution;
        return new Promise(function(resolve,reject){
            http = new XMLHttpRequest();
            http.open("GET",url);
            http.send();
            http.onload=function(){
                if (http.status == 200){
                    resolve(this.response);
                } else reject("Erreur addPersonnage 1 : "+http.serverResponse);
            };
            http.onerror = function(){
                reject("Erreur addPersonnage 2 : "+http.serverResponse);
            };
        });
    }

    function getAllAnimal() {
        var url = "./php/get.php?case=all_animal";
        return new Promise(function(resolve,reject){
            http = new XMLHttpRequest();
            http.open("GET",url);
            http.send();
            http.onload=function(){
                if (http.status == 200){
                    resolve(this.response);
                } else reject("Erreur getAllAnimal 1 : "+http.serverResponse);
            };
            http.onerror = function(){
                reject("Erreur getAllAnimal 2 : "+http.serverResponse);
            };
        });
    }

    function getAllClasse() {
        var url = "./php/get.php?case=all_classe";
        return new Promise(function(resolve,reject){
            http = new XMLHttpRequest();
            http.open("GET",url);
            http.send();
            http.onload=function(){
                if (http.status == 200){
                    resolve(this.response);
                } else reject("Erreur getAllClasse 1 : "+http.serverResponse);
            };
            http.onerror = function(){
                reject("Erreur getAllClasse 2 : "+http.serverResponse);
            };
        });
    }

    function getAllEtat() {
        var url = "./php/get.php?case=all_etat";
        return new Promise(function(resolve,reject){
            http = new XMLHttpRequest();
            http.open("GET",url);
            http.send();
            http.onload=function(){
                if (http.status == 200){
                    resolve(this.response);
                } else reject("Erreur getAllEtat 1 : "+http.serverResponse);
            };
            http.onerror = function(){
                reject("Erreur getAllEtat 2 : "+http.serverResponse);
            };
        });
    }

    function getAllGenre() {
        var url = "./php/get.php?case=all_genre";
        return new Promise(function(resolve,reject){
            http = new XMLHttpRequest();
            http.open("GET",url);
            http.send();
            http.onload=function(){
                if (http.status == 200){
                    resolve(this.response);
                } else reject("Erreur getAllGenre 1 : "+http.serverResponse);
            };
            http.onerror = function(){
                reject("Erreur getAllGenre 2 : "+http.serverResponse);
            };
        });
    }

    function getAllRace() {
        var url = "./php/get.php?case=all_race";
        return new Promise(function(resolve,reject){
            http = new XMLHttpRequest();
            http.open("GET",url);
            http.send();
            http.onload=function(){
                if (http.status == 200){
                    resolve(this.response);
                } else reject("Erreur getAllRace 1 : "+http.serverResponse);
            };
            http.onerror = function(){
                reject("Erreur getAllRace 2 : "+http.serverResponse);
            };
        });
    }

    function getAllTypeInventaire() {
        var url = "./php/get.php?case=all_type_inventaire";
        return new Promise(function(resolve,reject){
            http = new XMLHttpRequest();
            http.open("GET",url);
            http.send();
            http.onload=function(){
                if (http.status == 200){
                    resolve(this.response);
                } else reject("Erreur getAllTypeInventaire 1 : "+http.serverResponse);
            };
            http.onerror = function(){
                reject("Erreur getAllTypeInventaire 2 : "+http.serverResponse);
            };
        });
    }

    function getAllTypeObjet() {
        var url = "./php/get.php?case=all_type_objet";
        return new Promise(function(resolve,reject){
            http = new XMLHttpRequest();
            http.open("GET",url);
            http.send();
            http.onload=function(){
                if (http.status == 200){
                    resolve(this.response);
                } else reject("Erreur getAllTypeObjet 1 : "+http.serverResponse);
            };
            http.onerror = function(){
                reject("Erreur getAllTypeObjet 2 : "+http.serverResponse);
            };
        });
    }

    function getAllVignette() {
        var url = "./php/get.php?case=vignette";
        return new Promise(function(resolve,reject){
            http = new XMLHttpRequest();
            http.open("GET",url);
            http.send();
            http.onload=function(){
                if (http.status == 200){
                    resolve(this.response);
                } else reject("Erreur getAllVignette 1 : "+http.serverResponse);
            };
            http.onerror = function(){
                reject("Erreur getAllVignette 2 : "+http.serverResponse);
            };
        });
    }

    function getPersonnage(idPersonnage) {
        var url = "./php/get.php?case=personnage&id="+idPersonnage;
        return new Promise(function(resolve,reject){
            http = new XMLHttpRequest();
            http.open("GET",url);
            http.send();
            http.onload=function(){
                if (http.status == 200){
                    resolve(this.response);
                } else reject("Erreur getPersonnage 1 : "+http.serverResponse);
            };
            http.onerror = function(){
                reject("Erreur getPersonnage 2 : "+http.serverResponse);
            };
        });
    }

    function getStoryLine() {
        var url = "./php/get.php?case=storyline";
        return new Promise(function(resolve,reject){
            http = new XMLHttpRequest();
            http.open("GET",url);
            http.send();
            http.onload=function(){
                if (http.status == 200){
                    resolve(this.response);
                } else reject("Erreur getStoryLine 1 : "+http.serverResponse);
            };
            http.onerror = function(){
                reject("Erreur getStoryLine 2 : "+http.serverResponse);
            };
        });
    }

    return service;
}