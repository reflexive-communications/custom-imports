<?php

require_once 'custom_imports.civix.php';
// phpcs:disable
use CRM_CustomImports_ExtensionUtil as E;

// phpcs:enable

/**
 * Implements hook_civicrm_config().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_config/
 */
function custom_imports_civicrm_config(&$config)
{
    _custom_imports_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_xmlMenu().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_xmlMenu
 */
function custom_imports_civicrm_xmlMenu(&$files)
{
    _custom_imports_civix_civicrm_xmlMenu($files);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_install
 */
function custom_imports_civicrm_install()
{
    _custom_imports_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_postInstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_postInstall
 */
function custom_imports_civicrm_postInstall()
{
    _custom_imports_civix_civicrm_postInstall();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_uninstall
 */
function custom_imports_civicrm_uninstall()
{
    _custom_imports_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_enable
 */
function custom_imports_civicrm_enable()
{
    _custom_imports_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_disable
 */
function custom_imports_civicrm_disable()
{
    _custom_imports_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_upgrade
 */
function custom_imports_civicrm_upgrade($op, CRM_Queue_Queue $queue = null)
{
    return _custom_imports_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_managed().
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_managed
 */
function custom_imports_civicrm_managed(&$entities)
{
    _custom_imports_civix_civicrm_managed($entities);
}

/**
 * Implements hook_civicrm_caseTypes().
 *
 * Add CiviCase types provided by this extension.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_caseTypes
 */
function custom_imports_civicrm_caseTypes(&$caseTypes)
{
    _custom_imports_civix_civicrm_caseTypes($caseTypes);
}

/**
 * Implements hook_civicrm_angularModules().
 *
 * Add Angular modules provided by this extension.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_angularModules
 */
function custom_imports_civicrm_angularModules(&$angularModules)
{
    // Auto-add module files from ./ang/*.ang.php
    _custom_imports_civix_civicrm_angularModules($angularModules);
}

/**
 * Implements hook_civicrm_alterSettingsFolders().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_alterSettingsFolders
 */
function custom_imports_civicrm_alterSettingsFolders(&$metaDataFolders = null)
{
    _custom_imports_civix_civicrm_alterSettingsFolders($metaDataFolders);
}

/**
 * Implements hook_civicrm_entityTypes().
 *
 * Declare entity types provided by this module.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_entityTypes
 */
function custom_imports_civicrm_entityTypes(&$entityTypes)
{
    _custom_imports_civix_civicrm_entityTypes($entityTypes);
}

/**
 * Implements hook_civicrm_themes().
 */
function custom_imports_civicrm_themes(&$themes)
{
    _custom_imports_civix_civicrm_themes($themes);
}

// --- Functions below this ship commented out. Uncomment as required. ---

/**
 * Implements hook_civicrm_preProcess().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_preProcess
 */
//function custom_imports_civicrm_preProcess($formName, &$form) {
//
//}

// The following hooks are implemented by me.
/**
 * Implements hook_civicrm_navigationMenu().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_navigationMenu
 */
function custom_imports_civicrm_navigationMenu(&$menu)
{
    _custom_imports_civix_insert_navigation_menu($menu, 'Contributions', [
        'label' => E::ts('Import Contributions (Bank Account)'),
        'name' => 'import_contribution_bank_account',
        'url' => 'civicrm/contribute/custom-field-import',
        'permission' => 'access CiviContribute,edit contributions',
        'operator' => 'and',
        'separator' => 0,
    ]);
    _custom_imports_civix_insert_navigation_menu($menu, 'Contacts', [
        'label' => E::ts('Import Activities With Source Record Id'),
        'name' => 'import_activity_source_record_id',
        'url' => 'civicrm/activity/source-record-id-import',
        'permission' => 'import contacts,access CiviCRM',
        'operator' => 'and',
        'separator' => 0,
    ]);
    _custom_imports_civix_navigationMenu($menu);
}
