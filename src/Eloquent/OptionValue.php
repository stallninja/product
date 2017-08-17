<?php

namespace StallNinja\Product\Eloquent;

use StallNinja\Product\Contacts\OptionValue as OptionValueInterface;
use Illuminate\Database\Eloquent\Model as Entity;

class OptionValue extends Entity implements OptionValueInterface
{
    protected $table = "product_option_values";
}
