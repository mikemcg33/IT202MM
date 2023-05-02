<?php

function refresh_account_balance($account_id)
{
        //cache account balance via Money_History history
        $query = "UPDATE Accounts set balance = (SELECT IFNULL(SUM(diff), 0) from Money_History WHERE src = :src) where id = :src";
        $db = getDB();
        $stmt = $db->prepare($query);
        try {
            $stmt->execute([":src" => $account_id]);
        } catch (PDOException $e) {
            error_log(var_export($e->errorInfo, true));
            flash("Error refreshing money balance", "danger");
        }
}