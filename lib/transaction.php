<?php

/**
 * Money should be passed as a positive value.
 * $losing should be where the money is coming from
 * $gaining should be where the money is going
 */
function transactions($money, $reason, $losing=-1, $gaining=-1, $memo = "")
{
    //I'm choosing to ignore the record of 0 dollars transactions
    if ($money > 0) {
        $query = "INSERT INTO Money_History (src, dest, diff, reason, memo, expected_total)
            VALUES (:acs1, :acd1, :pc, :r, :m, :et),
            (:acs2, :acd2, :pc2, :r, :m, :et2)";
        //I'll insert both records at once, note the placeholders that are kept the same and the ones changed.
        $params[":acs1"] = $losing;
        $params[":acd1"] = $gaining;
        $params[":r"] = $reason;
        $params[":m"] = $memo;
        $params[":pc"] = ($money * -1);
        $params[":et"] = get_balance($losing) - $money; // subtracting the money from the losing account's balance

        $params[":acs2"] = $gaining;
        $params[":acd2"] = $losing;
        $params[":pc2"] = $money;
        $params[":et2"] = get_balance($gaining) + $money; // adding the money to the gaining account's balance

        $db = getDB();
        $stmt = $db->prepare($query);
        try {
            $stmt->execute($params);
            //Only refresh the balance of the user if the logged in user's account is part of the transfer
            //this is needed so future features don't waste time/resources or potentially cause an error when a calculation
            //occurs without a logged in user
            refresh_account_balance($losing);
            refresh_account_balance($gaining);
           
            return true;
        } catch (PDOException $e) {
            error_log(var_export($e->errorInfo, true));
            flash("There was an error transferring money", "danger");
        }
    }
    return false;
}

// Helper function to get the balance of an account by id
function get_balance($account_id) {
    $db = getDB();
    $stmt = $db->prepare("SELECT balance FROM Accounts WHERE id = :id");
    $stmt->execute([":id" => $account_id]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result["balance"];
}
