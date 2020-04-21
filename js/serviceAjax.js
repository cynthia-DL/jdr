function makeServiceAjax(){
    var service = {
      addAptitude:addAptitude,
      addChapitre:addChapitre,
      addFamilier:addFamilier,
      addObjet:addObjet,
      addPersonnage:addPersonnage,

      deleteAptitude:deleteAptitude,
      deleteAnimal:deleteAnimal,
      deleteClasse:deleteClasse,
      deleteEtat:deleteEtat,
      deleteGenre:deleteGenre,
      deleteObjet:deleteObjet,
      deleteRace:deleteRace,
      deleteTypeInventaire:deleteTypeInventaire,
      deleteTypeObjet:deleteTypeObjet,
      deletePersonnage:deletePersonnage,
      deleteChapitre:deleteChapitre,
      deleteFamilier:deleteFamilier,

      getAllAnimal:getAllAnimal,
      getAllClasse:getAllClasse,
      getAllEtat:getAllEtat,
      getAllGenre:getAllGenre,
      getAllRace:getAllRace,
      getAllTypeInventaire:getAllTypeInventaire,
      getAllTypeObjet:getAllTypeObjet,
      getAllVignette:getAllVignette,
      getPersonnage:getPersonnage,
      getStoryLine:getStoryLine,
      
      updateAptitude:updateAptitude,
      updateChapitre:updateChapitre,
      updateFamilier:updateFamilier,
      updateObjet:updateObjet
    };

    //ADD
    function addAptitude(estUneCompetence, idPersonnage, nom, description){
        var url = "php/post.php?case=aptitude&estUneCompetence="+estUneCompetence+"&idPersonnage="+idPersonnage+"&nom="+nom+"&description="+description;
        console.log(url);
        return new Promise(function(resolve,reject){
            http = new XMLHttpRequest();
            http.open("GET",url);
            http.send();
            http.onload=function(){
                if (http.status == 200){
                    resolve(this.response);
                } else reject("Erreur addAptitude 1 : "+http.serverResponse);
            };
            http.onerror = function(){
                reject("Erreur addAptitude 2 : "+http.serverResponse);
            };
        });
    }

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

    function addFamilier(idPersonnage, nom, pv, armure, description, force, agilite, social, perception, mental, intelligence, constitution){
        var url = "./php/post.php?case=familier&idPersonnage="+idPersonnage+"&nom="+nom+"&pv="+pv+"&armure="+armure+
        "&description="+description+"&force="+force+"&agilite="+agilite+"&social="+social+"&perception="+perception+
        "&mental="+mental+"&intelligence="+intelligence+"&constitution="+constitution;
        return new Promise(function(resolve,reject){
            http = new XMLHttpRequest();
            http.open("GET",url);
            http.send();
            http.onload=function(){
                if (http.status == 200){
                    resolve(this.response);
                } else reject("Erreur addFamilier 1 : "+http.serverResponse);
            };
            http.onerror = function(){
                reject("Erreur addFamilier 2 : "+http.serverResponse);
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

    //DELETE
    function deleteAptitude(id) {
        var url = "./php/delete.php?case=aptitude&id="+id;
        window.location.reload();
        return new Promise(function(resolve,reject){
            http = new XMLHttpRequest();
            http.open("GET",url);
            http.send();
            http.onload=function(){
                if (http.status == 200){
                    resolve(this.response);
                } else reject("Erreur deleteAnimal 1 : "+http.serverResponse);
            };
            http.onerror = function(){
                reject("Erreur deleteAnimal 2 : "+http.serverResponse);
            };
        });
    }

    function deleteAnimal(id) {
        var url = "./php/delete.php?case=all_animal&id="+id;
        window.location.reload();
        return new Promise(function(resolve,reject){
            http = new XMLHttpRequest();
            http.open("GET",url);
            http.send();
            http.onload=function(){
                if (http.status == 200){
                    resolve(this.response);
                } else reject("Erreur deleteAnimal 1 : "+http.serverResponse);
            };
            http.onerror = function(){
                reject("Erreur deleteAnimal 2 : "+http.serverResponse);
            };
        });
    }

    function deleteClasse(id) {
        var url = "./php/delete.php?case=all_classe&id="+id;
        window.location.reload();
        return new Promise(function(resolve,reject){
            http = new XMLHttpRequest();
            http.open("GET",url);
            http.send();
            http.onload=function(){
                if (http.status == 200){
                    resolve(this.response);
                } else reject("Erreur deleteClasse 1 : "+http.serverResponse);
            };
            http.onerror = function(){
                reject("Erreur deleteClasse 2 : "+http.serverResponse);
            };
        });
    }

    function deleteEtat(id) {
        var url = "./php/delete.php?case=all_etat&id="+id;
        window.location.reload();
        return new Promise(function(resolve,reject){
            http = new XMLHttpRequest();
            http.open("GET",url);
            http.send();
            http.onload=function(){
                if (http.status == 200){
                    resolve(this.response);
                } else reject("Erreur deleteEtat 1 : "+http.serverResponse);
            };
            http.onerror = function(){
                reject("Erreur deleteEtat 2 : "+http.serverResponse);
            };
        });
    }

    function deleteGenre(id) {
        var url = "./php/delete.php?case=all_genre&id="+id;
        window.location.reload();
        return new Promise(function(resolve,reject){
            http = new XMLHttpRequest();
            http.open("GET",url);
            http.send();
            http.onload=function(){
                if (http.status == 200){
                    resolve(this.response);
                } else reject("Erreur deleteGenre 1 : "+http.serverResponse);
            };
            http.onerror = function(){
                reject("Erreur deleteGenre 2 : "+http.serverResponse);
            };
        });
    }

    function deleteObjet(id) {
        var url = "./php/delete.php?case=objet&id="+id;
        window.location.reload();
        return new Promise(function(resolve,reject){
            http = new XMLHttpRequest();
            http.open("GET",url);
            http.send();
            http.onload=function(){
                if (http.status == 200){
                    resolve(this.response);
                } else reject("Erreur deleteGenre 1 : "+http.serverResponse);
            };
            http.onerror = function(){
                reject("Erreur deleteGenre 2 : "+http.serverResponse);
            };
        });
    }

    function deleteRace(id) {
        var url = "./php/delete.php?case=all_race&id="+id;
        window.location.reload();
        return new Promise(function(resolve,reject){
            http = new XMLHttpRequest();
            http.open("GET",url);
            http.send();
            http.onload=function(){
                if (http.status == 200){
                    resolve(this.response);
                } else reject("Erreur deleteRace 1 : "+http.serverResponse);
            };
            http.onerror = function(){
                reject("Erreur deleteRace 2 : "+http.serverResponse);
            };
        });
    }

    function deleteTypeInventaire(id) {
        var url = "./php/delete.php?case=all_type_inventaire&id="+id;
        window.location.reload();
        return new Promise(function(resolve,reject){
            http = new XMLHttpRequest();
            http.open("GET",url);
            http.send();
            http.onload=function(){
                if (http.status == 200){
                    resolve(this.response);
                } else reject("Erreur deleteTypeInventaire 1 : "+http.serverResponse);
            };
            http.onerror = function(){
                reject("Erreur deleteTypeInventaire 2 : "+http.serverResponse);
            };
        });
    }

    function deleteTypeObjet(id) {
        var url = "./php/delete.php?case=all_type_objet&id="+id;
        window.location.reload();
        return new Promise(function(resolve,reject){
            http = new XMLHttpRequest();
            http.open("GET",url);
            http.send();
            http.onload=function(){
                if (http.status == 200){
                    resolve(this.response);
                } else reject("Erreur deleteTypeObjet 1 : "+http.serverResponse);
            };
            http.onerror = function(){
                reject("Erreur deleteTypeObjet 2 : "+http.serverResponse);
            };
        });
    }

    function deletePersonnage(id) {
        var url = "./php/delete.php?case=personnage&id="+id;
        window.location.reload();
        return new Promise(function(resolve,reject){
            http = new XMLHttpRequest();
            http.open("GET",url);
            http.send();
            http.onload=function(){
                if (http.status == 200){
                    resolve(this.response);
                } else reject("Erreur deletePersonnage 1 : "+http.serverResponse);
            };
            http.onerror = function(){
                reject("Erreur deletePersonnage 2 : "+http.serverResponse);
            };
        });
    }

    function deleteChapitre(id) {
        var url = "./php/delete.php?case=storyline&id="+id;
        return new Promise(function(resolve,reject){
            http = new XMLHttpRequest();
            http.open("GET",url);
            http.send();
            http.onload=function(){
                if (http.status == 200){
                    resolve(this.response);
                } else reject("Erreur deleteChapitre 1 : "+http.serverResponse);
            };
            http.onerror = function(){
                reject("Erreur deleteChapitre 2 : "+http.serverResponse);
            };
        });
    }

    function deleteFamilier(id) {
        var url = "./php/delete.php?case=familier&id="+id;
        return new Promise(function(resolve,reject){
            http = new XMLHttpRequest();
            http.open("GET",url);
            http.send();
            http.onload=function(){
                if (http.status == 200){
                    resolve(this.response);
                } else reject("Erreur deleteFamilier 1 : "+http.serverResponse);
            };
            http.onerror = function(){
                reject("Erreur deleteFamilier 2 : "+http.serverResponse);
            };
        });
    }

    //GET
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

    //UPDATES
    function updateAptitude(estUneCompetence, idPersonnage, nom, description, idAptitude){
        var url = "php/update.php?case=aptitude&estUneCompetence="+estUneCompetence+
        "&idPersonnage="+idPersonnage+"&nom="+nom+"&description="+description+"&idAptitude="+idAptitude;
        console.log(url);
        return new Promise(function(resolve,reject){
            http = new XMLHttpRequest();
            http.open("GET",url);
            http.send();
            http.onload=function(){
                if (http.status == 200){
                    resolve(this.response);
                } else reject("Erreur updateAptitude 1 : "+http.serverResponse);
            };
            http.onerror = function(){
                reject("Erreur updateAptitude 2 : "+http.serverResponse);
            };
        });
    }

    function updateChapitre(contenu, id){
        var url = "php/update.php?case=chapitre&id="+id+"&contenu="+contenu;
        console.log(url);
        return new Promise(function(resolve,reject){
            http = new XMLHttpRequest();
            http.open("GET",url);
            http.send();
            http.onload=function(){
                if (http.status == 200){
                    resolve(this.response);
                } else reject("Erreur updateChapitre 1 : "+http.serverResponse);
            };
            http.onerror = function(){
                reject("Erreur updateChapitre 2 : "+http.serverResponse);
            };
        });
    }

    //this.props.id, nom, pv, pv, armure, description, force, agilite, social, perception, mental, intelligence, constitution, this.props.familier.idFamilier

    function updateFamilier(idPersonnage, idStatistique, nom, pv, pvMax, armure, description, force, agilite, social, 
        perception, mental, intelligence, constitution, idFamilier){
        var url = "php/update.php?case=familier&idPersonnage="+idPersonnage+"&idStatistique="+idStatistique+"&nom="+nom+"&pv="+pv+"&pvMax="+pvMax+"&armure="+armure+
        "&description="+description+"&force="+force+"&agilite="+agilite+"&social="+social+"&perception="+perception+
        "&mental="+mental+"&intelligence="+intelligence+"&constitution="+constitution+"&idFamilier="+idFamilier;
        return new Promise(function(resolve,reject){
            http = new XMLHttpRequest();
            http.open("GET",url);
            http.send();
            http.onload=function(){
                if (http.status == 200){
                    resolve(this.response);
                } else reject("Erreur updateChapitre 1 : "+http.serverResponse);
            };
            http.onerror = function(){
                reject("Erreur updateChapitre 2 : "+http.serverResponse);
            };
        });
    }

    function updateObjet(idPersonnage, idTypeInventaire, nomObjet, idTypeObjet, degatObjet, 
        protectionObjet, contenuObjet, quantiteObjet, idAnimal, descriptionObjet, idObjet){
        var url = "php/update.php?case=objet&idPersonnage="+idPersonnage+"&idTypeInventaire="+idTypeInventaire
        +"&nomObjet="+nomObjet+"&idTypeObjet="+idTypeObjet+"&degatObjet="+degatObjet+"&protectionObjet="+protectionObjet
        +"&contenuObjet="+contenuObjet+"&quantiteObjet="+quantiteObjet+"&idAnimal="+idAnimal+"&descriptionObjet="+descriptionObjet
        +"&idObjet="+idObjet;
        console.log(url);
        return new Promise(function(resolve,reject){
            http = new XMLHttpRequest();
            http.open("GET",url);
            http.send();
            http.onload=function(){
                if (http.status == 200){
                    resolve(this.response);
                } else reject("Erreur updateObjet 1 : "+http.serverResponse);
            };
            http.onerror = function(){
                reject("Erreur updateObjet 2 : "+http.serverResponse);
            };
        });
    }

    

    return service;
}