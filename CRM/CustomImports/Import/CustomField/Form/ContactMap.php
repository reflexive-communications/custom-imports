<?php

class CRM_CustomImports_Import_CustomField_Form_ContactMap extends CRM_Contribute_Import_Form_MapField
{
    public function preProcess() {
        parent::preProcess();
        // Unset the current contact map fields.
        $currentContactMapFields = ['contribution_contact_id', 'email', 'external_identifier'];
        foreach ($currentContactMapFields as $mapField) {
            unset($this->_mapperFields[$mapField]);
        }
        // Extend the fieldset with the custom fields.
        $contactCustomFields = $this->customTextFields();
        $this->_mapperFields = array_merge($this->_mapperFields, $contactCustomFields);
        asort($this->_mapperFields);
    }

    /*
     * It returns the custom field options for the contact mapping.
     *
     * @return array
     */
    public static function customTextFields(): array
    {
        $fields = CRM_Core_BAO_UFField::getAvailableFields();
        $contactParamNames = ['Contact', 'Individual'];
        $paramOptions = [];
        foreach ($fields as $k => $v) {
            if (array_search($k, $contactParamNames) === false) {
                continue;
            }
            foreach ($v as $key => $value) {
                if (!array_key_exists('data_type', $value) || $value['data_type'] !== 'String' || !array_key_exists('html_type', $value) || $value['html_type'] !== 'Text') {
                    continue;
                }
                if ($customFieldId = CRM_Core_BAO_CustomField::getKeyID($key)) {
                    $customGroupId = CRM_Core_DAO::getFieldValue('CRM_Core_DAO_CustomField', $customFieldId, 'custom_group_id');
                    $customGroupName = CRM_Core_DAO::getFieldValue('CRM_Core_DAO_CustomGroup', $customGroupId, 'title');
                    $paramOptions[$key] = $value['title'] . ' :: ' . $customGroupName . ' (match to contact)';
                }
            }
        }
        return $paramOptions;
    }
}
