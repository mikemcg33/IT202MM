<?php
require(__DIR__ . "/../../partials/nav.php");

// Fetch all user's accounts
$db = getDB();
$stmt = $db->prepare("SELECT * FROM Accounts WHERE user_id = :uid");
$stmt->execute([":uid" => get_user_id()]);
$accounts = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Accounts</title>
</head>
<body>
  <h1>Accounts</h1>
  <ul>
  <?php foreach ($accounts as $account): ?>
    <li>
      <?php echo $account["account_type"]; ?> - <?php echo $account["account_number"]; ?> - <?php echo $account["balance"]; ?>
    </li>
  <?php endforeach; ?>
  </ul>
</body>
</html>