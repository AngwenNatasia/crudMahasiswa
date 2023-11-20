<body>
  <div class="container">
    <?= $this->session->flashdata('message'); ?>
    <div class="form">
      <header>Login</header>
      <form action="<?= base_url('Auth'); ?>" method="POST">
        <input type="text" class="form-control form-control-user" value="<?= set_value('email'); ?>" 
          id="email" name="email" placeholder="Enter your email">
        <input type="password" class="form-control form-control-user" value="<?= set_value('password');?>" 
          name="password" id="password" placeholder="Enter your password">
        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
        <a href="<?= base_url('Auth/lupa') ?>">Forgot password?</a>
        <input type="submit" class="button" value="Login">
      </form>
      <div class="signup">
        <a class="signup" href="<?= base_url('Auth/register') ?>">Sign Up</a>
      </div>
    </div>
</body>