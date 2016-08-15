app.factory('stateService', function($http,RESOURCES) {
  var locationService = {
    async: function() {
    	console.log(" console res "+RESOURCES.CATEGORIES);
      // $http returns a promise, which has a then function, which also returns a promise
      var promise = $http.get(RESOURCES.STATE_LIST).then(function (response) {
        // The then function here is an opportunity to modify the response
        console.log(response);
        // The return value gets picked up by the then in the controller.
        return response.data;
      });
      // Return the promise to the controller
      return promise;
    }
  };
  return locationService;
});


app.factory('cityService', function($http,RESOURCES) {
	  var locationService = {
	    async: function() {
	    	console.log(" console res "+RESOURCES.CATEGORIES);
	      // $http returns a promise, which has a then function, which also returns a promise
	      var promise = $http.get(RESOURCES.CITY_LIST).then(function (response) {
	        // The then function here is an opportunity to modify the response
	        console.log(response);
	        // The return value gets picked up by the then in the controller.
	        return response.data;
	      });
	      // Return the promise to the controller
	      return promise;
	    }
	  };
	  return locationService;
	});