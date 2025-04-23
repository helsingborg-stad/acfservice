<?php

namespace AcfService\Contracts;

interface DeleteField
{
    /**
     * This function will remove a value from the database
     *
     * @param   $selector (string) the field name or key
     * @param   $postId (mixed) the post_id of which the value is saved against
     *
     * @return  boolean
     */
    public function deleteField($selector, $postId = false): bool;
}
