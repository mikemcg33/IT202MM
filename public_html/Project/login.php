<?php
require(__DIR__ . "/../../partials/nav.php");
?>
<div class="container-fluid">
    <h1>Login</h1>
    <form onsubmit="return validate(this)" method="POST">
        <div class="mb-3">
            <label class="form-label" for="email">Username/Email</label>
            <input class="form-control" type="text" id="email" name="email" required />
        </div>
        <div class="mb-3">
            <label class="form-label" for="pw">Password</label>
            <input class="form-control" type="password" id="pw" name="password" required minlength="8" />
        </div>
        <input type="submit" class="mt-3 btn btn-primary" value="Login" />
    </form>
</div>
<script>
    function validate(form) {
        //TODO 1: implement JavaScript validation
        //ensure it returns false for an error and true for success
       if(form.email.value.trim()===""){
            flash("Enter valid email or user");
            return false;
        }
        if(form.password.value.trim().length<8)
        {
            flash("Enter a password at least 8 characters long");
            return false;
        }
        return true;
    }
</script>
<?php
//TODO 2: add PHP Code
if (isset($_POST["email"]) && isset($_POST["password"])) {
    $email = se($_POST, "email", "", false);
    $password = se($_POST, "password", "", false);

    //TODO 3
    $hasError = false;
    if (empty($email)) {
        flash("Email must not be empty");
        $hasError = true;
    }
    if (str_contains($email, "@")) {
        //sanitize
        $email = sanitize_email($email);
        //validate
        if (!is_valid_email($email)) {
            flash("Invalid email address");
            $hasError = true;
        }
    } else {
        if (!is_valid_username($email)) {
            flash("Invalid username");
            $hasError = true;
        }
    }
    if (empty($password)) {
        flash("password must not be empty");
        $hasError = true;
    }
    if (!is_valid_password($password)) {
        flash("Password too short");
        $hasError = true;
    }
    if (!$hasError) {
        $db = getDB();
        $stmt = $db->prepare("SELECT id, firstname, lastname, email, username, password, is_public from Users where email = :email or username=:email");
        try {
            $r = $stmt->execute([":email" => $email]);
            if ($r) {
                $user = $stmt->fetch(PDO::FETCH_ASSOC);
                if ($user) {
                    $hash = $user["password"];
                    $user_id = $user["id"]; // add this line to get the user id
                    $is_public = $user["is_public"]; // add this line to get is public
                    unset($user["password"]);
                    if (password_verify($password, $hash)) {
                        $_SESSION["user"] = $user; // sets our session data from db
                        $_SESSION["user_id"] = $user_id; // sets the user_id in the session
                        $_SESSION["is_public"] = $is_public; // sets the is public in the session
                        try {
                            $stmt = $db->prepare("SELECT Roles.name FROM Roles 
                                JOIN UserRoles on Roles.id = UserRoles.role_id 
                                where UserRoles.user_id = :user_id and Roles.is_active = 1 and UserRoles.is_active = 1");
                            $stmt->execute([":user_id" => $user_id]); // change the parameter to use the user_id
                            $roles = $stmt->fetchAll(PDO::FETCH_ASSOC); // fetch all since we'll want multiple
                        } catch (Exception $e) {
                            error_log(var_export($e, true));
                        }
                        // save roles or empty array
                        if (isset($roles)) {
                            $_SESSION["user"]["roles"] = $roles; // at least 1 role
                        } else {
                            $_SESSION["user"]["roles"] = []; // no roles
                        }
                        flash("Welcome, " . get_username());
                        die(header("Location: home.php"));
                    } else {
                        flash("Invalid password");
                    }
                } else {
                    flash("Email not found");
                }
            }
        } catch (Exception $e) {
            flash("<pre>" . var_export($e, true) . "</pre>");
        }
    }    
}
?>
<?php 
require(__DIR__."/../../partials/flash.php");