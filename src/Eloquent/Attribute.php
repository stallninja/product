<?php

namespace StallNinja\Product\Eloquent;

use Illuminate\Database\Eloquent\Model;
use StallNinja\Product\Contracts\Attribute as AttributeInterface;

class Attribute extends Model implements AttributeInterface
{
    protected $table = 'product_attributes';
}
