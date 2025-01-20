<!DOCTYPE html>
<html lang="en">
<head>

    <title>Donation</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Great+Vibes&display=swap');

        @page{
            margin: 0px !important;
            padding: 0px !important;

        }
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
    font-size: 62px;
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
    line-height: 0.7;
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
        }
    
    </style>
</head>
<body>
<div class="certificate-container">
    <div class="header">
        <?php echo $this->Html->image('surat/pusatdarahnegara.png', ['fullBase'=>true]); ?>
    </div>

    <div class="title">Certificate of Appreciation</div>
    <div class="subtitle">Highest Gratitude is Awarded To</div>
    <div class="recipient">
        <strong><?= h($donation->donor_nric) ?></strong>
    </div>
    <div class="content">
    <p>For your invaluable contribution and generous act of</p> 
    <p>   donating blood on <strong><?= h($donation->date->format('d F Y')) ?></strong>.</p> 
    <p>Your support has played a vital role in saving lives and </p>
        <p>serving the community.</p>
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


</body>
</html>