<?php 
use Massada\Application\Models\Sites;use Massada\Application\Models\SiteContacts;use Massada\Application\Models\SiteContactPhones;use Massada\Application\Models\SiteContactEmails;use Massada\Application\Classes\Operation;class Cms54660a3dc9bf6_1470399585Class extends \Cms\Classes\PageCode
{






public function onGetSites() {
    $temp = Sites::get();
    $temp = json_encode($temp);

    return $temp;
}
public function onInsertSite() {
    
  
    $site = new Sites;
    $site->name         = post('siteName')          ; /*"stName"          ; // */ 
    $site->owner        = post('siteOwner')         ; /*"stOwner"         ; // */ 
    $site->address      = post('siteAddress')       ; /*"stAddress"       ; // */ 
    $site->project_type = post('siteProjectType')   ; /*"Multioperator"   ; // */ 
    $site->phone        = post('sitePhone')         ; /*"022589948565"    ; // */ 
    $site->fax          = post('siteFax')           ; /*"087958745856"    ; // */ 
    $site->locations_id = post('siteLocation')      ; /*"1"               ; // */ 
   
    if (!empty(post('siteAvatar'))) {
        $rand = Operation::generateRandomString(10);
        $site->photo        = $rand                     ; /*$rand             ; // */ 
        $photo              = post('sitePhoto')         ; /*"asal aja"        ; // */ 
        $avtr               = post('siteAvatar')        ; /*"asal aja"        ; // */ 
        
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

    $site->save();

    $contact = json_decode(post('siteContacts'));

    foreach($contact as $key=>$value) {
        $people = new SiteContacts;
        $people->name = $value->name;
        $people->sites_id = $site->id;
        $people->save();
        foreach($value->phones as $kphone=>$vphone) {
            $phone = new SiteContactPhones;
            $phone->phone = $vphone->phone;
            $phone->site_contacts_id = $people->id;
            $phone->save();
        }
        foreach($value->emails as $kemail=>$vemail) {
            $email = new SiteContactEmails;
            $email->email = $vemail->email;
            $email->site_contacts_id = $people->id;
            $email->save();
        }

    }
    
        
}

}
