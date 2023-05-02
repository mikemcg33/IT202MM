<?php
require_once(__DIR__ . "/../../lib/functions.php");
require(__DIR__ . "/../../partials/nav.php");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <!-- include css and js files -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="<?php echo get_url('styles.css'); ?>">
  <script src="<?php echo get_url('helpers.js'); ?>"></script>
</head>
<body>
<div class="container">
  <h1>Dashboard</h1>
  <div class="row">
    <div class="col-sm-4">
      <a href="<?php echo get_url('profile.php'); ?>" class="btn btn-primary btn-lg btn-block">Profile</a>
    </div>
    <div class="col-sm-4">
      <a href="<?php echo get_url('create_account.php'); ?>" class="btn btn-primary btn-lg btn-block">Create Account</a>
    </div>
    <div class="col-sm-4">
      <a href="<?php echo get_url('accounts.php'); ?>" class="btn btn-primary btn-lg btn-block">List Accounts</a>
    </div>
    <div class="col-sm-4">
      <a href="<?php echo get_url('deposit.php'); ?>" class="btn btn-primary btn-lg btn-block">Deposit</a>
    </div>
    <div class="col-sm-4">
      <a href="<?php echo get_url('withdraw.php'); ?>" class="btn btn-primary btn-lg btn-block">Withdraw</a>
    </div>
    <div class="col-sm-4">
      <a href="<?php echo get_url('logout.php'); ?>" class="btn btn-primary btn-lg btn-block">Log Out</a>
    </div>
  </div>
</div>
</body>
</html>