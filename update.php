<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <h1>Update User Details</h1>
        </div>
        <div class="col-lg-5 col-md-7 col-sm 10 col-12">
            <form id="user-form" method="POST">
                <input type="hidden" name="action" value="update">
                <input type="hidden" name="username" value="<?php $_SESSION['user']['username'] ?>">
                <input type="hidden" name="id" value="<?php $_SESSION['user']['id'] ?>">
                <div class="form-group">
                    <label for="firstname">First Name</label>
                    <input type="text" name="firstname" id="firstname" class="form-control"
                           value="<?= $_SESSION['user']['firstname'] ?>">
                </div>
                <div class="form-group">
                    <label for="lastname">Last Name</label>
                    <input type="text" name="lastname" id="lastname" class="form-control"
                           value="<?= $_SESSION['user']['lastname'] ?>">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" value="<?= $_SESSION['user']['email'] ?>">
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" id="phone" class="form-control" value="<?= $_SESSION['user']['phone'] ?>">
                </div>
                <div class="form-group">
                    <label for="address1">Address</label>
                    <input type="text" name="address1" id="address1" class="form-control"
                           value="<?= $_SESSION['user']['address1'] ?>">
                </div>
                <div class="form-group">
                    <label for="address2">Address Line 2</label>
                    <input type="text" name="address2" id="address2" class="form-control"
                           value="<?= $_SESSION['user']['address2'] ?>">
                </div>
                <div class="form-group">
                    <label for="city">City</label>
                    <input type="text" name="city" id="city" class="form-control" value="<?= $_SESSION['user']['city'] ?>">
                </div>
                <div class="form-group">
                    <label for="postcode">Post Code</label>
                    <input type="number" name="postcode" id="postcode" class="form-control"
                           value="<?= $_SESSION['user']['postcode'] ?>">
                </div>
                <div class="form-group">
                    <label for="state">State</label>
                    <select name="state" id="state" class="form-control" value="<?= $_SESSION['user']['state'] ?>">
                        <?php
                        foreach ($states as $key => $value) {
                            printf("<option value='%s' %s>%s</option>", $value, $_SESSION['user']['state'] == $value ? 'selected' : '', $value);
                        }
                        ?>
                    </select>
                </div>
                <?php
                if ($message)
                    printf("<h4>%s</h4>", $message);
                ?>
                <button type="submit" class="submit btn btn-outline-success">Change User</button>
                <button type="reset" class="reset btn btn-outline-info">Reset</button>
            </form>
        </div>
    </div>
</div>