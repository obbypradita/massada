<?php 
use Massada\Application\Models\Sites;class Cms54628f61ec0d7_1138910860Class extends \Cms\Classes\PageCode
{


public function onSiteSelect() {
    $id = $this->param('id');
    $site = Sites::with('locations')->find($id);
    $site = json_encode($site);
    return $site;
}
public function onSiteUpdate() {
    //$photo = post('sitePhoto');
    //$avtr = post('siteAvatar');
   // $rand = Operation::generateRandomString(10);
    $id = $this->param('id');
    $site = Sites::find($id);
    $site->name         = post('siteName');
    $site->owner        = post('siteOwner');
    $site->address      = post('siteAddress');
    $site->project_type = post('siteProjectType');
    $site->phone        = post('sitePhone');
    $site->fax          = post('siteFax');
    //$site->photo        = $rand;//post('forpost');
    $site->locations_id = post('siteLocation');
    $site->save();
}

}
