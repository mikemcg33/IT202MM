<?php
require(__DIR__ . "/../../partials/nav.php");

$min_loan_amount = 500;
$apy = 2.1;
$db = getDB();
$user_id = get_user_id();
$stmt = $db->prepare("SELECT id, account_number, account_type, balance FROM Accounts WHERE user_id = :id AND is_active = 1");
$stmt->execute([":id" => $user_id]);
$accounts = $stmt->fetchAll(PDO::FETCH_ASSOC);
$account_type = "loan";
// Fetch all loan accounts for the user
$stmt = $db->prepare("SELECT id, account_number, balance FROM Accounts WHERE user_id = :id AND account_type = 'loan' AND is_active = 1");
$stmt->execute([":id" => $user_id]);
$loans = $stmt->fetchAll(PDO::FETCH_ASSOC);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try { 
        $loan_amount = $_POST["amount"];
        $account_source = $_POST["account_source"];
        // Check if deposit amount is at least $5
        if ($loan_amount < $min_loan_amount) {
        //Flash fail
        flash("Minimum Loan 500 Dollars","danger");
        // Redirect back to the create account page
        header("Location: loan.php");
        exit();
        }

        if (!empty($user_id)) {
            $stmt = $db->prepare("INSERT INTO Accounts (user_id, account_type) VALUES (?, ?)");
            $stmt->execute([$user_id, $account_type]);
          }
      
          // Get last insert id
          $account_id = $db->lastInsertId();
          
          // Add LOAN transaction to the account
          transactions($loan_amount, "loan", $account_id, $account_source, "LOAN");

          // Generate account number using left-padding
          $account_number = str_pad($account_id, 12, '0', STR_PAD_LEFT);

         // Update account record with new account number
         $stmt = $db->prepare("UPDATE Accounts SET account_number = ? WHERE id = ?");
         $stmt->execute([$account_number, $account_id]);

         $stmt = $db->prepare("INSERT INTO System_Properties (id, name, value) VALUES (?, ?, ?)");
         $stmt->execute([$account_id, $account_type, $apy]);

           // Get balance and APY from Accounts and System_Properties tables
             $stmt = $db->prepare("SELECT balance FROM Accounts WHERE id = ?");
             $stmt->execute([$account_id]);
             $balance = $stmt->fetchColumn();

             $stmt = $db->prepare("SELECT value FROM System_Properties WHERE id = ? AND name = ?");
             $stmt->execute([$account_id, $account_type]);
             $apy = $stmt->fetchColumn();

             //$interest = $balance * ($apy / 12);
             //transactions($interest, "interest", $account_id, $account_source, "Monthly interest");

            //Flash success
            flash("Loan created successfully","success");
            header('Location: accounts.php');
    exit();
    }catch (PDOEXCEPTION $e) {
        //Flash fail
        flash("an error occured while creating loan","danger");
        error_log(var_export($e, true));
      }
}
?>
<?php
require(__DIR__ . "/../../partials/flash.php");
?>
<form method="POST">
    <label for="amount">Loan amount:</label>
    <input type="number" name="amount" id="amount" required>
  </div>
  <div>
    <label for="account_source">Account source:</label>
    <select name="account_source" id="account_source">
      <?php foreach ($accounts as $account) { ?>
        <?php if ($account['account_type'] !== 'loan') { ?>
          <option value="<?php echo $account['id']; ?>"><?php echo $account['account_number'] . ' - ' . $account['balance']; ?></option>
        <?php } ?>
      <?php } ?>
    </select>
  </div>
  <button type="submit">Create Loan Account</button>
</form>

<h2>My Loans</h2>
<?php if (count($loans) > 0) { ?>
  <table>
    <thead>
      <tr>
        <th>Account Number</th>
        <th>Balance</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($loans as $account) { ?>
        <tr>
          <td><?php echo $account['account_number']; ?></td>
          <td><?php echo (-1*$account['balance']); ?></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
<?php } else { ?>
  <p>No loans.</p>
<?php } ?>




  