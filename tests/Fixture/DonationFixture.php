<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DonationFixture
 */
class DonationFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'donation';
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
                'donor_id' => 1,
                'donor_nric' => 'Lorem ipsum dolor ',
                'date' => '2025-01-19 02:48:57',
                'quantity' => 'Lorem ipsum dolor sit amet',
                'blood_id' => 1,
                'blood_type' => 'Lorem ipsum dolor sit amet',
                'location' => 'Lorem ipsum dolor sit amet',
                'status' => 'Lorem ip',
                'created' => '2025-01-19 02:48:57',
                'modified' => '2025-01-19 02:48:57',
            ],
        ];
        parent::init();
    }
}
