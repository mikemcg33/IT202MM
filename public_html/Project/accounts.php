<?php
require(__DIR__ . "/../../partials/nav.php");
require(__DIR__ . "/../../lib/paginate.php");

$results = []; 
$db = getDB();
//process filters/sorting
//Sort and Filters
$col = se($_GET, "col", "account_number", false);
//allowed list
if (!in_array($col, ["account_number", "balance", "modified"])) {
    $col = "account_number"; //default value, prevent sql injection
}
$order = se($_GET, "order", "asc", false);
//allowed list
if (!in_array($order, ["asc", "desc"])) {
    $order = "asc"; //default value, prevent sql injection
}
//get name partial search
$account_type = se($_GET, "account_type", "", false);

//split query into data and total
$user_id = $_SESSION['user_id'];
$base_query = "SELECT id, account_type, account_number, balance, modified FROM Accounts";
$total_query = "SELECT count(1) as total from Accounts";
$query = " WHERE user_id = :user_id and balance >= 0"; 
$params = [":user_id" => $user_id];
//dynamic query
//apply name filter
if (!empty($account_type)) {
  $query .= " AND account_type like :account_type";
  $params[":account_type"] = "%$account_type%";
}
//apply column and order sort
if (!empty($col) && !empty($order)) {
    $query .= " ORDER BY $col $order"; //be sure you trust these values, I validate via the in_array checks above
}

//paginate function
$per_page = 3;
paginate($total_query . $query, $params, $per_page);
$query .= " LIMIT :offset, :count";
$params[":offset"] = $offset;
$params[":count"] = $per_page;
//get the records
$stmt = $db->prepare($base_query . $query); //dynamically generated query
foreach ($params as $key => $value) {
  $type = is_int($value) ? PDO::PARAM_INT : PDO::PARAM_STR;
  $stmt->bindValue($key, $value, $type);
}
$params = null; //set it to null to avoid issues

try {
    $stmt->execute($params); //dynamically populated params to bind
    $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if ($r) {
      $results = $r;
    }
} catch (PDOException $e) {
    error_log(var_export($e, true));
    flash("Error fetching items", "danger");
}
?>

<form class="row row-cols-auto g-3 align-items-left">
        <div class="col">
            <div class="input-group" data="i">
                <div class="input-group-text">Account Type</div>
                <input class="form-control" name="account_type" value="<?php se($account_type); ?>" />
            </div>
        </div>
        <div class="col">
            <div class="input-group">
                <div class="input-group-text">Sort</div>
                <!-- make sure these match the in_array filter above-->
                <select class="form-control bg-info" name="col" value="<?php se($col); ?>" data="took">
                    <option value="account_number">Account Number</option>
                    <option value="balance">Balance</option>
                    <option value="modified">Time Modified</option>
                </select>
                <script>
                    //quick fix to ensure proper value is selected since
                    //value setting only works after the options are defined and php has the value set prior
                    document.forms[0].col.value = "<?php se($col); ?>";
                </script>
                <select class="form-control" name="order" value="<?php se($order); ?>">
                    <option class="bg-white" value="asc">Up</option>
                    <option class="bg-white" value="desc">Down</option>
                </select>
                <script data="this">
                    //quick fix to ensure proper value is selected since
                    //value setting only works after the options are defined and php has the value set prior
                    document.forms[0].order.value = "<?php se($order); ?>";
                    if (document.forms[0].order.value === "asc") {
                        document.forms[0].order.className = "form-control bg-success";
                    } else {
                        document.forms[0].order.className = "form-control bg-danger";
                    }
                </script>
            </div>
        </div>
        <div class="col">
            <div class="input-group">
                <input type="submit" class="btn btn-primary" value="Apply" />
            </div>
        </div>
        </div>
    </form>


<!DOCTYPE html>
<html>
<head>
  <title>Accounts</title>
</head>
<body>
  <h1>Accounts</h1>
  <ul>
  <?php foreach ($results as $result): ?>
    <li>
      <?php echo $result["account_type"]; ?> - <?php echo $result["account_number"]; ?> - <?php echo $result["balance"]; ?> - <?php echo $result["modified"]; ?>
      <a href="<?php echo get_url('transaction_history.php?account_id='.$result['id']); ?>">View Transactions</a>
    </li>
  <?php endforeach; ?>
  </ul>
</body>
</html>

<form class="row row-cols-auto g-3 align-items-left">
        <div class="mt-3">
                <?php /* added pagination */ ?>
                <?php require(__DIR__ . "/../../partials/pagination.php"); ?>
            </div>
        </div>
  </form>




