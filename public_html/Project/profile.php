<?php
require_once(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);
?>
<?php
if (isset($_POST["save"])) {
    $firstname = se($_POST, "firstname", null, false);
    $lastname = se($_POST, "lastname", null, false);
    $email = se($_POST, "email", null, false);
    $username = se($_POST, "username", null, false);
    $is_public = se($_POST, "is_public", false, false);
    $hasError = false;
    //sanitize
    $email = sanitize_email($email);
    //validate
    if (!is_valid_email($email)) {
        flash("Invalid email address", "danger");
        $hasError = true;
    }
    if (!is_valid_username($username)) {
        flash("Username must only contain 3-16 characters a-z, 0-9, _, or -", "danger");
        $hasError = true;
    }
    if (!$hasError) {
        $params = [":firstname" => $firstname, ":lastname" => $lastname, ":email" => $email, ":username" => $username, ":id" => get_user_id(), ":is_public" => $is_public];
        $db = getDB();
        $stmt = $db->prepare("UPDATE Users set firstname = :firstname, lastname = :lastname, email = :email, username = :username, is_public = :is_public where id = :id");
        try {
            $stmt->execute($params);
            flash("Profile saved", "success");
        } catch (Exception $e) {
            users_check_duplicate($e->errorInfo);
        }
        //select fresh data from table
        $stmt = $db->prepare("SELECT id, firstname, lastname, email, username, is_public from Users where id = :id LIMIT 1");
        try {
            $stmt->execute([":id" => get_user_id()]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($user) {
                //$_SESSION["user"] = $user;
                $_SESSION["user"]["firstname"] = $user["firstname"];
                $_SESSION["user"]["lastname"] = $user["lastname"];
                $_SESSION["user"]["email"] = $user["email"];
                $_SESSION["user"]["username"] = $user["username"];
                $_SESSION["user"]["is_public"] = $user["is_public"];
            } else {
                flash("User doesn't exist", "danger");
            }
        } catch (Exception $e) {
            flash("An unexpected error occurred, please try again", "danger");
            //echo "<pre>" . var_export($e->errorInfo, true) . "</pre>";
        }
    }


    //check/update password
    $current_password = se($_POST, "currentPassword", null, false);
    $new_password = se($_POST, "newPassword", null, false);
    $confirm_password = se($_POST, "confirmPassword", null, false);
    if (!empty($current_password) && !empty($new_password) && !empty($confirm_password)) {
        $hasError = false;
        if (!is_valid_password($new_password)) {
            flash("Password too short", "danger");
            $hasError = true;
        }
        if (!$hasError) {
            if ($new_password === $confirm_password) {
                //TODO validate current
                $stmt = $db->prepare("SELECT password from Users where id = :id");
                try {
                    $stmt->execute([":id" => get_user_id()]);
                    $result = $stmt->fetch(PDO::FETCH_ASSOC);
                    if (isset($result["password"])) {
                        if (password_verify($current_password, $result["password"])) {
                            $query = "UPDATE Users set password = :password where id = :id";
                            $stmt = $db->prepare($query);
                            $stmt->execute([
                                ":id" => get_user_id(),
                                ":password" => password_hash($new_password, PASSWORD_BCRYPT)
                            ]);

                            flash("Password reset", "success");
                        } else {
                            flash("Current password is invalid", "warning");
                        }
                    }
                } catch (Exception $e) {
                    echo "<pre>" . var_export($e->errorInfo, true) . "</pre>";
                }
            } else {
                flash("New passwords don't match", "warning");
            }
        }
    }
}
?>

<?php
$firstname = get_firstname();
$lastname = get_lastname();
$email = get_user_email();
$username = get_username();
$is_public = get_user_is_public();
?>
<div class="container-fluid">
    <h1>Profile</h1>
    <form method="POST" onsubmit="return validate(this);">
        <div class="mb-3">
            <label class="form-label" for="firstname">First Name</label>
            <input class="form-control" type="firstname" name="firstname" id="firstname" value="<?php se($firstname); ?>" />
        </div>
        <div class="mb-3">
            <label class="form-label" for="lastname">Last Name</label>
            <input class="form-control" type="lastname" name="lastname" id="lastname" value="<?php se($lastname); ?>" />
        </div>
        <div class="mb-3">
            <label class="form-label" for="email">Email</label>
            <input class="form-control" type="email" name="email" id="email" value="<?php se($email); ?>" />
        </div>
        <div class="mb-3">
            <label class="form-label" for="username">Username</label>
            <input class="form-control" type="text" name="username" id="username" value="<?php se($username); ?>" />
        </div>
        <!-- DO NOT PRELOAD PASSWORD -->
        <div class="mb-3">Password Reset</div>
        <div class="mb-3">
            <label class="form-label" for="cp">Current Password</label>
            <input class="form-control" type="password" name="currentPassword" id="cp" />
        </div>
        <div class="mb-3">
            <label class="form-label" for="np">New Password</label>
            <input class="form-control" type="password" name="newPassword" id="np" />
        </div>
        <div class="mb-3">
            <label class="form-label" for="conp">Confirm Password</label>
            <input class="form-control" type="password" name="confirmPassword" id="conp" />
        </div>
        <div class="mb-3">
        <label class="form-label" for="is_public">Profile visibility:</label>
        <select class="form-control" name="is_public" id="is_public">
            <option value="1" <?php if(get_user_is_public()) echo "selected"; ?>>Public</option>
            <option value="0" <?php if(!get_user_is_public()) echo "selected"; ?>>Private</option>
        </select>
        </div>
        <button class="btn btn-primary" type="submit" name="save">Save</button>
    </form>
</div>

<script>
    function validate(form) {
        let pw = form.newPassword.value;
        let con = form.confirmPassword.value;
        let isValid = true;
        //TODO add other client side validation....

        //example of using flash via javascript
        //find the flash container, create a new element, appendChild
        if (pw !== con) {
            flash("Password and Confrim password must match", "warning");
            isValid = false;
        }
        return isValid;
    }
</script>
<?php
require_once(__DIR__ . "/../../partials/flash.php");
?>