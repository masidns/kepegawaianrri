<?= $this->extend('login/template') ?>
<?= $this->section('content') ?>
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="../../index2.html" class="h1"><b>RRI</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">silahkan masukan username dan password anda</p>

      <form action="../../index3.html" method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
      </form>

      <div class="text-center umt-2 mb-3">
        <a href="#" class="btn btn-block btn-primary">
          <i class="mr-2"></i> LOGIN
        </a>
      </div>

      <!-- <p class="mb-1">
        <a href="">LOGIN</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p> -->
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<?= $this->endSection('content') ?>