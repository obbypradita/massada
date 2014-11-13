october.controllers['administration-site-update'] = function ($scope, $request, $parse, $location) {
    $scope.site={};
    $scope.master={};
    //$scope.frm={};
    

    //$scope.site.sitePhoto='';
    
    $scope.ganti = function() {
        $scope.site.siteProjectType="Reseller";
    }
	
	$request('onSiteSelect', { 
        success: function(data) {
            var temp = data.result;
            console.log(temp);
            $scope.$apply(function () {
                temp = $parse(temp)($scope);
                $scope.site.siteName        = temp.name,
	            $scope.site.siteOwner       = temp.owner,
	            $scope.site.siteAddress     = temp.address,
	            $scope.site.siteProjectType = temp.project_type;
	            $scope.site.sitePhone       = temp.phone,
	            $scope.site.siteFax         = temp.fax,
	            $scope.site.siteLocation    = temp.locations_id,
	            $scope.img                  = temp.photo,
	            $scope.avatar               = temp.avatar
            });
            $scope.img = $scope.avatar;
            $scope.site.siteForm.$setPristine();
        },
        
    });
    
	//scope.img=''; //the original image
	//scope.avatar = ''; //tje avatar image
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
	    $request('onSiteUpdate', {
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
	            $location.path("/administration/sites");
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
        
        $scope.site.siteForm.$setPristine();
    }

}