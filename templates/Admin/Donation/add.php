<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Donation $donation
 */
?>
<!--Header-->
<div class="row text-body-secondary">
	<div class="col-10">
		<h1 class="my-0 page_title"><?php echo $title; ?></h1>
		<h6 class="sub_title text-body-secondary"><?php echo $system_name; ?></h6>
	</div>
	<div class="col-2 text-end">
		<div class="dropdown mx-3 mt-2">
			<button class="btn p-0 border-0" type="button" id="orederStatistics" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<i class="fa-solid fa-bars text-primary"></i>
			</button>
				<div class="dropdown-menu dropdown-menu-end" aria-labelledby="orederStatistics">
            <?= $this->Html->link(__('List Donation'), ['action' => 'index'], ['class' => 'dropdown-item', 'escapeTitle' => false]) ?>
				</div>
		</div>
    </div>
</div>
<div class="line mb-4"></div>
<!--/Header-->

<div class="card rounded-0 mb-3 bg-body-tertiary border-0 shadow">
    <div class="card-body text-body-secondary">
            <?= $this->Form->create($donation) ?>
            <fieldset>
                
                    <?php echo $this->Form->control('donor_nric'); ?>
                    <?php echo $this->Form->control('date'); ?>
                    <?php echo $this->Form->control('quantity',
                 [
                    'type' => 'select',
                    'options' => [
                        '380ml' => '380ml',
                        '390ml' => '390ml',
                        '400ml' => '400ml',
                        '410ml' => '410ml',
                        '420ml' => '420ml',
                        '450ml' => '450ml',
                        '480ml' => '480ml',
                        '490ml' => '490ml'
                    ],
                    'empty' => 'Select Blood Type',
                    'class' => 'form-select' 
                ]);?>
                    <?php echo $this->Form->control('blood_type',
                 [
                    'type' => 'select',
                    'options' => [
                        'A+' => 'A+',
                        'A-' => 'A-',
                        'B+' => 'B+',
                        'B-' => 'B-',
                        'AB+' => 'AB+',
                        'AB-' => 'AB-',
                        'O+' => 'O+',
                        'O-' => 'O-'
                    ],
                    'empty' => 'Select Blood Type',
                    'class' => 'form-select' 
                ]);?>
                    <?php echo $this->Form->control('location'
                    , [
                        'type' => 'select',
                        'options' => [
                            'Kuala Lumpur' => [
                                'National Blood Centre' => 'National Blood Centre',
                                'Hospital Kuala Lumpur' => 'Hospital Kuala Lumpur',
                            ],
                            'Selangor' => [
                                'Hospital Tengku Ampuan Rahimah' => 'Hospital Tengku Ampuan Rahimah',
                                'Hospital Selayang' => 'Hospital Selayang',
                            ],
                            'Johor' => [
                                'Hospital Sultanah Aminah' => 'Hospital Sultanah Aminah',
                            ],
                            'Kedah' => [
                                'Hospital Sultanah Bahiyah' => 'Hospital Sultanah Bahiyah',
                            ],
                            'Kelantan' => [
                                'Hospital Raja Perempuan Zainab II' => 'Hospital Raja Perempuan Zainab II',
                            ],
                            'Melaka' => [
                                'Hospital Melaka' => 'Hospital Melaka',
                            ],
                            'Negeri Sembilan' => [
                                'Hospital Tuanku Ja\'afar' => 'Hospital Tuanku Ja\'afar',
                            ],
                            'Pahang' => [
                                'Hospital Tengku Ampuan Afzan' => 'Hospital Tengku Ampuan Afzan',
                            ],
                            'Penang' => [
                                'Hospital Pulau Pinang' => 'Hospital Pulau Pinang',
                            ],
                            'Perak' => [
                                'Hospital Raja Permaisuri Bainun' => 'Hospital Raja Permaisuri Bainun',
                            ],
                            'Perlis' => [
                                'Hospital Tuanku Fauziah' => 'Hospital Tuanku Fauziah',
                            ],
                            'Sabah' => [
                                'Hospital Queen Elizabeth' => 'Hospital Queen Elizabeth',
                            ],
                            'Sarawak' => [
                                'Hospital Umum Sarawak' => 'Hospital Umum Sarawak',
                            ],
                            'Terengganu' => [
                                'Hospital Sultanah Nur Zahirah' => 'Hospital Sultanah Nur Zahirah',
                            ]
                        ],
                        'empty' => 'Select Location',
                        'class' => 'form-select' 
                    ]);?>
                    <?php echo $this->Form->control('status', [
                     'options' => [
                    'Pending' => 'Pending',
                    'Active' => 'Active',
                    'Inactive' => 'Inactive'
                    ],
                    'empty' => 'Select Status',
                    'class' => 'form-select' 
                    ]); ?>
               
            </fieldset>
				<div class="text-end">
				  <?= $this->Form->button('Reset', ['type' => 'reset', 'class' => 'btn btn-outline-warning']); ?>
				  <?= $this->Form->button(__('Submit'),['type' => 'submit', 'class' => 'btn btn-outline-primary']) ?>
                </div>
        <?= $this->Form->end() ?>
    </div>
</div>