october.controllers['administration-operators'] = function ($scope, $request) {
    
    $scope.site={};
   //
    
    
    $scope.site.sitePhoto='';
    
	$scope.img='';
	$scope.temp = '';
	$scope.capture = function() {
	    $scope.temp = $scope.img;
	    $scope.site.sitePhoto = $scope.temp;
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
	
	
	
	/*
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
	*/

}