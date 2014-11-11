october.controllers['administration-site-insert'] = function ($scope, $request) {
    $scope.site={};
    $scope.master={};
    
    $scope.freezImage=0;
    

    $scope.site.sitePhoto='';
	
    
	$scope.img=''; //the original image
	$scope.avatar = ''; //tje avatar image
	$scope.capture = function() {
	    $scope.avatar = $scope.img;
	};
	var handleFileSelect = function(evt) {

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
	
	
	$scope.save = function() {
	    $scope.freezImage=1; console.log($scope.freezImage);
	    $request('onInsertSite', {
	        data: {
	            siteName        : $scope.site.siteName,
	            siteOwner       : $scope.site.siteOwner,
	            siteAddress     : $scope.site.siteAddress,
	            siteProjectType : $scope.site.siteProjectType,
	            sitePhone       : $scope.site.sitePhone,
	            siteFax         : $scope.site.siteFax,
	            siteLocation    : $scope.site.siteLocation,
	            sitePhoto       : $scope.site.sitePhoto,
	            siteAvatar      : $scope.avatar
	        },
	        success: function() {
	            alert('berhasil');
	            $scope.clear();
	            $scope.freezImage=0;
	        },
	        beforeUpdate: function() {
	            $scope.freezImage=1;
	        }
	    });
	    
	};


    
    
    //$scope.site.valid=true;
    $scope.clear = function () {
        $scope.site.siteName          = "";
        $scope.site.siteOwner         = "";
        $scope.site.siteProjectType   = "";
        $scope.site.siteLocation      = "";
        $scope.site.siteAddress       = "";
        $scope.site.sitePhone         = "";
        $scope.site.siteFax           = "";
        $scope.site.sitePhoto         = '';
        $scope.img                    = ''; console.log($scope.img);
        $scope.avatar                 = "data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="; console.log($scope.avatar);
        
        $scope.siteForm.$setPristine();
    }

}



