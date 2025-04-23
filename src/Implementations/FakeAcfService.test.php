<?php

namespace AcfService\Implementations;

use PHPUnit\Framework\TestCase;

class FakeAcfServiceTest extends TestCase
{
    /**
     * @testdox getField() with required return value.
     */
    public function testGetFieldWithRequiredValue()
    {
        $returnCallback = fn ($selector, $postId) =>
            $postId === 123 && $selector === 'testSelector' ? 'testValue' : null;

        $fakeAcfService = new FakeAcfService(['getField' => $returnCallback]);

        $result = $fakeAcfService->getField('testSelector', 123);

        $this->assertEquals(['testSelector', 123], $fakeAcfService->methodCalls['getField'][0]);
        $this->assertEquals('testValue', $result);
    }

    /**
     * @testdox getField() with generic return value.
     */
    public function testGetFieldWithGenericValue()
    {
        $fakeAcfService = new FakeAcfService(['getField' => 'testValue']);

        $result = $fakeAcfService->getField('testSelector', 123);

        $this->assertEquals(['testSelector', 123], $fakeAcfService->methodCalls['getField'][0]);
        $this->assertEquals('testValue', $result);
    }

    /**
     * @testdox getField() without postId.
     */
    public function testGetFieldWithoutPostId()
    {
        $returnCallback = fn ($selector) => $selector === 'testSelector' ? 'testValue' : null;
        $fakeAcfService = new FakeAcfService(['getField' => $returnCallback]);

        $result = $fakeAcfService->getField('testSelector');

        $this->assertEquals(['testSelector'], $fakeAcfService->methodCalls['getField'][0]);
        $this->assertEquals('testValue', $result);
    }

    /**
     * @testdox getFields()
     */
    public function testGetFields()
    {
        $returnCallback = fn ($postId) => $postId === 123 ? ['testValue'] : [];
        $fakeAcfService = new FakeAcfService(['getFields' => $returnCallback]);

        $result = $fakeAcfService->getFields(123);

        $this->assertEquals([123], $fakeAcfService->methodCalls['getFields'][0]);
        $this->assertEquals(['testValue'], $result);
    }

    /**
     * @testdox getFields() without postId
     */
    public function testGetFieldsWithoutPostId()
    {
        $fakeAcfService = new FakeAcfService(['getFields' => ['testValue']]);

        $result = $fakeAcfService->getFields();

        $this->assertEquals([], $fakeAcfService->methodCalls['getFields'][0]);
        $this->assertEquals(['testValue'], $result);
    }

    /**
     * @testdox addOptionsPage()
     */
    public function testAddOptionsPage()
    {
        $fakeAcfService = new FakeAcfService();

        $fakeAcfService->addOptionsPage(['testArg' => 'testValue']);

        $this->assertEquals([['testArg' => 'testValue']], $fakeAcfService->methodCalls['addOptionsPage'][0]);
    }

    /**
     * @testdox renderFieldSetting()
     */
    public function testRenderFieldSetting()
    {
        $fakeAcfService = new FakeAcfService();

        $fakeAcfService->renderFieldSetting(['testField'], ['testConfiguration'], true);

        $this->assertEquals(
            [['testField'], ['testConfiguration'], true],
            $fakeAcfService->methodCalls['renderFieldSetting'][0]
        );
    }

    /**
     * @testdox formHead()
     */
    public function testFormHead()
    {
        $fakeAcfService = new FakeAcfService();

        $fakeAcfService->formHead();

        $this->assertEquals([], $fakeAcfService->methodCalls['formHead'][0]);
    }

    /**
     * @testdox form()
     */
    public function testForm()
    {
        $fakeAcfService = new FakeAcfService();

        $fakeAcfService->form(['testSettings']);

        $this->assertEquals([['testSettings']], $fakeAcfService->methodCalls['form'][0]);
    }

    /**
     * @testdox getFieldGroups()
     */
    public function testGetFieldGroups()
    {
        $fakeAcfService = new FakeAcfService(['getFieldGroups' => ['testValue']]);

        $result = $fakeAcfService->getFieldGroups(['testArg' => 'testValue']);

        $this->assertEquals([['testArg' => 'testValue']], $fakeAcfService->methodCalls['getFieldGroups'][0]);
        $this->assertEquals(['testValue'], $result);
    }

    /**
     * @testdox enqueueUploader()
     */
    public function testEnqueueUploader()
    {
        $fakeAcfService = new FakeAcfService();

        $fakeAcfService->enqueueUploader();

        $this->assertEquals([], $fakeAcfService->methodCalls['enqueueUploader'][0]);
    }

    /**
     * @testdox addLocalFieldGroup()
     */
    public function testAddLocalFieldGroup()
    {
        $fakeAcfService = new FakeAcfService(['addLocalFieldGroup' => true]);

        $result = $fakeAcfService->addLocalFieldGroup(['testFieldGroup']);

        $this->assertEquals([['testFieldGroup']], $fakeAcfService->methodCalls['addLocalFieldGroup'][0]);
        $this->assertTrue($result);
    }

    /**
     * @testdox updateField()
     */
    public function testUpdateField()
    {
        $fakeAcfService = new FakeAcfService(['updateField' => true]);

        $result = $fakeAcfService->updateField('testSelector', 'testValue', 123);

        $this->assertEquals(['testSelector', 'testValue', 123], $fakeAcfService->methodCalls['updateField'][0]);
        $this->assertTrue($result);
    }

    /**
     * @testdox addOptionsSubPage()
     */
    public function testAddOptionsSubPage()
    {
        $fakeAcfService = new FakeAcfService();

        $fakeAcfService->addOptionsSubPage(['testOptions']);

        $this->assertEquals([['testOptions']], $fakeAcfService->methodCalls['addOptionsSubPage'][0]);
    }

    /**
     * @testdox acfGetFields()
     */
    public function testAcfGetFields()
    {
        $fakeAcfService = new FakeAcfService();

        $fakeAcfService->acfGetFields('testParent');

        $this->assertEquals(['testParent'], $fakeAcfService->methodCalls['acfGetFields'][0]);
    }

    /**
     * @testdox deleteField()
     */
    public function testDeleteField()
    {
        $fakeAcfService = new FakeAcfService(['deleteField' => true]);

        $result = $fakeAcfService->deleteField('testSelector', 123);

        $this->assertEquals(['testSelector', 123], $fakeAcfService->methodCalls['deleteField'][0]);
        $this->assertTrue($result);
    }
}
