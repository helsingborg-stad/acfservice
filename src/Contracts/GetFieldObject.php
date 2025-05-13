<?php

namespace AcfService\Contracts;

interface GetFieldObject
{
    /**
     * Get the field object for a specific field.
     *
     * @param string $selector The field selector.
     * @param int|false|string $postId The post ID.
     * @param bool $formatValue Whether to format the field value.
     * @param bool $escapeHtml Whether to escape HTML in the field value.
     * @return array|false The field object. Returns false if the field does not exist.
     */
    public function getFieldObject(
        string $selector,
        int|false|string $postId = false,
        bool $formatValue = true,
        bool $escapeHtml = false
    ): array|false;
}
