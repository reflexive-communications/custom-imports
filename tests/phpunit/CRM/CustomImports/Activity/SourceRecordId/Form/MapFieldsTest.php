<?php

use CRM_CustomImports_ExtensionUtil as E;

/**
 * Testcases for the mapping form.
 *
 * @group headless
 */
class CRM_CustomImports_Activity_SourceRecordId_Form_MapFieldsTest extends CRM_CustomImports_HeadlessBase
{
    /**
     * preProcess test case.
     */
    public function testPreProcess()
    {
        $form = new CRM_CustomImports_Activity_SourceRecordId_Form_MapFields();
        // The form controller seems to be null from the Form class.
        $form->controller = new CRM_CustomImports_Activity_SourceRecordId_Controller();
        $form->set('fields', []);
        self::assertEmpty($form->preProcess(), 'PreProcess supposed to be empty.');
    }
}
