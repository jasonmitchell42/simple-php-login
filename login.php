<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <h1>Login User</h1>
        </div>
        <div class="col-lg-5 col-md-7 col-sm 10 col-12">
            <form id="user-form" method="POST">
                <input type="hidden" name="action" value="login">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" class="form-control"
                           value="">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control"
                           value="">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-outline-info">Login</button>
                </div>
                <div class="form-group">
                    <h3 class="confirm-login"></h3>
                </div>
            </form>
        </div>
    </div>
</div>
