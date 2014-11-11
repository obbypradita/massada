october.controllers['administration-site-insert'] = function ($scope, $request) {
      $scope.site={};
        $scope.master={};
        
       
        window.setTimeout(function() {
            $(".flash").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove();
             });
        }, 5000);
        
        //$scope.site.valid=true;
        $scope.clear = function () {
            $scope.site.siteName          = "";
            $scope.site.siteOwner         = "";
            $scope.site.siteProjectType   = "";
            $scope.site.siteLocation      = "";
            $scope.site.siteAddress       = "";
            $scope.site.sitePhone         = "";
            $scope.site.siteFax           = "";
            
            $scope.siteForm.$setPristine();
        }

        $scope.save = function() {
            $('#alert_placeholder').html('<div class="alert alert-warning alert-dismissable alert-fixed"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><span>Your information has been updated.</span></div>')
            setTimeout(function() {
                $("div.alert").remove();
            }, 3000);
        }
}