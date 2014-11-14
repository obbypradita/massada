october.controllers['administration-operators'] = function ($scope, $request, $parse) {
    $scope.administration={};
    $('#confirmation').hide();

    $scope.sortField='id';

    $request('onSelectOperator', { 
        success: function(data) {
            var temp = data.result;
            $scope.$apply(function () {
                $scope.administration.operators = $parse(temp)($scope);
            });
        }
        
    });

    $scope.refresh = function() {
        $request('onSelectOperator', {
            loading : $('#confirmation').show(),
            success: function(data) {
                var temp = data.result;
                $scope.$apply(function () {
                     $scope.administration.operators = $parse(temp)($scope);
                });
                $('#confirmation').hide();
            }
        });
    };
    
    $scope.onDelete = function(id) {
        $request('onDeleteOperator', {
            data    : { operatorId: id},
            loading : $('#confirmation').hide(),
            success : function() {
                $scope.refresh();
            }
        });
    };
}