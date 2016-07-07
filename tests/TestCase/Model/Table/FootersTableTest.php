<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FootersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FootersTable Test Case
 */
class FootersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FootersTable
     */
    public $Footers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.footers'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Footers') ? [] : ['className' => 'App\Model\Table\FootersTable'];
        $this->Footers = TableRegistry::get('Footers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Footers);

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
}
