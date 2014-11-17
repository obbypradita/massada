october.controllers['administration-operator-update'] = function ($scope, $request, $parse, $location, alertFlash) {
    $scope.operator={};
    $scope.master={};

    $scope.operator.contact=[];

	$request('onSelectOperator', { 
        success: function(data) {
            var temp = data.result;
            console.log(temp);
            $scope.$apply(function () {
                temp = $parse(temp)($scope);
                $scope.operator.name        = temp.name,
	            $scope.operator.company     = temp.company
	            $scope.operator.address     = temp.address,
	            $scope.operator.phone       = temp.phone,
	            $scope.operator.fax         = temp.fax,
	            $scope.img                  = temp.logo,
	            $scope.avatar               = temp.avatar,
	            $scope.operator.contact     = temp.contact
            });
            $scope.img = $scope.avatar;
            $scope.operatorForm.$setPristine();
        },
        
    });
    

	$scope.capture = function() {
	    $scope.avatar = $scope.img;
	};
	var handleFileSelect = function(evt) {

  		var file = evt.currentTarget.files[0];
  		var reader = new FileReader();
  		reader.onload = function (evt) {
    		$scope.$apply(function($scope){
                $scope.operator.logo=evt.target.result;
    		});
  		};
  		reader.readAsDataURL(file);
	};
	angular.element(document.querySelector('#fileToUpload')).on('change',handleFileSelect);
	
	
	$scope.save = function() {
	    $request('onUpdateOperator', {
	        data: {
	            operatorName        : $scope.operator.name,
	            operatorCompany     : $scope.operator.company,
	            operatorAddress     : $scope.operator.address,
	            operatorPhone       : $scope.operator.phone,
	            operatorFax         : $scope.operator.fax,
	            operatorLogo        : $scope.operator.logo,
	            operatorAvatar      : $scope.avatar,
	            operatorContact    : angular.toJson($scope.operator.contact)
	        },
	        success: function() {
	            alert('berhasil');
	            $scope.clear();
	            $location.path("/administration/operators");
	        }
	        
	    });
	    
	};

    //$scope.operator.valid=true;
    $scope.clear = function () {
        $scope.operator.name          = "";
        $scope.operator.company       = "";
        $scope.operator.address       = "";
        $scope.operator.phone         = "";
        $scope.operator.fax           = "";
        $scope.operator.logo          = '';
        $scope.img                    = ''; console.log($scope.img);
        $scope.avatar                 = "data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="; console.log($scope.avatar);
        
        $scope.operatorForm.$setPristine();
    }
    
    $scope.validate = function() {
        $scope.formOperator.name.$dirty=true;  
        $scope.formOperator.company.$dirty=true;
        $scope.formOperator.address.$dirty=true;
        $scope.formOperator.phone.$dirty=true;  
        $scope.formOperator.fax.$dirty=true;    
        
        for (feild in $scope.operatorForm) {
             if (feild[0] != '$' && $scope.operatorForm[feild].$pristine) {
                  $scope.operatorForm[feild].$setViewValue(
                      $scope.operatorForm[feild].$modelValue
                  );
             }
         }
        
    }
    
    
    
    
    
    
    
    
    
    
    $scope.contact = [];

    $scope.operator.contact  = [];
    
    $scope.addContact = function() {
        //$scope.contacs.push({index: index, name: "Iblis"}); 
        var index = $scope.operator.contact.length + 1;
        var item = new Object('');
        $scope.operator.contact.splice(index, 0, {no: index, name: item,  phone: [], email: []}); 
        console.log($scope.operator.contact);
    }

    $scope.removeContact = function(index) {
        $scope.operator.contact.splice(index, 1);
    }

    $scope.addPhone = function (index) {
        //$scope.phones.push({phone: "021"});
        var phones = [];
        phones = $scope.operator.contact[index];
        var index = phones.phone.length + 1;
        var item = new Object('');
        phones.phone.splice(index, 0, {no: index, phone: item});
        console.log(phones); 
    }

    $scope.removePhone = function (index, id) {
        var phones = [];
        phones = $scope.operator.contact[index];
        console.log(phones.phone[id]); 
        phones.phone.splice(id, 1);
        //console.log(index); 
    }


     $scope.addEmail = function (index) {
        //$scope.phones.push({phone: "021"});
        var emails = [];
        emails = $scope.operator.contact[index];
        var index = emails.email.length + 1;
        var item = new Object('');
        emails.email.splice(index, 0, {no: index, email: item});
        console.log(emails); 
    }

    $scope.removeEmail = function (index, id) {
        var emails = [];
        emails = $scope.operator.contact[index];
        console.log(emails.email[id]); 
        emails.email.splice(id, 1);
        //console.log(index); 
    }

}