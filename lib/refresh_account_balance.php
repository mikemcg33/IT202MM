<?php
function refresh_account_balance($account_id)
{
    if (true) {
        //cache account balance via Money_History history
        $query = "UPDATE RM_Accounts set balance = (SELECT IFNULL(SUM(diff), 0) from RM_Gem_History WHERE src = :src) where id = :src";
        $db = getDB();
        $stmt = $db->prepare($query);
        try {
            $stmt->execute([":src" => $account_id]);
        } catch (PDOException $e) {
            error_log(var_export($e->errorInfo, true));
            flash("Error refreshing gem balance", "danger");
        }
    }
}