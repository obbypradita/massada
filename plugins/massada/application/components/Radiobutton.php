<?php namespace Massada\Application\Components;

use Cms\Classes\ComponentBase;

class Radiobutton extends ComponentBase
{

    public $mId;
    public $mName;
    public $mLabel;
    public $mModel;
    public $mBase;

    public $mObject;

    public function componentDetails()
    {
        return [
            'name'        => 'Radio Button',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [
            'mId' => [
                'title'         => 'ID',
                'description'   => 'RadioButtonGroup ID',
                'type'          => 'string',
                'group'         => 'Common',
                'default'       => '1;2;3',
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
                'default'       => 'mRadiobutton'
            ],

            'mObject' => [
                'title'         => 'Object Name',
                'description'   => 'Object radio items base on key value',
                'type'          => 'string',
                'group'         => 'Common',
                'default'       => 'mRadiobutton'
            ],

            'mKey' => [
                'title'         => 'Object Key',
                'description'   => 'Key for each objectitem. Seperated by \';\'',
                'type'          => 'string',
                'group'         => 'Common',
                'default'       => 'mRadiobutton'
            ],

            'mValue' => [
                'title'         => 'Object Value',
                'description'   => 'Value for each object item. Seperated by \';\'',
                'type'          => 'string',
                'group'         => 'Common',
                'default'       => 'one;two;three',
            ],
        ];
    }

    public function onRender() {
        $this->mId          = $this->property('mId');
        $this->mName        = $this->property('mName');
        $this->mLabel       = $this->property('mLabel');
        $this->mModel       = $this->property('model');
        $this->mBase        = $this->property('base');
        //$this->mObject      = $this->property('mObject');

        $key=[];$value=[];
        $key    = explode(';', $this->property('mKey'));
        $value  = explode(';', $this->property('mValue'));

        $cmb="[";
        foreach($key as $index=>$code) {
            $cmb.="{key: '".$code."', value: '".$value[$index]."'},";
        }
        $cmb.="]";
        $this->mObject=$cmb;
    }

}