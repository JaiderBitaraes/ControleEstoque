app.controller('situationCtrl',function($scope,situationFactory){
    $scope.situations = [];
    $scope.modeUpdate = false;
      situationFactory.getAll().then(function(res){
        
        $scope.situations = res.data;
    });

    $scope.create = function(obj){
        console.log(obj);
        situationFactory
        .create(obj)
        .then(function(res){
           $scope.situations.push(res.data);
        });
    }
    
    $scope.update = function(obj){
        situationFactory
        .update(obj)
        .then(function(res){
                var posicao = _verificaSituacaoExistente(obj);
                $scope.modeUpdate = false;
               $scope.situations[posicao] = obj;
        })
    }
     $scope.loadObj = function(obj){
       $scope.modeUpdate = true;
       $scope.obj = angular.copy(obj);
       
    }

    $scope.delete = function(obj){
        console.log(obj);
        situationFactory
        .delete(obj.id)
        .then(function(res){
            console.log(res.data);
            if(res.data==1){
              $scope.situations.splice( $scope.situations.indexOf(obj), 1 );  
            }
        })
    }


    var _verificaSituacaoExistente = function(value) {
    for(var i = 0; i < $scope.situations.length; i++) {
        if($scope.situations[i].hasOwnProperty("id") && $scope.situations[i]["id"] === value.id) {
            return i;
        }
    }
    return -1;
    }
});