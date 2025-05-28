<?php

namespace AcfService\Contracts;

interface AcfValidateValue
{
    /**
     * This function will validate a field's value
     *
     * @param $value
     * @param $field
     * @param $input
     * 
     * @return bool
     */
    public function acfValidateValue(
        $value,
        $field,
        $input
    ): bool;
}
