<?php

namespace StallNinja\Product\Eloquent;

use StallNinja\Product\Contracts\Variant as VariantInterface;
use Illuminate\Database\Eloquent\Model as Entity;

class Variant extends Entity implements VariantInterface
{
    protected $table = "product_variants";

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function optionValues()
    {
        return $this->hasMany(OptionValue::class);
    }
}
