<?php 
use Massada\Application\Models\Operators;use Massada\Application\Models\OperatorContacts;class Cms546684ecaad37_542606234Class extends \Cms\Classes\PageCode
{



public function onDeleteOperator() {
    $operatorId = post('operatorId');
    $operator = Operators::find($operatorId);
    $operatorLogo=$operator->logo;
    
    $contact = OperatorContacts::where('operators_id', '=', $operator->id);
    $contact->delete();
    $operator->delete();
}
public function onSelectOperator() {
    return json_encode(Operators::get());
}

}
