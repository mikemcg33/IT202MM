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
    $account_id = $_POST["account_id"];

    // get the account number
    $stmt = $db->prepare("SELECT account_number FROM Accounts WHERE id = :account_id");
    $stmt->execute([":account_id" => $account_id]);
    $account_number = $stmt->fetch(PDO::FETCH_ASSOC)["account_number"];

    // check if the account has enough balance for the withdrawal
    $stmt = $db->prepare("SELECT balance FROM Accounts WHERE id = :account_id");
    $stmt->execute([":account_id" => $account_id]);
    $balance = $stmt->fetch(PDO::FETCH_ASSOC)["balance"];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $amount = $_POST["amount"];
        $account_id = $_POST["account_id"];
        if ($amount < 0) {
            flash("Withdrawal amount cannot be negative", "danger");
            header("Location: withdraw.php");
            exit();
        }
        // check if the account has enough balance for the withdrawal
        $stmt = $db->prepare("SELECT balance FROM Accounts WHERE id = :account_id");
        $stmt->execute([":account_id" => $account_id]);
        $balance = $stmt->fetch(PDO::FETCH_ASSOC)["balance"];
   
        if ($balance < $amount) {
            flash("Insufficient balance", "danger");
            header("Location: withdraw.php");
            exit();
        } else {
            // withdraw the money from the selected account
            transactions($amount, "withdraw", $account_id, -1, $_POST["memo"]);
            flash("Withdrawal successful", "success");
        }
    }
}
?>
<?php
require(__DIR__ . "/../../partials/flash.php");
?>
<h1 class="text-left my-5">Withdraw</h1>
<form method="POST">
    <div class="form-group">
        <label for="account_id">Select account:</label>
        <select class="form-control" id="account_id" name="account_id">
            <?php foreach ($accounts as $account): ?>
                <option value="<?php echo $account['id']; ?>"><?php echo $account['account_type'] . " (" . $account['balance'] . ")"; ?></option>
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
    <button type="submit" class="btn btn-primary" style="margin-bottom: 100px;">Withdraw</button>
</form>
