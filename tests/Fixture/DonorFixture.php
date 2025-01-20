<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DonorFixture
 */
class DonorFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'donor';
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
                'name' => 'Lorem ipsum dolor sit amet',
                'nric' => 'Lorem ipsum dolor ',
                'age' => 1,
                'gender' => 'Lorem ip',
                'bloodtype' => 'Lorem ip',
                'status' => 'Lorem ipsum dolor ',
                'address_line_1' => 'Lorem ipsum dolor sit amet',
                'address_line_2' => 'Lorem ipsum dolor sit amet',
                'city' => 'Lorem ipsum dolor sit amet',
                'state' => 'Lorem ipsum dolor sit amet',
                'postcode' => 'Lorem ipsum dolor ',
                'created' => '2025-01-19 02:07:38',
                'modified' => '2025-01-19 02:07:38',
            ],
        ];
        parent::init();
    }
}
