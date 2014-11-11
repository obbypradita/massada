<?php 
use Massada\Application\Models\Sites;use Massada\Application\Models\Locations;class Cms54610d371ef85_520562101Class extends \Cms\Classes\PageCode
{



public function onInit() {
    
}
public function onDelete() {
    $siteId = post('siteId');
    $site = Sites::find($siteId);
    $sitePhoto=$site->photo;
    
    array_map('unlink', glob("C:/xampp/htdocs/massada/uploads/public/images/site/avatar/$sitePhoto.png"));
    $site->delete();
    
    $temp=Sites::with('locations')->get();
    $this['sites'] = str_replace("\"","'", $temp);
}
public function onRun() {
    $temp = Sites::with('locations')->get();
    $temp = json_encode($temp);
    $temp = str_replace("\"","'", $temp);
    $this->page['mysite'] = $temp;

    //return $temp;
    
    
}
public function onGetSites() {

    $temp = Sites::with('locations')->get();
    $temp = json_encode($temp);
    
    //$temp = str_replace("[]","", $temp);
    $temp = str_replace("\"","'", $temp);
    
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
