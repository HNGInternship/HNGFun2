<?php
session_start();
$_SESSION["user_id"];
require_once('db.php');
include_once("dashboard-header.php");
require_once('country-array.php');

function updateInfoDB($table, array $info, $username) {
    global $conn;
    $query =  "UPDATE {$table} SET ". implode(", ", array_map(function($column) {
            return "$column = :$column";
        }, array_keys($info))). " WHERE username = :username";

    $statement = $conn->prepare($query);
    $info['username'] = $username;
    $statement->execute($info);

    return $statement->rowCount();
}
$info = [];
if (isset($_POST['update_info'])) {
    if (!is_null($_POST['firstname']))
        $info['firstname'] = $_POST['firstname'];

    if (!is_null($_POST['lastname']))
        $info['lastname'] = $_POST['lastname'];

    if (!is_null($_POST['nationality']))
        $info['nationality'] = $_POST['nationality'];

    if (!is_null($_POST['phone']))
        $info['phone'] = $_POST['phone'];

    if (count($info)) {
        $affectRow =  updateInfoDB('users', $info, $_SESSION['username']);
        if ($affectRow) {
            $status = true;
            $message = "Profile has been updated successfully.";
        } else {
            $status = false;
            $message = "An error occurred. Please try again.";
        }

        // If there's update to lastname and firstname, update intern_data too.
        if (isset($info['lastname']) && isset($info['firstname']))
            updateInfoDB('interns_data', array(
                    'name' => $info['firstname']. ' '. $info['lastname']), $_SESSION['username']);
    }
}

if (isset($_POST['update_password'])) {
    if (is_null($_POST['old_password']) || is_null($_POST['password'])) {
        $p_status = false;
        $p_message = "All fields are required";
    } else {
        $new_password = $_POST['password'];
        $old_password = $_POST['old_password'];
        $password_confirmation = $_POST['password_confirmation'];

        if ($new_password === $password_confirmation) {
            $stmt = $conn->prepare('select password from users where username = ?');
            $stmt->execute(array($_SESSION['username']));
            $value = $stmt->fetch(PDO::FETCH_OBJ);

            if (!(md5($old_password) === $value->password)) {
                $p_status = false;
                $p_message = "Your current password is not correct.";
            } else {
                updateInfoDB('users', array('password' => md5($new_password)), $_SESSION['username']);
                $p_status = true;
                $p_message = "Password has been successfully updated.";
            }
        } else {
            $p_status = false;
            $p_message = "Password confirmation does not matches";
        }
    }
}
?>
<head>
    <style>
        section.content {
            padding: 40px 10px;
        }
        .form-control {

        }
        .form-control:focus {
            box-shadow: none;
        }
        label {
            font-size: .86em;
        }
        .form-row {
            margin-bottom: 10px;
            padding: 10px;
        }
    </style>
</head>
<body>
<div class="container">
    <section class="content" style="border-bottom: 1px solid #e8e8e8;">
        <h3>Update your Profile</h3>
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-7">
                <?php
                    if (isset($status) && $status)
                        echo "<p class='text-success'>{$message}</p>";
                    elseif (isset($status) && !($status))
                        echo "<p class='text-danger'>{$message}</p>";
                ?>
                <form action="/settings" method="post">
                    <input type="hidden" name="update_info" value="true">
                    <div class="form-row">
                        <div class="col">
                            <label for="firstname">Firstname</label>
                            <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Firstname">
                        </div>
                        <div class="col">
                            <label for="lastname">Lastname</label>
                            <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Lastname">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <label for="email">Mobile Number</label>
                            <input type="text" class="form-control" name="phone" id="email" placeholder="Phone">
                        </div>
                        <div class="col">
                            <label for="nationality">Nationality</label>
                            <select class="form-control" name="nationality" id="nationality" style="height: 41.5px;">
                                <option value="">Select Country</option>
                                <?php
                                foreach ($countrylist as $key => $country) {
                                    echo "<option id='".strtolower($country)."'>$country</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div style="padding: 10px;">
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- section for password update -->
    <section class="content">
        <h3>Change Password</h3>
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-7">
                <?php
                if (isset($p_status) && $p_status)
                    echo "<p class='text-success'>{$p_message}</p>";
                elseif (isset($p_status) && !($p_status))
                    echo "<p class='text-danger'>{$p_message}</p>";
                ?>
                <form action="settings" method="post">
                    <div class="form-row">
                        <input type="hidden" name="update_password" value="true">
                        <div class="col">
                            <label for="current_password">Current Password</label>
                            <input type="password" class="form-control" name="old_password" id="current_password" placeholder="Current Password">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <label for="new_password">New Password</label>
                            <input type="password" class="form-control" name="password" id="new_password" placeholder="New Password">
                        </div>
                        <div class="col">
                            <label for="password_confirmation">Confirm Password</label>
                            <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="">
                        </div>
                    </div>
                    <div style="padding: 10px;">
                        <button type="submit" class="btn btn-primary">Update Password</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>

<?php
include_once("footer.php");
?>
