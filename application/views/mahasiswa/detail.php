<div class="container">
    <div class="row mt-3">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">
                    Detail Mahasiswa
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $mahasiswa['nama']; ?></h5>
                    <p class="card-subtitle mb-2 text-muted"><?= $mahasiswa['email']; ?></p>
                    <p class="card-text"><?= $mahasiswa['npm']; ?></p>
                    <p class="card-text"><?= $mahasiswa['fakultas']; ?></p>
                    <a href="<?= base_url() ?>mahasiswa" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>