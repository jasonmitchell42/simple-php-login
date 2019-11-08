<?php
// delete user account
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-10 col-md-8 col-lg-6">
            <h2 class="text-center">You are about to delete your account, this cannot be undone!</h2>
            <h2 class="text-center">Please confirm below.</h2>
            <form id="user-form" method="POST">
                <input type="hidden" name="action" value="delete">
                <input type="hidden" name="username" value="<?= $_SESSION['user']['username'] ?>">
                <input type="hidden" name="id" value="<?= $_SESSION['user']['id'] ?>">

                <div class="form-group">
                    <label for="confirm-username">Username</label>
                    <input type="text" name="confirm-username" id="confirm-username" class="form-control">
                </div>
                <div class="form-group">
                    <input type="checkbox" name="confirm-delete" id="confirm-delete">
                    Confirm deleting this account. This action cannot be undone!
                </div>
                <div class="form-group">
                    <button type="submit" disabled class="btn-delete btn btn-outline-danger btn-lg">Delete Account</button>
                </div>
            </form>
        </div>
    </div>
</div>
