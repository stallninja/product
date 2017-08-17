<?php

namespace StallNinja\Product\Contracts;

use Illuminate\Database\Eloquent\Collection;

interface Option
{
    /**
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function values() : Collection;

    /**
     * @return bool
     */
    public function hasValues() : bool;
}
