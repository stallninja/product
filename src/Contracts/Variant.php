<?php

namespace StallNinja\Product\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

interface Variant
{
    /**
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function product() : Model;

    /**
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function optionValues() : Collection;
}
