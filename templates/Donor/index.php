
<?php
/**
 * @var \App\View\AppView $this
 * @var string $title
 * @var string $system_name
 */
?>
<!--Header-->
<div class="row text-body-secondary">
  <div class="col-10">
    <h1 class="my-0 page_title"><?= $system_name ?></h1>
  </div>
  <div class="col-2 text-end">
    <div class="dropdown mx-3 mt-2">
    
      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="orederStatistics">
        <?= $this->Html->link('Add Donor', ['action' => 'add'], ['class' => 'dropdown-item', 'escapeTitle' => false]) ?>
      </div>
    </div>
  </div>
</div>
<div class="line mb-4"></div>
<!--/Header-->

<!-- Confirmation Message -->
<div class="card rounded-0 mb-3 bg-body-tertiary border-0 shadow">
  <div class="card-body text-body-secondary">
    <h4>Your profile has been saved.</h4>
    <div class="mt-4">
      <?= $this->Html->link('Back to Add Donor', ['action' => 'add'], ['class' => 'btn btn-primary']) ?>
    </div>
  </div>
</div>
<!-- /Confirmation Message -->