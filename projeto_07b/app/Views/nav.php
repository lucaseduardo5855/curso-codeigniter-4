<nav>
    <!-- <div>
        <a href="<?= base_url('/') ?>">Home</a> |
        <a href="<?= base_url('about') ?>">About</a> |
        <a href="<?= base_url('services') ?>">Services</a> |
    </div> -->

    <!--Outra forma de criar ligações --> 
    <div>
        <?= anchor('/', 'Home')  ?> |
        <?= anchor('about', 'About')  ?> | 
        <?= anchor('services', 'Services')  ?> |
    </div>
</nav>
