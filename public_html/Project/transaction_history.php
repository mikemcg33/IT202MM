<?php
require(__DIR__ . "/../../partials/nav.php");
$account_id = $_GET['account_id'];
$db = getDB();
$stmt = $db->prepare("SELECT account_number, account_type, balance, created FROM Accounts WHERE id = :account_id");
$stmt->bindParam(":account_id", $account_id);
$accounts=[];
try {
    $stmt->execute();
    $a = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if ($a) {
        $accounts = $a;
    }
} catch (PDOException $e) {
    error_log("Error fetching accounts");
    flash("Error fetching accounts", "danger");
}

$db = getDB();
$stmt = $db->prepare("SELECT a.account_number as src_account, b.account_number as dest_account, mh.reason, mh.diff, mh.modified, mh.expected_total, mh.memo, mh.id 
                      FROM Money_History mh 
                      LEFT JOIN Accounts a ON mh.src = a.id 
                      LEFT JOIN Accounts b ON mh.dest = b.id 
                      WHERE mh.src = :account_id OR mh.dest = :account_id 
                      ORDER BY mh.id ASC");   
$stmt->bindParam(":account_id", $account_id);
$trans=[];
try {
    $stmt->execute();
    $t = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if ($t) {
        $trans = $t;
    }
} catch (PDOException $e) {
    error_log("Error fetching transactions");
    flash("Error fetching transactions", "danger");
} 

?>

<h1 style="font-size: 28px; text-align: left;">Account Information</h1>
<table>
  <tr>
    <th>Account Number</th>
    <th>Account Type</th>
    <th>Balance</th>
    <th>Created</th>
  </tr>
  <?php foreach ($accounts as $account): ?>
    <tr>
      <td><?php echo $account['account_number']; ?></td>
      <td><?php echo $account['account_type']; ?></td>
      <td><?php echo $account['balance']; ?></td>
      <td><?php echo $account['created']; ?></td>
    </tr>
  <?php endforeach; ?>
</table>

<h1 style="font-size: 28px; text-align: left;">Transaction History</h1>
<table>
  <tr>
    <th>Src Account</th>
    <th>Dest Account</th>
    <th>Transaction Type</th>
    <th>Balance Change</th>
    <th>Occurred</th>
    <th>Expected Total</th>
    <th>Memo</th>
  </tr>
  <?php foreach ($trans as $transaction): ?>
    <tr>
      <td><?php echo $transaction['src_account']; ?></td>
      <td><?php echo $transaction['dest_account']; ?></td>
      <td><?php echo $transaction['reason']; ?></td>
      <td><?php echo $transaction['diff']; ?></td>
      <td><?php echo $transaction['modified']; ?></td>
      <td><?php echo $transaction['expected_total']; ?></td>
      <td><?php echo $transaction['memo']; ?></td>
    </tr>
  <?php endforeach; ?>
</table>

<style>
  table {
    border-collapse: collapse;
    width: 70%;
  }
  th, td {
    text-align: left;
    padding: 8px;
  }
</style>
