<?php namespace Massada\Application;

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
            'name'        => 'Massada Admin Application',
            'description' => 'Application for backend administration',
            'author'      => 'massada',
            'icon'        => 'icon-leaf'
        ];
    }

    public function registerComponents() {
        return [
            'Massada\Application\Components\Textbox'        => 'mTextbox',
            'Massada\Application\Components\Radiobutton'    => 'mRadiobutton',
            'Massada\Application\Components\Dropdown'       => 'mDropdown',
            'Massada\Application\Components\Textarea'       => 'mTextarea',
            'Massada\Application\Components\Image'          => 'mImage',
            'Massada\Application\Components\Contact'        => 'mContact'
        ];
    }
}
