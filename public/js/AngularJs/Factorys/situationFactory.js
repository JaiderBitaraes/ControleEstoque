app.factory('situationFactory',function($http){
    var _create = function(obj){
        return $http.post('/api/situation/create',obj);
    }
    var _getAll = function(){
        return $http.get('/api/situation/getAll');
    }


    return{
        create:_create,
        getAll:_getAll
    }
});

