october.controllers['administration-site-update'] = function ($scope, $request, $parse, $location, alertFlash) {
    $scope.site={};
    $scope.master={};
    //$scope.frm={};
    

    //$scope.site.sitePhoto='';
    $scope.site.contact=[];
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
	            $scope.site.siteProjectType = temp.project_type,
	            $scope.site.sitePhone       = temp.phone,
	            $scope.site.siteFax         = temp.fax,
	            $scope.site.siteLocation    = temp.location_id,
	            $scope.img                  = temp.photo,
	            $scope.avatar               = temp.avatar,
	            $scope.site.contact		    = temp.contact
            });
            $scope.img = $scope.avatar;
            $scope.siteForm.$setPristine();
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
	
	$scope.validate = function() {
	      
         $scope.siteForm.siteName.$dirty=true;         
         $scope.siteForm.siteOwner.$dirty=true;         
         $scope.siteForm.siteProjectType.$dirty=true;   
         $scope.siteForm.siteLocation.$dirty=true;      
         $scope.siteForm.siteAddress.$dirty=true;       
         $scope.siteForm.sitePhone.$dirty=true;         
         $scope.siteForm.siteFax.$dirty=true;    

        for (field in $scope.siteForm) {
             if (field[0] != '$' && $scope.siteForm[field].$pristine) {
                  $scope.siteForm[field].$setViewValue(
                      $scope.siteForm[field].$modelValue
                  );
             }
         }   
        if ($scope.siteForm.$valid){  
             alertFlash.success('All valid and can be save');
        }   else {
            alertFlash.error('Still got an error please manually check');
        } 
        

    }
    
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
	            siteAvatar      : $scope.avatar,
	            siteContact    : angular.toJson($scope.site.contact)
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
        
        $scope.siteForm.$setPristine();
    }
    
    
    
    
    
    
    
    
    
    
 

    $scope.site.contact  = [];
    
    $scope.addContact = function() {
        //$scope.contacs.push({index: index, name: "Iblis"}); 
        var index = $scope.site.contact.length + 1;
        var item = new Object('');
        $scope.site.contact.splice(index, 0, {no: index, name: item,  phone: [], email: []}); 
        console.log($scope.site.contact);
    }

    $scope.removeContact = function(index) {
        console.log(index);
        //alert('zentot');
        $scope.site.contact.splice(index, 1);
    }

    $scope.addPhone = function (index) {
        //$scope.phones.push({phone: "021"});
        var phones = [];
        phones = $scope.site.contact[index];
        var index = phones.phone.length + 1;
        var item = new Object('');
        phones.phone.splice(index, 0, {no: index, phone: item});
        console.log(phones); 
    }

    $scope.removePhone = function (index, id) {
        var phones = [];
        phones = $scope.site.contact[index];
        console.log(phones.phone[id]); 
        phones.phone.splice(id, 1);
        //console.log(index); 
    }


     $scope.addEmail = function (index) {
        //$scope.phones.push({phone: "021"});
        var emails = [];
        emails = $scope.site.contact[index];
        var index = emails.email.length + 1;
        var item = new Object('');
        emails.email.splice(index, 0, {no: index, email: item});
        console.log(emails); 
    }

    $scope.removeEmail = function (index, id) {
        var emails = [];
        emails = $scope.site.contact[index];
        console.log(emails.email[id]); 
        emails.email.splice(id, 1);
        //console.log(index); 
    }

}