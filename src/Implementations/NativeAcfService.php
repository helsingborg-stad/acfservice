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

    /**
     * @inheritDoc
     */
    public function formHead(): void
    {
        acf_form_head();
    }

    /**
     * @inheritDoc
     */
    public function form(string|array $settings = []): void
    {
        acf_form($settings);
    }

    /**
     * @inheritDoc
     */
    public function getFieldGroups(array $args = []): array
    {
        return acf_get_field_groups($args);
    }

    /**
     * @inheritDoc
     */
    public function enqueueUploader(): void
    {
        acf_enqueue_uploader();
    }

    /**
     * @inheritDoc
     */
    public function addLocalFieldGroup(array $fieldGroup): bool
    {
        return acf_add_local_field_group($fieldGroup);
    }
}
