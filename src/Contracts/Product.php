<?php

namespace StallNinja\Product\Contracts;

use Illuminate\Database\Eloquent\Collection;

interface Product
{
    /**
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function variants() : Collection;

    /**
     * @return bool
     */
    public function hasVariants() : bool;

    /**
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function attributes() : Collection;

    /**
     * @return bool
     */
    public function hasAttributes() : bool;

    /**
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function options() : Collection;

    /**
     * @return bool
     */
    public function hasOptions() : bool;
}
