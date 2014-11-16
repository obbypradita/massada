<?php 
use Massada\Application\Models\Sites;use Massada\Application\Models\SiteContacts;use Massada\Application\Models\Locations;class Cms5468133d249a4_1384938850Class extends \Cms\Classes\PageCode
{




public function onDeleteSite() {
    $siteId = post('siteId');
    $site = Sites::find($siteId);
    $sitePhoto=$site->photo;
    
    $contact = SiteContacts::where('sites_id', '=', $site->id);
    $contact->delete();
    $site->delete();
}
public function onSelectSite() {
    $temp = Sites::with('locations')->get();
    $temp = json_encode($temp);

    return $temp;
}

}
