<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Donor Model
 *
 * @property \App\Model\Table\BloodTable&\Cake\ORM\Association\HasMany $Blood
 * @property \App\Model\Table\DonationTable&\Cake\ORM\Association\HasMany $Donation
 *
 * @method \App\Model\Entity\Donor newEmptyEntity()
 * @method \App\Model\Entity\Donor newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Donor> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Donor get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Donor findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Donor patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Donor> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Donor|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Donor saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Donor>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Donor>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Donor>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Donor> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Donor>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Donor>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Donor>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Donor> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DonorTable extends Table
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

        $this->setTable('donor');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Blood', [
            'foreignKey' => 'donor_id',
        ]);
        $this->hasMany('Donation', [
            'foreignKey' => 'donor_id',
        ]);
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
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('nric')
            ->maxLength('nric', 20)
            ->requirePresence('nric', 'create')
            ->notEmptyString('nric');

        $validator
            ->integer('age')
            ->requirePresence('age', 'create')
            ->notEmptyString('age');

        $validator
            ->scalar('gender')
            ->maxLength('gender', 10)
            ->requirePresence('gender', 'create')
            ->notEmptyString('gender');

        $validator
            ->scalar('bloodtype')
            ->maxLength('bloodtype', 10)
            ->requirePresence('bloodtype', 'create')
            ->notEmptyString('bloodtype');

        $validator
            ->scalar('status')
            ->maxLength('status', 20)
            ->requirePresence('status', 'create')
            ->notEmptyString('status');

        $validator
            ->scalar('address_line_1')
            ->maxLength('address_line_1', 255)
            ->requirePresence('address_line_1', 'create')
            ->notEmptyString('address_line_1');

        $validator
            ->scalar('address_line_2')
            ->maxLength('address_line_2', 255)
            ->requirePresence('address_line_2', 'create')
            ->notEmptyString('address_line_2');

        $validator
            ->scalar('city')
            ->maxLength('city', 100)
            ->requirePresence('city', 'create')
            ->notEmptyString('city');

        $validator
            ->scalar('state')
            ->maxLength('state', 100)
            ->requirePresence('state', 'create')
            ->notEmptyString('state');

        $validator
            ->scalar('postcode')
            ->maxLength('postcode', 20)
            ->requirePresence('postcode', 'create')
            ->notEmptyString('postcode');

        return $validator;
    }
}
