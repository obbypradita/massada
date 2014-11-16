october.controllers['administration-sites'] = function ($scope, $request, $parse) {
    $scope.administration={};
    $scope.sortField='id';

    $scope.refresh = function() {
        $request('onSelectSite', {
            loading : $('.loading-icon').show(),
            success: function(data) {
                var temp = data.result;
                $scope.$apply(function () {
                     $scope.administration.sites = $parse(temp)($scope);
                });
                $('.loading-icon').hide();
            }
        });
    };
    
    $scope.onDelete = function(id) {
        $request('onDeleteSite', {
            data    : { siteId: id},
            loading : $('.loading-icon').show(),
            success : function() {
                $scope.refresh();
            }
        });
    };
    
    $scope.refresh();
    
}