<?php namespace Ponderosa\League\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * League Back-end Controller
 */
class League extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Ponderosa.League', 'league', 'leagues');
    }
}