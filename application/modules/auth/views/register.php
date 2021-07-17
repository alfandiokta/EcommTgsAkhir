<main>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 px-0 d-none d-sm-block">
        <img src="<?= base_url(); ?>assets/images/login.jpg" alt="login image" class="login-img">
      </div>
      <div class="col-sm-6 login-section-wrapper">
      <a  href="../website">
        <div class="brand-wrapper" href="./website/">
          <img src="<?= base_url(); ?>assets/images/logo.png" alt="logo" class="logo">
        </div>
        </a>
        <div class="login-wrapper my-auto">
          <h1 class="login-title">Buat Akun</h1>
          <form action="<?= base_url('auth/reg') ?>" method="post">
            <div class="form-group">
              <label for="email">Nama</label>
              <input type="text" name="nama" id="email" class="form-control" placeholder="nama" value="<?= set_value('nama') ?>">
              <?= form_error('nama', ' <small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" name="email" id="email" class="form-control" placeholder="email@contoh.com" value="<?= set_value('email') ?>">
              <?= form_error('email', ' <small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group mb-4">
              <label for="password">Password</label>
              <input type="password" name="password1" id="password" class="form-control" placeholder="password anda"><?= form_error('password1', ' <small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group mb-4">
              <label for="password">Ulangi Password</label>
              <input type="password" name="password2" id="password" class="form-control" placeholder="ulangi password">
            </div>
            <button name="submit" id="login" class="btn btn-block login-btn" type="submit">Daftar</button>
          </form>
          <!-- <a href="#!" class="forgot-password-link">Forgot password?</a> -->
          <p class="login-wrapper-footer-text">Sudah Punya Akun? <a href="<?= base_url('auth') ?>" class="text-reset">Login di sini</a></p>
        </div>
      </div>

    </div>
  </div>
</main>