<?php
function get_account_balance($account_id) {
  $db = getDB();
  $stmt = $db->prepare("SELECT balance FROM Accounts WHERE id = :account_id AND user_id = :user_id");
  $stmt->execute([":account_id" => $account_id, ":user_id" => get_user_id()]);
  $row = $stmt->fetch(PDO::FETCH_ASSOC);
  return $row ? (int) $row["balance"] : 0;
}

function get_user_account_ids($user_id = null) {
  $user_id = $user_id ?? get_user_id();
  $db = getDB();
  $stmt = $db->prepare("SELECT id FROM Accounts WHERE user_id = :user_id");
  $stmt->execute([":user_id" => $user_id]);
  $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
  return array_map(fn($row) => (int) $row["id"], $rows);
}
?>