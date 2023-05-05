<?php
require(__DIR__ . "/../../partials/nav.php");

// Get user ID from session
$user_id = get_user_id();
$db = getDB();
// Get the user's accounts from the database
$stmt = $db->prepare("SELECT * FROM Accounts WHERE user_id = :id AND is_active = 1");
$stmt->execute([":id" => $user_id]);
$accounts = $stmt->fetchAll();

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $account_id = $_POST["account_id"];
    $stmt = $db->prepare("SELECT id, balance FROM Accounts WHERE id = :id AND is_active = 1 AND user_id = :user_id");
    $stmt->execute([":id" => $account_id, ":user_id" => $user_id]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $account_id = $result["id"];
    $balance = $result["balance"];
    if ($balance == 0) {
        $stmt = $db->prepare("UPDATE Accounts SET is_active = 0 WHERE id = :id");
        $stmt->bindParam(':id', $account_id);
        $stmt->execute();
        flash('Account closed successfully!');
    } else {
        flash('Cannot close account. Balance is not zero.');
    }
}
?>
<?php
require(__DIR__ . "/../../partials/flash.php");
?>
<form method="POST">
<div class="form-group">
        <label for="account_id">Select account:</label>
        <select class="form-control" id="account_id" name="account_id">
        <?php foreach ($accounts as $account): ?>
            <option value="<?php echo $account['id']; ?>"><?php echo $account['account_type'] . " (" . $account['balance'] . ")"; ?></option>
        <?php endforeach; ?>
        </select>
    </div>
  <button type="submit" class="btn btn-primary">Close Account</button>
</form>



