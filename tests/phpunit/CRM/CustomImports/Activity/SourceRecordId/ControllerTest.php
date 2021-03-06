<?php

use CRM_CustomImports_ExtensionUtil as E;

/**
 * Testcases for the controller class.
 *
 * @group headless
 */
class CRM_CustomImports_Activity_SourceRecordId_ControllerTest extends CRM_CustomImports_HeadlessBase
{
    /**
     * It tests the class constructor.
     * The state machine has to be our custom one.
     */
    public function testConstructor():void
    {
        $controller = new CRM_CustomImports_Activity_SourceRecordId_Controller();
        $sm = $controller->getStateMachine();
        self::assertSame('CRM_CustomImports_Activity_SourceRecordId_StateMachine', get_class($sm));
    }
}
