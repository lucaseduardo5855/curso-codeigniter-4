<?= $this->extend('layouts/layout_auth') ?>
<?= $this->section('content') ?>
<div class="login-box">

        <div class="text-center mb-3">
            <img src="<?= base_url('assets/images/logo.png') ?>" alt="Logo">
        </div>

        <?= form_open('/auth/login_submit', ['autocomplete' => 'off']) ?>
            <div class="mb-3">
                <p class="mb-2">Restaurante</p>
                <select name="select_restaurant" id="select_restaurant" class="form-select">
                    <option value=""></option>
                    <?php foreach ($restaurantes as $restaurant): ?>
                        <?php
                        $selected = '';
                        if (!empty($select_restaurant) && $select_restaurant == $restaurant->id) {
                            $selected = 'selected';
                        }
                        ?>
                        <option value="<?= Encrypt($restaurant->id) ?>" data-restaurant-id="<?= esc($restaurant->id) ?>" <?= $selected ?>><?= $restaurant->name ?></option>
                    <?php endforeach; ?>
                </select>
                <?= display_errors('select_restaurant', $validation_errors ?? []) ?>
            </div>

            <hr>

            <div class="mb-3">
                <input class="form-control" type="text" id="text_username" name="text_username" placeholder="Usuário" autocomplete="off" value="<?= old('text_username') ?>">
                <?= display_errors('text_username', $validation_errors ?? []) ?>
            </div>
            <div class="mb-3">
                <input class="form-control" type="password" id="text_password" name="text_password" placeholder="Senha" autocomplete="new-password" value="<?= old('text_password') ?>">
                <?= display_errors('text_password', $validation_errors ?? []) ?>
            </div>
            <div class="mb-3">
                <input type="submit" class="btn-login" value="ENTRAR">
            </div>
        <?= form_close() ?>

        <div class="text-center">
            <p>Não tem conta? <a href="#" class="login-link">Cadastre-se</a></p>
            <p><a href="#" class="login-link">Recuperar senha</a></p>
        </div>

        <?php if (!empty($login_error)): ?>
            <div class="alert alert-danger text-center p1">
                <?= $login_error ?>
            </div>
        <?php endif; ?>
    </div>

<script>
    let wrapper = document.querySelector('.login-box');
   let loginData = [
    {
        username: 'admin_rest1',
        password: '123456',
        restaurant: '1'
    },
    {
        username: 'user_rest1',
        password: '123456',
        restaurant: '1'
    },
    {
        username: 'admin_rest2',
        password: '123456',
        restaurant: '2'
    },
    {
        username: 'user_rest2',
        password: '123456',
        restaurant: '2'
    },
    {
        username: 'admin_rest3',
        password: '123456',
        restaurant: '3'
    },
    {
        username: 'user_rest3',
        password: '123456',
        restaurant: '3'
    }
];
    const select = document.createElement('select');
    select.appendChild(document.createElement('option'));
    select.setAttribute('name', 'select_login');
    loginData.forEach((item, index) => {
        const option = document.createElement('option');
        option.setAttribute('value', index);
        option.innerText = `Restaurante ${item.restaurant} - ${item.username}`;
        select.appendChild(option);
     });

        wrapper.appendChild(select);

        select.addEventListener('change', (e) => {
            const index = e.target.value;
            if (index == '') return;
            const username = loginData[index].username;
            const password = loginData[index].password;
            const restaurant = loginData[index].restaurant;

            document.querySelector('#text_username').value = username;
            document.querySelector('#text_password').value = password;
            const restaurantSelect = document.querySelector('#select_restaurant');
            const restaurantOption = restaurantSelect.querySelector(`[data-restaurant-id="${restaurant}"]`);
            if (restaurantOption) {
                restaurantSelect.value = restaurantOption.value;
            }
        });
</script>

    
<?= $this->endSection() ?>