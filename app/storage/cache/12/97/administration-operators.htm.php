<?php 
use Massada\Application\Models\Operator;use Massada\Application\Models\OperatorContact;class Cms5469b0b468e5c_389645682Class extends \Cms\Classes\PageCode
{



public function onDeleteOperator() {
    $operatorId = post('operatorId');
    $operator = Operator::find($operatorId);
    $operatorLogo=$operator->logo;
    
    $contact = OperatorContact::where('operator_id', '=', $operator->id);
    $contact->delete();
    $operator->delete();
}
public function onSelectOperator() {
    return json_encode(Operator::get());
}

}
