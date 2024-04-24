<?php

namespace AcfService\Contracts;

interface RenderFieldSetting
{
    /**
     * Renders the field setting.
     *
     * @param array $field The field data.
     * @param array $configuration The configuration data.
     * @param bool $global Whether the field is global or not.
     * @return void
     */
    public function renderFieldSetting(array $field, array $configuration, bool $global = false): void;
}
