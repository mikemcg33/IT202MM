<?php
require(__DIR__ . "/../../partials/nav.php");

//get the user's accounts
$db = getDB();
$user_id = get_user_id();
$stmt = $db->prepare("SELECT id, account_number, account_type, balance FROM Accounts WHERE user_id = :id AND is_active = 1");
$stmt->execute([":id" => $user_id]);
$accounts = $stmt->fetchAll(PDO::FETCH_ASSOC);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $amount = $_POST["amount"];
    $account_id = $_POST["account_id"];
    if ($amount < 0) {
        flash("Deposit amount cannot be negative", "danger");
        header("Location: deposit.php");
        exit();
    }
    //deposit the money into the selected account
    transactions($amount, "deposit", -1, $account_id, $_POST["memo"]);
    flash("Deposit successful", "success");
}
?>
<?php
require(__DIR__ . "/../../partials/flash.php");
?>
<h1 class="text-left my-5">Deposit</h1>
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
    <button type="submit" class="btn btn-primary" style="margin-bottom: 100px;">Deposit</button>
</form>
