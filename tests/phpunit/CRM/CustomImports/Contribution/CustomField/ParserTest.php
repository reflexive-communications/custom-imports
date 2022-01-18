<?php

use CRM_CustomImports_ExtensionUtil as E;

/**
 * Testcases for the parser application.
 *
 * @group headless
 */
class CRM_CustomImports_Contribution_CustomField_ParserTest extends CRM_CustomImports_HeadlessBase
{
    /**
     * init test case.
     */
    public function testInit()
    {
        $mapperKeys = [];
        $mapperSoftCredit = [];
        $mapperPhoneType = null;
        $mapperSoftCreditType = [];
        $parser = new CRM_CustomImports_Contribution_CustomField_Parser($mapperKeys, $mapperSoftCredit, $mapperPhoneType, $mapperSoftCreditType);
        self::assertEmpty($parser->init(), 'Init supposed to be empty.');
    }

    /**
     * summary test case.
     */
    public function testSummary()
    {
        $mapperKeys = [];
        $mapperSoftCredit = [];
        $mapperPhoneType = null;
        $mapperSoftCreditType = [];
        $values = [];
        $parser = new CRM_CustomImports_Contribution_CustomField_Parser($mapperKeys, $mapperSoftCredit, $mapperPhoneType, $mapperSoftCreditType);
        self::assertEmpty($parser->init(), 'Init supposed to be empty.');
        $summary = $parser->summary($values);
        self::assertBool($summary, 'summary supposed to be something bool.');
    }

    /**
     * import test case.
     */
    public function testImport()
    {
        $mapperKeys = [];
        $mapperSoftCredit = [];
        $mapperPhoneType = null;
        $mapperSoftCreditType = [];
        $values = [];
        $parser = new CRM_CustomImports_Contribution_CustomField_Parser($mapperKeys, $mapperSoftCredit, $mapperPhoneType, $mapperSoftCreditType);
        self::assertEmpty($parser->init(), 'Init supposed to be empty.');
        $isImported = $parser->import(CRM_Import_Parser::DUPLICATE_SKIP, $values);
        self::assertBool($isImported, 'import supposed to be something bool.');
    }
}
