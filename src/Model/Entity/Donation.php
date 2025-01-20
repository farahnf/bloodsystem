<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Donation Entity
 *
 * @property int $id
 * @property int $donor_id
 * @property string $donor_nric
 * @property \Cake\I18n\DateTime $date
 * @property string $quantity
 * @property int $blood_id
 * @property string $blood_type
 * @property string $location
 * @property string $status
 * @property \Cake\I18n\DateTime $created
 * @property \Cake\I18n\DateTime $modified
 */
class Donation extends Entity
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
        'donor_id' => true,
        'donor_nric' => true,
        'date' => true,
        'quantity' => true,
        'blood_id' => true,
        'blood_type' => true,
        'location' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
    ];
}
