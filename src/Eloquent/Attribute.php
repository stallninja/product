<?php

namespace StallNinja\Product\Eloquent;

use StallNinja\Product\Contracts\Attribute as AttributeInterface;
use Illuminate\Database\Eloquent\Model as Entity;

class Attribute extends Entity implements AttributeInterface
{
    protected $table = "product_attributes";
}
