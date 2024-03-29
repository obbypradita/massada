october.controllers['administration-operators'] = function ($scope, $request, $parse, alertFlash) {
    $scope.administration={};
    $scope.sortField='id';



    $scope.refresh = function() {
        $request('onSelectOperator', {
            loading : $('.loading-icon').show(),
            success: function(data) {
                var temp = data.result;
                $scope.$apply(function () {
                     $scope.administration.operators = $parse(temp)($scope);
                });
                alertFlash.info('everything gonna be ok');
            }
        });
    };
    
    $scope.onDelete = function(id) {
        $request('onDeleteOperator', {
            data    : { operatorId: id},
            loading : $('.loading-icon').hide(),
            success : function() {
                $scope.refresh();
            }
        });
    };
    
    $scope.refresh();
}