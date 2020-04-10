function makeServiceAjax(){
	var urlBase = "/php/";
	var service = {
      getStoryLine:getStoryLine  
    };

    function getStoryLine() {
        var url = urlBase+"get.php"+offset;
        return new Promise(function(resolve,reject){
            http = new XMLHttpRequest();
            http.open("GET",url);
            http.send();
            http.onload=function(){
                if (http.status == 200){
                    resolve(this.response);
                } else reject("Erreur 1 : "+http.serverResponse);
            };
            http.onerror = function(){
                reject("Erreur 2 : "+http.serverResponse);
            };
        });
    }

    return service;
}