<?php 
use Massada\Application\Models\Sites;use Massada\Application\Models\SiteContacts;use Massada\Application\Models\SiteContactPhones;use Massada\Application\Models\SiteContactEmails;use Massada\Application\Classes\Operation;class Cms5464b5661f6c4_975579693Class extends \Cms\Classes\PageCode
{






public function onSiteSelect() {
    $id = $this->param('id');
    //$site=[];
    $site = Sites::with('locations')
                ->with('contacts', 'contacts.phones', 'contacts.emails')
                ->find($id);

    if (!empty($site->photo))
    {
        $photoName      = $site->photo; 
        $photoUrl       = "http://localhost:8080/massada/uploads/public/images/site/original/". $photoName . ".png";
        $site->photo    = $photoUrl; //base64_encode($photoUrl);
        $avatarUrl      = "http://localhost:8080/massada/uploads/public/images/site/avatar/". $photoName . ".png";
    } else $avatarUrl="";
   
    
    
    
    $arr=[];
    $arr['name']                    = $site->name             ;   
    $arr['owner']                   = $site->owner            ;   
    $arr['address']                 = $site->address          ;       
    $arr['project_type']            = $site->project_type     ;           
    $arr['phone']                   = $site->phone            ;   
    $arr['fax']                     = $site->fax              ;   
    $arr['locations_id']            = $site->locations_id     ;
    $arr['locations']               = $site->locations        ;
    $arr['photo']                   = $site->photo            ;   
    $arr['avatar']                  = $avatarUrl              ;   
    $arr['contacts']                = $site->contacts         ;
   
            
    $site = json_encode($arr);
    return $site;
}
public function onSiteUpdate() {
    
    
    
    $id = $this->param('id');
    $site = Sites::find($id);
    $site->name         = post('siteName')          ;
    $site->owner        = post('siteOwner')         ;
    $site->address      = post('siteAddress')       ;
    $site->project_type = post('siteProjectType')   ;
    $site->phone        = post('sitePhone')         ;
    $site->fax          = post('siteFax')           ;
    $site->locations_id = post('siteLocation')      ;
    
    

    if (!empty(post('sitePhoto'))) {
        $photofordelete = $site->photo;
        array_map('unlink', glob('C:/xampp/htdocs/massada/uploads/public/images/site/original/' . $photofordelete . '.png'));
        array_map('unlink', glob('C:/xampp/htdocs/massada/uploads/public/images/site/avatar/' . $photofordelete . '.png'));

        $rand               = Operation::generateRandomString(10)   ;
        $site->photo        = $rand                                 ;
        $photo              = post('sitePhoto')                     ;
        $avtr               = post('siteAvatar')                    ;

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
    $contact = SiteContacts::where('sites_id', '=', $site->id);
    $contact->delete();
    
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
