<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Donor Entity
 *
 * @property int $id
 * @property string $name
 * @property string $nric
 * @property int $age
 * @property string $gender
 * @property string $bloodtype
 * @property string $status
 * @property string $address_line_1
 * @property string $address_line_2
 * @property string $city
 * @property string $state
 * @property string $postcode
 * @property \Cake\I18n\DateTime $created
 * @property \Cake\I18n\DateTime $modified
 *
 * @property \App\Model\Entity\Blood[] $blood
 * @property \App\Model\Entity\Donation[] $donation
 */
class Donor extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'name' => true,
        'nric' => true,
        'age' => true,
        'gender' => true,
        'bloodtype' => true,
        'status' => true,
        'address_line_1' => true,
        'address_line_2' => true,
        'city' => true,
        'state' => true,
        'postcode' => true,
        'created' => true,
        'modified' => true,
        'blood' => true,
        'donation' => true,
    ];
}
