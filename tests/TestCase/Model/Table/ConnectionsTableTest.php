<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ConnectionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ConnectionsTable Test Case
 */
class ConnectionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ConnectionsTable
     */
    public $Connections;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.connections'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Connections') ? [] : ['className' => 'App\Model\Table\ConnectionsTable'];
        $this->Connections = TableRegistry::get('Connections', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Connections);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
