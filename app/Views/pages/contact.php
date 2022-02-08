<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Contact Us</h1>
            <ul>
                <li>
                    Alamat :
                    <?= $alamat; ?>
                </li>
                <li>
                    WhatsApp :
                    <?= $wa; ?>
                </li>
            </ul>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>