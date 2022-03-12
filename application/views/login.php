<div class="login-area">
        <div class="container">
            <div class="login-box ptb--100">
                <form method="POST" action="<?= base_url('akun/login'); ?>" >
                    <div class="login-form-head">
                        <h4>logIn</h4>
                    </div>
                    <div class="login-form-body">
                        <div class="form-gp">
                            <label>Username</label>
                            <input type="text" id="username" name="username">
                            <i class="ti-user"></i>
                            <div class="text-danger"></div>
                        </div>
                        <div class="form-gp">
                            <label >Password</label>
                            <input type="password" id="passwd" name="passwd">
                            <i class="ti-lock"></i>
                            <div class="text-danger"></div>
                        </div>
                        <div class="submit-btn-area">
                            <button id="form_submit" type="submit">Submit <i class="ti-arrow-right"></i></button>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>