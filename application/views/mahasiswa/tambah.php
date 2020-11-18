<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Tambah Data Mahasiswa
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
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                            <small id="emailHelp" class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="npm">NPM</label>
                            <input type="text" class="form-control" id="npm" name="npm">
                            <small id="emailHelp" class="form-text text-danger"><?= form_error('npm'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email">
                            <small id="emailHelp" class="form-text text-danger"><?= form_error('email'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="fakultas">Fakultas</label>
                            <select class="form-control" id="fakultas" name="fakultas">
                                <option value="Teknologi Industri">Teknologi Industri</option>
                                <option value="Ilmu Komputer">Ilmu Komputer</option>
                                <option value="Psikologi">Psikologi</option>
                                <option value="Manajemen">Manajemen</option>
                                <option value="Kedokteran">Kedokteran</option>
                            </select>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>