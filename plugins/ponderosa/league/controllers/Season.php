<?php namespace Ponderosa\League\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Season Back-end Controller
 */
class Season extends Controller
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

        BackendMenu::setContext('Ponderosa.League', 'league', 'seasons');
    }
}