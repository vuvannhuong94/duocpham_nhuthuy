<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DistributionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DistributionsTable Test Case
 */
class DistributionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DistributionsTable
     */
    public $Distributions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.distributions'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Distributions') ? [] : ['className' => 'App\Model\Table\DistributionsTable'];
        $this->Distributions = TableRegistry::get('Distributions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Distributions);

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
