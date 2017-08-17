<?php

namespace StallNinja\Product\Eloquent;

use StallNinja\Product\Contracts\Option as OptionInterface;
use Illuminate\Database\Eloquent\Model as Entity;

class Option extends Entity implements OptionInterface
{
    protected $table = "product_options";

    public function values()
    {
        $this->hasMany(app('StallNinja\Product\Eloquent\OptionValue'));
    }
}
