<?php

declare (strict_types = 1);

namespace Reglue\Contracts4sql4php;

interface VaultTupleContract extends VaultContract
{
    /**
     * @param TupleContract $item
     *
     * @return static
     */
    public function set(TupleContract $item);
}
