<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PackageFeatureTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PackageFeatureTable Test Case
 */
class PackageFeatureTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PackageFeatureTable
     */
    public $PackageFeature;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.package_feature',
        'app.packages'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PackageFeature') ? [] : ['className' => PackageFeatureTable::class];
        $this->PackageFeature = TableRegistry::get('PackageFeature', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PackageFeature);

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
