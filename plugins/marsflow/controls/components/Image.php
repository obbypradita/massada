<?php namespace Marsflow\Controls\Components;

use Cms\Classes\ComponentBase;
use Marsflow\Controls\Classes\Operation;


class Image extends ComponentBase
{

    public $mId;
    public $mName;
    public $mLabel;
    public $mModelPhoto;
    public $mModelAvatar;


    public $mRequired;
    public $mRequired_msg;

   

    public $modalLink;



    public function componentDetails()
    {
        return [
            'name'        => 'Image Component',
            'description' => 'No description provided yet...'
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
                'default'       => 'mImage',
            ],

            'namePhoto' => [
                'title'         => 'Name Photo',
                'description'   => 'Name for $_POST photo parameter ',
                'type'          => 'string',
                'group'         => 'Common',
                'default'       => 'mImage',
            ],

            'nameAvatar' => [
                'title'         => 'Name Avatar',
                'description'   => 'Name for $_POST avatar parameter',
                'type'          => 'string',
                'group'         => 'Common',
                'default'       => 'mImage',
            ],

            'model' => [
                'title'         => 'Model',
                'description'   => 'Textarea Angular Model',
                'type'          => 'string',
                'group'         => 'Common',
                'default'       => 'mImage'
            ],

            'src' => [
                'title'         => 'Source',
                'description'   => 'Image Source',
                'type'          => 'string',
                'group'         => 'Common',
                'default'       => 'mImage'
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
        $this->mId              = $this->property('id');
        $this->mNamePhoto       = $this->property('namePhoto');
        $this->mNameAvatar      = $this->property('nameAvatar');
        $this->mModel           = $this->property('model');

        $this->mRequired        = $this->property('req');
        $this->mRequired_msg    = $this->property('req_msg');

        $this->modalLink        = Operation::generateRandomString(10);
    }

    public function onCrop() {
    
    }

    

}