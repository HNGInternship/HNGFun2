<?php
session_start();
$_SESSION["user_id"];
require_once('db.php');
include_once("dashboard-header.php");
require_once('country-array.php');
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
                <form action="">
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
                            <label for="email">New Email</label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                        </div>
                        <div class="col">
                            <label for="nationality">Nationality</label>
                            <select class="form-control" name="nationality" id="nationality" required style="height: 41.5px;">
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
                <form action="">
                    <div class="form-row">
                        <div class="col">
                            <label for="current_password">Current Password</label>
                            <input type="password" class="form-control" name="current_password" id="current_password" placeholder="Current Password">
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
