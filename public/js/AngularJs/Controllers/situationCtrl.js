app.controller('situationCtrl',function($scope,situationFactory){
   
    $scope.create = function(obj){
        console.log(obj);
        situationFactory
        .create(obj)
        .then(function(res){
            console.log(res.data);
        });
    }
    $scope.getAll = function(){
         situationFactory
        .getAll()
        .then(function(res){
            console.log(res.data);
        });
    }
});