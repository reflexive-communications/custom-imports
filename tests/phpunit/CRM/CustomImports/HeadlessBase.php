<?php

use CRM_CustomImports_ExtensionUtil as E;
use Civi\Test\HeadlessInterface;
use Civi\Test\HookInterface;
use Civi\Test\TransactionalInterface;
use Civi\Test\CiviEnvBuilder;

/**
 * Base testclass to eliminate the code duplication.
 *
 * @group headless
 */
class CRM_CustomImports_HeadlessBase extends \PHPUnit\Framework\TestCase implements HeadlessInterface, HookInterface, TransactionalInterface
{

  /**
   * Setup used when HeadlessInterface is implemented.
   *
   * Civi\Test has many helpers, like install(), uninstall(), sql(), and sqlFile().
   *
   * @link https://github.com/civicrm/org.civicrm.testapalooza/blob/master/civi-test.md
   *
   * @return \Civi\Test\CiviEnvBuilder
   *
   * @throws \CRM_Extension_Exception_ParseException
   */
    public function setUpHeadless(): CiviEnvBuilder
    {
        return \Civi\Test::headless()
            ->installMe(__DIR__)
            ->apply();
    }

    public function setUp():void
    {
        parent::setUp();
    }

    public function tearDown():void
    {
        parent::tearDown();
    }
}
