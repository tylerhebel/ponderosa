<?php namespace Ponderosa\League;

use System\Classes\PluginBase;

/**
 * League Plugin Information File
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
            'name'        => 'League',
            'description' => 'Dart League Management',
            'author'      => 'Ponderosa',
            'icon'        => 'icon-gamepad'
        ];
    }

    public function registerNavigation()
    {
        return [
            'building' => [
                'label'       => 'Leagues',
                'url'         => \Backend::url(''),
                'icon'        => 'icon-gamepad',
                //'permissions' => ['vault.parking.*'],
                'order'       => 500,
            ]
        ];
    }

}
