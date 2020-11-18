<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Ubah Data Mahasiswa
                </div>
                <div class="card-body">
                    <!-- <?php // if (validation_errors()) : 
                            ?>
                        <div class="alert alert-danger" role="alert">
                            <? // echo validation_errors() ?>
                        </div>
                    <?php // endif; 
                    ?> -->
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $mahasiswa['id']; ?>">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $mahasiswa['nama']; ?>">
                            <small id="emailHelp" class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="npm">NPM</label>
                            <input type="text" class="form-control" id="npm" name="npm" value="<?= $mahasiswa['npm']; ?>">
                            <small id="emailHelp" class="form-text text-danger"><?= form_error('npm'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" value="<?= $mahasiswa['email']; ?>">
                            <small id="emailHelp" class="form-text text-danger"><?= form_error('email'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="fakultas">Fakultas</label>
                            <select class="form-control" id="fakultas" name="fakultas">
                                <?php foreach ($fakultas as $fak) : ?>
                                    <?php if ($fak == $mahasiswa['fakultas']) : ?>
                                        <option value="<?= $fak; ?>" selected><?= $fak; ?></option>
                                    <?php else : ?>
                                        <option value="<?= $fak; ?>"><?= $fak; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>