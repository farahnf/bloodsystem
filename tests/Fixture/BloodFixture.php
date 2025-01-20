<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BloodFixture
 */
class BloodFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'blood';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'type' => 'Lorem ipsum dolor sit amet',
                'donor_id' => 1,
                'status' => 1,
                'created' => '2025-01-17 20:53:02',
                'modified' => '2025-01-17 20:53:02',
            ],
        ];
        parent::init();
    }
}
