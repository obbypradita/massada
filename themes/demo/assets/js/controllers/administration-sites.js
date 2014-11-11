october.controllers['administration-sites'] = function ($scope, $request) {
    $scope.site={};
    //var list =  $request('onGetSites');
    var global=[];
    $.request('onGetSites', {
        success: function(data) {
          var a = data.result;
          global = a;
          $scope.site.sites = a.result;
        }
    });
    
   
   // var list = $request('onGetSites');
   // console.log(list);
            
   // $scope.site.sites = list;
    
    $scope.muncul = function() {
        /*
        var list = $request('onGetLocation');
        console.log(list);
        document.getElementById("myDiv").innerHTML=list.textStatus;
        */
        
        $.request('onGetSites', {
            success: function(data) {
              var a = {};
              a = data.result;
       
                     $scope.site.sites = a;
               //console.log(a);
              
              //a = a.replace('{"result":"','');
             
            }
        });
    };
    
    
    $scope.ajax = function ()
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