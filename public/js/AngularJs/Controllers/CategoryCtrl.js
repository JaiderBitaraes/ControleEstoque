app.controller('CategoryCtrl',function($scope,CategoryFactory){
   
    $scope.create = function(obj){
        CategoryFactory
        .create(obj)
        .then(function(res){
           console.log(res);
            console.log(res.data);
        });
    }
    
});