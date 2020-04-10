function makeServiceAjax(){
	var service = {
      getStoryLine:getStoryLine,
      getPersonnage:getPersonnage,
    };

    function getStoryLine() {
        var url = "./php/get.php?case=story_line";
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

    return service;
}