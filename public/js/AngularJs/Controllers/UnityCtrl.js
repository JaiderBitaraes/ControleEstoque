app.controller('UnityCtrl', function ($scope, UnityFactory) {
    $scope.create = function (obj) {
        console.log(obj);
        UnityFactory
            .create(obj)
            .then(function (res) {
                $scope.unitys.push(res.data);
            })
    }

    $scope.unitys=[];
    UnityFactory
        .getall()
        .then(function (res) {
            $scope.unitys=res.data;
        })

    $scope.delete = function (obj) {
        UnityFactory
            .delete(obj.id)
            .then(function (res) {
                if(res.data==1)
                {
                    $scope.unitys.splice($scope.unitys.indexOf(obj),1);
                }
            })
        
    }

    $scope.update = function (obj) {
        UnityFactory
        .update(obj)
            .then(function (res) {
                var posicao = _verificaUnidadeExistente(obj);
                $scope.unitys[posicao] = obj;
                $scope.modeUpdate = false;
            })
    }

    $scope.loadObj = function (obj) {
        $scope.modeUpdate = true;
        $scope.obj = angular.copy(obj);


    }

    $scope.modeUpdate = false;

    var _verificaUnidadeExistente = function(value) {
        for (var i = 0; i < $scope.unitys.length; i++) {
            if ($scope.unitys[i].hasOwnProperty("id") && $scope.unitys[i]["id"] === value.id) {
                return i;
            }
        }
        return -1;
    };
});