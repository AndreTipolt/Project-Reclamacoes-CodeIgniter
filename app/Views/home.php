<?= $this->extend('layouts/main_layout')?>

<?= $this->section('content')?>
    
    <div class="container mt-5">

        <div class="row">
            <div class="col">

            <?php form_open_multipart('/submit') ?>

                <div class="mb-3">

                    <label for="email" class="form-label">Email *</label>
                    <input type="text" class="form-control" name="email" id="email" required>
                </div>

                <div class="mb-3">

                    <label for="name" class="form-label">Nome</label>
                    <input type="text" class="form-control" name="name" id="name">
                </div>


                <div class="mb-3">
                    <label for="area" class="form-label">Area de Reclamação*</label>
                    <select name="area" id="area" class="form-select" required>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="complaint" class="form-label">Area texto para reclamação *</label>
                    <textarea name="complaint" id="complaint" class="form-control"></textarea>
                </div>

                <div class="mb-3">
                    <label for="files" class="form-label">Upload de ficheiros</label>
                    <div class="d-flex flex-row justify-content-between gap-3">
                        <input type="file" class="form-control" id="files1" name="files[]">
                        <input type="file" class="form-control" id="files2" name="files[]">
                        <input type="file" class="form-control" id="files3" name="files[]">
                    </div>
                </div>

                <button class="btn btn-primary">Enviar</button>

            <?php form_close()?>
            </div>
        </div>
    </div>
<?= $this->endSection('content')?>