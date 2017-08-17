<?php

namespace StallNinja\Product\Eloquent;

use StallNinja\Product\Contracts\Product as ProductInterface;
use Illuminate\Database\Eloquent\Model as Entity;

class Product extends Entity implements ProductInterface
{
    /**
     * @var string
     */
    protected $table = 'products';

    /**
     * @return Collection
     */
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
        return $this->hasMany(config('stallninja.product.models.attribute'));
    }

    public function hasAttributes()
    {
        return !$this->attributes()->isEmpty();
    }

    public function options()
    {
        return $this->hasMany(config('stallninja.product.models.option'));
    }

    public function hasOptions()
    {
        return !$this->options()->isEmpty();
    }
}
