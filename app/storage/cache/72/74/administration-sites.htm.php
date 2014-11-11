<?php 
use Massada\Application\Models\Sites;use Massada\Application\Models\Locations;class Cms54623d7d3b6e0_1842581533Class extends \Cms\Classes\PageCode
{



public function onInit() {
    
}
public function onDeleteSite() {
    $siteId = post('siteId');
    $site = Sites::find($siteId);
    $sitePhoto=$site->photo;
    
    array_map('unlink', glob("C:/xampp/htdocs/massada/uploads/public/images/site/avatar/$sitePhoto.png"));
    $site->delete();
}
public function onStart() {
    $temp = Sites::get();
    $temp = json_encode($temp);
}
public function onSelectSite() {
    $temp = Sites::with('locations')->get();
    $temp = json_encode($temp);

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
