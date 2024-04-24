<?php

namespace AcfService\Contracts;

interface GetField
{
    /**
     * Get the value of a specific field.
     *
     * @param string $selector The field selector.
     * @param int|false|string $postId The post ID.
     * @param bool $formatValue Whether to format the field value.
     * @param bool $escapeHtml Whether to escape HTML in the field value.
     * @return mixed The field value.
     */
    public function getField(
        string $selector,
        int|false|string $postId = false,
        bool $formatValue = true,
        bool $escapeHtml = false
    );
}
