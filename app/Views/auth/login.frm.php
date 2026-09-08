<?= $this->extend('layouts/layout_auth') ?>
<?= $this->section('content') ?>
<div class="login-box">

        <div class="text-center mb-3">
            <img src="<?= base_url('assets/images/logo.png') ?>" alt="Logo">
        </div>

        <?= form_open('/auth/login_submit') ?>
            <div class="mb-3">
                <p class="mb-2">Restaurante</p>
                <select name="select_restaurant" id="select_restaurant" class="form-select">
                    <option value=""></option>
                    <?php foreach ($restaurantes as $restaurant): ?>
                        <option value="<?= Encrypt($restaurant->id) ?>"><?= $restaurant->name ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <hr>

            <div class="mb-3">
                <input class="form-control" type="email" id="text-username" name="text-username" placeholder="Email">
            </div>
            <div class="mb-3">
                <input class="form-control" type="password" id="text-password" name="text-password" placeholder="Senha">
            </div>
            <div class="mb-3">
                <input type="submit" class="btn-login" value="ENTRAR">
            </div>
        <?= form_close() ?>

        <div class="text-center">
            <p>Não tem conta? <a href="#" class="login-link">Cadastre-se</a></p>
            <p><a href="#" class="login-link">Recuperar senha</a></p>
        </div>
    </div>
<?= $this->endSection() ?>