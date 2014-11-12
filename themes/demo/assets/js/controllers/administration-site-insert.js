october.controllers['administration-site-insert'] = function ($scope, $request, $parse) {
    $scope.site={};
    $scope.master={};
    
    $scope.freezImage=0;
    //$scope.site.siteProjectType="Reseller";
    $scope.$watch('site.siteName', function(oldValue, newValue) {
        var a = $scope.site.siteName; //$parse(siteName)($scope);
        console.log(a);
    });
    
        
    
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
	        },
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
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    $scope.contacs = [];
    $scope.contacs.phones  = [];




    $scope.expr = '3*10|currency';
    
    $scope.addContact = function() {
        //$scope.contacs.push({index: index, name: "Iblis"}); 
        var index = $scope.contacs.phones.length + 1;
        var item = new Object("Contact " + index)
        $scope.contacs.phones.splice(index, 0, {no: index, name: item,  phones: []}); 
        console.log($scope.contacs.phones);
    }
    
    $scope.insertContact = function (index, name) {

    }

    $scope.removeContact = function(index) {
        $scope.contacs.phones.splice(index, 1);
    }


    

    $scope.addPhone = function (index) {
        //$scope.phones.push({phone: "021"});
        var phones = [];
        phones = $scope.contacs.phones[index];
        var index = phones.phones.length + 1;
        var item = new Object("Phone " + index)
        phones.phones.splice(index, 0, {no: index, phone: item});
        console.log(phones); 
    }

    $scope.removePhone = function (index, id) {
        var phones = [];
        phones = $scope.contacs.phones[index];
        console.log(phones.phones[id]); 
        phones.phones.splice(id, 1);
        //console.log(index); 
    }

}



