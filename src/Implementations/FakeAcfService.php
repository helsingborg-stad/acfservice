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
     * Retrieves the return value for a given method.
     *
     * @param string $method The name of the method.
     * @param array $methodArgs The arguments to be passed to the method.
     * @param mixed $default The default value to return if the method does not have a return value.
     * @return mixed The return value of the method, or the default value if the method does not have a return value.
     */
    private function getReturnValue($method, array $methodArgs = [], $default = null): mixed
    {
        if (!isset($this->returnValues[$method])) {
            return $default;
        }

        if (is_callable($this->returnValues[$method])) {
            return $this->returnValues[$method](...$methodArgs);
        }

        return $this->returnValues[$method] ?? $default;
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
        return $this->getReturnValue(__FUNCTION__, func_get_args(), false);
    }

    /**
     * @inheritDoc
     */
    public function getFields(mixed $postId = false, bool $formatValue = true, bool $escapeHtml = false): array|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args(), false);
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
        return $this->getReturnValue(__FUNCTION__, func_get_args(), []);
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
        return $this->getReturnValue(__FUNCTION__, func_get_args(), []);
    }

    /**
     * @inheritDoc
     */
    public function updateField(string $selector, mixed $value, mixed $postId = false): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args(), []);
    }

    /**
     * @inheritDoc
     */
    public function addOptionsSubPage(array $options): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function acfGetFields(string|array $parent): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args(), []);
    }

    /**
     * @inheritDoc
     */
    public function deleteField($selector, $postId = false): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args(), true);
    }

    /**
     * @inheritDoc
     */
    public function getFieldObject(
        string $selector,
        int|false|string $postId = false,
        bool $formatValue = true,
        bool $escapeHtml = false
    ): array|false {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args(), false);
    }
}
