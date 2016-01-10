<?php namespace BetesCurieuses\Gadgets\Components;

use Cms\Classes\ComponentBase;
use BetesCurieuses\Gadgets\Models\Quote;

class Quotes extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name' => 'Quotes',
            'description' => 'Show ramdom quote'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->page['quotes'] = Quote::orderByRaw("RAND()")->take(1)->get();
    }

}