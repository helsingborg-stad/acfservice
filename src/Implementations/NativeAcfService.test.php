<?php

namespace AcfService\Implementations;

class NativeAcfServiceTest extends \PHPUnit\Framework\TestCase
{
    public function testGetField()
    {
        /**
         * @testdox getField calls get_field with the correct arguments
         */
        function get_field($selector, $postId, $formatValue, $escapeHtml)
        {
            return [
                'selector'    => $selector,
                'postId'      => $postId,
                'formatValue' => $formatValue,
                'escapeHtml'  => $escapeHtml
            ];
        }

        $acfService = new NativeAcfService();
        $call       = $acfService->getField('foo', 123, true, false);

        $this->assertEquals('foo', $call['selector']);
        $this->assertEquals(123, $call['postId']);
        $this->assertEquals(true, $call['formatValue']);
        $this->assertEquals(false, $call['escapeHtml']);
    }

    /**
     * @testdox getFields() calls get_fields with the correct arguments
     */
    public function testGetFields()
    {
        function get_fields($postId, $formatValue, $escapeHtml)
        {
            return [
                'postId'      => $postId,
                'formatValue' => $formatValue,
                'escapeHtml'  => $escapeHtml
            ];
        }

        $acfService = new NativeAcfService();
        $call       = $acfService->getFields(123, true, false);

        $this->assertEquals(123, $call['postId']);
        $this->assertEquals(true, $call['formatValue']);
        $this->assertEquals(false, $call['escapeHtml']);
    }

    /**
     * @testdox addOptionsPage() calls acf_add_options_page with the correct arguments
     */
    public function testAddOptionsPage()
    {
        function acf_add_options_page($options)
        {
            echo json_encode($options);
        }

        $acfService = new NativeAcfService();
        ob_start();
        $acfService->addOptionsPage(['foo' => 'bar']);
        $call = json_decode(ob_get_clean(), true);

        $this->assertEquals('bar', $call['foo']);
    }

    /**
     * @testdox renderFieldSetting() calls acf_render_field_setting with the correct arguments
     */
    public function testRenderFieldSetting()
    {
        function acf_render_field_setting($field, $configuration, $global)
        {
            echo json_encode([
                'field'         => $field,
                'configuration' => $configuration,
                'global'        => $global
            ]);
        }

        $acfService = new NativeAcfService();
        ob_start();
        $acfService->renderFieldSetting(['foo' => 'bar'], ['baz' => 'qux'], true);
        $call = json_decode(ob_get_clean(), true);

        $this->assertEquals('bar', $call['field']['foo']);
        $this->assertEquals('qux', $call['configuration']['baz']);
        $this->assertEquals(true, $call['global']);
    }
}
