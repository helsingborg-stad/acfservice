<?php

namespace AcfService\Contracts;

interface AcfGetFields
{
    /**
     * Retrieves all the fields from a specific field group.
     *
     * @param string $parent The field group’s ID or key.
     */
    public function acfGetFields(
        string|array $parent
    ): array;
}
