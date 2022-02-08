<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-2">About Us</h1>
            <div class="card mt-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/img/fotobondan.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Biodata Diri Saya</h5>
                            <p class="card-text">Nama : Ahmad Bondan Gunawan<br>
                                NIM : 888740201190076<br>
                                Kelas : TI-P.20.1<br>
                                Prodi : Teknik Informatika<br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>