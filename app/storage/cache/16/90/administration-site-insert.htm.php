<?php 
use Massada\Application\Models\Sites;use Massada\Application\Classes\Operation;class Cms5462093dac7ec_1160059359Class extends \Cms\Classes\PageCode
{



public function onInsert() {
    
    $data = post('forpost');
    $rand = Operation::generateRandomString(10);
    
    $site = new Sites;
    $site->name         = post('siteName');
    $site->owner        = post('siteOwner');
    $site->address      = post('siteAddress');
    $site->project_type = post('siteProjectType');
    $site->phone        = post('sitePhone');
    $site->fax          = post('siteFax');
    $site->photo        = $rand;//post('forpost');
    $site->locations_id = post('siteLocation') + 1;
    $site->save();
    
    
    // INSERT AVATAR
    list($type, $data) = explode(';', $data);
    list(, $data)      = explode(',', $data);
    $data = base64_decode($data);
    
    file_put_contents("uploads/public/images/site/avatar/$rand.png", $data);
    
    
    
    


        
        
}

}
