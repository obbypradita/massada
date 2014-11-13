<?php namespace Massada\Application\Components;

use Cms\Classes\ComponentBase;

class Contact extends ComponentBase
{
    public $mId;
    public $mName;
    public $mLabel;
    public $mModel;
    public $mBase;

    public $mModelContact;
    public $mRequireContact;
    public $mRequireContact_msg;
    public $mMaxContact;
    public $mMaxContact_msg;
    public $mMinContact;
    public $mMinContact_msg;
    public $mExpContact;
    public $mExpContact_msg;
    public $mTrimContact;

    public $mModelPhone;
    public $mRequirePhone;
    public $mRequirePhone_msg;
    public $mMaxPhone;
    public $mMaxPhone_msg;
    public $mMinPhone;
    public $mMinPhone_msg;
    public $mExpPhone;
    public $mExpPhone_msg;
    public $mTrimPhone;

    public $mModelEmail;
    public $mRequireEmail;
    public $mRequireEmail_msg;
    public $mMaxEmail;
    public $mMaxEmail_msg;
    public $mMinEmail;
    public $mMinEmail_msg;
    public $mExpEmail;
    public $mExpEmail_msg;
    public $mTrimEmail;

    public function componentDetails()
    {
        return [
            'name'        => 'Contact',
            'description' => 'Powerful contact component'
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

            'mModel' => [
                'title'         => 'Model',
                'description'   => 'Model for whole depedency',
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









            'mModelContact' => [
                'title'         => 'Contact Model',
                'description'   => 'Contact Model for angular',
                'type'          => 'string',
                'default'       => 'mContactModel',
                'group'         => 'Contact',
            ],

            'mReqContact' => [
                'title'         => 'Required',
                'description'   => 'User must insert value',
                'type'          => 'dropdown',
                'options'       => [ 'true' => 'True', 'false' => 'False' ],
                'group'         => 'Contact',
            ],

            'mReqContact_msg' => [
                'title'         => 'Required Err. Msg.',
                'description'   => 'Error message field is empty',
                'type'          => 'string',
                'group'         => 'Contact',             
            ],

            'mMaxContact' => [
                'title'         => 'Max Length',
                'description'   => 'Maximum length provided',
                'type'          => 'string',
                'group'         => 'Contact'
            ],

            'mMaxContact_msg' => [
                'title'         => 'Max Length Err. Msg.',
                'description'   => 'Error message above limit',
                'type'          => 'string',
                'group'         => 'Contact'
            ],

            'mMinContact' => [
                'title'         => 'Min Length',
                'description'   => 'Minimum length provided',
                'type'          => 'string',
                'group'         => 'Contact'
            ],

            'mMinContact_msg' => [
                'title'         => 'Min Length Err. Msg.',
                'description'   => 'Error message field is empty',
                'type'          => 'string',
                'group'         => 'Contact'             
            ],

            'mExpContact' => [
                'title'         => 'Expression',
                'description'   => 'Validate input with regular expression',
                'type'          => 'string',
                'group'         => 'Contact',
            ],

            'mExpContact_msg' => [
                'title'         => 'Expression Err. Msg.',
                'description'   => 'Error message when expressin fail',
                'type'          => 'string',
                'group'         => 'Contact',   
            ],

            'mTrimContact' => [
                'title'         => 'Trim',
                'description'   => 'Allog angular to wrap white space',
                'type'          => 'dropdown',
                'options'       => [ 'true' => 'True', 'false' => 'False' ],
                'group'         => 'Contact',
            ],







            'mModelPhone' => [
                'title'         => 'Model',
                'description'   => 'Textbox Angular Model',
                'type'          => 'string',
                'default'       => 'mPhoneModel',
                'group'         => 'Phone',
            ],

            'mReqPhone' => [
                'title'         => 'Required',
                'description'   => 'User must insert value',
                'type'          => 'dropdown',
                'options'       => [ 'true' => 'True', 'false' => 'False' ],
                'group'         => 'Phone',
            ],

            'mReqPhone_msg' => [
                'title'         => 'Required Err. Msg.',
                'description'   => 'Error message field is empty',
                'type'          => 'string',
                'group'         => 'Phone',             
            ],

            'mMaxPhone' => [
                'title'         => 'Max Length',
                'description'   => 'Maximum length provided',
                'type'          => 'string',
                'group'         => 'Phone'
            ],

            'mMaxPhone_msg' => [
                'title'         => 'Max Length Err. Msg.',
                'description'   => 'Error message above limit',
                'type'          => 'string',
                'group'         => 'Phone'
            ],

            'mMinPhone' => [
                'title'         => 'Min Length',
                'description'   => 'Minimum length provided',
                'type'          => 'string',
                'group'         => 'Phone'
            ],

            'mMinPhone_msg' => [
                'title'         => 'Min Length Err. Msg.',
                'description'   => 'Error message field is empty',
                'type'          => 'string',
                'group'         => 'Phone'             
            ],

            'mExpPhone' => [
                'title'         => 'Expression',
                'description'   => 'Validate input with regular expression',
                'type'          => 'string',
                'group'         => 'Phone',
            ],

            'mExpPhone_msg' => [
                'title'         => 'Expression Err. Msg.',
                'description'   => 'Error message when expressin fail',
                'type'          => 'string',
                'group'         => 'Phone',   
            ],

            'mTrimPhone' => [
                'title'         => 'Trim',
                'description'   => 'Allow angular to wrap white space',
                'type'          => 'dropdown',
                'options'       => [ 'true' => 'True', 'false' => 'False' ],
                'group'         => 'Phone',
            ],







            'mModelEmail' => [
                'title'         => 'Model',
                'description'   => 'Textbox Angular Model',
                'type'          => 'string',
                'default'       => 'mEmailModel',
                'group'         => 'Email',
            ],

            'mReqEmail' => [
                'title'         => 'Required',
                'description'   => 'User must insert value',
                'type'          => 'dropdown',
                'options'       => [ 'true' => 'True', 'false' => 'False' ],
                'group'         => 'Email',
            ],

            'mReqEmail_msg' => [
                'title'         => 'Required Err. Msg.',
                'description'   => 'Error message field is empty',
                'type'          => 'string',
                'group'         => 'Email',             
            ],

            'mMaxEmail' => [
                'title'         => 'Max Length',
                'description'   => 'Maximum length provided',
                'type'          => 'string',
                'group'         => 'Email'
            ],

            'mMaxEmail_msg' => [
                'title'         => 'Max Length Err. Msg.',
                'description'   => 'Error message above limit',
                'type'          => 'string',
                'group'         => 'Email'
            ],

            'mMinEmail' => [
                'title'         => 'Min Length',
                'description'   => 'Minimum length provided',
                'type'          => 'string',
                'group'         => 'Email'
            ],

            'mMinEmail_msg' => [
                'title'         => 'Min Length Err. Msg.',
                'description'   => 'Error message field is empty',
                'type'          => 'string',
                'group'         => 'Email'             
            ],

            'mExpEmail' => [
                'title'         => 'Expression',
                'description'   => 'Validate input with regular expression',
                'type'          => 'string',
                'group'         => 'Email',
            ],

            'mExpEmail_msg' => [
                'title'         => 'Expression Err. Msg.',
                'description'   => 'Error message when expressin fail',
                'type'          => 'string',
                'group'         => 'Email',   
            ],

            'mTrimEmail' => [
                'title'         => 'Trim',
                'description'   => 'Allog angular to wrap white space',
                'type'          => 'dropdown',
                'options'       => [ 'true' => 'True', 'false' => 'False' ],
                'group'         => 'Email',
            ],
        ];
    }

     public function onRender() {
        $this->mId              = $this->property('id');
        $this->mName            = $this->property('name');
        $this->mLabel           = $this->property('label');
        $this->mModel           = $this->property('mModel');
        $this->mBase            = $this->property('base');


        $this->mModelContact       = $this->property('mModelContact');          
        $this->mRequireContact     = $this->property('mReqContact');          
        $this->mRequireContact_msg = $this->property('mReqContact_msg');              
        $this->mMaxContact         = $this->property('mMaxContact');      
        $this->mMaxContact_msg     = $this->property('mMaxContact_msg');          
        $this->mMinContact         = $this->property('mMinContact');      
        $this->mMinContact_msg     = $this->property('mMinContact_msg');          
        $this->mExpContact         = $this->property('mExpContact');      
        $this->mExpContact_msg     = $this->property('mExpContact_msg');          
        $this->mTrimContact        = $this->property('mTrimContact');          

        $this->mModelPhone         = $this->property('mModelPhone');      
        $this->mRequirePhone       = $this->property('mReqPhone');          
        $this->mRequirePhone_msg   = $this->property('mReqPhone_msg');              
        $this->mMaxPhone           = $this->property('mMaxPhone');      
        $this->mMaxPhone_msg       = $this->property('mMaxPhone_msg');          
        $this->mMinPhone           = $this->property('mMinPhone');      
        $this->mMinPhone_msg       = $this->property('mMinPhone_msg' );          
        $this->mExpPhone           = $this->property('mExpPhone');      
        $this->mExpPhone_msg       = $this->property('mExpPhone_msg');          
        $this->mTrimPhone          = $this->property('mTrimPhone');      

        $this->mModelEmail         = $this->property('mModelEmail');      
        $this->mRequireEmail       = $this->property('mReqEmail');          
        $this->mRequireEmail_msg   = $this->property('mReqEmail_msg');              
        $this->mMaxEmail           = $this->property('mMaxEmail');      
        $this->mMaxEmail_msg       = $this->property('mMaxEmail_msg');          
        $this->mMinEmail           = $this->property('mMinEmail');      
        $this->mMinEmail_msg       = $this->property('mMinEmail_msg');          
        $this->mExpEmail           = $this->property('mExpEmail');      
        $this->mExpEmail_msg       = $this->property('mExpEmail_msg');          
        $this->mTrimEmail          = $this->property('mTrimEmail');     
    } 

}