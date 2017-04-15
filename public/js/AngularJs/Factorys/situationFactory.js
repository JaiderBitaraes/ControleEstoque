app.factory('situationFactory',function($http){
    var _create = function(obj){
        return $http.post('/api/situation/create',obj);
    }
    var _getAll = function(){
        return $http.get('/api/situation/getAll');
    }
    var _delete= function(id){
        return $http.delete('/api/situation/delete/'+id);
    }
    var _update= function(obj){
        return $http.put('/api/situation/update/'+obj.id, obj)
    }
    return{
        update:_update,
        delete:_delete,
        create:_create,
        getAll:_getAll
    }
});

