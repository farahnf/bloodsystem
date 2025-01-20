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
							<li><?= $this->Html->link(__('Edit Donation'), ['action' => 'edit', $donation->id], ['class' => 'dropdown-item', 'escapeTitle' => false]) ?></li>
				<li><?= $this->Form->postLink(__('Delete Donation'), ['action' => 'delete', $donation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $donation->id), 'class' => 'dropdown-item', 'escapeTitle' => false]) ?></li>
				<li><hr class="dropdown-divider"></li>
				<li><?= $this->Html->link(__('List Donation'), ['action' => 'index'], ['class' => 'dropdown-item', 'escapeTitle' => false]) ?></li>
				<li><?= $this->Html->link(__('New Donation'), ['action' => 'add'], ['class' => 'dropdown-item', 'escapeTitle' => false]) ?></li>
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
           

            <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Great+Vibes&display=swap');

    .certificate-container {
        width: 80%;
        margin: auto;
        border: 10px solid #000; /* Thick decorative border */
        padding: 40px;
        font-family: 'Poppins', sans-serif;
        position: relative;
        background: #fff;
        color: #333;
    }
    .certificate-container::before, .certificate-container::after {
        content: '';
        position: absolute;
        top: 10px;
        bottom: 10px;
        left: 10px;
        right: 10px;
        border: 2px solid #000; /* Inner decorative border */
        pointer-events: none;
    }
    .header {
        text-align: center;
        padding: 1px 0;
    }
    .header img {
        width: 350px; /* Smaller logo */

    }
    .title {
        font-family: 'Great Vibes', cursive;
        font-size: 65px;
        font-weight: 700;
        color: #000;

        text-align: center;
    }
    .subtitle {
        font-size: 22px;
        font-weight: 600;
        margin: 10px 0;
        color: #000;
        text-align: center;
    }
    .recipient {
        font-size: 26px;
        font-weight: bold;
        text-align: center;
        color: #e63946;
        margin: 20px 0;
    }
    .content {
        text-align: center;
        margin: 20px 0;
        font-size: 18px;
        line-height: 2;
        color: #555;
    }
    .details-table {
        margin: 30px auto;
        text-align: left;
        width: 80%;
        font-size: 18px;
    }
    .details-table th, .details-table td {
        padding: 8px;
        border-bottom: 1px solid #ddd;
    }
    .footer {
        margin-top: 40px;
        text-align: center;
        font-size: 18px;
        color: #555;
    }
    .footer .signature {
        margin-top: 30px;
    }
    .footer .signature p {
        margin: 5px 0;
        font-size: 20px;
        font-weight: bold;
        color: #000;
    }
</style>

<div class="certificate-container">
    <div class="header">
        <?php echo $this->Html->image('surat/pusatdarahnegara.png', ['alt' => 'Organization Logo']); ?>
    </div>

    <div class="title">Certificate of Appreciation</div>
    <div class="subtitle">Highest Gratitude is Awarded To</div>
    <div class="recipient">
        <strong><?= h($donation->donor_nric) ?></strong>
    </div>
    <div class="content">
    <p>For your invaluable contribution and generous act of donating blood on <strong><?= h($donation->date) ?></strong>.</p> 
    <p>Your support has played a vital role in saving lives and serving the community.</p>
</div>


    <table class="details-table">
        <tr>
            <th>Blood Type:</th>
            <td><?= h($donation->blood_type) ?></td>
        </tr>
        <tr>
            <th>Location:</th>
            <td><?= h($donation->location) ?></td>
        </tr>
    </table>

    <div class="footer">
        <p>May our collaboration continue to flourish in the future.</p>
        <div class="signature">
            <p>Pusat Darah Negara</p>
        </div>
    </div>
</div>
</div>
</div>
</div>

<div class="col-md-3">
        <div class="card shadow-sm border-0">
            <div class="card-header bg-primary text-white text-center">
                <h6 class="my-0">Donation Data</h6>
            </div>
            <div class="card-body">
                <table class="table table-borderless table-sm mb-0">
                    <tr>
                        <th class="text-start">Donation Date:</th>
                        <td class="text-end"><?php echo date('M d, Y (h:i A)', strtotime($donation->date)); ?></td>
                    </tr>
                    <tr>
                        <th class="text-start">Status:</th>
                        <td class="text-end">
                            <span class="badge bg-success"><?= h($donation->status); ?></span>
                        </td>
                    </tr>
                </table>

                <?php echo $this->Html->link(('Download PDF'), ['action'=>'pdf', $donation->id, 'prefix'=>false], ['class'=>'btn btn-sm btn-outline-primary','escapeTitle'=> false]);?>

            </div>
        </div>
    </div>
</div>

   