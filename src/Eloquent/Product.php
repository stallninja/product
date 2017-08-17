<?php

namespace StallNinja\Product\Eloquent;

use Illuminate\Database\Eloquent\Model as Entity;
use Illuminate\Database\Eloquent\SoftDeletes;
use StallNinja\Product\Contracts\Product as ProductInterface;

class Product extends Entity implements ProductInterface
{
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'products';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'name',
        'description',
        'sku',
    ];

    /**
    * The attributes that should be cast to native types.
    *
    * @var array
    */
    protected $casts = [
        'active' => 'boolean',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
        'available_on',
    ];

    public function variants()
    {
        return $this->hasMany(app('StallNinja\Product\Eloquent\Variant'));
    }

    public function hasVariants()
    {
        return !$this->variants()->isEmpty();
    }

    public function attributes()
    {
        return $this->hasMany(app('StallNinja\Product\Eloquent\Attribute'));
    }

    public function hasAttributes()
    {
        return !$this->attributes()->isEmpty();
    }

    public function options()
    {
        return $this->hasMany(app('StallNinja\Product\Eloquent\Option'));
    }

    public function hasOptions()
    {
        return !$this->options()->isEmpty();
    }
}
