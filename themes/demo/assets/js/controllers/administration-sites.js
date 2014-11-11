october.controllers['administration-sites'] = function ($scope, $request, $parse) {
    $scope.site={};
    
    // on start
    /*
    $.request('onGetSites', {
        success: function(data) {
            var temp = data.result;
            $scope.$apply(function () {
                $scope.site.sites = $parse(temp)($scope);
            });
        }
    });
    */
    
    $request('onSelectSite', { 
        success: function(data) {
            console.log(data)
            var temp = data.result;
            $scope.$apply(function () {
                $scope.site.sites = $parse(temp)($scope);
            });
        }
        
    });
    //var a = $parse(b.responseText)($scope);
    //$scope.site.sites = b;
    //console.log(b);
    
    
    
    
    
    
  
  
  
  
  
  
  
    $scope.refresh = function() {
        $request('onSelectSite', {
            success: function(data) {
                var temp = data.result;
                $scope.$apply(function () {
                     $scope.site.sites = $parse(temp)($scope);
                });
                $('#confirmation').show();
            }
        });
    };
    
    $scope.onDelete = function(id) {
        $request('onDeleteSite', {
            data    : { siteId: id},
            loading : $('#confirmation').hide(),
            success : function() {
                $scope.refresh();
            }
        });
    };
    
    
    $scope.ajax1 = function ()
    {
        var xmlhttp;
        if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
        } else {// code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState==4 && xmlhttp.status==200) {
                document.getElementById("myDiv").innerHTML=xmlhttp.responseURL;
                console.log(xmlhttp);
                //alert('zentot');
            }
        }
        xmlhttp.open("GET","http://localhost:8080/massada/administration/sites?onGetSites",true);
        xmlhttp.send();
    }
}