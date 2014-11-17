<?php 
use Massada\Application\Models\Site;use Massada\Application\Models\SiteContact;use Massada\Application\Models\Location;class Cms5469b043d0a78_2120361135Class extends \Cms\Classes\PageCode
{




public function onDeleteSite() {
    $siteId = post('siteId');
    $site = Site::find($siteId);
    $sitePhoto=$site->photo;
    
    $contact = SiteContact::where('site_id', '=', $site->id);
    $contact->delete();
    $site->delete();
}
public function onSelectSite() {
    $temp = Site::with('location')->get();
    $temp = json_encode($temp);

    return $temp;
}

}
