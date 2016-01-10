<?php namespace BetesCurieuses\Gadgets;

use System\Classes\PluginBase;
use Backend;
use Radiantweb\Problog\Controllers\Posts;
use Radiantweb\Problog\Models\Post as BasePost;
use Event;

/**
 * Ae110815 Plugin Information File
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
            'name' => 'Gadgets',
            'description' => 'BetesCurieuses Gadgets Plugin',
            'author' => 'BetesCurieuses',
            'icon' => 'icon-cogs'
        ];
    }

    public function registerComponents()
    {
        return [
            'BetesCurieuses\Gadgets\Components\Quotes' => 'Quotes',
            'BetesCurieuses\Gadgets\Components\Testimonials' => 'Testimonials',
        ];
    }

    public function registerNavigation()
    {
        return [
            'gadgets' => [
                'label' => 'Contenu',
                'url' => Backend::url('BetesCurieuses/Gadgets/quotes'),
                'icon' => 'icon-quote-right',
                'permissions' => ['betescurieuses.gadgets.*'],
                'order' => 500,

                'sideMenu' => [
                    'Quotes' => [
                        'label' => 'Témoignages',
                        'icon' => 'icon-quote-right',
                        'url' => Backend::url('BetesCurieuses/Gadgets/quotes'),
                        'permissions' => ['betescurieuses.gadgets.quotes']
                    ],
                ]
            ]
        ];
    }

}
