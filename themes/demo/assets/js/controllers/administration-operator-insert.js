october.controllers['administration-operator-insert'] = function ($scope, $request, $parse) {
    $scope.operator={};


    
    $scope.operator.logo='';
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
                $scope.operator.logo=evt.target.result;
    		});
  		};
  		reader.readAsDataURL(file);
	};
	angular.element(document.querySelector('#fileToUpload')).on('change',handleFileSelect);
	
	
	$scope.save = function() {
	    $request('onInsertOperator', {
	        data: {
	            operatorName        : $scope.operator.name,
	            operatorCompany     : $scope.operator.company,
	            operatorAddress     : $scope.operator.address,
	            operatorPhone       : $scope.operator.phone,
	            operatorFax         : $scope.operator.fax,
	            operatorLogo        : $scope.operator.logo,
	            operatorAvatar      : $scope.avatar,
	            operatorContacts    : angular.toJson($scope.operator.contacts)
	        },
	        success: function() {
	            alert('berhasil');
	            $scope.clear();
	        },
	    });
	};

    
    //$scope.site.valid=true;
    $scope.clear = function () {
        $scope.operator.name                   = "";
        $scope.operator.company                = "";
        $scope.operator.address                = "";
        $scope.operator.phone                  = "";
        $scope.operator.fax                    = "";
        $scope.operator.logo                   = '';
        $scope.img                             = ''; 
        $scope.avatar                          = "data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="; console.log($scope.avatar);
        $scope.operator.contacts               = [];
        $scope.operatorForm.$setPristine();
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    $scope.contacs = [];

    $scope.operator.contacts  = [];
    
    $scope.addContact = function() {
        //$scope.contacs.push({index: index, name: "Iblis"}); 
        var index = $scope.operator.contacts.length + 1;
        var item = new Object('');
        $scope.operator.contacts.splice(index, 0, {no: index, name: item,  phones: [], emails: []}); 
        console.log($scope.operator.contacts);
    }

    $scope.removeContact = function(index) {
        $scope.operator.contacts.splice(index, 1);
    }

    $scope.addPhone = function (index) {
        //$scope.phones.push({phone: "021"});
        var phones = [];
        phones = $scope.operator.contacts[index];
        var index = phones.phones.length + 1;
        var item = new Object('');
        phones.phones.splice(index, 0, {no: index, phone: item});
        console.log(phones); 
    }

    $scope.removePhone = function (index, id) {
        var phones = [];
        phones = $scope.operator.contacts[index];
        console.log(phones.phones[id]); 
        phones.phones.splice(id, 1);
        //console.log(index); 
    }


     $scope.addEmail = function (index) {
        //$scope.phones.push({phone: "021"});
        var emails = [];
        emails = $scope.operator.contacts[index];
        var index = emails.emails.length + 1;
        var item = new Object('');
        emails.emails.splice(index, 0, {no: index, email: item});
        console.log(emails); 
    }

    $scope.removeEmail = function (index, id) {
        var emails = [];
        emails = $scope.operator.contacts[index];
        console.log(emails.emails[id]); 
        emails.emails.splice(id, 1);
        //console.log(index); 
    }


 

}



