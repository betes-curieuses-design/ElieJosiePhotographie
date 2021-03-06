<?php namespace October\Rain\Database\Relations;

use Illuminate\Database\Eloquent\Relations\BelongsToMany as BelongsToManyBase;
use Illuminate\Database\Eloquent\Model;

class BelongsToMany extends BelongsToManyBase
{

    use DeferOneOrMany;

    /**
     * @var boolean This relation object is a 'count' helper.
     */
    public $countMode = false;

    /**
     * Save the supplied related model with deferred binding support.
     */
    public function save(Model $model, array $pivotData = [], $sessionKey = null)
    {
        $model->save();
        $this->add($model, $sessionKey, $pivotData);
        return $model;
    }

    /**
     * Adds a model to this relationship type.
     */
    public function add(Model $model, $sessionKey = null, $pivotData = [])
    {
        if ($sessionKey === null) {
            $this->attach($model->getKey(), $pivotData);
        }
        else {
            $this->parent->bindDeferred($this->relationName, $model, $sessionKey);
        }
    }

    /**
     * Create a new instance of this related model with deferred binding support.
     */
    public function create(array $attributes, array $pivotData = [], $sessionKey = null)
    {
        $model = $this->related->create($attributes);

        $this->add($model, $sessionKey, $pivotData);

        return $model;
    }

    /**
     * Removes a model from this relationship type.
     */
    public function remove(Model $model, $sessionKey = null)
    {
        if ($sessionKey === null) {
            $this->detach($model->getKey());
        }
        else {
            $this->parent->unbindDeferred($this->relationName, $model, $sessionKey);
        }
    }

    /**
     * Get a paginator for the "select" statement. Complies with October Rain.
     *
     * @param  int    $perPage
     * @param  array  $columns
     * @return \Illuminate\Pagination\Paginator
     */
    public function paginate($perPage = null, $currentPage = null, $columns = ['*'])
    {
        $this->query->addSelect($this->getSelectColumns($columns));

        $paginator = $this->query->paginate($perPage, $currentPage, $columns);

        $this->hydratePivotRelation($paginator->items());

        return $paginator;
    }

    /**
     * Set the select clause for the relation query.
     *
     * @param  array  $columns
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    protected function getSelectColumns(array $columns = ['*'])
    {
        if ($this->countMode) {
            return $this->table.'.'.$this->foreignKey.' as pivot_'.$this->foreignKey;
        }

        if ($columns == ['*']) {
            $columns = [$this->related->getTable().'.*'];
        }

        return array_merge($columns, $this->getAliasedPivotColumns());
    }

    /**
     * Create a new pivot model instance.
     *
     * @param  array  $attributes
     * @param  bool   $exists
     * @return \Illuminate\Database\Eloquent\Relations\Pivot
     */
    public function newPivot(array $attributes = array(), $exists = false)
    {
        /*
         * October looks to the relationship parent
         */
        $pivot = $this->parent->newRelationPivot($this->relationName, $this->parent, $attributes, $this->table, $exists);

        /*
         * Laravel looks to the related model
         */
        if (empty($pivot)) {
            $pivot = $this->related->newPivot($this->parent, $attributes, $this->table, $exists);
        }

        return $pivot->setPivotKeys($this->foreignKey, $this->otherKey);
    }

    /**
     * Set the left join clause for the relation query, used by DeferOneOrMany.
     *
     * @param  \Illuminate\Database\Eloquent\Builder|null
     * @return $this
     */
    protected function setLeftJoin($query = null)
    {
        $query = $query ?: $this->query;

        $baseTable = $this->related->getTable();

        $key = $baseTable.'.'.$this->related->getKeyName();

        $query->leftJoin($this->table, $key, '=', $this->getOtherKey());

        return $this;
    }

}
