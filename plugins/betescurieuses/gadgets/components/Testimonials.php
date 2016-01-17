<?php namespace Betescurieuses\Gadgets\Components;

use Cms\Classes\ComponentBase;
use BetesCurieuses\Gadgets\Models\Quote;

class Testimonials extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Testimonials',
            'description' => 'Testimonials Component'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->page['sliders'] = Quote::orderByRaw("RAND()")->isPublished()->take(5)->get();
    }

}