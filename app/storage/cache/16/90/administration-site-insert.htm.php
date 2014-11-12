<?php 
use Massada\Application\Models\Sites;use Massada\Application\Classes\Operation;class Cms54638cb9bf0bc_328498304Class extends \Cms\Classes\PageCode
{



public function onGetSites() {
    $temp = Sites::get();
    $temp = json_encode($temp);

    return $temp;
}
public function onInsertSite() {
    
    $photo = post('sitePhoto');
    $avtr = post('siteAvatar');
    $rand = Operation::generateRandomString(10);
    
    $site = new Sites;
    $site->name         = post('siteName');
    $site->owner        = post('siteOwner');
    $site->address      = post('siteAddress');
    $site->project_type = post('siteProjectType');
    $site->phone        = post('sitePhone');
    $site->fax          = post('siteFax');
    $site->photo        = $rand;//post('forpost');
    $site->locations_id = post('siteLocation');
    $site->save();
    
    
    list($type, $avtr) = explode(';', $avtr);
    list(, $avtr)      = explode(',', $avtr);
    $avtr = base64_decode($avtr);
    file_put_contents("uploads/public/images/site/avatar/$rand.png", $avtr);
    
    
    // INSERT PHOTO
    list($type, $photo) = explode(';', $photo);
    list(, $photo)      = explode(',', $photo);
    $photo = base64_decode($photo);
    file_put_contents("uploads/public/images/site/original/$rand.png", $photo);
    
    
        
}

}
