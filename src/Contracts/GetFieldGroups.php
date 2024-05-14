<?php

namespace AcfService\Contracts;

interface GetFieldGroups
{
    /**
     * Get an array of field group data.
     *
     * @url https://www.advancedcustomfields.com/resources/acf_get_field_groups/
     *
     * @param array $args
     *
     * @return array
     */
    public function getFieldGroups(array $args = []): array;
}
