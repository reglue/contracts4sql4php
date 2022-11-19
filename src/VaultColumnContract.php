<?php

declare (strict_types = 1);

namespace Reglue\Contracts4sql4php;

interface VaultColumnContract extends VaultContract
{
    /**
     * @param ColumnContract $item
     *
     * @return static
     */
    public function set(ColumnContract $item);
}
