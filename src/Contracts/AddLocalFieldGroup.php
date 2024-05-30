<?php

namespace AcfService\Contracts;

interface AddLocalFieldGroup
{
    /**
     * Adds a local field group.
     *
     * @param   array $fieldGroup The field group array.
     * @return  bool
     */
    public function addLocalFieldGroup(array $fieldGroup): bool;
}
