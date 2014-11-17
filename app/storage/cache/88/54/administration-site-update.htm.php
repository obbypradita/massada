<?php 
use Massada\Application\Models\Location;use Massada\Application\Models\Site;use Massada\Application\Models\SiteContact;use Massada\Application\Models\SiteContactPhone;use Massada\Application\Models\SiteContactEmail;use Massada\Application\Classes\Operation;class Cms5469b04a42f6e_2059848709Class extends \Cms\Classes\PageCode
{







public function onStart() {
    $temp = "["; $delimiter="";
    $cmb = Location::get();
    foreach($cmb as $key=>$value) {
        $temp .= $delimiter . "{key: '" . $value->id . "', value: '" . $value->name . "'}";
        $delimiter=",";
    }
    $temp = rtrim($temp, ',');

    $temp .= "]";
    $this['mObject']=$temp;
}
public function onSiteSelect() {

    $id = $this->param('id');
    $site = Site::with('location', 'contact' , 'contact.phone' , 'contact.email')->find($id);

    if (!empty($site->photo)) {
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
    $arr['location_id']             = $site->location_id      ;
    $arr['location']                = $site->location         ;
    $arr['photo']                   = $site->photo            ;   
    $arr['avatar']                  = $avatarUrl              ;   
    $arr['contact']                 = $site->contact          ;
   
            
    $site = json_encode($arr);
    return $site;
}
public function onSiteUpdate() {
    
    
    
    $id = $this->param('id');
    $site = Site::find($id);
    $site->name         = post('siteName')          ;
    $site->owner        = post('siteOwner')         ;
    $site->address      = post('siteAddress')       ;
    $site->project_type = post('siteProjectType')   ;
    $site->phone        = post('sitePhone')         ;
    $site->fax          = post('siteFax')           ;
    $site->location_id  = post('siteLocation')      ;
    
    

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
    $contact = SiteContact::where('site_id', '=', $site->id);
    $contact->delete();
    
    $contact = json_decode(post('siteContact'));
    foreach($contact as $key=>$value) {
        $people = new SiteContact;
        $people->name = $value->name;
        $people->site_id = $site->id;
        $people->save();
        foreach($value->phone as $kphone=>$vphone) {
            $phone = new SiteContactPhone;
            $phone->phone = $vphone->phone;
            $phone->site_contact_id = $people->id;
            $phone->save();
        }
        foreach($value->email as $kemail=>$vemail) {
            $email = new SiteContactEmail;
            $email->email = $vemail->email;
            $email->site_contact_id = $people->id;
            $email->save();
        }
    }
}

}
