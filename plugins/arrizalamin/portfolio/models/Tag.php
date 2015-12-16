<?php namespace ArrizalAmin\Portfolio\Models;

use Model;

/**
 * Category Model
 */
class Tag extends Model
{

    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'arrizalamin_portfolio_tags';
    /**
     * @var array Fillable fields
     */
    public $fillable = ['name'];
    /**
     * @var array Validation rules
     */
    public $rules = [
        'name' => 'required|unique:arrizalamin_portfolio_tags|regex:/^[a-z0-9]+$/'
    ];
    /**
     * @var array Custom validation error messages
     */
    public $customMessages = [
        'name.required' => 'A tag name is required.',
        'name.unique' => 'A tag by that name already exists.',
        'name.regex' => 'Tags may only contain alpha-numeric characters and hyphens.'
    ];
    /**
     * @var array Relations
     */
    public $belongsToMany = [
        'items' => [
            'ArrizalAmin\Portfolio\Models\Item',
            'table' => 'arrizalamin_portfolio_item_tag',
            'order' => 'arrizalamin_portfolio_items.updated_at desc'
        ]
    ];
    /**
     * @var array Guarded fields
     */
    protected $guarded = [];

    /**
     * Convert tag names to lower case
     */
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = strtolower($value);
    }

}