<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PackageTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PackageTable Test Case
 */
class PackageTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PackageTable
     */
    public $Package;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.package',
        'app.package_feature'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Package') ? [] : ['className' => PackageTable::class];
        $this->Package = TableRegistry::get('Package', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Package);

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
