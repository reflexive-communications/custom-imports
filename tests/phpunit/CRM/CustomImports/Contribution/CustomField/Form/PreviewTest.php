<?php

use CRM_CustomImports_ExtensionUtil as E;

/**
 * Testcases for the preview form.
 *
 * @group headless
 */
class CRM_CustomImports_Contribution_CustomField_Form_PreviewTest extends CRM_CustomImports_HeadlessBase
{
    /**
     * postProcess test case.
     */
    public function testPostProcess()
    {
        $customData = $this->createCustomField('Contact', 'String', 'Text');
        $form = new CRM_CustomImports_Contribution_CustomField_Form_Preview();
        $form->controller = new CRM_CustomImports_Contribution_CustomField_Controller();
        $container =& $form->controller->container();
        $container['values']['ContactMap']['mapper'] = [
            0 => [0 => 'custom_1'],
            1 => [0 => 'financial_type'],
            2 => [0 => 'total_amount'],
            3 => [0 => 'trxn_id'],
            4 => [0 => 'doNotImport'],
        ];
        $container['values']['DataSource']['uploadFile'] = ['name' => __DIR__.'/test.csv'];
        $container['values']['DataSource']['fieldSeparator'] = ',';
        self::assertEmpty($form->preProcess(), 'PreProcess supposed to be empty.');
        self::assertEmpty($form->postProcess(), 'PostProcess supposed to be empty.');
    }
}
