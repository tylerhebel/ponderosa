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
            'league' => [
                'label'       => 'Leagues',
                'url'         => \Backend::url('ponderosa/league/season'),
                'icon'        => 'icon-tree',
                //'permissions' => ['vault.parking.*'],
                'order'       => 500,

                'sideMenu' => [
                    'seasons' => [
                        'label'       => 'All Seasons',
                        'icon'        => 'icon-tree',
                        'url'         => \Backend::url('ponderosa/league/season'),
                    ],
                    'leagues' => [
                        'label'       => 'All Leagues',
                        'icon'        => 'icon-tree',
                        'url'         => \Backend::url('ponderosa/league/league'),
                    ],
                ]
            ],
        ];
    }

}
