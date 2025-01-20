<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Donation Model
 *
 * @method \App\Model\Entity\Donation newEmptyEntity()
 * @method \App\Model\Entity\Donation newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Donation> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Donation get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Donation findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Donation patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Donation> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Donation|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Donation saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Donation>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Donation>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Donation>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Donation> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Donation>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Donation>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Donation>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Donation> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DonationTable extends Table
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

        $this->setTable('donation');
        $this->setDisplayField('quantity');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
		$this->addBehavior('AuditStash.AuditLog');
		$this->addBehavior('Search.Search');
		$this->searchManager()
			->value('id')
				->add('search', 'Search.Like', [
					//'before' => true,
					//'after' => true,
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
            ->scalar('donor_nric')
            ->maxLength('donor_nric', 20)
            ->requirePresence('donor_nric', 'create')
            ->notEmptyString('donor_nric');

        $validator
            ->dateTime('date')
            ->requirePresence('date', 'create')
            ->notEmptyDateTime('date');

        $validator
            ->scalar('quantity')
            ->maxLength('quantity', 50)
            ->requirePresence('quantity', 'create')
            ->notEmptyString('quantity');

        $validator
            ->scalar('blood_type')
            ->maxLength('blood_type', 50)
            ->requirePresence('blood_type', 'create')
            ->notEmptyString('blood_type');

        $validator
            ->scalar('location')
            ->maxLength('location', 255)
            ->requirePresence('location', 'create')
            ->notEmptyString('location');

            $validator
            ->scalar('status')
            ->maxLength('status', 255) // Adjust length as needed
            ->requirePresence('status', 'create')
            ->notEmptyString('status');

        return $validator;
    }
}
