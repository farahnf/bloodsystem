<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Blood Model
 *
 * @property \App\Model\Table\DonorTable&\Cake\ORM\Association\BelongsTo $Donor
 * @property \App\Model\Table\DonationTable&\Cake\ORM\Association\HasMany $Donation
 *
 * @method \App\Model\Entity\Blood newEmptyEntity()
 * @method \App\Model\Entity\Blood newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Blood> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Blood get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Blood findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Blood patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Blood> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Blood|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Blood saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Blood>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Blood>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Blood>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Blood> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Blood>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Blood>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Blood>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Blood> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class BloodTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('blood');
        $this->setDisplayField('type');
        $this->setPrimaryKey('id');

        // Associations
        $this->belongsTo('Donor', [ // Corrected to match Donors table name
            'foreignKey' => 'donor_id',
            'joinType' => 'INNER', // Ensure donor_id is required
        ]);

        $this->hasMany('Donation', [
            'foreignKey' => 'blood_id',
        ]);

        // Behaviors
        $this->addBehavior('Timestamp');
        $this->addBehavior('AuditStash.AuditLog');
        $this->addBehavior('Search.Search');

        // Search Manager Configuration
        $this->searchManager()
            ->value('id')
            ->add('search', 'Search.Like', [
                'fieldMode' => 'OR',
                'multiValue' => true,
                'multiValueSeparator' => '|',
                'comparison' => 'LIKE',
                'wildcardAny' => '*',
                'wildcardOne' => '?',
                'fields' => ['id'],
            ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('type')
            ->maxLength('type', 50)
            ->requirePresence('type', 'create')
            ->notEmptyString('type', 'Blood type is required.');

        $validator
            ->integer('donor_id')
            ->requirePresence('donor_id', 'create')
            ->notEmptyString('donor_id', 'Donor ID is required.')
            ->add('donor_id', 'exists', [
                'rule' => function ($value, $context) {
                    return is_numeric($value) && $value > 0;
                },
                'message' => 'The specified donor does not exist.'
            ]);

        $validator
            ->integer('status')
            ->requirePresence('status', 'create')
            ->notEmptyString('status', 'Status is required.')
            ->add('status', 'validValue', [
                'rule' => function ($value, $context) {
                    return in_array($value, [1, 2, 3, 4, 5, 6, 7]); // Ensure only valid status values are allowed
                },
                'message' => 'Invalid status value.'
            ]);

        return $validator;
    }
}
