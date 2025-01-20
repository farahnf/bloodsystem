<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Blood $blood
 * @var array $donor  // Donors list (id => name) passed from the controller
 */
?>
<!-- Header -->
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
                <?= $this->Html->link(__('List Blood'), ['action' => 'index'], ['class' => 'dropdown-item', 'escapeTitle' => false]) ?>
            </div>
        </div>
    </div>
</div>
<div class="line mb-4"></div>
<!-- /Header -->

<div class="card rounded-0 mb-3 bg-body-tertiary border-0 shadow">
    <div class="card-body text-body-secondary">
        <?= $this->Form->create($blood) ?>
        <fieldset>
            <legend><?= __('Add Blood') ?></legend>
            
            <?= $this->Form->control('type', [
                'options' => [
                    'A+' => 'A+', 'A-' => 'A-', 'B+' => 'B+', 'B-' => 'B-', 
                    'O+' => 'O+', 'O-' => 'O-', 'AB+' => 'AB+', 'AB-' => 'AB-'
                ],
                'empty' => 'Select Blood Type', 
                'class'=> 'form-select'
            ]); ?>

            <?= $this->Form->control('donor_id', [
                'options' => $donor, // Correctly use $donors
                'empty' => 'Select Donor', 
                'class' => 'form-select'
            ]); ?>

<?php echo $this->Form->control('status', [
                     'options' => [
                    '1' => 'Pending',
                    '2' => 'Completed',
                    '3' => 'Rejected',
                    '4'=> 'Accepted',
                    '5' => 'Transferred',
                    '6' => 'Used',
                    '7' => 'Expired',
                ],
                'empty' => 'Select Status',
                'class' => 'form-select' 
                ]); ?>

        </fieldset>
        <div class="text-end">
            <?= $this->Form->button('Reset', ['type' => 'reset', 'class' => 'btn btn-outline-warning']); ?>
            <?= $this->Form->button(__('Submit'), ['type' => 'submit', 'class' => 'btn btn-outline-primary']); ?>
        </div>
        <?= $this->Form->end() ?>
    </div>
</div>
