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
        $mapperSoftCredit = [];
        $mapperPhoneType = null;
        $mapperSoftCreditType = [];
        $customData = $this->createCustomField('Contact', 'String', 'Text');
        $keyName = 'custom_'.$customData['field']['id'];
        $values = [
            '001',
            'donation',
            '1500',
            'trxn001',
        ];
        $mapperKeys = [$keyName, 'financial_type', 'total_amount', 'trxn_id'];
        $parser = new CRM_CustomImports_Contribution_CustomField_Parser($mapperKeys, $mapperSoftCredit, $mapperPhoneType, $mapperSoftCreditType);
        self::assertEmpty($parser->init(), 'Init supposed to be empty.');
        $summary = $parser->summary($values);
        self::assertSame(CRM_Import_Parser::VALID, $summary, 'summary supposed to be valid.');
    }

    /**
     * import test case.
     */
    public function testImport()
    {
        $mapperSoftCredit = [];
        $mapperPhoneType = null;
        $mapperSoftCreditType = [];
        $customData = $this->createCustomField('Contact', 'String', 'Text');
        $keyName = 'custom_'.$customData['field']['id'];
        $values = [
            '001',
            'donation',
            '1500',
            'trxn001',
        ];
        $mapperKeys = [$keyName, 'financial_type', 'total_amount', 'trxn_id'];
        $parser = new CRM_CustomImports_Contribution_CustomField_Parser($mapperKeys, $mapperSoftCredit, $mapperPhoneType, $mapperSoftCreditType);
        self::assertEmpty($parser->init(), 'Init supposed to be empty.');
        $isImported = $parser->import(CRM_Import_Parser::DUPLICATE_SKIP, $values);
        self::assertSame(CRM_Import_Parser::ERROR, $isImported, 'import supposed to be errored due to the missing contact.');
    }
}
