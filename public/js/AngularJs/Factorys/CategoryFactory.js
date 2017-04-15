app.factory("CategoryFactory", function($http){
    var _create = function(obj){
        return $http.post('/api/category/create',obj);

    }
    var _getAll = function(obj){
        return $http.get('/api/category/getAll',obj);

    }
    var _delete = function(id){
        return $http.delete('/api/category/delete/'+id);

    }
    var _update = function(obj){
        return $http.put('/api/category/update/'+obj.id, obj);

    }

    return {
        create:_create,
        getAll:_getAll,
        update:_update,
        delete:_delete
    }

})