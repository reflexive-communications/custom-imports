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
        $form = new CRM_CustomImports_Contribution_CustomField_Form_Preview();
        self::assertEmpty($form->postProcess(), 'PostProcess supposed to be empty.');
    }
}
