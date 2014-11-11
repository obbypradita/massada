<?php namespace Massada\Application\Components;

use Cms\Classes\ComponentBase;

class Radiobutton extends ComponentBase
{

    public $mId;
    public $mName;
    public $mLabel;
    public $mModel;
    public $mBase;

    public $mValue;

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
                'description'   => 'ID for each item. Seperated by \';\'',
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
                'default'       => 'mTextbox'
            ],

            'mValue' => [
                'title'         => 'Value',
                'description'   => 'Value for each item. Seperated by \';\'',
                'type'          => 'string',
                'group'         => 'Common',
                'default'       => 'one;two;three',
            ],
        ];
    }

    public function onRender() {
        //$this->mId      = $this->property('mId');
        $this->mName    = $this->property('mName');
        $this->mLabel   = $this->property('mLabel');
        $this->mModel    = $this->property('model');
        $this->mBase            = $this->property('base');

        //$this->mValue   = str_replace("\"","'", json_encode(explode(';', $this->property('mValue'))));

        $id=[];$val=[];
        $id = explode(';', $this->property('mId'));
        $val = explode(';', $this->property('mValue'));

        $cmb="[";
        foreach($id as $index=>$code) {
            $cmb.="{mId: '".$code."', mValue: '".$val[$index]."'},";
        }
        $cmb.="]";
        $this->mValue=$cmb;
    }

}