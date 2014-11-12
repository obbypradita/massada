<?php namespace Massada\Application\Components;

use Cms\Classes\ComponentBase;
use Massada\Application\Models\Locations;

class Dropdown extends ComponentBase
{

    public $mId;
    public $mName;
    public $mLabel;
    public $mModel;
    public $mBase;

    public $mValue;

    public $mRequired;
    public $mRequired_msg;

    public function componentDetails()
    {
        return [
            'name'        => 'Dropdown',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [
            'mId' => [
                'title'         => 'ID',
                'description'   => 'Form Group Element Id',
                'type'          => 'string',
                'group'         => 'Common',
            ],

            'mName' => [
                'title'         => 'Name',
                'description'   => 'Radiobutton name for $_POST method',
                'type'          => 'string',
                'group'         => 'Common',
                'default'       => 'mRadiobutton',
            ],

            'mLabel' => [
                'title'         => 'Label',
                'description'   => 'Label of form-group label',
                'type'          => 'string',
                'group'         => 'Common',
                'default'       => 'mRadiobutton',
            ],

            'model' => [
                'title'         => 'Model',
                'description'   => 'Model of form-group angular',
                'type'          => 'string',
                'group'         => 'Common',
                'default'       => 'mRadiobutton',
            ],

            'base' => [
                'title'         => 'Form Base',
                'description'   => 'Form parent name of this element',
                'type'          => 'string',
                'group'         => 'Common',
                'default'       => 'mTextbox'
            ],

            'mObject' => [
                'title'         => 'Object',
                'description'   => 'Name of object set from datasource',
                'type'          => 'string',
                'group'         => 'Common',
            ],

            'req' => [
                'title'         => 'Required',
                'description'   => 'User must insert value',
                'type'          => 'dropdown',
                'options'       => [ 'true' => 'True', 'false' => 'False' ],
                'group'         => 'Validation',
            ],

            'req_msg' => [
                'title'         => 'Required Err. Msg.',
                'description'   => 'Error message field is empty',
                'type'          => 'string',
                'group'         => 'Validation',             
            ],
        ];
    }

    public function onRender() {
        $this->mId      = $this->property('mId');
        $this->mName    = $this->property('mName');
        $this->mLabel   = $this->property('mLabel');
        $this->mModel   = $this->property('model');
        $this->mBase    = $this->property('base');
        

        $temp = "[";
        $cmb = Locations::get();
        foreach($cmb as $key=>$value) {
            $temp .= "{key: '" . $value->id . "', value: '" . $value->name . "'}, ";
        }
        $temp = rtrim($temp, ',');

        $temp .= "]";
        $this->mObject=$temp;

        $this->mRequired        = $this->property('req');
        $this->mRequired_msg    = $this->property('req_msg');
    }

}