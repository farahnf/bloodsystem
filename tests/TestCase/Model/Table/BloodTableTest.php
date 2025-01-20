<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BloodTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BloodTable Test Case
 */
class BloodTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BloodTable
     */
    protected $Blood;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Blood',
        'app.Donation',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Blood') ? [] : ['className' => BloodTable::class];
        $this->Blood = $this->getTableLocator()->get('Blood', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Blood);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\BloodTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
