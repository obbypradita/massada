<?php namespace Massada\Application\Components;

use Cms\Classes\ComponentBase;

class Textarea extends ComponentBase
{
    public $mId;
    public $mName;
    public $mLabel;
    public $mModel;
    public $mBase;

    public $mPlaceholder;
    public $mRows;

    public $mRequired;
    public $mRequired_msg;

    public $mExpression;
    public $mExpression_msg;

    public $mMaxlength;
    public $mMaxlength_msg;

    public $mMinlength;
    public $mMinlength_msg;

    public $mTrim;

    public function componentDetails()
    {
        return [
            'name'        => 'Textarea',
            'description' => 'Long text area'
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
                'description'   => 'Textarea Angular Model',
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

            'rws' => [
                'title'         => 'Label',
                'description'   => 'Textbox Label',
                'type'          => 'string',
                'group'         => 'Common',
                'default'       => '2'
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
        $this->mRows            = $this->property('rws');

        $this->mRequired        = $this->property('req');
        $this->mRequired_msg    = $this->property('req_msg');

        $this->mExpression      = $this->property('exp');
        $this->mExpression_msg  = $this->property('exp_msg'); 

        $this->mMaxlength        = $this->property('max');
        $this->mMaxlength_msg    = $this->property('max_msg');

        $this->mMinlength        = $this->property('min');
        $this->mMinlength_msg    = $this->property('min_msg');

         $this->mTrim            = $this->property('trm'); 
    }

}