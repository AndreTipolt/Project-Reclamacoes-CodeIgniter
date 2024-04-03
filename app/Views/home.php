<?= $this->extend('layouts/main_layout') ?>

<?= $this->section('content') ?>

<div class="container mt-5">

    <div class="row">
        <div class="col">

           <p class="display-1 text-center">Sistema de Reclamações</p>
           <hr>
           <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde eius vitae non neque quasi nostrum. Ducimus necessitatibus praesentium autem, beatae eum similique fuga dolorem ipsum officia et reiciendis aspernatur. Quae!</p>
        </div>

        <div>
            <div class="row">
                <div class="col text-center mt-5">
                    <a href="<?php echo site_url('complaint')?>" class="btn btn-secondary">Apresentar Reclamações</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection('content') ?>