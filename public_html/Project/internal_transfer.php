<?php
require(__DIR__ . "/../../partials/nav.php");

// get the user's accounts
$db = getDB();
$user_id = get_user_id();
$stmt = $db->prepare("SELECT id, account_number, account_type, balance FROM Accounts WHERE user_id = :id");
$stmt->execute([":id" => $user_id]);
$accounts = $stmt->fetchAll(PDO::FETCH_ASSOC);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $amount = $_POST["amount"];
    $from_account_id = $_POST["from_account_id"];
    $to_account_id = $_POST["to_account_id"];

    //check if transfer amount is positive
    if ($amount < 0) {
        flash("Transfer amount cannot be negative", "danger");
        header("Location: internal_transfer.php");
        exit();
    }

    // check if the from account has enough balance for the transfer
    $stmt = $db->prepare("SELECT balance FROM Accounts WHERE id = :from_account_id");
    $stmt->execute([":from_account_id" => $from_account_id]);
    $from_account_balance = $stmt->fetch(PDO::FETCH_ASSOC)["balance"];

    if ($from_account_balance < $amount) {
        flash("Insufficient transfer, balance lower than transfer amount", "danger");
        header("Location: internal_transfer.php");
        exit();
    }

    //check to see that transfer isn't into the same account
    if ($from_account_id === $to_account_id) {
        flash("Error, cannot transfer to same account", "danger");
        header("Location: internal_transfer.php");
        exit();
    }
    // transfer the money between accounts
    transactions($amount, "transfer", $from_account_id, $to_account_id, $_POST["memo"]);
    flash("Transfer successful", "success");
}
?>
<?php
require(__DIR__ . "/../../partials/flash.php");
?>
<h1 class="text-left my-5">Internal Transfer</h1>
<form method="POST">
    <div class="form-group">
        <label for="from_account_id">From account:</label>
        <select class="form-control" id="from_account_id" name="from_account_id">
        <?php foreach ($accounts as $account): ?>
            <option value="<?php echo $account['id']; ?>"><?php echo $account['account_type'] . "--" . $account['account_number'] . "--" . $account['balance']; ?></option>
        <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label for="to_account_id">To account:</label>
        <select class="form-control" id="to_account_id" name="to_account_id">
        <?php foreach ($accounts as $account): ?>
            <option value="<?php echo $account['id']; ?>"><?php echo $account['account_type'] . "--" . $account['account_number'] . "--" . $account['balance']; ?></option>
        <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label for="amount">Amount:</label>
        <input type="number" step="0.01" class="form-control" id="amount" name="amount" required>
    </div>
    <div class="form-group">
        <label for="memo">Memo:</label>
        <input type="text" class="form-control" id="memo" name="memo">
    </div>
    <button type="submit" class="btn btn-primary" style="margin-bottom: 100px;">Transfer</button>
</form>
