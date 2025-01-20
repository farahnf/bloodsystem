<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Donor $donor
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
			
		</div>
    </div>
</div>
<div class="line mb-4"></div>
<!--/Header-->

<div class="card rounded-0 mb-3 bg-body-tertiary border-0 shadow">
    <div class="card-body text-body-secondary">
            <?= $this->Form->create($donor) ?>
            <fieldset>
        
                
            <?php 
echo $this->Form->control('name'); 
echo $this->Form->control('nric', ['label' => 'IC Number']); 
echo $this->Form->control('age'); 

// Gender choices
echo $this->Form->control('gender', [
    'type' => 'select',
    'options' => [
        'female' => 'Female',
        'male' => 'Male'
    ],
    'empty' => 'Select Gender',
    'class' => 'form-select'
]); 

// Blood type choices
echo $this->Form->control('bloodtype', [
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
]);

// Status choices
echo $this->Form->control('status', [
    'type' => 'select',
    'options' => [
        'Active' => 'Active',
        'Inactive' => 'Inactive'
    ],
    'empty' => 'Select Status',
    'class' => 'form-select'
]);

// Address fields
echo $this->Form->control('address_line_1'); 
echo $this->Form->control('address_line_2'); 
echo $this->Form->control('city'); 

// State choices (14 states in Malaysia)
echo $this->Form->control('state', [
    'type' => 'select',
    'options' => [
        'Johor' => 'Johor',
        'Kedah' => 'Kedah',
        'Kelantan' => 'Kelantan',
        'Melaka' => 'Melaka',
        'Negeri Sembilan' => 'Negeri Sembilan',
        'Pahang' => 'Pahang',
        'Penang' => 'Penang',
        'Perak' => 'Perak',
        'Perlis' => 'Perlis',
        'Sabah' => 'Sabah',
        'Sarawak' => 'Sarawak',
        'Selangor' => 'Selangor',
        'Terengganu' => 'Terengganu',
        'Kuala Lumpur' => 'Kuala Lumpur'
    ],
    'empty' => 'Select State',
    'class' => 'form-select'
]);

// Postcode field
echo $this->Form->control('postcode'); 
?>
               
            </fieldset>
				<div class="text-end">
				  <?= $this->Form->button('Reset', ['type' => 'reset', 'class' => 'btn btn-outline-warning']); ?>
				  <?= $this->Form->button(__('Submit'),['type' => 'submit', 'class' => 'btn btn-outline-primary']) ?>
                </div>
        <?= $this->Form->end() ?>
    </div>
</div>