<?php 
use Massada\Application\Models\Operators;use Massada\Application\Models\OperatorContacts;use Massada\Application\Models\OperatorContactPhones;use Massada\Application\Models\OperatorContactEmails;use Massada\Application\Classes\Operation;class Cms54668f47414be_1680608301Class extends \Cms\Classes\PageCode
{






public function onSelectOperator() {

    
    $id = $this->param('id');
    //$operator=[];
    $operator = Operators::with('contacts')
                ->with('contacts.emails')
                ->with('contacts.phones')
                ->find($id);

    if (!empty($operator->logo))
    {
        $logoName      = $operator->logo; 
        $logoUrl       = "http://localhost:8080/massada/uploads/public/images/operator/original/". $logoName . ".png";
        $operator->logo    = $logoUrl; //base64_encode($logoUrl);
        $avatarUrl      = "http://localhost:8080/massada/uploads/public/images/operator/avatar/". $logoName . ".png";
    } else $avatarUrl="";
   
    
    
    
    $arr=[];
    $arr['name']                    = $operator->name      ;   
    $arr['company']                 = $operator->company   ;   
    $arr['address']                 = $operator->address   ;               
    $arr['phone']                   = $operator->phone     ;   
    $arr['fax']                     = $operator->fax       ;   
    $arr['logo']                    = $operator->logo      ;   
    $arr['avatar']                  = $avatarUrl           ;   
    $arr['contacts']                = $operator->contacts  ;
   
            
    $operator = json_encode($arr);
    return $operator;
}
public function onUpdateOperator() {
    
    
    
    $id = $this->param('id');
    $operator = Operators::find($id);
    $operator->name         = post('operatorName')          ;
    $operator->company      = post('operatorCompany')       ;
    $operator->address      = post('operatorAddress')       ;
    $operator->phone        = post('operatorPhone')         ;
    $operator->fax          = post('operatorFax')           ;
    
    

    if (!empty(post('operatorLogo'))) {
        $logofordelete = $operator->logo;
        array_map('unlink', glob('C:/xampp/htdocs/massada/uploads/public/images/operator/original/' . $logofordelete . '.png'));
        array_map('unlink', glob('C:/xampp/htdocs/massada/uploads/public/images/operator/avatar/' . $logofordelete . '.png'));

        $rand               = Operation::generateRandomString(10)   ;
        $operator->logo     = $rand                                 ;
        $logo               = post('operatorLogo')                  ;
        $avtr               = post('operatorAvatar')                ;

        list($type, $avtr) = explode(';', $avtr);
        list(, $avtr)      = explode(',', $avtr);
        $avtr = base64_decode($avtr);
        file_put_contents("uploads/public/images/operator/avatar/$rand.png", $avtr);
        
        
        // INSERT PHOTO
        list($type, $logo) = explode(';', $logo);
        list(, $logo)      = explode(',', $logo);
        $logo = base64_decode($logo);
        file_put_contents("uploads/public/images/operator/original/$rand.png", $logo);
    }

    $operator->save();
    $contact = OperatorContacts::where('operators_id', '=', $operator->id);
    $contact->delete();
    
    $contact = json_decode(post('operatorContacts'));
    foreach($contact as $key=>$value) {
        $people = new OperatorContacts;
        $people->name = $value->name;
        $people->operators_id = $operator->id;
        $people->save();
        foreach($value->phones as $kphone=>$vphone) {
            $phone = new OperatorContactPhones;
            $phone->phone = $vphone->phone;
            $phone->operator_contacts_id = $people->id;
            $phone->save();
        }
        foreach($value->emails as $kemail=>$vemail) {
            $email = new OperatorContactEmails;
            $email->email = $vemail->email;
            $email->operator_contacts_id = $people->id;
            $email->save();
        }
    }
}

}
