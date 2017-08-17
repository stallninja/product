<?php

namespace StallNinja\Product\Eloquent;

use Illuminate\Database\Eloquent\Model as Entity;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Collection;
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

    /**
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function variants() : Collection
    {
        return $this->hasMany(app('StallNinja\Product\Eloquent\Variant'));
    }

    /**
     * @return bool
     */
    public function hasVariants() : bool
    {
        return !$this->variants()->isEmpty();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function attributes() : Collection
    {
        return $this->hasMany(app('StallNinja\Product\Eloquent\Attribute'));
    }

    /**
     * @return bool
     */
    public function hasAttributes() : bool
    {
        return !$this->attributes()->isEmpty();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function options() : Collection
    {
        return $this->hasMany(app('StallNinja\Product\Eloquent\Option'));
    }

    /**
     * @return bool
     */
    public function hasOptions() : bool
    {
        return !$this->options()->isEmpty();
    }
}
