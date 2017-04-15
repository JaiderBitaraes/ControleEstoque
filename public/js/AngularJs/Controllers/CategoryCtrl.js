app.controller('CategoryCtrl',function($scope,CategoryFactory){
   $scope.categories = [];
   $scope.modeUpdate = false;
    $scope.create = function(obj){
        CategoryFactory
        .create(obj)
        .then(function(res){
          $scope.categories.push(res.data);
        });
    }
    CategoryFactory.getAll().then(function(res){
       
        $scope.categories = res.data;
        
    });

    $scope.loadObj = function(obj){
        $scope.modeUpdate = true;
        $scope.obj = angular.copy(obj);
    }
    $scope.update = function(obj){
         console.log(obj)
       CategoryFactory
       .update(obj)
      
       .then(function(res){
           var posicao = _verificaCategoriaExistente(obj);
        
           $scope.categories[posicao] = obj;
           $scope.modeUpdate = true;
      });
    }
    $scope.delete = function(obj){
        console.log(obj);
        CategoryFactory
        .delete(obj.id)
        .then(function(res){
           
            console.log(res.data);
        if(res.data==1){
            $scope.categories.splice($scope.categories.indexOf(obj),1);
        }
    });
}
var _verificaCategoriaExistente = function(value) {
    for(var i = 0; i < $scope.categories.length; i++) {
        if($scope.categories[i].hasOwnProperty("id") && $scope.categories[i]["id"] === value.id) {
            return i;
        }
    }
    return -1;
}
 });