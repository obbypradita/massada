<?php 
use Massada\Application\Models\Operators;use Massada\Application\Models\OperatorContacts;use Massada\Application\Models\OperatorContactPhones;use Massada\Application\Models\OperatorContactEmails;use Massada\Application\Classes\Operation;class Cms546690644e02a_92878311Class extends \Cms\Classes\PageCode
{






public function onStart() {

}
public function onSelectOperator() {
    $temp = Operators::get();
    $temp = json_encode($temp);

    return $temp;
}
public function onInsertOperator() {
    
  
    $operator = new Operators;
    $operator->name         = post('operatorName')          ; /*"stName"          ; // */ 
    $operator->company      = post('operatorCompany')       ; /*"stOwner"         ; // */ 
    $operator->address      = post('operatorAddress')       ; /*"stAddress"       ; // */ 
    $operator->phone        = post('operatorPhone')         ; /*"022589948565"    ; // */ 
    $operator->fax          = post('operatorFax')           ; /*"087958745856"    ; // */ 
   
    if (!empty(post('operatorAvatar'))) {
        $rand = Operation::generateRandomString(10);
        $operator->logo     = $rand                     ; /*$rand             ; // */ 
        $photo              = post('operatorLogo')      ; /*"asal aja"        ; // */ 
        $avtr               = post('operatorAvatar')    ; /*"asal aja"        ; // */ 
        
        list($type, $avtr)  = explode(';', $avtr);
        list(, $avtr)       = explode(',', $avtr);
        $avtr = base64_decode($avtr);
        file_put_contents("uploads/public/images/operator/avatar/$rand.png", $avtr);
        
        
        // INSERT PHOTO
        list($type, $photo) = explode(';', $photo);
        list(, $photo)      = explode(',', $photo);
        $photo = base64_decode($photo);
        file_put_contents("uploads/public/images/operator/original/$rand.png", $photo);
    }

    $operator->save();

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
