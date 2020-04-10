function makeServiceAjax(){
	var service = {
      getStoryLine:getStoryLine  
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
                } else reject("Erreur 1 : "+http.serverResponse);
            };
            http.onerror = function(){
                reject("Erreur 2 : "+http.serverResponse);
            };
        });
    }

    return service;
}