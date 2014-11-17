var massada = angular.module('massada', []);



massada.directive('capitalize', function() {
   return {
     require: 'ngModel',
     link: function(scope, element, attrs, modelCtrl) {
        var capitalize = function(inputValue) {
           if(inputValue == undefined) inputValue = '';
           var capitalized = inputValue.toUpperCase();
           if(capitalized !== inputValue) {
              modelCtrl.$setViewValue(capitalized);
              modelCtrl.$render();
            }         
            return capitalized;
         }
         modelCtrl.$parsers.push(capitalize);
         capitalize(scope[attrs.ngModel]);  // capitalize initial value
     }
   };
});

massada.service('testService', function() {
    this.sayHello = function() {
        console.log("asu tenan")
    };
});


massada.directive('alertBox', function($timeout) {
    return {
        restrict: 'E',
        scope:{
            type: '=',
            message: '='
        },
        template:"<div id='alert-message' role='alert'><div class='alert alert-{{ type }}'><button type='button' class='close' data-dismiss='alert'>&times;</button>{{ message }}</div></div>",
        controller: function($scope) {
            $scope.alertShow = function() {
                //alert('zentot');
                 $scope.alertMessage();
            }
           
        },
        link: function ($scope, $element, $attrs) {
            $scope.alertMessage = function() {
                alert('zentot');
                $timeout(function(){
                    element.remove();
                }, 5000); 
            }
        }
    }

});


massada.factory('alertFlash', function() {
    return {
        status: null,
        message: null,
        success: function(msg) {
            this.status = 'success';
            this.message = msg;
        },
        error: function(msg) {
            this.status = 'danger';
            this.message = msg;
        },
        info: function(msg) {
            this.status = 'info';
            this.message = msg;
        },
        clear: function() {
            this.status = null;
            this.message = null;
        }
    }
});

massada.directive('alert', function($timeout) {
    return {
        restrict: 'E',
        scope: {},
        replace: true,
        controller: function($scope, alertFlash, $timeout) {
            $scope.show = false;
            $scope.api = alertFlash;
            
            $scope.$watch('api.status', toggledisplay)
            $scope.$watch('api.message', toggledisplay)
            
            $scope.hide = function() {
                $scope.show = false;
                $scope.api.clear();
            };
            
            function toggledisplay() {
                $scope.show = !!($scope.api.status && $scope.api.message);    
                fadeOut(); 
                //$scope.show = true;          
            }

            function fadeOut() {
                $timeout(function(){
                    //$scope.show = false;
                    $scope.api.clear();
                    $scope.hide();
                }, 5000); 
            }
        },
        template: "<div id='alert-message' ng-show='show'><div class='alert alert-{{ api.status }}'><button type='button' class='close' ng-click='hide()''>&times;</button>{{ api.message }}</div></div>"
    }
})



   
