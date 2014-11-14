october.controllers['administration-sites'] = function ($scope, $request, $parse) {
    $scope.site={};
    $('#confirmation').hide();

    $scope.sortField='id';
    //$scope.reverse=true;
    
    $request('onSelectSite', { 
        success: function(data) {
            //console.log(data)
            var temp = data.result;
            $scope.$apply(function () {
                $scope.site.sites = $parse(temp)($scope);
            });
        }
        
    });

    $scope.refresh = function() {
        $request('onSelectSite', {
            loading : $('#confirmation').show(),
            success: function(data) {
                var temp = data.result;
                $scope.$apply(function () {
                     $scope.site.sites = $parse(temp)($scope);
                });
                $('#confirmation').hide();
            }
        });
    };
    
    $scope.onDelete = function(id) {
        $request('onDeleteSite', {
            data    : { siteId: id},
            loading : $('#confirmation').hide(),
            success : function() {
                $scope.refresh();
            }
        });
    };
    
}