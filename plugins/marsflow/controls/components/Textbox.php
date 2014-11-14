<?php namespace Marsflow\Controls\Components;

use Cms\Classes\ComponentBase;
use Marsflow\Controls\Classes\Operation;

class Textbox extends ComponentBase
{
    public $mId;
    public $mName;
    public $mLabel;
    public $mModel;
    public $mBase;

    public $mPlaceholder;
    public $mValue;
    public $mEnable;
// validation variable
    public $mRequired;
    public $mRequired_msg;

    public $mExpression;
    public $mExpression_msg;

    public $mTrim;
    public $mCapitalize;
    
    public $mMaxlength;
    public $mMaxlength_msg;

    public $mMinlength;
    public $mMinlength_msg;


    public function componentDetails()
    {
        return [
            'name'        => 'Textbox',
            'description' => 'Textbox with angular validation'
        ];
    }

   public function defineProperties()
    {
        return [
            'id' => [
                'title'         => 'ID',
                'description'   => 'Textbox ID',
                'type'          => 'string',
                'group'         => 'Common',
                'default'       => 'mTextbox',
            ],

            'name' => [
                'title'         => 'Name',
                'description'   => 'Textbox Name',
                'type'          => 'string',
                'group'         => 'Common',
                'default'       => 'mTextbox',
            ],

            'label' => [
                'title'         => 'Label',
                'description'   => 'Textbox Label',
                'type'          => 'string',
                'group'         => 'Common',
                'default'       => 'mTextbox'
            ],


            'model' => [
                'title'         => 'Model',
                'description'   => 'Textbox Angular Model',
                'type'          => 'string',
                'group'         => 'Common',
                'default'       => 'mTextbox'
            ],

            'base' => [
                'title'         => 'Form Base',
                'description'   => 'Form parent name of this element',
                'type'          => 'string',
                'group'         => 'Common',
                'default'       => 'mTextbox'
            ],

            'value' => [
                'title'         => 'Value',
                'description'   => 'Textbox Value',
                'type'          => 'string',
                'group'         => 'Common',
            ],

            'pholder' => [
                'title'         => 'Placeholder',
                'description'   => 'Textbox Placeholder',
                'type'          => 'string',
                'group'         => 'Common',
            ],

            'capitalize' => [
                'title'         => 'Capitalize',
                'description'   => 'Textbox Placeholder',
                'type'          => 'dropdown',
                'options'       => [ 'false' => 'True', 'true' => 'False' ],
                'deftault'      => 'false',
                'group'         => 'Common',
            ],

            'mEnable' => [
                'title'         => 'Enable',
                'description'   => 'Textbox Enable',
                'type'          => 'dropdown',
                'options'       => [ 'false' => 'True', 'true' => 'False' ],
                'deftault'      => 'false',
                'group'         => 'Common',
            ],

            'visible' => [
                'title'         => 'Visible',
                'description'   => 'Textbox Visible',
                'type'          => 'dropdown',
                'options'       => [ 'true' => 'True', 'false' => 'False' ],
                'deftault'      => 'false',
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

            'max' => [
                'title'         => 'Max Length',
                'description'   => 'Maximum length provided',
                'type'          => 'string',
                'group'         => 'Validation'
            ],

            'max_msg' => [
                'title'         => 'Max Length Err. Msg.',
                'description'   => 'Error message above limit',
                'type'          => 'string',
                'group'         => 'Validation'
            ],

            'min' => [
                'title'         => 'Min Length',
                'description'   => 'Minimum length provided',
                'type'          => 'string',
                'group'         => 'Validation'
            ],

            'min_msg' => [
                'title'         => 'Min Length Err. Msg.',
                'description'   => 'Error message field is empty',
                'type'          => 'string',
                'group'         => 'Validation'             
            ],

            'exp' => [
                'title'         => 'Expression',
                'description'   => 'Validate input with regular expression',
                'type'          => 'string',
                'group'         => 'Validation',
            ],

            'exp_msg' => [
                'title'         => 'Expression Err. Msg.',
                'description'   => 'Error message when expressin fail',
                'type'          => 'string',
                'group'         => 'Validation',   
            ],

            'trm' => [
                'title'         => 'Trim',
                'description'   => 'Allog angular to wrap white space',
                'type'          => 'dropdown',
                'options'       => [ 'true' => 'True', 'false' => 'False' ],
                'group'         => 'Validation',
            ],
        ];
    }



    public function onRender() {
        $this->mId              = $this->property('id');
        $this->mName            = $this->property('name');
        $this->mLabel           = $this->property('label');
        $this->mModel           = $this->property('model');
        $this->mBase            = $this->property('base');

        $this->mPlaceholder     = $this->property('pholder');
        $this->mEnable          = $this->property('mEnable');

        $this->mRequired        = $this->property('req');
        $this->mRequired_msg    = $this->property('req_msg');

        $this->mExpression      = $this->property('exp');
        $this->mExpression_msg  = $this->property('exp_msg'); 

        $cap = $this->property('capitalize');
        if($cap)
        $this->mCapitalize      = "capitalize";

        $this->mMaxlength        = $this->property('max');
        $this->mMaxlength_msg    = $this->property('max_msg');

        $this->mMinlength        = $this->property('min');
        $this->mMinlength_msg    = $this->property('min_msg');

        $this->mTrim            = $this->property('trm'); 
    }

}