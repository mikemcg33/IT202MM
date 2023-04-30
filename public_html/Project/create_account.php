<?php
require(__DIR__ . "/../../partials/nav.php");

// Check if form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  try {
    $db = getDB();
  
    // Get account type and deposit amount from form
    $account_type = $_POST["account_type"];
    $deposit_amount = $_POST["deposit_amount"];
  
    // Insert new account record for user with null account number
    $user_id = get_user_id();

    if (!empty($user_id)) {
      $stmt = $db->prepare("INSERT INTO Accounts (user_id, account_type, balance) VALUES (?, ?, ?)");
      $stmt->execute([$user_id, $account_type, $deposit_amount]);
    }

    // Get last insert id
    $account_id = $db->lastInsertId();

    // Generate account number using left-padding
    $account_number = str_pad($account_id, 12, '0', STR_PAD_LEFT);

    // Update account record with new account number
    $stmt = $db->prepare("UPDATE Accounts SET account_number = ? WHERE id = ?");
    $stmt->execute([$account_number, $account_id]);

    //Flash success
    flash("Welcome! Your account has been created successfully","success");
    
    // Redirect to account list page
    header("Location: accounts.php");
    exit();
  } catch (PDOEXCEPTION $e) { 
    //Flash fail
    flash("an error occured while creating your account","danger");
    error_log(var_export($e, true));
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Create Account</title>
</head>
<body>
  <h1>Create Account</h1>
  <form method="POST">
    <label for="account_type">Account Type:</label>
    <select name="account_type" id="account_type">
      <option value="checking">Checking</option>
      <option value="savings">Savings</option>
      <option value="loan">Loan</option>
    </select><br><br>
    <label for="deposit_amount">Deposit Amount:</label>
    <input type="number" name="deposit_amount" id="deposit_amount" min="5"><br><br>
    <input type="submit" value="Create Account">
  </form>
</body>
</html>