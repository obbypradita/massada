october.controllers['administration-sites'] = function ($scope, $request, $parse, $timeout, alertFlash) {
    $scope.administration={};
    $scope.sortField='id';

    $scope.refresh = function() {
       alertFlash.info('everything gonna be ok');
        $request('onSelectSite', {
            loading : $('.loading-icon').show(),
            success: function(data) {
                var temp = data.result;
                console.log(temp);
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