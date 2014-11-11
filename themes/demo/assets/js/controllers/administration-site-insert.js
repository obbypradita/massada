october.controllers['administration-site-insert'] = function ($scope, $request) {
    $scope.site={};
    $scope.master={};
    

    $scope.site.sitePhoto='';
	$scope.img='';


	var handleFileSelect=function(evt) {
  		var file = evt.currentTarget.files[0];
  		var reader = new FileReader();
  		reader.onload = function (evt) {
    		$scope.$apply(function($scope){
  				$scope.site.sitePhoto=evt.target.result;
    		});
  		};
  		reader.readAsDataURL(file);
	};
	angular.element(document.querySelector('#fileToUpload')).on('change',handleFileSelect);


















    
    
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
    
    
    
    
    window.setTimeout(function() {
        $(".flash").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove();
         });
    }, 5000);
/*
        $scope.save = function() {
            $('#alert_placeholder').html('<div class="alert alert-warning alert-dismissable alert-fixed"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><span>Your information has been updated.</span></div>')
            setTimeout(function() {
                $("div.alert").remove();
            }, 3000);
        }
        
        */
}



