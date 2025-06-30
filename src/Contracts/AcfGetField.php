<?php

namespace AcfService\Contracts;

interface AcfGetField
{
    /**
     * Retrieves a field for the given identifier.
     *
     * @param int|string $id $id The field ID, key or name.
     */
    public function acfGetField(
        int|string $id = 0
    ): array|false;
}
