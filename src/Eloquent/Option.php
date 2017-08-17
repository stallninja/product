<?php

namespace StallNinja\Product\Eloquent;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;
use StallNinja\Product\Contracts\Option as OptionInterface;

class Option extends Model implements OptionInterface
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "product_options";

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function values() : Collection
    {
        $this->hasMany(app('StallNinja\Product\Eloquent\OptionValue'));
    }

    /**
     * @return bool
     */
    public function hasValues() : bool
    {
        return $this->values()->isEmpty();
    }
}
