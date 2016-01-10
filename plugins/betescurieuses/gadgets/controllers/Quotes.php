<?php namespace BetesCurieuses\Gadgets\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Quotes Back-end Controller
 */
class Quotes extends Controller
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

        BackendMenu::setContext('BetesCurieuses.Gadgets', 'gadgets', 'Quotes');
    }
}