<?php

namespace StallNinja\Product\Eloquent;

use Illuminate\Database\Eloquent\Model;
use StallNinja\Product\Contacts\OptionValue as OptionValueInterface;

class OptionValue extends Model implements OptionValueInterface
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "product_option_values";
}
