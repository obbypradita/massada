<?php namespace Marsflow\Controls;

use System\Classes\PluginBase;

/**
 * application Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'RAD Admin Application',
            'description' => 'Application for backend administration',
            'author'      => 'marsflow',
            'icon'        => 'icon-leaf'
        ];
    }

    public function registerComponents() {
        return [
            'Marsflow\Controls\Components\Textbox'        => 'mTextbox',
            'Marsflow\Controls\Components\Radiobutton'    => 'mRadiobutton',
            'Marsflow\Controls\Components\Dropdown'       => 'mDropdown',
            'Marsflow\Controls\Components\Textarea'       => 'mTextarea',
            'Marsflow\Controls\Components\Image'          => 'mImage',
            'Marsflow\Controls\Components\Contact'        => 'mContact'
        ];
    }
}
