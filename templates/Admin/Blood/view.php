<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Blood $blood
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
							<li><?= $this->Html->link(__('Edit Blood'), ['action' => 'edit', $blood->id], ['class' => 'dropdown-item', 'escapeTitle' => false]) ?></li>
				<li><?= $this->Form->postLink(__('Delete Blood'), ['action' => 'delete', $blood->id], ['confirm' => __('Are you sure you want to delete # {0}?', $blood->id), 'class' => 'dropdown-item', 'escapeTitle' => false]) ?></li>
				<li><hr class="dropdown-divider"></li>
				<li><?= $this->Html->link(__('List Blood'), ['action' => 'index'], ['class' => 'dropdown-item', 'escapeTitle' => false]) ?></li>
				<li><?= $this->Html->link(__('New Blood'), ['action' => 'add'], ['class' => 'dropdown-item', 'escapeTitle' => false]) ?></li>
							</div>
		</div>
    </div>
</div>
<div class="line mb-4"></div>
<!--/Header-->

<div class="row">
	<div class="col-md-9">
		<div class="card rounded-0 mb-3 bg-body-tertiary border-0 shadow">
			<div class="card-body text-body-secondary">
            <h3><?= h($blood->type) ?></h3>
    <div class="table-responsive">
        <table class="table">
                <tr>
                    <th><?= __('Type') ?></th>
                    <td><?= h($blood->type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($blood->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Donor Id') ?></th>
                    <td><?= $this->Number->format($blood->donor_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $this->Number->format($blood->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($blood->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($blood->modified) ?></td>
                </tr>
            </table>
            </div>

			</div>
		</div>
		

            
            

            <div class="card rounded-0 mb-3 bg-body-tertiary border-0 shadow">
            <div class="card-body text-body-secondary">
                <h4><?= __('Related Donation') ?></h4>
                <?php if (!empty($blood->donation)) : ?>
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Donor Id') ?></th>
                            <th><?= __('Date') ?></th>
                            <th><?= __('Quantity') ?></th>
                            <th><?= __('Blood Id') ?></th>
                            <th><?= __('Location') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($blood->donation as $donation) : ?>
                        <tr>
                            <td><?= h($donation->id) ?></td>
                            <td><?= h($donation->donor_id) ?></td>
                            <td><?= h($donation->date) ?></td>
                            <td><?= h($donation->quantity) ?></td>
                            <td><?= h($donation->blood_id) ?></td>
                            <td><?= h($donation->location) ?></td>
                            <td><?= h($donation->status) ?></td>
                            <td><?= h($donation->created) ?></td>
                            <td><?= h($donation->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Donation', 'action' => 'view', $donation->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Donation', 'action' => 'edit', $donation->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Donation', 'action' => 'delete', $donation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $donation->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>

		
	</div>
	<div class="col-md-3">
	  Column
	</div>
</div>




