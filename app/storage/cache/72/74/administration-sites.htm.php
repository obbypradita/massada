<?php 
use Massada\Application\Models\Sites;use Massada\Application\Models\Locations;class Cms5461f3cf660e6_1615661839Class extends \Cms\Classes\PageCode
{



public function onInit() {
    
}
public function onDelete() {
    $siteId = post('siteId');
    $site = Sites::find($siteId);
    $sitePhoto=$site->photo;
    
    array_map('unlink', glob("C:/xampp/htdocs/massada/uploads/public/images/site/avatar/$sitePhoto.png"));
    $site->delete();
}
public function onStart() {
    $temp = Sites::get();
    $temp = json_encode($temp);
    //$temp = str_replace("\"","'", $temp);


    //return $temp;
    
    
}
public function onGetSites() {

    //$temp = Sites::with('locations')->get();
    $temp = Sites::get();
    $temp = json_encode($temp);
    
  
    
    //$temp = str_replace("[]","", $temp);
    //$temp = str_replace("\"","", $temp);
    //$temp = str_replace("\\","", $temp);
    
    //$temp = str_replace("[", "data:{", $temp);
    //$temp = str_replace("]", "}", $temp);
    //$temp = str_replace("\"","'", $temp);
    
    //$temp = str_replace('{"readyState":4,"responseText":"{\"result\":\"',"", $temp);
    
    //$temp=Locations::get();
   // $temp=json_encode($temp);
    return $temp;
}
public function onGetLocation() {
    $temp = Locations::all()->toJson();
    echo $temp;
}
public function onAjaxTest()
{
    // update MySQL here
    echo "Called";
}

}
