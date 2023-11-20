<body>
    <div class="container">
        <div class="form">
            <header>Register</header>
            <form action="<?= base_url('Auth/register')?>" method="POST">
                <input type="text" name="nama" id="nama" value="<?= set_value('nama'); ?>" 
                    placeholder="Enter your name">
                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>');?>
                <input type="text" name="email" id="email" value="<?= set_value('email'); ?>" 
                    placeholder="Enter your email">
                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>');?>
                <input type="password" name="password1" id="password1" value="<?= set_value('password1'); ?>"
                    placeholder="Create a password">
                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>');?>
                <input type="password" name="password2" id="password2" value="<?= set_value('password2'); ?>"
                    placeholder="Confirm your password">
                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>');?>
                <input type="submit" class="button" value="Signup">
            </form>
            <div class="signup">
                <a class="signup" href="<?= base_url('Auth/') ?>">Login</a>
            </div>
        </div>
</body>