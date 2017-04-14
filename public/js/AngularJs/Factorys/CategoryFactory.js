app.factory("CategoryFactory", function($http){
    var _create = function(obj){
        return $http.post('/api/category/create',obj);

    }
    return {
        create: _create
    }

})