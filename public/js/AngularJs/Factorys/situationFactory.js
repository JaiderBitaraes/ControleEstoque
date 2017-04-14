app.factory('situationFactory',function($http){
    var _create = function(obj){
        return $http.post('/api/situation/create',obj);
    }
    return{
        create:_create
    }
});
