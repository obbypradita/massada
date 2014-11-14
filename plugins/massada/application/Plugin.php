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
            'name'        => 'Massada Admin Application Modeling',
            'description' => 'Application for backend administration',
            'author'      => 'massada',
            'icon'        => 'icon-leaf'
        ];
    }

    public function registerComponents() {
        return [];
    }
}
