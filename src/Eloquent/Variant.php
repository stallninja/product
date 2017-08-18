<?php

namespace StallNinja\Product\Eloquent;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;
use StallNinja\Product\Contracts\Variant as VariantInterface;

class Variant extends Model implements VariantInterface
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'product_variants';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function product() : Model
    {
        return $this->belongsTo(app('StallNinja\Product\Eloquent\Product'));
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function optionValues() : Collection
    {
        return $this->hasMany(app('StallNinja\Product\Eloquent\OptionValue'));
    }
}
