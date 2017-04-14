app.controller('UnityCtrl', function ($scope, UnityFactory) {
    $scope.create = function (obj) {
        console.log(obj);
        UnityFactory
            .create(obj)
            .then(function (res) {
                console.log(res.data);
            })
    }
});