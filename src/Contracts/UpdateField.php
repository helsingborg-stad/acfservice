<?php

namespace AcfService\Contracts;

interface UpdateField
{
    /**
     * This function will update a value in the database
     *
     * @param string $selector The field name or key.
     * @param mixed  $value    The value to save in the database.
     * @param mixed  $postId  The post_id of which the value is saved against.
     *
     * @return boolean
     */
    public function updateField(string $selector, mixed $value, mixed $postId = false): bool;
}
