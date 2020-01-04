<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="row">
  <div class="col-md-6 mx-auto">
    <!-- ^^ col-md-6 gives column half width of screen, mx-auto is margin auto, so centers the column -->
    <div class="card card-body bg-light mt-5">
    <?php flash('register_success'); ?>
      <h2>Login</h2>
      <p>Please fill in your credentials to log in</p>
      <form action="<?php echo URLROOT; ?>/users/login" method="post">
        <!-- Email input, for-control bootstrap, tertiary is-invalid bootstrap class if $name_err exists, if not, input value posted  -->
        <div class="form-group">
          <label for="email">Email: <sup>*</sup></label>
          <input type="email" name="email" class="form-control form-control-lg <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>">
          <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
        </div>
        <!-- Password input  -->
        <div class="form-group">
          <label for="password">Password: <sup>*</sup></label>
          <input type="password" name="password" class="form-control form-control-lg <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>">
          <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
        </div>
        <div class="row">
          <!-- submit btn -->
          <div class="col">
            <input type="submit" value="Login" class="btn btn-success btn-block">
          </div>
          <!-- go to register page  -->
          <div class="col">
            <a href="<?php echo URLROOT; ?>/users/register" class="btn btn-light btn-block">No account? Register</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>