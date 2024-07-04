<?php

namespace AcfService\Implementations;

use AcfService\AcfService;

/**
 * Class NativeAcfService
 * @package AcfService\Implementations
 */
class FakeAcfService implements AcfService
{
    public array $methodCalls = [];

    /**
     * Class constructor.
     *
     * @param array $returnValues
     */
    public function __construct(private array $returnValues = [])
    {
    }

    /**
     * Registers a function call.
     *
     * @param string $method
     * @param array $methodArguments
     */
    private function registerFunctionCall(string $method, array $methodArguments): void
    {
        if (!isset($this->methodCalls[$method])) {
            $this->methodCalls[$method] = [];
        }

        $this->methodCalls[$method][] = $methodArguments;
    }

    /**
     * @inheritDoc
     */
    public function getField(
        string $selector,
        int|false|string $postId = false,
        bool $formatValue = true,
        bool $escapeHtml = false
    ) {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return
            $this->returnValues[__FUNCTION__][$postId][$selector] ??
            $this->returnValues[__FUNCTION__][$selector] ??
            $this->returnValues[__FUNCTION__] ??
            false;
    }

    /**
     * @inheritDoc
     */
    public function getFields(mixed $postId = false, bool $formatValue = true, bool $escapeHtml = false): array|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return
            $this->returnValues[__FUNCTION__][$postId ?: null] ??
            $this->returnValues[__FUNCTION__] ??
            false;
    }

    /**
     * @inheritDoc
     */
    public function addOptionsPage(array $options): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function renderFieldSetting(array $field, array $configuration, bool $global = false): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function formHead(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function form(string|array $settings = []): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getFieldGroups(array $args = []): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->returnValues[__FUNCTION__] ?? [];
    }

    /**
     * @inheritDoc
     */
    public function enqueueUploader(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function addLocalFieldGroup(array $fieldGroup): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->returnValues[__FUNCTION__] ?? [];
    }

    /**
     * @inheritDoc
     */
    public function updateField(string $selector, mixed $value, mixed $postId = false): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->returnValues[__FUNCTION__] ?? [];
    }
}
