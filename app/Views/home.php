<?= $this->extend('layouts/main_layout') ?>

<?= $this->section('content') ?>

<div class="container mt-5">

    <div class="row">
        <div class="col">

            <?= form_open_multipart('/submit', ['novalidate' => true]) ?>

                <div class="row mb-3">

                    <div class="col">

                        <label for="email" class="form-label">Email *</label>
                        <input type="text" class="form-control" name="email" id="email" required>
                        <?php echo show_validation_error('email', $validation_errors)?>
                    </div>

                    <div class="col">

                        <label for="name" class="form-label">Nome</label>
                        <input type="text" class="form-control" name="name" id="name">
                    </div>

                </div>

                <div class="row mb-3">

                    <div class="col-6">
                        <label for="area" class="form-label">Area de Reclamação*</label>
                        <select name="area" id="area" class="form-select" required>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                        <?php echo show_validation_error('area', $validation_errors)?>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="complaint" class="form-label">Area texto para reclamação *</label>
                    <textarea name="complaint" id="complaint" class="form-control" rows="6"></textarea>
                    <?php echo show_validation_error('complaint', $validation_errors)?>
                </div>

                <div class="mb-3">
                    <label for="files" class="form-label">Upload de ficheiros</label>
                    <div class="d-flex flex-row justify-content-between gap-3">
                        <input type="file" class="form-control" id="files1" name="files[]">
                        <input type="file" class="form-control" id="files2" name="files[]">
                        <input type="file" class="form-control" id="files3" name="files[]">
                    </div>
                </div>

                <input type="submit" class="btn btn-primary" value="Enviar">

            <?= form_close() ?>
        </div>
    </div>
</div>
<?= $this->endSection('content') ?>