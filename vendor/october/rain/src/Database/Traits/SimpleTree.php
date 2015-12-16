<?php namespace October\Rain\Database\Traits;

use Exception;
use Illuminate\Database\Eloquent\Collection;
use October\Rain\Database\TreeCollection;

/**
 * Simple Tree model trait
 *
 * Simple tree implementation, for advanced implementation see:
 * October\Rain\Database\Traits\NestedTree
 *
 * SimpleTree is the bare minimum needed for tree functionality, the
 * methods defined here should be implemented by all "tree" traits.
 *
 * Usage:
 *
 * Model table must have parent_id table column.
 * In the model class definition:
 *
 *   use \October\Rain\Database\Traits\SimpleTree;
 *
 * General access methods:
 *
 *   $model->getChildren(); // Returns children of this node
 *   $model->getChildCount(); // Returns number of all children.
 *   $model->getAllChildren(); // Returns all children of this node
 *   $model->getAllRoot(); // Returns all root level nodes (eager loaded)
 *   $model->getAll(); // Returns everything in correct order.
 *
 * Query builder methods:
 *
 *   $query->listsNested(); // Returns an indented array of key and value columns.
 *
 * You can change the sort field used by declaring:
 *
 *   const PARENT_ID = 'my_parent_column';
 *
 */
trait SimpleTree
{

    /*
     * Constructor
     */
    public static function bootSimpleTree()
    {
        static::extend(function($model){
            /*
             * Define relationships
             */
            $model->hasMany['children'] = [
                get_class($model),
                'key' => $model->getParentColumnName()
            ];

            $model->belongsTo['parent'] = [
                get_class($model),
                'key' => $model->getParentColumnName()
            ];
        });
    }

    /**
     * Returns all nodes and children.
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function getAll()
    {
        $collection = [];
        foreach ($this->getAllRoot() as $rootNode) {
            $collection[] = $rootNode;
            $collection = $collection + $rootNode->getAllChildren()->getDictionary();
        }

        return new Collection($collection);
    }

    /**
     * Returns a list of all root nodes, eager loaded.
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function getAllRoot()
    {
        return $this->get()->toNested();
    }

    /**
     * Returns number of all children below it.
     * @return int
     */
    public function getChildCount()
    {
        return count($this->getAllChildren());
    }

    /**
     * Get a list of children records, with their children (recursive)
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function getAllChildren()
    {
        $result = [];
        $children = $this->getChildren();

        foreach ($children as $child) {
            $result[] = $child;

            $childResult = $child->getAllChildren();
            foreach ($childResult as $subChild) {
                $result[] = $subChild;
            }
        }

        return new Collection($result);
    }

    /**
     * Returns direct child nodes.
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * Gets an array with values of a given column. Values are indented according to their depth.
     * @param  string $column Array values
     * @param  string $key    Array keys
     * @param  string $indent Character to indent depth
     * @return array
     */
    public function scopeListsNested($query, $column, $key = null, $indent = '&nbsp;&nbsp;&nbsp;')
    {
        /*
         * Recursive helper function
         */
        $buildCollection = function($items, $depth = 0) use (&$buildCollection, $column, $key, $indent) {
            $result = [];

            $indentString = str_repeat($indent, $depth);

            foreach ($items as $item) {
                if ($key !== null) {
                    $result[$item->{$key}] = $indentString . $item->{$column};
                }
                else {
                    $result[] = $indentString . $item->{$column};
                }

                /*
                 * Add the children
                 */
                $childItems = $item->getChildren();
                if ($childItems->count() > 0) {
                    $result = $result + $buildCollection($childItems, $depth + 1);
                }
            }

            return $result;
        };

        /*
         * Build a nested collection
         */
        $rootItems = $query->get()->toNested();
        $result = $buildCollection($rootItems);
        return $result;
    }

    //
    // Column getters
    //

    /**
     * Get fully qualified parent column name.
     * @return string
     */
    public function getQualifiedParentColumnName()
    {
        return $this->getTable(). '.' .$this->getParentColumnName();
    }

    /**
     * Get parent column name.
     * @return string
     */
    public function getParentColumnName()
    {
        return defined('static::PARENT_ID') ? static::PARENT_ID : 'parent_id';
    }

    /**
     * Get value of the model parent_id column.
     * @return int
     */
    public function getParentId()
    {
        return $this->getAttribute($this->getParentColumnName());
    }

    /**
     * Return a custom TreeCollection collection
     */
    public function newCollection(array $models = [])
    {
        return new TreeCollection($models);
    }

}
