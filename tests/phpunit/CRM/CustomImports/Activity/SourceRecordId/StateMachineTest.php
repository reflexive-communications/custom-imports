<?php

use CRM_CustomImports_ExtensionUtil as E;

/**
 * Testcases for the state machine class.
 *
 * @group headless
 */
class CRM_CustomImports_Activity_SourceRecordId_StateMachineTest extends CRM_CustomImports_HeadlessBase
{
    /**
     * It tests the class constructor.
     * The pages has to be our custom one.
     */
    public function testConstructor():void
    {
        $sm = new CRM_CustomImports_Activity_SourceRecordId_StateMachine(new CRM_CustomImports_Activity_SourceRecordId_Controller());
        self::assertSame(CRM_CustomImports_Activity_SourceRecordId_StateMachine::PAGES, $sm->getPages());
    }
}
