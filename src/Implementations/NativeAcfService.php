<?php

namespace AcfService\Implementations;

use AcfService\AcfService;

/**
 * Class NativeAcfService
 * @package AcfService\Implementations
 */
class NativeAcfService implements AcfService
{
    /**
     * @inheritDoc
     */
    public function getField(
        string $selector,
        int|false|string $postId = false,
        bool $formatValue = true,
        bool $escapeHtml = false
    ) {
        return get_field($selector, $postId, $formatValue, $escapeHtml);
    }

    /**
     * @inheritDoc
     */
    public function getFields(mixed $postId = false, bool $formatValue = true, bool $escapeHtml = false): array
    {
        return get_fields($postId, $formatValue, $escapeHtml);
    }

    /**
     * @inheritDoc
     */
    public function addOptionsPage(array $options): void
    {
        acf_add_options_page($options);
    }

    /**
     * @inheritDoc
     */
    public function renderFieldSetting(array $field, array $configuration, bool $global = false): void
    {
        acf_render_field_setting($field, $configuration, $global);
    }
}
