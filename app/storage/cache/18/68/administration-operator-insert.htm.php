<?php 
use Massada\Application\Models\Operator;use Massada\Application\Models\OperatorContact;use Massada\Application\Models\OperatorContactPhone;use Massada\Application\Models\OperatorContactEmail;use Massada\Application\Classes\Operation;class Cms5469b3d3f1a6b_919029160Class extends \Cms\Classes\PageCode
{






public function onStart() {

}
public function onSelectOperator() {
    $temp = Operator::get();
    $temp = json_encode($temp);

    return $temp;
}
public function onInsertOperator() {
    $operator = new Operator;
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
        $people = new OperatorContact;
        $people->name = $value->name;
        $people->operator_id = $operator->id;
        $people->save();
        foreach($value->phone as $kphone=>$vphone) {
            $phone = new OperatorContactPhone;
            $phone->phone = $vphone->phone;
            $phone->operator_contact_id = $people->id;
            $phone->save();
        }
        foreach($value->email as $kemail=>$vemail) {
            $email = new OperatorContactEmail;
            $email->email = $vemail->email;
            $email->operator_contact_id = $people->id;
            $email->save();
        }

    }
}

}
