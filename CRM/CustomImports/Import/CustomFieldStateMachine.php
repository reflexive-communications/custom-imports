<?php

/**
 * State machine for managing different states of the Import process.
 */
class CRM_CustomImports_Import_CustomFieldStateMachine extends CRM_Core_StateMachine
{

  /**
   * Class constructor.
   *
   * @param object $controller
   * @param \const|int $action
   */
    public function __construct($controller, $action = CRM_Core_Action::NONE)
    {
        parent::__construct($controller, $action);

        $this->_pages = [
      'CRM_Contribute_Import_Form_DataSource' => null,
      'CRM_CustomImports_Import_Form_CustomFieldContactMap' => null,
      'CRM_Contribute_Import_Form_Preview ' => null,
      'CRM_Contribute_Import_Form_Preview ' => null,
    ];

        $this->addSequentialPages($this->_pages, $action);
    }
}
