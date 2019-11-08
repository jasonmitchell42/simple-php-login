<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <h1>Register User</h1>
        </div>
        <div class="col-lg-5 col-md-7 col-sm 10 col-12">
            <form id="user-form" method="POST">
                <input type="hidden" name="action" value="register">
                <div class="form-group">
                    <label for="firstname">First Name</label>
                    <input type="text" name="firstname" id="firstname" class="form-control"
                           value="<?= $_POST['firstname'] ?>">
                </div>
                <div class="form-group">
                    <label for="lastname">Last Name</label>
                    <input type="text" name="lastname" id="lastname" class="form-control"
                           value="<?= $_POST['lastname'] ?>">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" value="<?= $_POST['email'] ?>">
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" id="phone" class="form-control" value="<?= $_POST['phone'] ?>">
                </div>
                <div class="form-group">
                    <label for="address1">Address</label>
                    <input type="text" name="address1" id="address1" class="form-control"
                           value="<?= $_POST['address1'] ?>">
                </div>
                <div class="form-group">
                    <label for="address2">Address Line 2</label>
                    <input type="text" name="address2" id="address2" class="form-control"
                           value="<?= $_POST['address2'] ?>">
                </div>
                <div class="form-group">
                    <label for="city">City</label>
                    <input type="text" name="city" id="city" class="form-control" value="<?= $_POST['city'] ?>">
                </div>
                <div class="form-group">
                    <label for="postcode">Post Code</label>
                    <input type="number" name="postcode" id="postcode" class="form-control"
                           value="<?= $_POST['postcode'] ?>">
                </div>
                <div class="form-group">
                    <label for="state">State</label>
                    <select name="state" id="state" class="form-control" value="<?= $_POST['state'] ?>">
                        <?php
                        foreach ($states as $key => $value) {
                            printf("<option value='%s' %s>%s</option>", $value, $_POST['state'] == $value ? $value : '', $value);
                        }
                        ?>
                    </select>
                </div>
                <h4>User Details</h4>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" value="<?= $_POST['username'] ?>"
                           class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" value="<?= $_POST['password'] ?>"
                           class="form-control">
                </div>
                <div class="form-group">
                    <label for="password2">Verify Password</label>
                    <input type="password" name="password2" id="password2" value="<?= $_POST['password2'] ?>"
                           class="form-control">
                </div>
                <h4 class="confirm-register"></h4>
                <button type="submit" class="submit btn btn-outline-success">Register</button>
                <button type="reset" class="reset btn btn-outline-info">Reset</button>
            </form>
        </div>
    </div>
</div>