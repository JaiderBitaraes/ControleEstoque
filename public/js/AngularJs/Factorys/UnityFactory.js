app.factory('UnityFactory', function ($http) {
    var _create =function (obj) {
        return $http.post("/api/unity/create", obj);
    };

    var _getall = function () {
        return $http.get("/api/unity/getAll");

    };

    var _delete = function(id){
        return $http.delete("/api/unity/delete/"+id);
    }

    var _update = function (obj) {
        return $http.put("/api/unity/update/"+obj.id, obj);

    }

    return {
        create:_create,
        delete:_delete,
        getall:_getall,
        update:_update
    }



});