<?php

use CRM_CustomImports_ExtensionUtil as E;

/**
 * Testcases for the mapping form.
 *
 * @group headless
 */
class CRM_CustomImports_Contribution_CustomField_Form_ContactMapTest extends CRM_CustomImports_HeadlessBase
{
    /**
     * preProcess test case.
     */
    public function testPreProcess()
    {
        $form = new CRM_CustomImports_Contribution_CustomField_Form_ContactMap();
        self::assertEmpty($form->preProcess(), 'PreProcess supposed to be empty.');
    }

    /**
     * formRule test case.
     */
    public function testFormRule()
    {
        $form = new CRM_CustomImports_Contribution_CustomField_Form_ContactMap();
        $fields = [];
        $files = [];
        self::assertArray(CRM_CustomImports_Contribution_CustomField_Form_ContactMap::formRule($fields, $files, $form), 'It has to return error array');
    }

    /**
     * addRules test case.
     */
    public function testAddRules()
    {
        $form = new CRM_CustomImports_Contribution_CustomField_Form_ContactMap();
        self::assertEmpty($form->addRules(), 'AddRules supposed to be empty.');
    }

    /**
     * buildQuickForm test case.
     */
    public function testBuildQuickForm()
    {
        $form = new CRM_CustomImports_Contribution_CustomField_Form_ContactMap();
        self::assertEmpty($form->buildQuickForm(), 'BuildQuickForm supposed to be empty.');
    }
}
