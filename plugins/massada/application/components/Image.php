<?php namespace Massada\Application\Components;

use Cms\Classes\ComponentBase;
use Massada\Application\Classes\Operation;


class Image extends ComponentBase
{

    public $mId;
    public $mName;
    public $mLabel;
    public $mModel;
    public $mSource;

    public $mData;

    public $mRequired;
    public $mRequired_msg;

    public $src;

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

            'name' => [
                'title'         => 'Name',
                'description'   => 'Textbox Name',
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
        $this->mName            = $this->property('name');
        $this->mModel           = $this->property('model');
        $this->mSource          = $this->property('src');


        //$this->page['global']   = "http://localhost:8080/cropper-master/examples/crop-avatar/img/picture.jpg";
        //$this->mData            = $this->page['global'];
        $this->mData            = "http://localhost:8080/cropper-master/examples/crop-avatar/img/picture.jpg";

        $this->mRequired        = $this->property('req');
        $this->mRequired_msg    = $this->property('req_msg');

        $this->modalLink        = Operation::generateRandomString(10);
    }

    public function onCrop() {
    
    }

    

}